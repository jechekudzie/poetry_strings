<?php

namespace App\Http\Controllers;

use App\Mail\PurchaseConfirmation;
use App\Models\Book;
use App\Models\Payment;
use App\Models\BookStore;
use App\Models\BookType;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Paynow\Payments\Paynow;

class SiteController extends Controller
{
    //

    public function index()
    {
        $book = Book::with('bookTypes')->first();
        return view('index', compact('book'));

    }

    public function chooseCopy(BookType $bookType)
    {
        $book = $bookType->book;
        $bookStores = BookStore::all();
        return view('choose_copy', compact('book', 'bookType', 'bookStores'));

    }

    public function purchase(BookType $bookType)
    {

        $book = $bookType->book;
        // Validate the form input
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'book_store_id' => 'required',
            'quantity' => 'required|numeric|min:1',
        ]);

        $amount = $bookType->price * $data['quantity'];

        // Generate a purchase order number
        $prefix = 'POD';
        $zeroFillLength = 4;
        $nextPurchaseOrderNumber = Purchase::max('id') + 1;
        $purchaseOrderNumber = $prefix . str_pad($nextPurchaseOrderNumber, $zeroFillLength, '0', STR_PAD_LEFT);

        // Create a new purchase object
        $purchase =  Purchase::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'book_id' => $book->id,
            'book_type_id' => $bookType->id,
            'book_store_id' => $data['book_store_id'],
            'quantity' => $data['book_store_id'],
            'currency' => 'ZWL',
            'price' => $bookType->price,
            'amount' => $amount,
            'payment_method_id' => 1,
            'purchase_order_number' => $purchaseOrderNumber
        ]);

        // Paynow logic
        $id = time() . $amount;

        //call paynow integration
        $payNow = $this->paynowIntegration($purchase);

        //create a payment and add items required
        $payment = $payNow->createPayment($id, 'nigel@leadingdigital.africa');
        $payment->add($bookType->name, $amount);

        //initiate payment
        $response = $payNow->send($payment);

        if ($response->success()) {

            $payment_link = $response->redirectUrl();
            // Get the poll url (used to check the status of a transaction). You might want to save this in your DB
            $pollUrl = $response->pollUrl();
            //create an array of data to be saved in the database

            $payment_data['purchase_id'] = $purchase->id;
            $payment_data['poll_url'] = $pollUrl;
            $payment_data['amount'] = $amount;

            session()->put('payment', $payment_data);

            return redirect($payment_link);
        } else {

            return redirect('/choose_copy/' . $bookType->id);
        }

    }

    public function paynow(Purchase $purchase)
    {

        $payNow = $this->paynowIntegration($purchase);

        $payment = Session::get('payment');
        $poll_url = $payment['poll_url'];

        $response = $payNow->pollTransaction($poll_url);

        $payNowStatus = $response->status();

        //dd($payNowStatus);
        $payNowTransactionReference = $response->reference();
        $payNowReference = $response->paynowreference();

        if ($payNowStatus == 'paid' || $payNowStatus == 'awaiting delivery' || $payNowStatus == 'delivered') {
            $payNowPayment = Payment::create([

                'purchase_id' => $purchase->id,
                'payment_method_id' => 1,
                'payment_status_id' => 1,
                'amount' => $payment['amount'],
                'transaction_id' => $payNowReference,
                'poll_url' => $poll_url,

            ]);

            // fill in the purchase details
            Mail::to($purchase->email)->send(new PurchaseConfirmation($purchase));
            // redirect to thank you page

            return redirect('/purchase_confirmation/' . $purchase->id)->with('message', 'Your purchase was successful, your Purchase Order Number is: ' . $purchase->purchase_order_number);

        } elseif ($payNowStatus == 'cancelled') {
            return redirect('/')->with('message', 'Your purchase was cancelled, your Purchase Order Number is: ' . $purchase->purchase_order_number);

        } else {
            return redirect('/')->with('message', 'Your purchase was unsuccessful, your Purchase Order Number is: ' . $purchase->purchase_order_number);
        }

    }

    public function purchase_confirmation(Purchase $purchase)
    {
        return view('purchase_confirmation', compact('purchase'));
    }

    public function paynowIntegration($purchase)
    {
        $paynow = new Paynow(
            '15967',
            '0eed9821-f9fe-4aac-bbf3-3289d4f09e7e',
            'http://localhost:8000/paynow/' . $purchase->id,
            'http://localhost:8000/paynow/' . $purchase->id
        );

        /* $paynow = new Paynow(
             '5865',
             '23962222-9610-4f7c-bbd5-7e12f19cdfc6',
             'http://localhost:8000/paynow/' . $purchase->id,
             'http://localhost:8000/paynow/' . $purchase->id
         );*/
        return $paynow;

    }

}

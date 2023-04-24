<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookStore;
use App\Models\BookType;
use App\Models\Purchase;
use App\Models\Ticket;
use Illuminate\Http\Request;

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
            'book_store_id' => 'required',
            'quantity' => 'required|numeric|min:1',
        ]);

        $amount = $bookType->price * $data['quantity'];

        // Generate a purchase order number
        $prefix = 'PO';
        $zeroFillLength = 4;
        $nextPurchaseOrderNumber = Purchase::max('id') + 1;
        $purchaseOrderNumber = $prefix . str_pad($nextPurchaseOrderNumber, $zeroFillLength, '0', STR_PAD_LEFT);

        // Create a new purchase object
        $purchase = new Purchase([
            'book_id' => $book->id,
            'book_type_id' => $bookType->id,
            'book_store_id' => $data['book_store_id'],
            'quantity' => $data['book_store_id'],
            'currency' => 'ZWL',
            'price' => $bookType->price,
            'payment_method_id' => 1,
            'purchase_order_number' => $purchaseOrderNumber
        ]);

        // Save the purchase to the database
        $purchase->save();

        dd($purchase);

        //return redirect($checkoutUrl);
    }


}

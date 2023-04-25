<?php

namespace App\Mail;

use App\Models\Purchase;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PurchaseConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $purchase;

    /**
     * Create a new message instance.
     *
     * @param Purchase $purchase
     * @return void
     */
    public function __construct(Purchase $purchase)
    {
        $this->purchase = $purchase;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {


        $subject = 'Purchase Confirmation ' . $this->purchase->purchase_order_number;
        $fromEmail = 'info@poetrystrings.com';

        $message = $this->view('emails.purchase_confirmation')
            ->subject($subject)
            ->from($fromEmail);


        $message->attach(public_path('/card/card.pdf'), [
            'as' => 'Gift Card.pdf',
            'mime' => 'application/pdf',
        ]);

        return $message;
    }
}

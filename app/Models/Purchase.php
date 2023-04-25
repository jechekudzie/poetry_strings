<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'book_type_id',
        'book_store_id',
        'user_id',
        'quantity',
        'currency',
        'price',
        'amount',
        'payment_method_id',
        'proof_of_payment',
        'purchase_order_number',
        'name',
        'email',
        'phone',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function bookType()
    {
        return $this->belongsTo(BookType::class);
    }

    public function bookStore()
    {
        return $this->belongsTo(BookStore::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

}

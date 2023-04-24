<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookStoreStock extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'book_type_id',
        'book_store_id',
        'quantity'
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

}

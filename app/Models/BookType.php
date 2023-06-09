<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'book_id',
        'price'
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function bookStoreStocks()
    {
        return $this->hasMany(BookStoreStock::class);
    }

}

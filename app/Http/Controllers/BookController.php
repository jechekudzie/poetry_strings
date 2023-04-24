<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function getFirstBook()
    {
        $book = Book::with('bookTypes')->first();
        return $book;
    }
}

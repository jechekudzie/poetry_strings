<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index()
    {
        return view('books');
    }

    public function getBooks()
    {
        $books = Book::with('bookTypes')->get();

        return response()->json($books);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookType;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
        $books = Book::all();

        return view('admin.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
        $book_types = BookType::all();
        return view('admin.books.create', compact('book_types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
        $book = request()->validate([
            'book_type_id' => 'required',
            'title' => 'required',
            'isbn' => 'required',
            'publisher' => 'required',
            'release_date' => 'required',

        ]);

        if (request()->hasFile('file')) {
            //get the file field data and name field from form submission
            $file = request()->file('file');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $book_cover = $file->move('book_covers', $file_name);

            $book['file'] = $book_cover;
        }

        Book::create($book);

        return redirect('/admin/books')->with('message', 'Book added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book): Response
    {
        //
        return view('admin.books.show', compact('book'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book): Response
    {
        //
        $book_types = BookType::all();
        return view('admin.books.edit', compact('book', 'book_types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book): RedirectResponse
    {
        //

        $update_book = request()->validate([
            'book_type_id' => 'required',
            'title' => 'required',
            'isbn' => 'required',
            'publisher' => 'required',
            'release_date' => 'required',

        ]);

        if (request()->hasFile('file')) {
            //get the file field data and name field from form submission
            $file = request()->file('file');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $new_book_cover = $file->move('book_covers', $file_name);

            $old_path = $book->file;
            if ($old_path != null) {
                unlink($old_path);
            }
            $update_book['file'] = $new_book_cover;
        }

        $book->update($update_book);

        return redirect('/admin/books')->with('message', 'Book updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book): RedirectResponse
    {
        //
        $book->delete();

        return redirect('/admin/books')->with('message', 'Book deleted successfully');

    }
}

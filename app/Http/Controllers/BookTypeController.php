<?php

namespace App\Http\Controllers;

use App\Models\BookType;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookTypeController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
        $book_types = BookType::all();

        return view('admin.book_types.index', compact('book_types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
        return view('admin.book_types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
        $book_type = BookType::create(request()->validate([
            'name' => 'required',
        ]));

        return redirect('/admin/book_types')->with('message', 'Book Type added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(BookType $book_type): Response
    {
        //
        return view('admin.book_types.show', compact('book_type'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookType $book_type): Response
    {
        //

        return view('admin.book_types.edit', compact('book_type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BookType $book_type): RedirectResponse
    {
        //

        $book_type->update(request()->validate([
            'name' => 'required',
        ]));
        return redirect('/admin/book_types')->with('message', 'BookType updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookType $book_type): RedirectResponse
    {
        //
        $book_type->delete();

        return redirect('/admin/book_types')->with('message', 'BookType deleted successfully');

    }
}

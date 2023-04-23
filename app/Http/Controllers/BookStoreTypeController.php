<?php

namespace App\Http\Controllers;

use App\Models\BookStoreType;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookStoreTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
        $book_store_types = BookStoreType::all();

        return view('admin.book_store_types.index', compact('book_store_types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
        return view('admin.book_store_types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
        $book_store_type = BookStoreType::create(request()->validate([
            'name' => 'required',
        ]));

        return redirect('/admin/book_store_types')->with('message', 'BookStoreType added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(BookStoreType $book_store_type): Response
    {
        //
        return view('admin.book_store_types.show', compact('book_store_type'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookStoreType $book_store_type): Response
    {
        //

        return view('admin.book_store_types.edit', compact('book_store_type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BookStoreType $book_store_type): RedirectResponse
    {
        //

        $book_store_type->update(request()->validate([
            'name' => 'required',
        ]));
        return redirect('/admin/book_store_types')->with('message', 'BookStoreType updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookStoreType $book_store_type): RedirectResponse
    {
        //
        $book_store_type->delete();

        return redirect('/admin/book_store_types')->with('message', 'BookStoreType deleted successfully');

    }
}

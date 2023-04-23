<?php

namespace App\Http\Controllers;


use App\Models\BookStore;
use App\Models\BookStoreType;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookStoreController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
        $book_stores = BookStore::all();

        return view('admin.book_stores.index', compact('book_stores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
        $book_store_types = BookStoreType::all();
        return view('admin.book_stores.create', compact('book_store_types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
        $boo_store = BookStore::create(request()->validate([
            'book_store_type_id' => 'required',
            'name' => 'required',
            'contact_person' => 'nullable',
            'phone' => 'nullable',
            'address' => 'nullable',
            'email' => 'nullable'

        ]));

        return redirect('/admin/book_stores')->with('message', 'Book store added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(BookStore $book_store): Response
    {
        //
        return view('admin.book_stores.show', compact('book_store'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookStore $book_store): Response
    {
        //
        $book_store_types = BookStoreType::all();
        return view('admin.book_stores.edit', compact('book_store', 'book_store_types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BookStore $book_store): RedirectResponse
    {
        //

        $book_store->update(request()->validate([
            'book_store_type_id' => 'required',
            'name' => 'required',
            'contact_person' => 'nullable',
            'phone' => 'nullable',
            'address' => 'nullable',
            'email' => 'nullable'

        ]));
        return redirect('/admin/book_stores')->with('message', 'Book store updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookStore $book_store): RedirectResponse
    {
        //
        $book_store->delete();

        return redirect('/admin/book_stores')->with('message', 'Book deleted successfully');

    }
}

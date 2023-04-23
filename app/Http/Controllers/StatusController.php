<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StatusController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
        $statuses = Status::all();

        return view('admin.statuses.index', compact('statuses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
        return view('admin.statuses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
        $status = Status::create(request()->validate([
            'name' => 'required',
        ]));

        return redirect('/admin/statuses')->with('message', 'Status added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Status $status): Response
    {
        //
        return view('admin.statuses.show', compact('status'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Status $status): Response
    {
        //

        return view('admin.statuses.edit', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Status $status): RedirectResponse
    {
        //

        $status->update(request()->validate([
            'name' => 'required',
        ]));
        return redirect('/admin/statuses')->with('message', 'Status updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Status $status): RedirectResponse
    {
        //
        $status->delete();

        return redirect('/admin/statuses')->with('message', 'Status deleted successfully');

    }
}

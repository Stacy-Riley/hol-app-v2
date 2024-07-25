<?php

namespace App\Http\Controllers;

use App\Models\BookProduct;
use Illuminate\Http\Request;

class BookProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('book_product');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BookProduct $bookProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookProduct $bookProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BookProduct $bookProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookProduct $bookProduct)
    {
        //
    }
}

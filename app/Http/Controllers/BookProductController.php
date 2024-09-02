<?php

namespace App\Http\Controllers;

use App\Models\BookProduct;
use Illuminate\Http\Request;

class BookProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $gradeLevel = $request->input('grade_level');
        $pages = $request->input('pages');
        $cost = $request->input('cost');

//start the query with this table
        $query = BookProduct::query()
        ->orderBy('title', 'asc');

        if ($gradeLevel && $gradeLevel != 'Select Grade') {
            $query->where('grade_level', $gradeLevel);
        }

        if ($pages && $pages != 'Book Length') {
            if ($pages == 1) {
                $query->where('num_pages', '<', 10);
            } elseif ($pages == 2) {
                $query->whereBetween('num_pages', [10, 20]);
            } elseif ($pages == 3) {
                $query->where('num_pages', '>', 20);
            }

        }

        if ($cost && $cost != 'Price Range') {
            if ($cost == 1) {
                $query->where('cost', '<', 10);
            } elseif ($cost == 2) {
                $query->whereBetween('cost', [10, 20]);
            } elseif ($cost == 3) {
                $query->where('cost', '>', 20);
            }
        }

        $bookProducts = $query->get();

        return view('book_products', compact('bookProducts'));

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

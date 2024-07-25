<?php

namespace App\Http\Controllers;

use App\Models\CareerListing;
use Illuminate\Http\Request;

class CareerListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('career_listing');
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
    public function show(CareerListing $careerListing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CareerListing $careerListing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CareerListing $careerListing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CareerListing $careerListing)
    {
        //
    }
}

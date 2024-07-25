<?php

namespace App\Http\Controllers;

use App\Models\BusinessService;
use Illuminate\Http\Request;

class BusinessServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function education()
    {
        $services = BusinessService::byCategory('education')->get();
//        return $services;
        return view('business_service_education', ['services' => $services]);
    }

    public function corporate()
    {
        $services = BusinessService::byCategory( 'corporate')->get();
        return view('business_service_corporate', ['services' => $services]);
    }

    public function index()
    {

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
    public function show(BusinessService $businessService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BusinessService $businessService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BusinessService $businessService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BusinessService $businessService)
    {
        //
    }
}

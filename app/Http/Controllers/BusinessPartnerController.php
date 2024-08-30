<?php

namespace App\Http\Controllers;

use App\Models\BusinessPartner;
use Illuminate\Http\Request;

class BusinessPartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $corporatePartners = BusinessPartner::query()
            ->active()
            ->category('corporate')
            ->orderBy('priority', 'asc')
            ->get();

        $educationPartners = BusinessPartner::query()
            ->active()
            ->category('education')
            ->orderBy('priority', 'asc')
            ->get();

       return view('business_partner',
           compact('corporatePartners', 'educationPartners'));
    }


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
    public function show(BusinessPartner $businessPartner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BusinessPartner $businessPartner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BusinessPartner $businessPartner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BusinessPartner $businessPartner)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CareerListing;
use Illuminate\Http\Request;

class AdminCareerListingController extends Controller
{
    public function reorder(Request $request)
    {
        $sortedIDs = $request->input('sortedIDs');

        foreach ($sortedIDs as $index => $id) {
            CareerListing::where('id', $id)->update(['priority' => $index + 1]);
        }

        return response()->json(['success' => 'The career listing has been reordered successfully!']);

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $careerListings = CareerListing::orderBy('priority', 'asc')->get();

        return view('admin.careerListing_index')
            ->with('careerListings', $careerListings);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.careerListing_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
            'is_active' => 'required|boolean'
        ]);

        $formData['user_id'] = auth()->id();

        CareerListing::create($formData);

        return redirect('admin/careerListing')
            ->with('success', 'Listing has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $careerListing= CareerListing::findOrFail($id);
        return view('admin.careerListing_edit')
            ->with('careerListing', $careerListing);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $careerListing = CareerListing::findOrFail($id);
        $formData = $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
            'is_active' => 'required|boolean'
        ]);
        $careerListing->update($formData);

        return redirect('admin/careerListing')
            ->with('success', 'Listing has been updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        careerListing::destroy($id);
        return redirect('admin/careerListing')
            ->with('success', 'Listing has been deleted successfully.');
    }
}

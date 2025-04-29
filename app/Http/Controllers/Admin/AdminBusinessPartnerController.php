<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BusinessPartner;
use App\Helpers\FileSyncHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminBusinessPartnerController extends Controller
{
    public function reorder(Request $request)
    {
        $sortedIDs = $request->input('sortedIDs');

        foreach ($sortedIDs as $index => $id) {
            BusinessPartner::where('id', $id)->update(['priority' => $index + 1]);
        }

        return response()->json(['success' => 'The business partner has been reordered successfully!']);

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $businessPartners = BusinessPartner::orderBy('priority')->get();

        return view('admin.businessPartner_index')
            ->with('businessPartners', $businessPartners);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin.businessPartner_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->validate([
            'name' => 'required|string',
            'category' => 'required|string',
            'business_url' => 'required|string',
            'logo_path' => 'sometimes|image|mimes:jpg,jpeg,png,svg|max:2048',
            'is_active' => 'required|boolean'
        ]);

        //This is where the new uploaded image will be stored
        $path = $request->file('logo_path')->store('logo_images', 'public');
        $formData['logo_path'] = $path;

        FileSyncHelper::syncToPublicStorage($path);

        $formData['user_id'] = auth()->id();

        //Create the new partner
        BusinessPartner::create($formData);


        return redirect('admin/businessPartner')
            ->with('success', 'Business Partner Created Successfully');
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
        $businessPartner = BusinessPartner::findOrFail($id);
        return view('admin.businessPartner_edit', ['businessPartner' => $businessPartner]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $businessPartner = BusinessPartner::findOrFail($id);

        $formData = $request->validate([
            'name' => 'required|string',
            'category' => 'required|string',
            'business_url' => 'required|string',
            'logo_path' => 'sometimes|image|mimes:jpg,jpeg,png,svg|max:2048',
            'is_active' => 'required|boolean'
        ]);

        //This is where the new uploaded image will be stored if the admin changes the file
        if($request->hasFile('logo_path')) {
            $path = $request->file('logo_path')->store('logo_images', 'public');
            $formData['logo_path'] = $path;
        }
       $businessPartner->update($formData);

        return redirect('admin/businessPartner')
            ->with('success', 'Business Partner Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $businessPartner = BusinessPartner::destroy($id);

        return redirect('admin/businessPartner')
            ->with('success', 'Business Partner Deleted Successfully');
    }
}

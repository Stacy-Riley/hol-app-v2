<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BusinessService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;

class AdminBusinessServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(request $request)
    {
        $itemsPerPage = $request->query('items');
        $businessServices = BusinessService::paginate($itemsPerPage);

        return view('admin.businessService_index')
            ->with('businessServices', $businessServices);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin.businessService_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->validate([
            'title' => 'string|required',
            'body' => 'string|required',
            'category' => 'string|required',
        ]);

        $formData['user_id']= auth()->id();

        BusinessService::create($formData);

        return redirect('admin/businessService')
            ->with('success', 'Business Service Created Successfully');
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
        $businessService= BusinessService::findOrFail($id);
        return view('admin.businessService_edit', ['businessService' => $businessService]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $businessService = BusinessService::findOrFail($id);

        $formData = $request->validate([
            'title' => 'string|required',
            'body' => 'string|required',
            'category' => 'string|required',
        ]);
        $formData['user_id']= auth()->id();

        $businessService->update($formData);

        return redirect('admin/businessService')
            ->with('success', 'Business Service Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $businessService = BusinessService::destroy($id);

        return redirect('admin/businessService')
            ->with('success', 'Business Service Deleted Successfully');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class AdminTestimonialController extends Controller
{
    public function reorder(Request $request)
    {
        $sortedIDs = $request->input('sortedIDs');

        foreach ($sortedIDs as $index => $id) {
            Testimonial::where('id', $id)->update(['priority' => $index + 1]);
        }

        return response()->json(['success' => 'The testimonial has been reordered successfully!']);

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $testimonials = Testimonial::orderBy('priority', 'asc')->get();

        return view('admin.testimonial_index')
            ->with('testimonials', $testimonials);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonial_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->validate([
            'author_name' => 'required|string',
            'job_title' => 'required|string',
            'comment' => 'required|string',
            'is_published' => 'required|boolean',
        ]);

        $formData['user_id'] = auth()->id();

        Testimonial::create($formData);

        return redirect('admin/testimonial')
            ->with('success', 'Testimonial created!');
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
        $testimonial = Testimonial::findOrFail($id);

        return view('admin.testimonial_edit', ['testimonial' => $testimonial]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $formData = $request->validate([
            'author_name' => 'required|string',
            'job_title' => 'required|string',
            'comment' => 'required|string',
            'is_published' => 'required|boolean',
        ]);

        $formData['user_id'] = auth()->id();

        $testimonial->update($formData);

        return redirect('admin/testimonial')
            ->with('success', 'Testimonial updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();

        return redirect('admin/testimonial')
            ->with('success', 'Testimonial deleted!');
    }
}

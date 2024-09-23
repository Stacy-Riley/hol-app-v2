<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class AdminFaqController extends Controller
{
    public function reorder(Request $request)
    {
        $sortedIDs = $request->input('sortedIDs');

        foreach ($sortedIDs as $index => $id) {
            Faq::where('id', $id)->update(['priority' => $index + 1]);
        }

        return response()->json(['success' => 'The FAQ has been reordered successfully!']);

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::orderBy('priority', 'asc')->get();

        return view('admin.faq_index')
            ->with('faqs', $faqs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faq_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
            'is_published' => 'required|boolean',
        ]);

        $formData['user_id'] = auth()->id();

        Faq::create($formData);

        return redirect('admin/faq')
            ->with('success', 'Faq created successfully!');
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
        $faq = Faq::findOrFail($id);
        return view('admin.faq_edit', ['faq' => $faq]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $faq = Faq::findOrFail($id);
        $formData = $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
            'is_published' => 'required|boolean',
        ]);

        $faq->update($formData);

        return redirect('admin/faq')
            ->with('success', 'Faq updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $faq =Faq::destroy($id);
        return redirect('admin/faq')
            ->with('success', 'Faq deleted successfully!');
    }
}

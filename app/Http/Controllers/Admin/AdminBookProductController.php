<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BookProduct;
use Illuminate\Http\Request;


class AdminBookProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $itemsPerPage = $request->query('items');
        $books = BookProduct::orderBy('title', 'asc')
            ->paginate($itemsPerPage);

        return view('admin/book_index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/book_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'grade_level' =>'required|integer',
            'cost' => 'required|numeric',
            'num_pages' => 'required|integer',
        ]);

        $formData['user_id'] = auth()->id();

        BookProduct::create($formData);
        return redirect('admin/book')
            ->with('success', 'Book created successfully');
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
        $book = BookProduct::findOrFail($id);

        return view('admin/book_edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = BookProduct::findOrFail($id);
        $formData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'grade_level' =>'required|integer',
            'cost' => 'required|numeric',
            'num_pages' => 'required|integer',
        ]);

        $book->update($formData);

        return redirect('admin/book')
            ->with('success', 'Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = BookProduct::destroy($id);
        return redirect('admin/book')
            ->with('success', 'Book deleted successfully');
    }
}

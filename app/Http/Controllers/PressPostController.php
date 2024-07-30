<?php

namespace App\Http\Controllers;

use App\Models\PressPost;
use Illuminate\Http\Request;

class PressPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $category = $request->input('category');
        $contentType = $request->input('contentType');


        // Fetch articles with pagination
        $articles = PressPost::query()
            ->active()
            ->where('content_type', 'article')
            ->category($category)
            ->paginate(3);

        // Fetch articles for sidebar without pagination
        $articlesSidebar = PressPost::query()
            ->active()
            ->where('content_type', 'article')
            ->category($category)
            ->take(9)
            ->get();


        // Fetch podcasts with pagination (if needed)
        $podcasts = PressPost::query()
            ->active()
            ->where('content_type', 'podcast')
            ->category($category)
            ->paginate(5);

        return view('press_post', compact('articles', 'articlesSidebar', 'podcasts'));


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
    public function show(PressPost $pressPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PressPost $pressPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PressPost $pressPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PressPost $pressPost)
    {
        //
    }
}

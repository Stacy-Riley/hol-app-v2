<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::active()->orderBy('published_at', 'desc')->paginate(3);
        $categoryPosts = BlogPost::select('category')->distinct()->get();
        $featuredPosts = BlogPost::recent()->get();

        return view('blog_post', [
            'posts' => $posts,
            'categoryPosts' => $categoryPosts,
            'featuredPosts' => $featuredPosts
        ]);
    }

    public function category($category)
    {
        $posts = BlogPost::active()
            ->category($category)
            ->orderBy('published_at', 'desc')
            ->paginate(3);

        return view('blog_category', [
            'posts' => $posts,
            'category' => $category
        ]);
    }

    /**
     * Show the individual blog when clicked on from main blog page.
     */

    public function showBySlug($slug)
    {
        $post = BlogPost::where('slug', $slug)->active()->firstOrFail();
        $categoryPosts = BlogPost::select('category')->distinct()->get();
        $featuredPosts = BlogPost::active()->orderBy('published_at', 'desc')->limit(3)->get();

        return view('blog_post_individual', [
            'post' => $post,
            'categoryPosts' => $categoryPosts,
            'featuredPosts' => $featuredPosts
        ]);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogPost $blogPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogPost $blogPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogPost $blogPost)
    {
        //
    }
}

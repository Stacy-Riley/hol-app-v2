<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class AdminBlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $posts = BlogPost::orderBy('published_at', 'desc')->get();

        return view('admin/blog_index', compact('posts'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/blog_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $formData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category' => 'required|string',
            'body' => 'required|string',
            'published_at' => 'required|date',
            'is_published' => 'required|boolean',
            'cover_image' => 'sometimes|file|image|max:5000',
        ]);

        //This is where the new uploaded image will be stored if the admin changes the file
        if($request->hasFile('cover_image')) {
            $path = $request->file('cover_image')->store('blog_images', 'public');
            $formData['cover_image'] = $path;
        }

        $formData['user_id'] = auth()->id();

        // Create the blog post
        BlogPost::create($formData);


        return redirect('admin/blog')
            ->with('success', 'Blog post created successfully!');
    }

    /**
     * Display the specified resource - one resource.
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
        $post = BlogPost::findOrFail($id);
        return view('admin.blog_edit', ['post' => $post]);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = BlogPost::findOrFail($id);

        $formData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category' => 'required|string',
            'body' => 'required|string',
            'published_at' => 'required|date',
            'is_published' => 'required|boolean',
            'cover_image' => 'sometimes|file|image|max:5000',
        ]);

        //This is where the new uploaded image will be stored if the admin changes the file
        if($request->hasFile('cover_image')) {
            $path = $request->file('cover_image')->store('blog_images', 'public');
            $formData['cover_image'] = $path;
        }

    $post->update($formData);
        return redirect('admin/blog')
            ->with('success', 'Blog post updated successfully!');
            }

        /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = BlogPost::destroy($id);
        return redirect('admin/blog')
            ->with('success', 'Blog post deleted successfully!');
    }
}

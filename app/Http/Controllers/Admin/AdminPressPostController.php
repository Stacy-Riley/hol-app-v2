<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PressPost;
use App\Helpers\FileSyncHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminPressPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        // Applying the scope to filter by content type if provided
        $pressPosts = PressPost::orderBy('published_at', 'desc')
        ->get();

        return view('admin/pressPost_index')
            ->with('pressPosts', $pressPosts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/pressPost_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'content_type' => 'required|string|in:article,podcast',
            'is_published' => 'required|boolean',
            'body' => 'required|string',
            'img_caption' => 'sometimes|string|nullable',
            'cover_image_path' => 'sometimes|file|nullable',
            'external_link_url' => 'sometimes|string|nullable|url',
            'published_at' => 'required|date',
        ]);

        //This is where the new uploaded image will be stored
        if($request->hasFile('cover_image_path')) {
            $path = $request->file('cover_image_path')->store('pressPost_images', 'public');
            $formData['cover_image_path'] = $path;

            FileSyncHelper::syncToPublicStorage($path);
        }

        $formData['user_id'] = auth()->id();

        PressPost::create($formData);

        return redirect('admin/pressPost')
            ->with('success', 'Press Post created successfully!');
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
        $pressPost = PressPost::findOrFail($id);
        return view('admin/pressPost_edit', ['pressPost' => $pressPost]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pressPost = PressPost::findOrFail($id);

        $formData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'content_type' => 'required|string|in:article,podcast',
            'is_published' => 'required|boolean',
            'body' => 'required|string',
            'img_caption' => 'sometimes|string|nullable',
            'cover_image_path' => 'sometimes|file|nullable',
            'external_link_url' => 'sometimes|string|nullable|url',
            'published_at' => 'required|date',
        ]);

        //This is where the new uploaded image will be stored
        if($request->hasFile('cover_image_path')) {
            // Delete the old image if it exists
            if ($pressPost->cover_image_path) {
                $oldPath = storage_path('app/public/' . $pressPost->cover_image_path);
                $oldPublicPath = public_path('storage/' . $pressPost->cover_image_path);

                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }

                if (File::exists($oldPublicPath)) {
                    File::delete($oldPublicPath);
                }
            }

            $path = $request->file('cover_image_path')->store('pressPost_images', 'public');
            $formData['cover_image_path'] = $path;

            FileSyncHelper::syncToPublicStorage($path);
        }


        $pressPost->update($formData);

        return redirect('admin/pressPost')
            ->with('success', 'Press Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pressPost = PressPost::destroy($id);
        return redirect('admin/pressPost')
            ->with('success', 'Press Post deleted successfully!');
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\BlogPost;
class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot()
    {
        View::composer(['blog_post', 'blog_category'], function ($view) {
            $categoryPosts = BlogPost::select('category')->distinct()->get();
            $view->with('categoryPosts', $categoryPosts);
        });

    }
}

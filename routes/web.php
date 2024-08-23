<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\Admin\AdminBookProductController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminBlogPostController;
use App\Http\Controllers\Admin\AdminFaqController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\BookProductController;
use App\Http\Controllers\BusinessPartnerController;
use App\Http\Controllers\BusinessServiceController;
use App\Http\Controllers\CareerListingController;
use App\Http\Controllers\CommunityCenterController;
use App\Http\Controllers\ContactSubmissionsController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GhanaProjectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PressPostController;
use App\Http\Controllers\SponsorFormController;
use Illuminate\Support\Facades\Route;

// public pages
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutPageController::class, 'index']);
Route::get('/services/education', [BusinessServiceController::class, 'education'])->name('services.education');
Route::get('/services/corporate', [BusinessServiceController::class, 'corporate'])->name('services.corporate');
Route::get('/ghana/project', [GhanaProjectController::class, 'index'])->name('ghana.project');
Route::get('/products', [BookProductController::class, 'index'])->name('book_products.index');
Route::get('/community_center',[CommunityCenterController::class, 'index']);
Route::get('/partners', [BusinessPartnerController::class, 'index'])->name('business_partners');;
Route::get('/press', [PressPostController::class, 'index'])->name('press');

//Blog pages
Route::get('/blog', [BlogPostController::class, 'index'])->name('blog.index');
Route::get('/blog/category/{category}', [BlogPostController::class, 'category'])->name('blog.category');
Route::get('/blog/post/{slug}', [BlogPostController::class, 'showBySlug'])->name('blog.show');

Route::get('/career', [CareerListingController::class, 'index']);
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/contact', [ContactSubmissionsController::class, 'index']);
Route::get('/sponsor_form', [SponsorFormController::class, 'index']);


//Admin
Route::middleware('auth')->group(function () {
    Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.home');

    //Admin BlogPage Routes
    Route::get('/admin/blog', [AdminBlogPostController::class, 'index'])->name('admin.blog');
    Route::get('/admin/create/blog', [AdminBlogPostController::class, 'create'])->name('create.blog');
    Route::post('/admin/blog/store', [AdminBlogPostController::class, 'store'])->name('store.blog');
    Route::get('/admin/blog/edit/{id}', [AdminBlogPostController::class, 'edit'])->name('edit.blog');
    Route::post('/admin/blog/update/{id}', [AdminBlogPostController::class, 'update'])->name('update.blog');
    Route::get('/admin/blog/delete/{id}', [AdminBlogPostController::class, 'destroy'])->name('delete.blog');
    Route::get('/admin/blog/search', [AdminBlogPostController::class, 'search'])->name('search.blog');

    //Admin Book Product Routes
    Route::get('/admin/book', [AdminBookProductController::class, 'index'])->name('admin.book.index');
    Route::get('/admin/book/create', [AdminBookProductController::class, 'create'])->name('create.book');
    Route::post('/admin/book/store', [AdminBookProductController::class, 'store'])->name('store.book');
    Route::get('/admin/book/edit/{id}', [AdminBookProductController::class, 'edit'])->name('edit.book');
    Route::post('/admin/book/update/{id}', [AdminBookProductController::class, 'update'])->name('update.book');
    Route::get('/admin/book/delete/{id}', [AdminBookProductController::class, 'destroy'])->name('delete.book');

    //Admin FAQ Routes
    Route::get('/admin/faq', [AdminFaqController::class, 'index'])->name('admin.faq.index');
    Route::get('/admin/faq/create', [AdminFaqController::class, 'create'])->name('create.faq');
    Route::post('/admin/faq/store', [AdminFaqController::class, 'store'])->name('store.faq');
    Route::get('/admin/faq/edit/{id}', [AdminFaqController::class, 'edit'])->name('edit.faq');
    Route::post('/admin/faq/update/{id}', [AdminFaqController::class, 'update'])->name('update.faq');
    Route::get('/admin/faq/delete/{id}', [AdminFaqController::class, 'destroy'])->name('delete.faq');


});

require __DIR__.'/auth.php';

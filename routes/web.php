<?php

use App\Http\Controllers\AboutPageController;
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
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SponsorFormController;
use App\Http\Controllers\TestimonialController;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\Admin\AdminBookProductController;
use App\Http\Controllers\Admin\AdminBusinessPartnerController;
use App\Http\Controllers\Admin\AdminBusinessServiceController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminBlogPostController;
use App\Http\Controllers\Admin\AdminFaqController;
use App\Http\Controllers\Admin\AdminPressPostController;
use App\Http\Controllers\Admin\AdminTestimonialController;
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
    Route::get('/admin/blog', [AdminBlogPostController::class, 'index'])->name('admin.blog.index');
    Route::get('/admin/create/blog', [AdminBlogPostController::class, 'create'])->name('create.blog');
    Route::post('/admin/blog/store', [AdminBlogPostController::class, 'store'])->name('store.blog');
    Route::get('/admin/blog/edit/{id}', [AdminBlogPostController::class, 'edit'])->name('edit.blog');
    Route::put('/admin/blog/update/{id}', [AdminBlogPostController::class, 'update'])->name('update.blog');
    Route::delete('/admin/blog/delete/{id}', [AdminBlogPostController::class, 'destroy'])->name('delete.blog');

    //Admin Book Product Routes
    Route::get('/admin/book', [AdminBookProductController::class, 'index'])->name('admin.book.index');
    Route::get('/admin/book/create', [AdminBookProductController::class, 'create'])->name('create.book');
    Route::post('/admin/book/store', [AdminBookProductController::class, 'store'])->name('store.book');
    Route::get('/admin/book/edit/{id}', [AdminBookProductController::class, 'edit'])->name('edit.book');
    Route::put('/admin/book/update/{id}', [AdminBookProductController::class, 'update'])->name('update.book');
    Route::delete('/admin/book/delete/{id}', [AdminBookProductController::class, 'destroy'])->name('delete.book');

    //Admin FAQ Routes
    Route::get('/admin/faq', [AdminFaqController::class, 'index'])->name('admin.faq.index');
    Route::get('/admin/faq/create', [AdminFaqController::class, 'create'])->name('create.faq');
    Route::post('/admin/faq/store', [AdminFaqController::class, 'store'])->name('store.faq');
    Route::get('/admin/faq/edit/{id}', [AdminFaqController::class, 'edit'])->name('edit.faq');
    Route::put('/admin/faq/update/{id}', [AdminFaqController::class, 'update'])->name('update.faq');
    Route::delete('/admin/faq/delete/{id}', [AdminFaqController::class, 'destroy'])->name('delete.faq');

    //Admin Testimonial Routes
    Route::get('admin/testimonial', [AdminTestimonialController::class, 'index'])->name('admin.testimonial.index');
    Route::get('admin/testimonial/create', [AdminTestimonialController::class, 'create'])->name('create.testimonial');
    Route::post('admin/testimonial/store', [AdminTestimonialController::class, 'store'])->name('store.testimonial');
    Route::get('admin/testimonial/edit/{id}', [AdminTestimonialController::class, 'edit'])->name('edit.testimonial');
    Route::put('admin/testimonial/update/{id}', [AdminTestimonialController::class, 'update'])->name('update.testimonial');
    Route::delete('admin/testimonial/delete/{id}', [AdminTestimonialController::class, 'destroy'])->name('delete.testimonial');

    //Admin Business Service Routes
    Route::get('/admin/businessService', [AdminBusinessServiceController::class, 'index'])->name('admin.businessService.index');
    Route::get('/admin/businessService/create', [AdminBusinessServiceController::class, 'create'])->name('create.businessService');
    Route::post('/admin/businessService/store', [AdminBusinessServiceController::class, 'store'])->name('store.businessService');
    Route::get('/admin/businessService/edit/{id}', [AdminBusinessServiceController::class, 'edit'])->name('edit.businessService');
    Route::put('/admin/businessService/update/{id}', [AdminBusinessServiceController::class, 'update'])->name('update.businessService');
    Route::delete('/admin/businessService/delete/{id}', [AdminBusinessServiceController::class, 'destroy'])->name('delete.businessService');

    //Admin Business Partner Routes
    Route::get('/admin/businessPartner', [AdminBusinessPartnerController::class, 'index'])->name('admin.businessPartner.index');
    Route::get('/admin/businessPartner/create', [AdminBusinessPartnerController::class, 'create'])->name('create.businessPartner');
    Route::post('/admin/businessPartner/store', [AdminBusinessPartnerController::class, 'store'])->name('store.businessPartner');
    Route::get('/admin/businessPartner/edit/{id}', [AdminBusinessPartnerController::class, 'edit'])->name('edit.businessPartner');
    Route::put('/admin/businessPartner/update/{id}', [AdminBusinessPartnerController::class, 'update'])->name('update.businessPartner');
    Route::delete('/admin/businessPartner/delete/{id}', [AdminBusinessPartnerController::class, 'destroy'])->name('delete.businessPartner');

    //Admin Press Post Routes
    Route::get('admin/pressPost', [AdminPressPostController::class, 'index'])->name('admin.pressPost.index');
    Route::get('/admin/pressPost/create', [AdminPressPostController::class, 'create'])->name('create.pressPost');
    Route::post('/admin/pressPost/store', [AdminPressPostController::class, 'store'])->name('store.pressPost');
    Route::get('/admin/pressPost/edit/{id}', [AdminPressPostController::class, 'edit'])->name('edit.pressPost');
    Route::put('admin/pressPost/update/{id}', [AdminPressPostController::class, 'update'])->name('update.pressPost');
    Route::delete('admin/pressPost/delete/{id}', [AdminPressPostController::class, 'destroy'])->name('delete.pressPost');

});

require __DIR__.'/auth.php';

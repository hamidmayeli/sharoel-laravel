<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GalleryManagementController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/livewire/update', $handle)->prefix(LaravelLocalization::setLocale());
});

// front pages
Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    Route::get('/', HomeController::class)->name('home');
    Route::resource('gallery', GalleryController::class)->only(['index']);
    Route::resource('categories', CategoryController::class)->only(['show']);
    Route::view('/about', 'app.about.index')->name('about');
    Route::view('/contact', 'app.contact.index')->name('contact');
});

// dashboard
Route::middleware(['auth', 'verified'])->prefix('/admin')->name('admin.')->group(function () {
    Route::view('/', 'admin.dashboard')->name('dashboard');
    Route::resource('gallery', GalleryManagementController::class)->only(['index', 'store', 'create']);
    Route::resource('comments', CommentController::class)->only(['index', 'store']);
    Route::resource('plans', PlanController::class)->only(['index', 'update', 'edit']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

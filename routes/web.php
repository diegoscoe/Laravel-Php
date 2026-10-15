<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\web\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::group(['prefix' => 'dashboard','middleware' => ['auth','admin']], function(){
    
    Route::get('/', function () {
    return view('dashboard');
    }) ->name("dashboard");
    Route::resources([
        'post' => App\Http\Controllers\Dashboard\PostController::class,
        'category' => CategoryController::class,
    ]);
});

Route::prefix('blog')->name('blog.')->group(function () {
    Route::controller(BlogController::class)->group(function () {
        Route::get('/', 'index')->name('web.blog.index');
        Route::get('/{post}', 'show')->name('web.blog.show');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('posts', PostController::class);
    Route::resource('categories', CategoryController::class);
});

require __DIR__.'/auth.php';

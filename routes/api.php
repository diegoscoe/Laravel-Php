<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PostController;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('auth:sactum') -> get('/user', function (Request $request){
    return $request->user();
});



Route::get('post/all', [PostController::class, 'all']);
Route::get('post/slug/{slug}', [PostController::class, 'slug']);
Route::get('category/all', [CategoryController::class, 'all']);
Route::get('category/slug/{slug}', [CategoryController::class, 'all']);
Route::get('category/{category}/post', [CategoryController::class, 'posts']);


Route::resource('category', CategoryController::class)-> except(["create","edit"]);
Route::resource('post', PostController::class)-> except(["create","edit"]);

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

Route::resource('category', CategoryController::class)-> except(["create","edit"]);
Route::resource('category', PostController::class)-> except(["create","edit"]);

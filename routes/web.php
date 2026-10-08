<?php

use App\Http\Controllers\PrimerControlador;
use App\Http\Controllers\SegundoControlador;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', [PrimerControlador::class, 'index']);
Route::get('test2', [SegundoControlador::class, 'index']);

/*Route::get('/contact', function(){
    //return redirect('/contact2', 303);
    //return redirect()->route ('contact2');
    //return to_route('contact2');

return view('contact', ['name' => 'diego']);
}) -> name('contact');

Route::get('/contact2', function(){
    return view('contact2');
}) -> name('contact2');*/
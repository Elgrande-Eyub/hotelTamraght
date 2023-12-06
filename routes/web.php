<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return  redirect()->route('index', ['lang' => 'en']);
});

Route::get('/{lang?}', function () {
    return view('index');
})->name('index');

Route::get('/{lang?}/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/{lang?}/about', function () {
    return view('about');
})->name('about');

Route::get('/{lang?}/tamraght', function () {
    return view('accommodations.tamraght');
})->name('tamraght');

Route::get('/{lang?}/taghazout', function () {
    return view('accommodations.taghazout');
})->name('taghazout');

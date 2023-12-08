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

Route::get('/{lang?}/accommodations', function () {
    return view('accommodations');
})->name('accommodations');

Route::get('/{lang?}/accommodations/apartment-n4', function () {
    return view('acco-details.apartment-n4');
})->name('apartment-n4');

Route::get('/{lang?}/accommodations/apartment-n6', function () {
    return view('acco-details.apartment-n6');
})->name('apartment-n6');

Route::get('/{lang?}/accommodations/surf-riad', function () {
    return view('acco-details.surf-riad');
})->name('surf-riad');

Route::get('/{lang?}/accommodations/hostel-tamraght', function () {
    return view('acco-details.hostel-tamraght');
})->name('hostel-tamraght');

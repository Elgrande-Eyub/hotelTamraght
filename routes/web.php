<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\NewsletterController;
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
    return view('acco-details.apartment-n4copy');
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

Route::get('/{lang?}/packages', function () {
    return view('packages');
})->name('packages');

Route::get('/{lang?}/packages/surf-yoga', function () {
    return view('pack-details.surf-yoga');
})->name('surf-yoga');

Route::get('/{lang?}/packages/surf-coaching', function () {
    return view('pack-details.surf-coaching');
})->name('surf-coaching');



Route::get('/{lang?}/packages/surf-stays-plus', function () {
    return view('pack-details.surf-stayplus');
})->name('surf-stayplus');

Route::get('/{lang?}/packages/surf-explore-stays', function () {
    return view('pack-details.surf-explore-stay');
})->name('surf-explore-stay');


Route::post('/{lang?}/contactform', [contactController::class,'store'])->name('storeContact');

Route::post('/{lang?}/booking', [BookingController::class,'store'])->name('bookingPost');

Route::post('subscribe', [NewsletterController::class, 'store']);



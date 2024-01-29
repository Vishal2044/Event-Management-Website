<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/review', function () {
    return view('review');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/booking', function () {
    return view('booking');
});
Route::get('/data', function () {
   return view('data');
});

Route::get('/', [BookingController::class, 'index']);
Route::get('/home', [BookingController::class, 'home']);

// Route::post('/booking', [BookingController::class, 'booking']);
Route::post('/booking/data', [BookingController::class, 'bookingdata'])->name('booking.data');
// Route::post('/booking/data', [BookingController::class, 'bookingdata']);

Route::post('/booking/show', [BookingController::class, 'bookingshow']);

// Route::get('/eventbooking', function () {
//     return view('eventbooking');
// });

// Route::get('/eventbooking', function () {
//     $eventbooking = eventbooking::all();
//     echo "<pre>";
//     print_r($eventbooking);
//});
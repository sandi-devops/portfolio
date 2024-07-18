<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Home Route
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// About Route
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

// Projects Route
Route::get('/projects', function () {
    return view('pages.projects');
})->name('projects');

// Photos Route
Route::get('/photos', function () {
    return view('pages.photos');
})->name('photos');

// Resume Route
Route::get('/resume', function () {
    return view('pages.resume');
})->name('resume');

// Contact Route (GET)
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Contact Route (POST)
Route::post('/contact', function () {
    // Handle form submission logic here
    return redirect()->route('contact')->with('success', 'Message sent successfully!');
});


Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.send');


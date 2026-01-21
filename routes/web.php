<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('contact-us', function () {
    return view('pages.contact_us');
})->name('contact.us');

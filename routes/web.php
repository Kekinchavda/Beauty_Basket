<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('index');
Route::get('contact-us', function () {
    return view('pages.contact_us');
})->name('contact.us');
route::get('shop-list', function () {
    return view('pages.shop_list');
})->name('shop.list');

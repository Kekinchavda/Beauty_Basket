<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


route::get('/',[HomeController::class,'index'])->name('index');
route::get('contact-us',[HomeController::class,'contact'])->name('contact.us');
route::get('shop-list',[HomeController::class,'ShopList'])->name('shop.list');
route::get('our-brand',[HomeController::class,'OurBrand'])->name('our.brand');
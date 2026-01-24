<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


route::get('/',[HomeController::class,'index'])->name('index');
route::get('contact-us',[HomeController::class,'contact'])->name('contact.us');
route::get('shop-list',[HomeController::class,'ShopList'])->name('shop.list');
route::get('our-brand',[HomeController::class,'OurBrand'])->name('our.brand');
route::get('about-us',[HomeController::class,'AboutUs'])->name('about.us');
route::get('product-default',[HomeController::class,'ProductDefault'])->name('product.default');
route::get('cart',[HomeController::class,'Cart'])->name('cart');
route::get('checkout',[HomeController::class,'Checkout'])->name('checkout');
route::get('category',[HomeController::class,'Category'])->name('category');
route::get('my-account',[HomeController::class,'MyAccount'])->name('my.account');
route::get('order-tracking',[HomeController::class,'OrderTracking'])->name('order.tracking');
route::get('whistlist',[HomeController::class,'Whistlist'])->name('whistlist');



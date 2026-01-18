<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function contact()
    {
        return view('pages.contact_us');
    }
    public function ShopList()
    {
        return view('pages.shop_list');
    }
    public function ourBrand()
    {
        return view('pages.our_brand');
    }

}

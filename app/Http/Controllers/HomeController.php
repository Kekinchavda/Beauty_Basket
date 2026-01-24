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
    public function AboutUs()
    {
        return view('pages.about_us');
    }
    public function ProductDefault()
    {
        return view('pages.product_default');
    }
    public function Cart()
    {
        return view('pages.cart');
    }
    public function Checkout(){
        return view('pages.checkout');
    }
    public function Category(){
        return view('pages.category');
    }
    public function MyAccount(){
        return view('pages.my_account');
    }
    public function OrderTracking(){
        return view('pages.order_tracking');
    }
    public function Whistlist(){
        return view('pages.whistlist');
    }
}

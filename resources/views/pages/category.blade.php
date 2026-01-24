@extends('layouts.app')

@section('title', 'Beauty Basket')

@section('content')
    <!-- Start Breadcrumb Section -->
    <x-breadcrumb :breadcrumbs="[
            ['title' => 'Category', 'url' => route('category')],
        ]" />
    <!-- End Breadcrumb Section section -->

    <!-- Star Category section -->
    <div class="category-section mt-110 mb-110">
        <div class="container">
            <div class="category-section-title mb-70">
                <p>EXPLORE</p>
                <h1>Category</h1>
            </div>
            <div class="row g-4 mb-60">
                <div class="col-lg-3 col-sm-6">
                    <div class="category-card">
                        <div class="category-card-img hover-img">
                            <a href="shop-list.html"><img src="{{ asset('assets/img/inner-page/category-img1.png') }}" alt=""></a>
                        </div>
                        <div class="category-card-content">
                            <a href="shop-list.html">Bath & Body</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="category-card">
                        <div class="category-card-img hover-img">
                            <a href="shop-list.html"><img src="{{ asset('assets/img/inner-page/category-img2.png') }}" alt=""></a>
                        </div>
                        <div class="category-card-content">
                            <a href="shop-list.html">Skin Care</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="category-card">
                        <div class="category-card-img hover-img">
                            <a href="shop-list.html"><img src="{{ asset('assets/img/inner-page/category-img3.png') }}" alt=""></a>
                        </div>
                        <div class="category-card-content">
                            <a href="shop-list.html">Hair Care</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="category-card">
                        <div class="category-card-img hover-img">
                            <a href="shop-list.html"><img src="{{ asset('assets/img/inner-page/category-img4.png') }}" alt=""></a>
                        </div>
                        <div class="category-card-content">
                            <a href="shop-list.html">Kids & Baby</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 mb-70">
                <div class="col-lg-3 col-sm-6">
                    <div class="category-card">
                        <div class="category-card-img hover-img">
                            <a href="shop-list.html"><img src="{{ asset('assets/img/inner-page/category-img5.png') }}" alt=""></a>
                        </div>
                        <div class="category-card-content">
                            <a href="shop-list.html">Makeup</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="category-card">
                        <div class="category-card-img hover-img">
                            <a href="shop-list.html"><img src="{{ asset('assets/img/inner-page/category-img6.png') }}" alt=""></a>
                        </div>
                        <div class="category-card-content">
                            <a href="shop-list.html">Fragrance</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="category-card">
                        <div class="category-card-img hover-img">
                            <a href="shop-list.html"> <img src="{{ asset('assets/img/inner-page/category-img7.png') }}" alt=""></a>
                        </div>
                        <div class="category-card-content">
                            <a href="shop-list.html">Accessories</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="category-card">
                        <div class="category-card-img hover-img">
                            <a href="shop-list.html"><img src="{{ asset('assets/img/inner-page/category-img8.png') }}" alt=""></a>
                        </div>
                        <div class="category-card-content">
                            <a href="shop-list.html">Men Fashion</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="load-more-btn">
                <a href="" class="primary-btn1 hover-btn3">*Load More*</a>
            </div>
        </div>
    </div>
    <!-- End Category section -->
@endsection
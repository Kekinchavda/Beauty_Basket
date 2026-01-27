@extends('layouts.app')

@section('title', 'Beauty Basket')

@section('content')

   {{-- Hero --}}
   @include('home.banner_section')

   {{-- Categories --}}
   @include('home.choose_category')

   {{-- Products --}}
   @include('home.best_selling_products')

   {{-- Just For You --}}
   @include('home.just_for_you_section')

   {{-- Offers --}}
   @include('home.offer_section')

   {{-- Products --}}
   @include('home.new_arrival_section')

   {{-- Products --}}
   @include('home.exclusive_products_section')

   {{-- offers --}}
   @include('home.special_offer_section')

   {{-- Brands --}}
   @include('home.our_best_brand_section')

   {{-- Makeup --}}
   @include('home.our_makeup_section')

   {{-- Reviews --}}
   @include('home.review_section')

   {{-- Newsletter --}}
   @include('home.newsletter_section')

   {{-- Instagram Feed --}}
   @include('home.insta_feed_section')

@endsection
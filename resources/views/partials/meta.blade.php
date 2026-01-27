{{-- Basic --}}
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

{{-- CSRF --}}
<meta name="csrf-token" content="{{ csrf_token() }}">

{{-- SEO --}}
<meta name="description"
      content="@yield('meta_description', 'Beauty & Personal Care Products')">
<meta name="keywords"
      content="@yield('meta_keywords', 'beauty, skincare, cosmetics')">
<meta name="robots"
      content="@yield('robots', 'index, follow')">

{{-- Canonical --}}
<link rel="canonical" href="{{ url()->current() }}">

{{-- Multilingual hreflang --}}
@foreach(config('app.locales', [app()->getLocale()]) as $locale)
<link rel="alternate"
      hreflang="{{ $locale }}"
      href="{{ url($locale . request()->getPathInfo()) }}">
@endforeach
<link rel="alternate" hreflang="x-default"
      href="{{ url(request()->getPathInfo()) }}">

{{-- PWA --}}
<link rel="manifest" href="{{ asset('manifest.json') }}">
<meta name="theme-color" content="#ffffff">

{{-- Favicon --}}
<link rel="icon" type="image/png" href="{{ asset('assets/img/file.enc') }}">

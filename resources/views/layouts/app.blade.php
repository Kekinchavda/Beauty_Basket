<!DOCTYPE html>
<html lang="ar" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', __('Beauty Basket'))</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <x-theme-variables />

    <!-- Bootstrap Icon CSS -->
    <link href="{{ asset('assets/css/bootstrap-icons.css') }}" rel="stylesheet">
    <!-- Fontawesome all CSS -->
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet">
    <!--  FancyBox CSS  -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">

    <!-- Fontawesome CSS -->
    <link href="{{ asset('assets/css/fontawesome.min.css') }}" rel="stylesheet">
    <!-- box icon css -->
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">
    <!-- slider CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <!--  Style CSS  -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="icon" href="{{ asset('assets/img/file.enc') }}" type="image/png">
    @stack('styles')
</head>

<body>

    <!-- on page load modal -->
    <!-- <div class="page-load-modal">
        <div class="modal" id="myModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup-wrapper">
                            <div class="modal-clode-btn" data-bs-dismiss="modal"></div>
                            <div class="popup-img">
                                <img src="{{ asset('assets/img/home1/on-load-popup-img.png') }}" alt="">
                            </div>
                            <div class="popup-content">
                                <h2>Get 15% off your <br> first order</h2>
                                <p>Get your promo code and apply it at checkout</p>
                                <form>
                                    <div class="from-inner">
                                        <input type="email" placeholder="Email Address">
                                        <div class="from-arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="11"
                                                viewBox="0 0 18 11">
                                                <path
                                                    d="M16.4587 5.76798H1.12214C0.796856 5.76798 0.533569 5.50447 0.533569 5.17891C0.533569 4.85335 0.796856 4.58984 1.12214 4.58984H16.4587C16.784 4.58984 17.0473 4.85335 17.0473 5.17891C17.0473 5.50447 16.784 5.76798 16.4587 5.76798Z" />
                                                <path
                                                    d="M12.1134 10.3617C11.9395 10.3617 11.7677 10.2852 11.6515 10.1383C11.4499 9.88302 11.493 9.51269 11.7481 9.31084L13.5789 7.86173L16.5198 5.23489L11.6621 1.03484C11.4161 0.82199 11.389 0.450092 11.6013 0.203862C11.814 -0.0423681 12.1864 -0.069072 12.4316 0.142992L17.7958 4.78131C17.9241 4.89205 17.9983 5.05267 17.9999 5.22271C18.001 5.39236 17.9296 5.55416 17.8033 5.66687L14.3354 8.76301L12.4783 10.2349C12.37 10.3205 12.2409 10.3617 12.1134 10.3617Z" />
                                            </svg>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

    <!--  Main jQuery  -->
    <!-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- Popper and Bootstrap JS -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <!-- Fancybox JS -->
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <!-- Swiper slider JS -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <!-- main js  -->
    <script src="{{ asset('assets/js/main.js') }}"></script>


    @stack('scripts')
</body>

</html>
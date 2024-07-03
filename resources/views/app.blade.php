<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

        <!-- ========== Favicon Icon ========== -->
        <link rel="shortcut icon" href="{{ asset('logo.png') }}" type="image/x-icon">

        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/elegant-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/flaticon-set.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/swiper-bundle.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/validnavs.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/helper.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/unit-test.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    </head>
    <body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Start Preloader
    ============================================= -->
    <div id="preloader">
        <div id="consua-preloader" class="consua-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="M" class="letters-loading">
                        M
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="R" class="letters-loading">
                        R
                    </span>
                    <span data-text-preloader="C" class="letters-loading">
                        C
                    </span>
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
                    <span data-text-preloader="P" class="letters-loading">
                        P
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="C" class="letters-loading">
                        C
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
                </div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->
    <header>
        <!-- Start Navigation -->
        <nav class="navbar mobile-sidenav navbar-sticky navbar-default validnavs navbar-fixed dark  no-background">

            <div class="container d-flex justify-content-between align-items-center">


                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{route('homepage')}}">
                        <img src="{{ asset('logo.png') }}" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">

                    <div class="collapse-header">
                        <img src="{{ asset('logo.png') }}" alt="Logo">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>

                    <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                        <li><a href="">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Nos services</a>
                            <ul class="dropdown-menu">
                                @foreach($services as $service)
                                    <li>
                                        <a href="/">{{ $service->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{ asset('about') }}" class="{{ Route::is('about') ? 'active' : '' }}">A propos de nous</a></li>
                        <li><a href="{{ route('contact') }}" class="{{ Route::is('contact') ? 'active' : '' }}">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->

                <div class="attr-right">
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="contact">
                                <div class="call">
                                    <div class="icon">
                                        <i class="fas fa-comments-alt-dollar"></i>
                                    </div>
                                    <div class="info">
                                        <p>Have any Questions?</p>
                                        <h5><a href="mailto:{{ $company->official_email }}">{{ $company->official_email }}</a></h5>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->
                </div>

            </div>
            <!-- Overlay screen for menu -->
            <div class="overlay-screen"></div>
            <!-- End Overlay screen for menu -->
        </nav>
        <!-- End Navigation -->
    </header>

    @yield('content')

    <footer class="bg-dark text-light">
        <div class="footer-shape">
            <div class="item">
                <img src="{{ asset('assets/img/shape/7.png') }}" alt="Shape">
            </div>
            <div class="item">
                <img src="{{ asset('assets/img/shape/9.png') }}" alt="Shape">
            </div>
        </div>
        <div class="container">
            <div class="f-items relative pt-70 pb-120 pt-xs-0 pb-xs-50">
                <div class="row">
                    <div class="col-lg-4 col-md-6 footer-item pr-50 pr-xs-15">
                        <div class="f-item about">
                            <img class="logo" src="{{ asset('logo.png') }}" alt="Logo">
                            <p>
                                {!! $company->brief_description !!}
                            </p>
                            <div class="opening-hours">
                                <h5>Opening Hours</h5>
                                <ul>
                                    @foreach($openingHours as $op)
                                        <li>
                                            <div class="working-day">{{ $op->working_day }}:</div>
                                            <div class="marker"></div>
                                            <div class="working-hour">{{ $op->working_hour }}</div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 footer-item">
                        <div class="f-item link">
                            <h4 class="widget-title">Our Company</h4>
                            <ul>
                                <li>
                                    <a href="{{ route('homepage') }}">Home</a>
                                </li>
                                <li>
                                    <a href="/">Help Center</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}">About</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 footer-item">
                        <div class="f-item link">
                            <h4 class="widget-title">Our Services</h4>
                            <ul>
                                @foreach($services as $service)
                                    <li>
                                        <a href="/">{{ $service->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-item">
                        <h4 class="widget-title">Newsletter</h4>
                        <p>
                            Join our subscribers list to get the latest <br> news and special offers.
                        </p>
                        <div class="f-item newsletter">
                            <form action="#">
                                <input type="email" placeholder="Your Email" class="form-control" name="email">
                                <button type="submit"> Subscribe</button>
                            </form>
                        </div>
                        <ul class="footer-social">
                            @if($company->facebook != "")
                                <li>
                                    <a href="{{ $company->facebook }}">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                            @endif

                            @if($company->twitter != "")
                                <li>
                                    <a href="{{ $company->twitter }}">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                            @endif

                            @if($company->youtube != "")
                                <li>
                                    <a href="{{ $company->youtube }}">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            @endif

                            @if($company->linkedin != "")
                                <li>
                                    <a href="{{ $company->linkedin }}">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            @endif

                                @if($company->instagram != "")
                                <li>
                                    <a href="{{ $company->instagram }}">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright {{ date('Y') }}. All Rights Reserved by <a href="https://arielnana.me">Ariel Nana</a></p>
                    </div>
                    <div class="col-lg-6 text-end">
                        <ul>
                            <li>
                                <a href="/">Terms</a>
                            </li>
                            <li>
                                <a href="/">Privacy</a>
                            </li>
                            <li>
                                <a href="/">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->

    </footer>

        <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/modernizr.custom.13711.js') }}"></script>
        <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/progress-bar.min.js') }}"></script>
        <script src="{{ asset('assets/js/circle-progress.js') }}"></script>
        <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('assets/js/count-to.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.scrolla.min.js') }}"></script>
        <script src="{{ asset('assets/js/YTPlayer.min.js') }}"></script>
        <script src="{{ asset('assets/js/TweenMax.min.js') }}"></script>
        <script src="{{ asset('assets/js/rangeSlider.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/js/validnavs.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>

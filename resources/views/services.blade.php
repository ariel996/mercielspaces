@extends('app2')
@section('title', 'Services')
@section('content')
    <!-- Start Breadcrumb
        ============================================= -->
    <div class="breadcrumb-area bg-cover shadow dark text-center text-light" style="background-image: url(/assets/img/banner/10.jpg);">
        <div class="breadcrum-shape">
            <img src="{{ asset('assets/img/shape/50.png') }}" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Nos services</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('homepage') }}"><i class="fas fa-home"></i> Accueil</a></li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Services
============================================= -->
    <div class="services-style-two-area default-padding bottom-less bg-cover bg-gray" style="background-image: url(assets/img/shape/27.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-heading">Ce que nous faisons</h4>
                        <h2 class="title">Services que nous offrons</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <!-- Single Item -->
                @foreach($services as $service)
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="services-style-two">
                            <div class="thumb">
                                <img src="{{ asset('storage/'.$service->service_img) }}" alt="{{ $service->title }}">
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- End Single Item -->

            </div>
        </div>
    </div>
    <!-- End Services -->
@endsection

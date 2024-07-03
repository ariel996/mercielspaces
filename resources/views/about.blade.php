@extends('app2')
@section('title', 'About')
@section('content')
    <!-- Start Breadcrumb
        ============================================= -->
    <div class="breadcrumb-area bg-cover shadow dark text-center text-light" style="background-image: url(/assets/img/banner/10.jpg);">
        <div class="breadcrum-shape">
            <img src="/assets/img/shape/50.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Contact Us</h1>
                    <ul class="breadcrumb">
                        <li><a href=""><i class="fas fa-home"></i> Home</a></li>
                        <li>About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    <!-- Start About
============================================= -->
    <div class="about-style-one-area default-padding">
        <div class="shape-animated-left">
            <img src="/assets/img/shape/anim-1.png" alt="Image Not Found">
            <img src="/assets/img/shape/anim-2.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row align-center">
                <div class="about-style-one col-xl-6 col-lg-5">
                    <div class="h4 sub-heading">Feel Valued & Rewarded</div>
                    <h2 class="title mb-25">Finance Consulting for Challenging Times</h2>
                    {!! $about?->description !!}
                    <div class="owner-info">
                        <div class="left-info">
                            <h4>{{ $about?->author }}</h4>
                            <span>{{ $about?->fonction }}</span>
                        </div>
                        <div class="right-info">
                            <img src="{{ asset('storage/'.$about?->signature) }}" alt="Image Not Found">
                        </div>
                    </div>
                </div>
                <div class="about-style-one col-xl-5 offset-xl-1 col-lg-6 offset-lg-1">
                    <div class="about-thumb">
                        <img class="wow fadeInRight" src="{{ asset('storage/'.$about?->image) }}" alt="{{ $about?->author }}">
                        <div class="about-card wow fadeInUp" data-wow-delay="500ms">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-license"></i>
                                    </div>
                                    <div class="fun-fact">
                                        <div class="counter">
                                            <div class="timer" data-to="98" data-speed="2000">98</div>
                                            <div class="operator">%</div>
                                        </div>
                                        <span class="medium">Consulting Success</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-global"></i>
                                    </div>
                                    <div class="fun-fact">
                                        <div class="counter">
                                            <div class="timer" data-to="120" data-speed="2000">120</div>
                                            <div class="operator">+</div>
                                        </div>
                                        <span class="medium">Worldwide Clients</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="thumb-shape-bottom wow fadeInDown" data-wow-delay="300ms">
                            <img src="/assets/img/shape/anim-3.png" alt="Image Not Found">
                            <img src="/assets/img/shape/anim-4.png" alt="Image Not Found">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Partner Area
    ============================================= -->
    <div class="partner-style-one-area default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-5">
                    <div class="partner-map" style="background-image: url(/assets/img/shape/map.png);">
                        <h2 class="mask-text" style="background-image: url(/assets/img/banner/10.jpg);">{{  count($partners) }}</h2>
                        <h4>Partners in world wide</h4>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="partner-items">
                        <ul>
                            @foreach($partners as $partner)
                                <li><img src="{{ asset('storage/'.$partner->partner_img) }}" alt="Image Not FOund"></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Area -->

    <!-- Start Team
    ============================================= -->
    <div class="team-style-onea-rea default-padding-top pb-70 pb-xs-0 bg-contain-center bg-gray" style="background-image: url(/assets/img/shape/18.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-heading">Team Members</h4>
                        <h2 class="title">Meet our experts</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!-- Single Item -->
                @foreach($teams as $team)
                    <div class="col-xl-3 col-md-6">
                        <div class="team-style-one {{ $team->id === 1 ? 'active' : '' }}">
                            <div class="thumb">
                                <img src="{{ asset('storage/'.$team->image_path) }}" alt="{{ $team->name }} Not Found">
                                <div class="social">
                                    <ul>
                                        @if($team->facebook_link != "")
                                            <li class="facebook">
                                                <a href="{{ $team->facebook_link }}">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                        @endif

                                        @if($team->twitter_link != "")
                                            <li class="twitter">
                                                <a href="{{ $team->twitter_link }}">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                        @endif

                                        @if($team->linkedin_link != "")
                                            <li class="linkedin">
                                                <a href="{{ $team->linkedin_link }}">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="info">
                                <span>{{$team->fonction}}</span>
                                <h4><a href="#">{{$team->name}}</a></h4>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End Team Area -->
@endsection

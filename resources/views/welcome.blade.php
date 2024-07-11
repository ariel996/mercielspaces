@extends('app')

@section('title', 'Home')

@section('content')
    <!-- Start Banner Area
        ============================================= -->
    <div class="banner-area banner-style-two content-right navigation-icon-solid navigation-right-botom navigation-custom-large overflow-hidden bg-cover" style="background: url(/assets/img/shape/banner.jpg);">
        <!-- Slider main container -->
        <div class="banner-style-two-carousel">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                <!-- Single Item -->
                @foreach($banners as $banner)
                    <div class="swiper-slide banner-style-two">
                        <div class="container">
                            <div class="row align-center">
                                <div class="col-xl-7 col-lg-9">
                                    <div class="content">
                                        {!! $banner->content !!}
                                        <div class="button">
                                            <a class="btn circle btn-theme btn-md radius animation" href="{{ $banner->button_link }}">{{ $banner->button_text }}</a>
                                        </div>
                                        <div class="shape-circle"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Banner Thumb -->
                            <div class="banner-thumb">
                                <img src="{{ asset('storage/'.$banner->banner_img) }}" alt="banner">
                            </div>
                            <!-- End Banner Thumb -->
                        </div>
                        <!-- Start Shape -->
                        <div class="banner-shape-right" style="background: url(/assets/img/shape/3.png);"></div>
                        <!-- End Shape -->
                    </div>
                @endforeach
                <!-- End Single Item -->

            </div>

            <!-- Navigation -->
            <div class="swiper-nav-left">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

        </div>
    </div>
    <!-- End Main -->
    <div class="feature-style-one-area half-angle-shape overflow-hidden default-padding">
        <div class="container">
            <div class="row align-center">
                <!-- Single Itme -->
                <div class="col-lg-5">
                    <div class="feature-style-one-heading text-light">
                        <div class="arrow-shape">
                            <img src="/assets/img/shape/21.png" alt="Image not found">
                        </div>
                        <h2 class="title mb-25">Nos Missions</h2>
                        <p>{{ $feature?->description }}</p>
                        <div class="circle-progress">
                            <div class="progressbar">
                                <div class="circle" data-percent="{{ $feature?->company_growth }}">
                                    <strong></strong>
                                </div>
                                <h4>{{ $feature?->company_title }}</h4>
                            </div>
                            <div class="progressbar">
                                <div class="circle" data-percent="{{ $feature?->satisfied_client }}">
                                    <strong></strong>
                                </div>
                                <h4>{{ $feature?->client_title }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Itme -->
                <div class="col-lg-6 offset-lg-1 pl-60 pl-md-15 pl-xs-10 mt-md-50 mt-xs-50">
                    <!-- Single Itme -->
                    @foreach($featureitems as $item)
                        <div class="feature-style-one wow fadeInUp" @if($item->data_wow_delay != "") data-wow-delay="{{ $item->data_wow_delay }}ms" @endif>
                            <div class="icon">
                                <i class="{{ $item->feature_icon }}"></i>
                            </div>
                            <div class="info">
                                <h4>{{ $item->h4title }}</h4>
                                {!! $item->paragraph !!}
                            </div>
                        </div>
                    @endforeach
                    <!-- End Single Itme -->
                </div>
            </div>
        </div>
    </div>

    <!-- Start Services
      ============================================= -->
    <div class="services-style-two-area default-padding bottom-less bg-cover bg-gray" style="background-image: url(/assets/img/shape/27.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-heading">Ce que nous faisons</h4>
                        <h2 class="title">Les services que nous offrons</h2>
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
                            <img src="{{ asset('storage/'.$service->service_img) }}" alt="Thumb">
                            <div class="title">
                                <a href="#">
                                    <i class="{{ $service->icone }}"></i>
                                    <h4>{{ $service->title }}</h4>
                                </a>
                            </div>
                        </div>
                        <div class="info">
                            {!! $service->description !!}
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- End Single Item -->

            </div>
        </div>
    </div>
    <!-- End Services -->
    <!-- Start Partner Area
    ============================================= -->
    <div class="partner-style-one-area default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-5">
                    <div class="partner-map" style="background-image: url(/assets/img/shape/map.png);">
                        <h2 class="mask-text" style="background-image: url(/assets/img/banner/10.jpg);">{{  count($partners) }}</h2>
                        <h4>Partenaires dans le monde</h4>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="partner-items">
                        <ul>
                            @foreach($partners as $partner)
                                <li><img src="{{ asset('storage/'.$partner->partner_img) }}" alt="Partner Image Not Found"></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Area -->

    <!-- Start Faq
============================================= -->
    <div class="faq-style-one-area relative" style="background-image: url(/assets/img/shape/32.png);">


        <div class="container">
            <div class="row align-center">

                <div class="col-lg-6">
                    <div class="faq-style-one default-padding">
                        <h4 class="sub-heading">Foire aux Questions</h4>
                        <h2 class="title mb-30">Les questions <br> frequemment posees</h2>
                        <div class="accordion" id="faqAccordion">
                            @foreach($faqs as $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{ $faq->id }}">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}" aria-expanded="true" aria-controls="collapse{{ $faq->id }}">
                                            {{ $faq->question }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse show" aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            {!! $faq->answer !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 offset-lg-1 mt-120 mt-md-50 mt-xs-30">
                    <div class="faq-thumb">
                        <img src="{{ asset('assets/img/illustration/6.png') }}" alt="Image Not Found">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Faq -->

    <!-- Start Testimonials
============================================= -->
    <div class="testimonials-style-two-area bg-dark default-padding-top half-shape-light-bottom" style="background-image: url(assets/img/shape/34.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-light text-center">
                        <h4 class="sub-heading">Temoignages</h4>
                        <h2 class="title">Feedback des clients</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fill">
            <div class="row">
                <div class="testimonial-style-two-carousel swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">

                        <!-- Single Item -->
                        @foreach($testimonies as $testimony)
                            <div class="swiper-slide">
                                <div class="testimonial-style-two">
                                    <img src="{{ asset('assets/img/shape/quote.png') }}" alt="Quote">
                                    <div class="top-info">
                                        <h3>{{ $testimony->appreciation }}</h3>
                                        <div class="testimonial-rating">
                                            @for($i=1; $i<=$testimony->nbre_etoile; $i++)
                                                <i class="fas fa-star"></i>
                                            @endfor
                                        </div>
                                    </div>
                                    <div class="info">
                                        {!! $testimony->temoignage !!}
                                    </div>
                                    <div class="provider">
                                        <div class="content">
                                            <h4>{{ $testimony->client }}</h4>
                                            <span>{{ $testimony->country }}</span>
                                        </div>
                                        @if($testimony->company_logo != "")
                                            <div class="thumb">
                                                <img src="{{ asset('storage/'.$testimony->company_logo) }}" alt="company Logo">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- End Single Item -->

                    </div>

                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials  -->
@endsection

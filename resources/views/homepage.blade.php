@extends('layouts.main-layout')

@section('meta_title', 'Homepage')

@section('meta_keywords', 'create website company, cheap wordpress build, how much to build wordpress site, canada
build wordpress website, usa build wordpress website')

@section('meta_description', 'Wordpress developers, CMS Developers, Mobile developers. Cheap to build website, fast,
high quality. Best reviews about developers')

@section('main')
    <section class="slider-area">
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center"
                 data-background="assets/img/hero/h1_hero.png">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <div class="left-part">
                            <div class="hero__caption">
                                <h1>We are Developers.<br>Need a Website?</h1>
                                <p>Hello! We are World Devs from Europe, Asia, Russia and other countries. We can
                                    build a Website, Mobile App or Desktop App for you.
                                    With CMS (content management system), Frameworks or Programming
                                    languages from scratch. We are fast and productive. Good site - good price</p>
                                <!-- Hero-btn -->
                                <div class="hero__btn">
                                    <a href="{{ route('pages.show', 'contact') }}" class="btn hero-btn">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="right-part">
                            <div class="hero__img d-none d-lg-block" data-animation="fadeInRight" data-delay="1s">
                                <img src="{{ asset('assets/img/hero/hero_right.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="what-we-do we-padding">
        <div class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center">
                        <h2>What website<br/>we can build for you</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse( $canDo as $do)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-do text-center mb-30">
                            <div class="do-icon mb-4">
                                <img src="{{ asset($do->img) }}" alt="{{ $do->title }}" width="50">
                            </div>
                            <div class="do-caption">
                                <h4>{{ $do->title }}</h4>
                                <p>{{ $do->description }}</p>
                            </div>
                            <div class="do-btn">
                                <a href="javascript:void(0)">
                                    <i class="ti-arrow-right"></i> get started</a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
            <div class="row justify-content-center mt-5">
                <a href="{{ route('pages.show','services') }}" class="btn btn-primary">All services</a>
            </div>
        </div>
    </section>


    <section class="we-create-area create-padding">
        <div class="container">
            <div class="d-flex justify-content-between flex-wrap flex-lg-nowrap">
                <div class="left-part">
                    <div class="we-create-img">
                        <img src="{{ asset('assets/img//service/we-create.png') }}" alt="">
                    </div>
                </div>
                <div class="right-part">
                    <div class="we-create-cap">
                        <h3>We can build Mobile App, Website or Desktop App</h3>
                        <h4>Technologies and stacks</h4>
                        <p><strong>Mobile App</strong> - Android native, iOS native or modern Flutter Framework with
                            Dart language for both platforms.

                            <br/>
                            <br/>

                            <strong>Website App</strong> - CMS Wordpress, ModX CMS, eCommerce CMS
                            and other. Website with framework from scratch - PHP Framework Laravel or Symfony.

                            <br/>
                            <br/>
                            <strong>Desktop App</strong> - Electron or ASP.NET WPF, UWF and WinForms.
                        </p>
                        <a href="{{ route('pages.show', 'contact') }}" class="btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="generating-area">
        <div class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center">
                        <h2>Pros to work with us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse( $ourPros as $pros)
                    <div class="col-lg-6 col-md-6">
                        <div class="single-generating d-flex mb-30">
                            <div class="generating-icon">
                                <img src="{{ asset($pros['img']) }}" alt="{{ $pros['title'] }}" width="50">
                            </div>
                            <div class="generating-cap">
                                <h4>{{ $pros['title'] }}</h4>
                                <p>{{ $pros['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>
        </div>
    </section>


    <section class="choose-best choose-padding">
        <div class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-7">
                    <div class="section-tittle text-center">
                        <h2>Choose the Pricing Plan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse( $prices as $price)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-choose text-center mb-30">
                            <div class="do-icon mb-4">
                                <img src="{{ asset($price->img) }}" alt="price {{ $price->price }}" width="50">
                            </div>
                            <div class="do-caption">
                                <h4>{{ $price->title }}</h4>
                                <h4>
                                    <span class="currency">$</span> <span class="price">{{ $price->price }}</span>
                                </h4>
                                <ul>
                                    @forelse( $price->included as $include)
                                        <li>{{ $include->title }}</li>
                                    @empty
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse


            </div>

            <div class="row justify-content-center mt-5">
                <a href="{{ route ('pages.show','pricing') }}" class="btn btn-primary">All prices</a>
            </div>
        </div>
    </section>


    <section class="visit-area fix visite-padding">
        <div class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 pr-0">
                    <div class="section-tittle text-center">
                        <h2>Visit Some Of Our Awesome Works</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-1">
            <div class="row justify-content-around">
                @forelse( $portfolio as $work)
                    <div class="col-6 col-sm-4 col-lg-3">
                        <a href="{{ $work->url }}">
                            <div class="single-visited mb-30">
                                <div class="visited-img">
                                    {{--<img src="{{ asset($work['img']) }}" alt="">--}}
                                    <img src="{{ $work->img }}" alt="">
                                </div>
                                <div class="visited-cap">
                                    <h3>{{ $work->title }}</h3>
                                    <p>{{ $work->description }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>

    <section class="testimonial-area">
        <div class="container">
            <div class="testimonial-main">
                <!-- Section-tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-5  col-md-8 pr-0">
                        <div class="section-tittle text-center">
                            <h2>Testimonials</h2>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-10 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->


                            @forelse( $testimonials as $testimonial)
                                <div class="single-testimonial text-center">
                                    <div class="testimonial-caption">

                                        <h3>{{ $testimonial->title }}</h3>
                                        <div class="testimonial-top-cap">
                                            <p>{{ $testimonial->message }}</p>
                                        </div>
                                        <div
                                            class="testimonial-founder d-flex align-items-center justify-content-center">
                                            <div class="founder-img">
                                                {{--                                                <img src="{{ asset($testimonial->img ) }}" alt="">--}}
                                                <img src="{{ $testimonial->img }}" alt="" width="40">
                                            </div>
                                            <div class="founder-text">
                                                <span>{{ $testimonial->user->first_name }}</span>
                                                <span>{{ $testimonial->user->last_name }}</span>
                                                {{--                                                <p>{{ $testimonial['position'] }}</p>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                No testimonials
                            @endforelse


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tips-tricks-area tips-padding">
        <div class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 col-md-8 pr-0">
                    <div class="section-tittle text-center">
                        <h2>Tips and Tricks From Our Experts</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                @forelse( $blogs as $blog )
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-tips mb-50">
                            <div class="tips-img">

                                {{--TODO Hardcoded image link--}}
                                <img src="{{ asset('assets/img/tips/tips_1.jpg') }}" alt="">
                            </div>
                            <div class="tips-caption">
                                <h4><a href="{{ route('blogs.show', $blog) }}">{{ $blog->title }}</a></h4>
                                <p>{{ $blog->created_at }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse


            </div>
        </div>
    </section>
    <section class="have-project">
        <div class="container">
            <div class="haveProject">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-7 col-lg-9 col-md-12">
                        <div class="wantToWork-caption">
                            <h2>Have project in mind?</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut.</p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-3 col-md-12">
                        <div class="wantToWork-btn f-right">
                            <a href="{{ route('pages.show', 'contact') }}" class="btn btn-ans">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

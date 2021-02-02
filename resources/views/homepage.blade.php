@extends('layouts.main-layout')

@section('meta_title', 'Создание и продвижение сайтов на заказ')

@section('meta_keywords', 'создание сайтов, продвижение сайтов, изготовление сайтов, сайт с нуля, сайт визитка, сайт
интернет магазин, сайт портал')

@section('meta_description', 'Мы компания, которая занимается созданием сайтов, продвижением сайтов, оптимизацией и
тестированием готовых систем')

@section('head')
    {{--For testimonials--}}
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
@endsection

@section('scripts_after')
    {{--For testimonials--}}
    <script defer src="{{ asset('assets/js/slick.min.js') }}"></script>
@endsection



@section('main')
    <section class="slider-area">
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center"
                 data-background="assets/img/hero/h1_hero.png">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <div class="left-part">
                            <div class="hero__caption">
                                <h1>Вам нужен Сайт?</h1>
                                <h2>Мы создадим его для Вас</h2>
                                <p>Добрый день уважаемый посетитель!<br/>Мы занимаемся разработкой сайтов с нуля,
                                    доработками уже готовых проектов, оптимизацией, а также продвижением и
                                    тестированием готовых систем.</p>
                                {{--Hero-btn --}}
                                <div class="hero__btn">
                                    <a href="{{ route('pages.show', 'contact') }}"
                                       class="btn hero-btn btn-primary">Связаться с нами</a>
                                </div>
                            </div>
                        </div>
                        <div class="right-part">
                            <div class="hero__img d-lg-block d-none" data-animation="fadeInRight" data-delay="1s">
                                <img src="{{ asset('assets/img/hero/hero_right.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    @include("include.homepage.special")

    <section class="what-we-do we-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center">
                        <h2>Что мы можем Вам предложить?</h2>
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
                                <a href="{{ route('services.show', $do) }}">
                                    <i class="ti-arrow-right"></i> Более подробно</a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
            <div class="row justify-content-center mt-5">
                <a href="{{ route('services.index') }}" class="btn btn-primary">Все услуги</a>
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
                        <h3>Мы создаём не только сайты</h3>
                        <h4>Технологии и стек</h4>
                        <br/>
                        <p><strong>Веб приложения и сайты</strong> - на CMS: Wordpress, ModX и CMS для
                            электронной торговли.
                            <br/>
                            <br/>
                            А также веб сайты и приложения без использования CMS на языке PHP с современным топовым
                            фреймворком Laravel и фронтендом на Vue JS
                            <br/>
                            или бекенд на ASP.NET Core с фронтендом на Vue JS, Angular или Classic MVC.
                            <br/>
                            <br/>
                            <strong>Мобильные приложения</strong> - Android или iOS, а также приложения на языке Dart
                            с фреймворком Flutter для обоих платформ.
                            <br/>
                            <br/>
                            {{--<strong>Настольные приложения</strong> - Electron or ASP.NET WPF, UWF and WinForms.--}}
                        </p>
                        <a href="{{ route('pages.show', 'contact') }}" class="btn btn-primary">Наши контакты и связь</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="generating-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center">
                        <h2>Плюсы работы с нами</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">

                {{--TODO Move pros array to db from home controller--}}
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
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-tittle text-center">
                        <h2>Наши цены</h2>
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
                                    <span class="price">{{ number_format($price->price, 0, ',', ' ') }}</span> <span
                                        class="currency">руб
                                        .</span>
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
                <a href="{{ route ('pages.show','pricing') }}" class="btn btn-primary">Цены на другие услуги</a>
            </div>
        </div>
    </section>


    @include('include.homepage.portfolio')

    <section class="testimonial-area">
        <div class="container">
            <div class="testimonial-main">
                <div class="row justify-content-center">
                    <div class="col-lg-5  col-md-8 pr-0">
                        <div class="section-tittle text-center">
                            <h2>Отзывы о нас</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-9">
                        <div class="h1-testimonial-active">
                            {{--Single Testimonial --}}
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
                                                {{--<img src="{{ asset($testimonial->img ) }}" alt="">--}}
                                                <img src="{{ $testimonial->img }}" alt="" width="40">
                                            </div>
                                            <div class="founder-text">
                                                <span>{{ $testimonial->user->first_name }}</span>
                                                <span>{{ $testimonial->user->last_name }}</span>
                                                {{--<p>{{ $testimonial['position'] }}</p>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                Пока отзывов никто не оставил
                            @endforelse


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tips-tricks-area tips-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 pr-0">
                    <div class="section-tittle text-center">
                        <h2>Советы и рекомендации, блоги</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                @forelse( $blogs as $blog )
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-tips mb-50">
                            <div class="tips-img">
                                <img src="{{ $blog->img }}" alt="{{ $blog->title }}">
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
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-9 col-md-12">
                        <div class="wantToWork-caption">
                            <h2>Решили воплотить в жизнь Ваши интернет идеи?</h2>
                            <p>Свяжитесь с нами, обсудим, сделаем, поможем запустить и начать получать первых
                                клиентов из интернета</p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-3 col-md-12">
                        <div class="wantToWork-btn f-right">
                            <a href="{{ route('pages.show', 'contact') }}"
                               class="btn btn-ans btn-primary">Перейти в раздел контакты</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection



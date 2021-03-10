@extends('layouts.main-layout')


@section('meta_title', $template->name)
@section('meta_keywords', $template->meta_keywords)
@section('meta_description', $template->meta_description)

@section('main')
    <div class="container page-single what-we-do">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-tittle text-center">
                    <h2>{{ $template->title }}</h2>
                </div>
            </div>
        </div>


        {{--Page panels--}}
        <div class="row">

            {{--Left big images and thumbs--}}
            <div class="col-lg-6">

                <div class="about-feature mt-30">
                    <div class="about-feature-image">
                        @if( $template->img)
                            <a data-fancybox="gallery"
                               href="{{ asset( 'storage/' . $template->img) }}">
                                {{--TODO Hardcoded styles, move to css--}}
                                <img src="{{ asset( 'storage/' . $template->img) }}"
                                     style="border-top-left-radius: 10px; border-top-right-radius: 10px"
                                     width="100%" alt="">

                            </a>
                        @endif
                    </div>

                    <div class="about-feature-content">
                        <p class="description">{!! $template->description !!}</p>
                    </div>

                    <div class="d-flex flex-wrap justify-content-around my-3">
                        @if( $template->url)
                            <a target="_blank"
                               rel="nofollow noopener"
                               href="{{ asset($template->url) }}" class="btn btn-success">Открыть пример</a>
                        @endif

                        {{--TODO add link to create order through reg or login page--}}
                        <a href="#" class="btn btn-info">Заказать сайт с таким шаблоном</a>
                    </div>

                    {{--Image thumbs--}}
                    <div class="about-feature-thumbs my-3">
                        @if( $template->img2)
                            <h6>Ещё изображения...</h6>
                            <a data-fancybox="gallery"
                               href="{{ asset( 'storage/' . $template->img2) }}">
                                <img src="{{ asset( 'storage/' . $template->img2) }}"
                                     width="80" height="80" alt="">
                            </a>
                        @endif
                    </div>


                </div>
            </div>

            {{--Right content--}}
            <div class="col-lg-6 mt-30">

                @if( $template->cms)
                    <div class="about-feature-items d-sm-flex align-items-center">
                        <div class="feature-items-icon">
                            <img src="{{ asset('assets/img/icons/cms.svg') }}"
                                 width="30"
                                 class="mx-3"
                                 alt="Icon">
                        </div>
                        <div class="feature-items-content media-body">
                            <h5 class="items-title">CMS</h5>
                            <p class="text">{{ $template->cms }}</p>
                        </div>
                    </div>
                @endif

                @if( $template->framework)
                    <div class="about-feature-items d-sm-flex align-items-center">
                        <div class="feature-items-icon">
                            <img src="{{ asset('assets/img/icons/framework.svg') }}"
                                 width="30"
                                 class="mx-3"
                                 alt="Icon">
                        </div>
                        <div class="feature-items-content media-body">
                            <h5 class="items-title">Framework</h5>
                            <p class="text">{{ $template->framework }}</p>
                        </div>
                    </div>
                @endif

                @if( $template->backend)
                    <div class="about-feature-items d-sm-flex align-items-center">
                        <div class="feature-items-icon">
                            <img src="{{ asset('assets/img/icons/backend.svg') }}"
                                 width="30"
                                 class="mx-3"
                                 alt="Icon">
                        </div>
                        <div class="feature-items-content media-body">
                            <h5 class="items-title">Backend</h5>
                            <p class="text">{{ $template->backend }}</p>
                        </div>
                    </div>
                @endif

                @if( $template->frontend)
                    <div class="about-feature-items d-sm-flex align-items-center">
                        <div class="feature-items-icon">
                            <img src="{{ asset('assets/img/icons/frontend.svg') }}"
                                 width="30"
                                 class="mx-3"
                                 alt="Icon">
                        </div>
                        <div class="feature-items-content media-body">
                            <h5 class="items-title">Frontend</h5>
                            <p class="text">{{ $template->frontend }}</p>
                        </div>
                    </div>
                @endif

                @if( $template->established)
                    <div class="about-feature-items d-sm-flex align-items-center">
                        <div class="feature-items-icon">
                            <img src="{{ asset('assets/img/icons/created.svg') }}"
                                 width="30"
                                 class="mx-3"
                                 alt="Icon">
                        </div>
                        <div class="feature-items-content media-body">
                            <h5 class="items-title">Создан</h5>
                            <p class="text">{{ $template->established }}</p>
                        </div>
                    </div>
                @endif

                @if( $template->site_type)
                    <div class="about-feature-items d-sm-flex align-items-center">
                        <div class="feature-items-icon">
                            <img src="{{ asset('assets/img/icons/site-type.svg') }}"
                                 width="30"
                                 class="mx-3"
                                 alt="Icon">
                        </div>
                        <div class="feature-items-content media-body">
                            <h5 class="items-title">Тип сайта</h5>
                            <p class="text">{{ $template->site_type }}</p>
                        </div>
                    </div>
                @endif

                @if( $template->additional_info)
                    <div class="about-feature-items d-sm-flex align-items-center">
                        <div class="feature-items-icon">
                            <img src="{{ asset('assets/img/icons/additional-info.svg') }}"
                                 width="30"
                                 class="mx-3"
                                 alt="Icon">
                        </div>
                        <div class="feature-items-content media-body">
                            <h5 class="items-title">Дополнительная информация</h5>
                            <p class="text">{{ $template->additional_info }}</p>
                        </div>
                    </div>
                @endif


            </div>
        </div>

        {{--Article--}}
        <div class="row">
            <article>{!! $template->article !!}</article>
        </div>


    </div>
@endsection


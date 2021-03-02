@extends('layouts.main-layout')


@section('meta_title', $template->name)
@section('meta_keywords', $template->meta_keywords)
@section('meta_description', $template->meta_description)

@section('main')
    <div class="container page-single what-we-do">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-tittle text-center">
                    <h2>{{ $template->title }}, id: {{ $template->id }}</h2>
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
                            <a data-fancybox="gallery"
                               href="{{ asset( 'storage/' . $template->img2) }}">
                                <img src="{{ asset( 'storage/' . $template->img2) }}"
                                     width="100" alt="">
                            </a>
                        @endif
                    </div>

                    <div class="about-feature-content">
                        <p class="description">{!! $template->description !!}</p>
                    </div>


                </div>
            </div>

            {{--Right content--}}
            <div class="col-lg-6">


                {{--TODO Hardcoded dummy data--}}
                @forelse( $templateParts as $part)
                    <div class="about-feature-items d-sm-flex mt-30">
                        <div class="feature-items-icon">
                            <img class="img80"
                                 src="{{ $part->img }}"
                                 alt="Icon">
                        </div>
                        <div class="feature-items-content media-body">
                            <h5 class="items-title">{{ $part->title }}</h5>
                            <p class="text">{{ $part->text }}</p>
                        </div>
                    </div>
                @empty
                @endforelse


            </div>
        </div>

        {{--Article--}}
        <div class="row">
            <article>{!! $template->article !!}</article>
        </div>


    </div>
@endsection


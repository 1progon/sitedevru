{{--TODO Update this template--}}
@extends('layouts.main-layout')


@section('meta_title', $portfolio->title)
@section('meta_keywords', $portfolio->meta_keywords)
@section('meta_description', $portfolio->meta_description)

@section('main')
    <div class="container page-single what-we-do">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-tittle text-center">
                    <h2>{{ $portfolio->title }}</h2>
                </div>
            </div>
        </div>


        <div>
            <div class="description">{!! $portfolio->description !!}</div>

        </div>


        {{--Page panels--}}
        <div class="row">

            {{--Left big images and thumbs--}}
            <div class="col-lg-6">
                <div class="about-feature mt-30">
                    <div class="about-feature-image">
                        @if( $portfolio->img)
                            <a data-fancybox="gallery"
                               href="{{ asset( 'storage/' . $portfolio->img) }}">
                                <img src="{{ asset( 'storage/' . $portfolio->img) }}"
                                     width="100%" alt="">

                            </a>
                        @endif
                    </div>
                    <div class="about-feature-thumbs my-3">
                        @if( $portfolio->img2)
                            <a data-fancybox="gallery"
                               href="{{ asset( 'storage/' . $portfolio->img2) }}">
                                <img src="{{ asset( 'storage/' . $portfolio->img2) }}"
                                     width="100" alt="">
                            </a>
                        @endif
                    </div>

                    @if( $portfolio->url)
                        <a target="_blank"
                           rel="nofollow noopener"
                           href="{{ $portfolio->url }}" class="btn btn-success">Открыть сайт</a>
                    @endif

                    <div class="about-feature-content">
                        <p class="description">{!! $portfolio->description !!}</p>
                    </div>
                </div>
            </div>

            {{--Right content--}}
            <div class="col-lg-6">


                {{--TODO Hardcoded dummy data--}}
                @forelse( $portfolioParts as $part)
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
            <article>{!! $portfolio->article !!}</article>
        </div>

    </div>
@endsection


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

        {{--TODO Add price includes--}}
        <div>
            @if( $portfolio->img)
                <a data-fancybox="gallery" href="{{ asset('storage/' . $portfolio->img) }}">
                    <img src="{{ asset('storage/' . $portfolio->img) }}" alt="">
                </a>
            @endif
            @if( $portfolio->img2)
                <a data-fancybox="gallery" href="{{ asset('storage/' . $portfolio->img2) }}">
                    <img src="{{ asset('storage/' . $portfolio->img2) }}" alt="">
                </a>
            @endif

            @if( $portfolio->img3)
                <a data-fancybox="gallery" href="{{ asset('storage/' . $portfolio->img3) }}">
                    <img src="{{ asset('storage/' . $portfolio->img3) }}" alt="">
                </a>
            @endif
        </div>

    </div>
@endsection


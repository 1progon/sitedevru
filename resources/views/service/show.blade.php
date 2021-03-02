@extends('layouts.main-layout')


@section('meta_title', $service->title)
@section('meta_keywords', $service->meta_keywords)
@section('meta_description', $service->meta_description)

@section('main')
    <div class="container page-single what-we-do">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-tittle text-center">
                    <h2>{{ $service->title }}</h2>
                </div>
            </div>
        </div>

        <div>
            <div class="description">{!! $service->description !!}</div>
        </div>

        <div class="article-block">

            <div class="images-block float-left mr-3 mb-3">

                {{--Show only second image. First image is a service icon--}}
                @if( $service->img2)
                    <a data-fancybox="gallery" href="{{ asset( 'storage/' . $service->img2) }}">
                        <img src="{{ asset( 'storage/' . $service->img2) }}" width="250" alt="">
                    </a>
                @endif
            </div>

            <article>{!! $service->article !!}</article>

        </div>


    </div>
@endsection


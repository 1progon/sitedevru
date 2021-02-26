@extends('layouts.main-layout')


@section('meta_title', $template->name)
@section('meta_keywords', $template->meta_keywords)
@section('meta_description', $template->meta_description)

@section('main')
    <div class="container page-single what-we-do">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-tittle text-center">
                    <h2>{{ $template->name }}</h2>
                    <h3 class="description">ID: {{ $template->id }}</h3>
                </div>
            </div>
        </div>

        {{--TODO Hardcoded Max width thumbs--}}
        <div>

            <h2>Иконки сайта. Клик, чтобы развернуть</h2>

            @if( $template->img )
                <a data-fancybox="gallery" href="{{ asset('storage/' . $template->img) }}">
                    <img style="max-width: 200px" src="{{ asset('storage/' . $template->img) }}" alt="первое изображение
                шаблона">
                </a>
            @endif

            @if( $template->img2 )
                <a data-fancybox="gallery" href="{{ asset('storage/' . $template->img2) }}">
                    <img style="max-width: 200px" src="{{ asset('storage/' . $template->img2) }}" alt="второе изображение
                шаблона">
                </a>
            @endif


        </div>

        <div>
            <div class="description">{!!  $template->description !!}</div>

            <article>{!! $template->article !!}</article>
        </div>

    </div>
@endsection


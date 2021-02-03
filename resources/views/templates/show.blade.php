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

        <div>
            <h2>Иконки сайта. Клик, чтобы развернуть</h2>
            <a target="_blank" rel="nofollow noopener" href="{{ $template->img }}">
                {{--TODO Hardcoded Max width thumbs--}}
                <img style="max-width: 200px" src="{{ $template->img }}" alt="первое изображение шаблона">
            </a>

            <a target="_blank" rel="nofollow noopener" href="{{ $template->img2 }}">
                {{--TODO Hardcoded Max width thumbs--}}
                <img style="max-width: 200px" src="{{ $template->img2 }}" alt="второе изображение шаблона">
            </a>

        </div>

        <div>
            <div class="description">{{ $template->description }}</div>

            {{--TODO Not escaped content. Only for admin or sanitize for Other users--}}
            <article>{!! $template->article !!}</article>
        </div>

    </div>
@endsection

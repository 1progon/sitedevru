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
            <div class="description">{{ $service->description }}</div>

            {{--TODO Not escaped content. Only for admin or sanitize for Other users--}}
            <article>{!! $service->article !!}</article>
        </div>

    </div>
@endsection


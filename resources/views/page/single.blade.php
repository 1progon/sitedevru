@extends('layouts.main-layout')


@section('meta_title', $page->title)
@section('meta_keywords', $page->meta_keywords)
@section('meta_description', $page->meta_description)

@section('main')
    <div class="container page-single what-we-do">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-7">
                <div class="section-tittle text-center">
                    <h2>{{ $page->title }}</h2>
                </div>
            </div>
        </div>

        <div>
            <div class="description">{!! $page->description !!}</div>

            {{--TODO Not escaped content. Only for admin or sanitize for Other users--}}
            <article>{!! $page->article !!}</article>
        </div>


    </div>
@endsection


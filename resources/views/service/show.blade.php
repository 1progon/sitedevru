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


        @if( $service->img || $service->img2)
            <div>
                <img src="{{ asset( 'storage/' . $service->img) }}" width="100" alt="">
                <img src="{{ asset( 'storage/' . $service->img2) }}" width="100" alt="">
            </div>
        @endif


    </div>
@endsection


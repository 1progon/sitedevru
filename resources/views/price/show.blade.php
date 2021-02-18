@extends('layouts.main-layout')


@section('meta_title', $price->title)
@section('meta_keywords', $price->meta_keywords)
@section('meta_description', $price->meta_description)

@section('main')
    <div class="container page-single what-we-do">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-tittle text-center">
                    <h2>{{ $price->title }}</h2>
                </div>
            </div>
        </div>


        <div>
            <div class="description">{!! $price->description !!}</div>

        </div>

        {{--TODO Add price includes--}}
        <div></div>

    </div>
@endsection


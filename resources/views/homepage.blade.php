@extends('layouts.main-layout')

@section('meta_title', 'Создание и продвижение сайтов на заказ')

@section('meta_keywords', 'создание сайтов, продвижение сайтов, изготовление сайтов, сайт с нуля, сайт визитка, сайт
интернет магазин, сайт портал')

@section('meta_description', 'Изготовление, создание сайтов, продвижением сайтов, оптимизация и
тестирование готовых систем')


@section('head')
    {{--For testimonials--}}
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
@endsection

@section('scripts_after')
    {{--For testimonials--}}
    <script defer src="{{ asset('assets/js/slick.min.js') }}"></script>
@endsection


@section('main')

    @include('include.homepage.big-head')


    @include("include.homepage.special")


    @include('include.homepage.what-we-can-suggest')


    @include('include.homepage.tech-and-stack')


    @include('include.homepage.plus-work-with-us')


    @include('include.homepage.our-price')


    @include('include.homepage.portfolio')


    @include('include.homepage.testimonials')


    @include('include.homepage.blogs')


    @include('include.homepage.bottom-red-block')

@endsection



{{--TODO Update this template--}}

@extends('layouts.main-layout')

@section('meta_title', 'Цены на услуги по созданию и поддержке сайтов')
@section('meta_keywords', 'цены на сайты, изготовление сайтов, сколько стоит сделать сайт, какие цены на услуги it')
@section('meta_description', 'Некоторые цены на услуги по созданию и продвижению сайтов')

@section('main')
    <div class="container what-we-do">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-tittle text-center">
                    <h2>Наши работы</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse( $portfolios as $portfolio)
                <div class="col-lg-4 col-md-6">
                    <a href="{{ route('portfolio.show', $portfolio) }}">
                        <div class="single-do text-center mb-30">
                            <div class="do-icon mb-4">
                                @if( $portfolio->img )
                                    <img src="{{ asset('storage/' . $portfolio->img) }}" alt="price {{ $portfolio->title }}"
                                         width="200">
                                @else
                                    <img src="{{ asset('assets/img/visit/visit_1.jpg') }}"
                                         alt="price {{ $portfolio->title }}"
                                         width="200">
                                @endif

                            </div>
                            <div class="do-caption">
                                <h4>{{ $portfolio->title }}</h4>


                            </div>
                        </div>
                    </a>
                </div>
            @empty
            @endforelse


        </div>


        <div class="row">
            {{ $portfolios->links() }}
        </div>
    </div>
@endsection



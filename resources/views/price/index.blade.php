@extends('layouts.main-layout')

@section('meta_title', 'Цены на услуги по созданию и поддержке сайтов')
@section('meta_keywords', 'цены на сайты, изготовление сайтов, сколько стоит сделать сайт, какие цены на услуги it')
@section('meta_description', 'Некоторые цены на услуги по созданию и продвижению сайтов')

@section('main')
    <div class="container what-we-do">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-tittle text-center">
                    <h2>Наши цены</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse( $prices as $price)
                <div class="col-lg-4 col-md-6">
                    <a href="{{ route('prices.show', $price) }}">
                        <div class="single-do text-center mb-30">
                            <div class="do-icon mb-4">
                                <img src="{{ asset($price->img) }}" alt="price {{ $price->title }}" width="50">
                            </div>
                            <div class="do-caption">
                                <h4>{{ $price->title }}</h4>
                                <h4>
                                    <span class="price">{{ number_format($price->price, 0, ',', ' ')  }}</span> <span
                                        class="currency">руб.</span>
                                </h4>
                                <ul>
                                    {{--From relation DB price_included--}}
                                    @forelse( $price->included as $include)
                                        <li>{{ $include }}</li>
                                    @empty
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
            @endforelse


        </div>


        <div class="row">
            {{ $prices->links() }}
        </div>
    </div>
@endsection



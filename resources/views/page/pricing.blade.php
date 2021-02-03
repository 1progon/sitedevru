@extends('layouts.main-layout')

@section('meta_title', 'Цены на услуги по изготовлению сайтов')
@section('meta_keywords', 'сколько стоит сделать сайт, цены на изготовление сайтов, по чем сделать сайт, цена сколько
 стоит сайт, стоимость изготовления сайта')
@section('meta_description', 'Цены на различные услуги по изготовлению сайтов, мобильных приложений и другие IT услуги')

@section('main')
    <div class="container what-we-do">
        <section class="choose-best">
            <!-- Section-tittle -->
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-tittle text-center">
                        <h2>Наши некоторые цены</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse( $prices as $key => $price)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-do text-center mb-30">
                            <div class="do-icon mb-4">
                                <img src="{{ asset($price->img) }}" alt="price {{ $price->title }}" width="50">
                            </div>
                            <div class="do-caption">
                                <h4>{{ $price->title }}</h4>
                                <h4>
                                    <span class="price">{{ number_format($price->price, 0, ',', ' ')  }}</span> <span
                                        class="currency">руб
                                        .</span>
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
                    </div>
                @empty
                @endforelse


            </div>


        </section>


    </div>
@endsection


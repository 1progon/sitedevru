@extends('layouts.main-layout')

@section('meta_title', 'Our prices')
@section('meta_keywords', 'website create pricing, website build price, how much to build website')
@section('meta_description', 'Page with our prices')

@section('main')
    <div class="container what-we-do">
        <section class="choose-best">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-7">
                    <div class="section-tittle text-center">
                        <h2>Our prices</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse( $prices as $key => $price)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-choose text-center mb-30">
                            <div class="do-icon mb-4">
                                <img src="{{ asset($price->img) }}" alt="price {{ $price->title }}" width="50">
                            </div>
                            <div class="do-caption">
                                <h4>{{ $price->title }}</h4>
                                <h4>
                                    <span class="currency">$</span> <span class="price">{{ $price->price }}</span>
                                </h4>
                                <ul>
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


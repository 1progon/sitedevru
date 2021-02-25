@extends('layouts.main-layout')

@section('meta_title', 'Различные услуги по изготовлению сайтов')
@section('meta_keywords', 'услуги по изготовлению сайтов, делаем сайты, сайты на заказ, сайты под заказ, где заказать
 сайт, создание сайтов компании, где создать сайт, сколько стоит изготовление сайта')
@section('meta_description', 'Различные услуги по изготовлению сайтов, доработок и другие услуги. Компания занимается
 созданием сайтов с нуля, доработкой и созданием мобильных приложений')

@section('main')
    <div class="container what-we-do">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-tittle text-center">
                    <h2>Наши услуги</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse( $services as $service )
                <div class="col-lg-4 col-md-6">
                    <div class="single-do text-center mb-30">
                        <div class="do-icon mb-3">
                            @if( $service->img )
                                <img src="{{ asset('storage/' . $service->img) }}"
                                     alt="icon service {{ $service->title }}"
                                     width="50">
                            @else
                                <img src="{{ asset('assets/img/icons/service.svg') }}"
                                     alt="icon service {{ $service->title }}"
                                     width="50">
                            @endif

                        </div>
                        <div class="do-caption">
                            <h4>{{ $service->title }}</h4>
                            <p>{{ $service->description }}</p>
                        </div>
                        <div class="do-btn">
                            <a href="{{ route('services.show', $service->slug) }}"><i class="ti-arrow-right"></i> Более
                                подробно</a>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse


        </div>


        <div class="row">
            {{ $services->links() }}
        </div>
    </div>
@endsection


@extends('layouts.main-layout')

@section('meta_title', 'Our services')
@section('meta_keywords', 'site services, website services, site creation services')
@section('meta_description', 'Page with our services')

@section('main')
    <div class="container what-we-do">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-7">
                <div class="section-tittle text-center">
                    <h2>Our services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse( $services as $service )
                <div class="col-lg-4 col-md-6">
                    <div class="single-do text-center mb-30">
                        <div class="do-icon mb-3">
                            <img src="{{ $service->img }}"
                                 alt="icon service {{ $service->title }}"
                                 width="50">
                        </div>
                        <div class="do-caption">
                            <h4>{{ $service->title }}</h4>
                            <p>{{ $service->description }}</p>
                        </div>
                        <div class="do-btn">
                            <a href="javascript:void(0)"><i class="ti-arrow-right"></i> get started</a>
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


@extends('layouts.main-layout')

@section('meta_title', 'Шаблоны сайтов для изготовления')
@section('meta_keywords', 'шаблоны сайтов, сайты можно изготовить, варианты
шаблонов для сайта, сайты под заказ по шаблону')
@section('meta_description', 'Варианты шаблонов, по которым может быть
изготовлен сайт')

@section('main')
    <div class="container what-we-do">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-tittle text-center">
                    <h2>Примеры шаблонов</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse( $templates as $template )
                <div class="col-lg-4 col-md-6">
                    <div class="single-do text-center mb-30">
                        <div class="do-icon mb-3">
                            <img src="{{ $template->img }}"
                                 alt="icon service {{ $template->title }}"
                                 width="200">
                        </div>
                        <div class="do-caption">
                            <h4>{{ $template->title }}</h4>
                            <p>{{ $template->description }}</p>
                        </div>
                        <div class="do-btn">
                            <a href="{{ route('templates.show', $template) }}">
                                <i class="ti-arrow-right"></i>
                                Более подробно
                            </a>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse


        </div>


        <div class="row">
            {{ $templates->links() }}
        </div>
    </div>
@endsection



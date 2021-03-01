@extends('layouts.main-layout')


@section('meta_title', $template->name)
@section('meta_keywords', $template->meta_keywords)
@section('meta_description', $template->meta_description)

@section('main')
    <div class="container page-single what-we-do">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-tittle text-center">
                    <h2>{{ $template->name }}</h2>
                    <h4 class="description">ID: {{ $template->id }}</h4>
                </div>
            </div>
        </div>


        <div>
            <div class="description">{!!  $template->description !!}</div>
        </div>

        {{--Page panels--}}
        <div class="row">

            {{--Left big images and thumbs--}}
            <div class="col-lg-6">
                <div class="about-feature mt-30">
                    <div class="about-feature-image">
                        @if( $template->img)
                            <a data-fancybox="gallery"
                               href="{{ asset( 'storage/' . $template->img) }}">
                                <img src="{{ asset( 'storage/' . $template->img) }}"
                                     width="100%" alt="">

                            </a>
                        @endif
                    </div>
                    <div class="about-feature-thumbs my-3">
                        @if( $template->img2)
                            <a data-fancybox="gallery"
                               href="{{ asset( 'storage/' . $template->img2) }}">
                                <img src="{{ asset( 'storage/' . $template->img2) }}"
                                     width="100" alt="">
                            </a>
                        @else
                            <img src="{{ asset('assets/img/icons/image-placeholder.svg')}}"
                                 width="100" alt="">
                            <img src="{{ asset('assets/img/icons/image-placeholder.svg')}}"
                                 width="100" alt="">
                            <img src="{{ asset('assets/img/icons/image-placeholder.svg')}}"
                                 width="100" alt="">
                        @endif
                    </div>
                    <div class="about-feature-content">
                        <h2 class="feature-title">The future of designing starts here</h2>
                        <p class="text">An open platform for presentations and content collaboration. Sign up to get
                            early access.</p>
                    </div>
                </div>
            </div>

            {{--Right content--}}
            <div class="col-lg-6">


                {{--TODO Hardcoded dummy data--}}
                @forelse( $templateParts as $part)
                    <div class="about-feature-items d-sm-flex mt-30">
                        <div class="feature-items-icon">
                            <img class="img80"
                                 src="{{ $part->img }}"
                                 alt="Icon">
                        </div>
                        <div class="feature-items-content media-body">
                            <h5 class="items-title">{{ $part->title }}</h5>
                            <p class="text">{{ $part->text }}</p>
                        </div>
                    </div>
                @empty
                @endforelse


            </div>
        </div>


        <div class="row">
            <article>{!! $template->article !!}</article>
        </div>


    </div>
@endsection


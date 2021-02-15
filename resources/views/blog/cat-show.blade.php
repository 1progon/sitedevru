@extends('layouts.main-layout')

@section('meta_title', "Блог по созданию сайтов, " . $blogcat->title)
@section('meta_keywords', "")
@section('meta_description', "")

@section('main')
    <div class="container">
        <!-- Section-tittle -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="section-tittle text-center mb-80">
                    <span>Блог</span>
                    <h2>Наш небольшой бложек</h2>
                </div>
            </div>
        </div>
    </div>

    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">

                        @forelse( $posts as $post)
                            @php
                                $route = route('blogs.show', $post->slug);
                                $timestamp = strtotime($post->created_at);
                                $title = $post->title
                            @endphp
                            <article class="blog_item">
                                <div class="blog_item_img">

                                    <img class="card-img rounded-0"
                                         src="{{ asset($post->img) }}" alt="{{ $post->title }}">

                                    <a href="{{ $route }}" class="blog_item_date">
                                        <h3>{{ date('d', $timestamp) }}</h3>
                                        <p>{{ date('M', $timestamp) }}</p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="{{ $route }}">
                                        <h2>{{ $title }}</h2>
                                    </a>
                                    <p>{{ $post->description }}</p>
                                    <ul class="blog-info-link">
                                        {{--TODO Hardcoded cats and comments--}}
                                        <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                    </ul>
                                </div>
                            </article>
                        @empty
                            <p class="text-center">Пока в блоге ничего нет</p>
                        @endforelse


                        {{ $posts->links() }}



                        {{--TODO Add pagination blog--}}
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    @include('blog.include.sidebar')
                </div>
            </div>
        </div>
    </section>
@endsection

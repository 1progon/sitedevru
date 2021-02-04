@extends('layouts.main-layout')

@section('meta_title', $blog->title)
@section('meta_keywords', $blog->meta_keywords)
@section('meta_description', $blog->meta_description)

@section('main')
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="assets/img/blog/single_blog_1.png" alt="">
                        </div>
                        <div class="blog_details">
                            <h2>{{ $blog->title }}</h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                            </ul>
                            <p class="excerpt">{{ $blog->description }}</p>
                            <div>{{ $blog->article }}</div>
                        </div>
                    </div>
                    <div class="navigation-top">
                        <div class="d-sm-flex justify-content-between text-center">
                            <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and
                                4 people like this</p>
                            <div class="col-sm-4 text-center my-2 my-sm-0">
                                <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                            </div>

                            {{--TODO hardcoded likes--}}
                            <ul class="social-icons">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                        <div class="navigation-area">
                            <div class="row">
                                <div
                                    class="col-lg-6 col-md-6 col-12 nav-left d-flex flex-row justify-content-start
                                    align-items-center">
                                    <div class="thumb">
                                        <a href="#">
                                            <img class="img-fluid" src="assets/img/post/preview.png" alt="">
                                        </a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#">
                                            <span class="lnr text-white ti-arrow-left"></span>
                                        </a>
                                    </div>

                                    @if( $prevPost)
                                        <div class="details">
                                            <p>Предыдущая запись</p>
                                            <a href="{{ route('blogs.show', $prevPost) }}">
                                                <h4>{{ $prevPost->title }}</h4>
                                            </a>
                                        </div>
                                    @endif
                                </div>
                                <div
                                    class="col-lg-6 col-md-6 col-12 nav-right d-flex flex-row justify-content-end
                                    align-items-center">
                                    @if( $nextPost)
                                        <div class="details">
                                            <p>Следующая запись</p>
                                            <a href="{{ route('blogs.show', $nextPost) }}">
                                                <h4>{{ $nextPost->title }}</h4>
                                            </a>
                                        </div>
                                    @endif
                                    <div class="arrow">
                                        <a href="#">
                                            <span class="lnr text-white ti-arrow-right"></span>
                                        </a>
                                    </div>
                                    <div class="thumb">
                                        <a href="#">
                                            <img class="img-fluid" src="assets/img/post/next.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-author">
                        <div class="media align-items-center">
                            <img src="assets/img/blog/author.png" alt="">
                            <div class="media-body">
                                <a href="#">
                                    <h4>Harvard milan</h4>
                                </a>
                                <p>Second divided from form fish beast made. Every of seas all gathered use saying
                                    you're, he
                                    our dominion twon Second divided from</p>
                            </div>
                        </div>
                    </div>


                    @include('blog.include.comment')
                </div>
                <div class="col-lg-4">

                    @include('blog.include.sidebar')

                </div>
            </div>
        </div>
    </section>
@endsection

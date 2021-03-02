<section class="testimonial-area">
    <div class="container">
        <div class="testimonial-main">
            <div class="row justify-content-center">
                <div class="col-lg-5  col-md-8 pr-0">
                    <div class="section-tittle text-center">
                        <h2>Отзывы о нас</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-9">
                    <div class="h1-testimonial-active">
                        {{--Single Testimonial --}}
                        @forelse( $testimonials as $testimonial)
                            <div class="single-testimonial text-center">
                                <div class="testimonial-caption">

                                    <h3>{{ $testimonial->title }}</h3>
                                    <div class="testimonial-top-cap">
                                        <p>{{ $testimonial->message }}</p>
                                    </div>
                                    <div
                                        class="testimonial-founder d-flex align-items-center justify-content-center">
                                        <div class="founder-img">
                                            {{--<img src="{{ asset($testimonial->img ) }}" alt="">--}}
                                            <img src="{{ $testimonial->img }}" alt="" width="40">
                                        </div>
                                        <div class="founder-text">
                                            <span>{{ $testimonial->user->first_name }}</span>
                                            <span>{{ $testimonial->user->last_name }}</span>
                                            {{--<p>{{ $testimonial['position'] }}</p>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            Пока отзывов никто не оставил
                        @endforelse


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

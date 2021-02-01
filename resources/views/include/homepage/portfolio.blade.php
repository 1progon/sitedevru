<section class="visit-area fix visite-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 pr-0">
                <div class="section-tittle text-center">
                    <h2>Некоторые наши работы</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-1">
        <div class="row justify-content-around">
            @forelse( $portfolio as $work)
                <div class="col-6 col-sm-4 col-lg-3">
                    <a href="{{ $work->url }}">
                        <div class="single-visited mb-30">
                            <div class="visited-img">
                                {{--<img src="{{ asset($work['img']) }}" alt="">--}}
                                <img src="{{ $work->img }}" alt="">
                            </div>
                            <div class="visited-cap">
                                <h5>{{ $work->title }}</h5>
                                <p class="" style="font-size: 12px">{{ $work->description }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
            @endforelse
        </div>
    </div>
</section>

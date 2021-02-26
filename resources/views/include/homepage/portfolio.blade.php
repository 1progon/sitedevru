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
            @forelse( $portfolios as $portfolio)
                <div class="col-6 col-sm-4 col-lg-3">
                    <a href="{{ route('portfolio.show', $portfolio) }}">
                        <div class="single-visited mb-30">
                            <div class="visited-img">
                                @if( $portfolio->img )
                                    <img src="{{ asset('storage/' . $portfolio->img) }}"
                                         alt="price {{ $portfolio->title }}"
                                         width="50">
                                @else
                                    <img src="{{ asset('assets/img/visit/visit_1.jpg') }}"
                                         alt="price {{ $portfolio->title }}"
                                         width="50">
                                @endif
                            </div>
                            <div class="visited-cap">
                                <h5>{{ $portfolio->title }}</h5>
                                <p class="" style="font-size: 13px">{{ $portfolio->description }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
            @endforelse
        </div>

        <div class="row justify-content-center mt-5">
            <a href="{{ route ('portfolio.index') }}" class="btn btn-primary hero-btn">Ещё работы</a>
        </div>
    </div>
</section>

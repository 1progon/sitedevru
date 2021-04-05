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

        {{--TODO hardcoded styles--}}
        <div class="row justify-content-around" style="max-width: 90%; margin: 0 auto">
            @forelse( $portfolios as $portfolio)
                <div class="col-6 col-sm-4">
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
                                <h6>{{ $portfolio->title }}</h6>
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

<section class="choose-best choose-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-tittle text-center">
                    <h2>Наши цены</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse( $prices as $price)
                <div class="col-lg-4 col-md-6">
                    <a href="{{ route('prices.show', $price) }}">
                        <div class="single-choose text-center mb-30">
                            <div class="do-icon mb-4">
                                @if( $price->img )
                                    <img src="{{ asset('storage/' . $price->img) }}"
                                         alt="price {{ $price->price }}"
                                         width="50">
                                @else
                                    <img src="{{ asset('assets/img/icons/price-tag.svg') }}"
                                         alt="цена на услугу по созданию сайтов {{ $price->price }}" width="50">
                                @endif

                            </div>
                            <div class="do-caption">
                                <h4>{{ $price->title }}</h4>
                                <h4>
                                    <span class="price">{{ number_format($price->price, 0, ',', ' ') }}</span> <span
                                        class="currency">руб.</span>
                                </h4>
                                <ul>
                                    @forelse( $price->included as $include)
                                        <li>{{ $include->title }}</li>
                                    @empty
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
            @endforelse


        </div>

        <div class="row justify-content-center mt-5">
            <a href="{{ route ('prices.index') }}" class="btn btn-primary hero-btn">Цены на другие услуги</a>
        </div>
    </div>
</section>

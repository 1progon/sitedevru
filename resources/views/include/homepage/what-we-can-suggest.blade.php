<section class="what-we-do we-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-tittle text-center">
                    <h2>Что мы можем Вам предложить?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse( $services as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="single-do text-center mb-30">
                        <div class="do-icon mb-4">
                            @if( $service->img )
                                <img src="{{ asset('storage/' . $service->img) }}"
                                     alt="{{ $service->title }}"
                                     width="50">
                            @else
                                <img src="{{ asset('assets/img/icons/service.svg') }}"
                                     alt="{{ $service->title }}"
                                     width="50">
                            @endif

                        </div>
                        <div class="do-caption">
                            <h4>{{ $service->title }}</h4>
                            <p>{{ $service->description }}</p>
                        </div>
                        <div class="do-btn">
                            <a href="{{ route('services.show', $service) }}">
                                <i class="ti-arrow-right"></i> Более подробно</a>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
        <div class="row justify-content-center mt-5">
            <a href="{{ route('services.index') }}"
               class="btn btn-primary hero-btn">Все услуги</a>
        </div>
    </div>
</section>

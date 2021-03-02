<section class="generating-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-tittle text-center">
                    <h2>Плюсы работы с нами</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">

            {{--TODO Move pros array to db from home controller--}}
            @forelse( $ourPros as $pros)
                <div class="col-lg-6 col-md-6">
                    <div class="single-generating d-flex mb-30">
                        <div class="generating-icon">
                            @if( $pros->img )
                                <img src="{{ asset('storage/' . $pros->img) }}" alt="{{ $pros->title }}"
                                     width="50">
                            @else
                                <img src="{{ asset('assets/img/icons/docs.svg') }}" alt="{{ $pros->title }}"
                                     width="50">
                            @endif

                        </div>
                        <div class="generating-cap">
                            <h4>{{ $pros->title }}</h4>
                            <p>{{ $pros->description }}</p>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse

        </div>
    </div>
</section>

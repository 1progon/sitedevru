<section class="slider-area">
    <div class="slider-active">
        <div class="single-slider slider-height d-flex align-items-center"
             data-background="assets/img/hero/h1_hero.png">
            <div class="container">
                <div class="d-flex align-items-center">
                    <div class="left-part">
                        <div class="hero__caption">
                            <h1>Вам нужен Сайт?</h1>
                            <h2>Мы создадим его для Вас</h2>
                            <p>Добрый день уважаемый посетитель!<br/>Мы занимаемся разработкой сайтов с нуля,
                                доработками уже готовых проектов, оптимизацией, а также продвижением и
                                тестированием готовых систем.</p>
                            {{--Hero-btn --}}
                            <div>
                                <a href="{{ route('pages.show', 'contact') }}"
                                   class="btn hero-btn btn-primary">Связаться с нами</a>
                            </div>
                        </div>
                    </div>
                    <div class="right-part">
                        <div class="hero__img d-lg-block d-none"
                             data-animation="fadeInRight" data-delay="1s">
                            <img src="{{ asset('assets/img/hero/hero_right.png') }}"
                                 alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<footer>

    <!-- Footer Start-->
    <div class="footer-main">
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="d-flex flex-wrap justify-content-between">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="/">
                                        <img src="{{ asset('assets/img/logo/logo2_footer.png') }}"
                                             alt="">
                                    </a>
                                </div>
                                <div class="footer-title">
                                    <div class="footer-pera">
                                        <p class="info1">Россия, город Пермь</p>
                                        <p class="info1">+ 7 (342) 293-01-23</p>
                                        <p class="info1">+ 7 (982) 461-34-24</p>
                                        {{--TODO  hardcoded email default address--}}
                                        <p class="info2">info@1i6.ru</p>
                                    </div>
                                </div>
                                <div class="footer-social">
                                    <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                                    <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                                    <a href="javascript:void(0)"><i class="fab fa-vk"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-title">
                                <h4>Ссылки по сайту</h4>
                                <ul>
                                    <li><a href="{{ route('pages.show', 'about') }}">О нас</a></li>
                                    <li><a href="{{ route('pages.show', 'features') }}">Особенности</a></li>
                                    <li><a href="{{ route('pages.show', 'pricing') }}">Цены</a></li>
                                    <li><a href="{{ route('pages.show', 'contact') }}">Контакты</a></li>
                                    <li><a href="{{ route('blog') }}">Блог</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-title">
                                <h4>Документы</h4>
                                <ul>
                                    <li><a href="{{ route('pages.show', 'privacy') }}">Политика конфиденциальности</a>
                                    </li>
                                    <li><a href="{{ route('pages.show', 'terms') }}">Условия использования</a></li>
                                    <li><a href="{{ route('pages.show', 'sitemap') }}">Карта по сайту</a></li>
                                    <li><a href="{{ route('pages.show', 'faq') }}">Вопросы и ответы</a></li>
                                    <li><a href="{{ route('pages.show', 'report') }}">Сообщить об ошибке</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-title">
                                <h4>Некоторые услуги</h4>
                                <ul>
                                    <li><a href="javascript:void(0)">Дизайн сайта</a></li>
                                    <li><a href="javascript:void(0)">Я.Директ и Google Adwords</a></li>
                                    <li><a href="javascript:void(0)">Продвижение в соц. сетях</a></li>
                                    <li><a href="javascript:void(0)">Сбор заявок</a></li>
                                    <li><a href="javascript:void(0)">Поддержка сайтов</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                    <div class="row align-items-center">
                        <div class="col-xl-12">
                            <div class="footer-copy-right text-center">
                                <p>
                                    Модульные технологии &copy; 2011 - <?php echo date('Y'); ?>
                                    Все права защищены. LLC Everesto и Modular Tech.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->

</footer>

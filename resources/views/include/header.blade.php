<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <!-- Logo -->
                    <a href="/">
                        <div class="logo">
                            <img src="{{ asset('assets/img/logo/logo.svg') }}" alt="логотип компании по изготовлению
                            сайтов" width="40" height="60">
                            <h3>Сайтодел</h3>
                        </div>
                    </a>

                    <div class="flex-shrink-1 flex-grow-1">
                        @include('include.header-menu')
                    </div>

                    <div class="">
                        <div class="header-right-btn d-none d-lg-block">
                            <a href="{{ route('pages.contact') }}" class="btn header-btn">Контакты</a>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                        <div class="mobile_menu d-lg-none flex-grow-1 flex-shrink-1"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>

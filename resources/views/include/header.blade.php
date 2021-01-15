<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <!-- Logo -->
                    <a href="/">
                        <div class="logo">
                            <img src="{{ asset('assets/img/logo/logo.png') }}" alt="" width="123" height="38">
                        </div>
                    </a>

                    <div class="flex-shrink-1 flex-grow-1">
                        @include('include.header-menu')
                    </div>

                    <div class="">
                        <div class="header-right-btn f-right d-none d-lg-block">
                            <a href="{{ route('pages.contact') }}" class="btn header-btn">Contact Us</a>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12 d-lg-none">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>

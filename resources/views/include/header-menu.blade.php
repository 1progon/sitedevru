<!-- Main-menu -->
<div class="main-menu d-none d-lg-block">
    <nav>
        <ul class="navigation">
            <a class="popup" href="{{ route('pages.show', 'about') }}">О нас</a>
            <a class="popup" href="{{ route('services.index') }}">Услуги</a>
            <a class="popup" href="{{ route('prices.index') }}">Цены</a>
            <a class="popup" href="{{ route('templates.index') }}">Шаблоны</a>
            {{--TODO hided blog header link--}}
            {{--<a class="popup" href="{{ route('blog') }}">Блог</a>--}}

            @auth()
                <form id="logout-form" action="{{ route('logout') }}" class="d-none" method="post">
                    @csrf
                </form>

                @if( auth()->user()->role === \App\Model\User\User::ROLE['user'] )
                    <a class="popup" href="{{ route('dashboard.user') }}">Аккаунт</a>
                @elseif( auth()->user()->role === \App\Model\User\User::ROLE['admin'] )
                    <a class="popup" href="{{ route('dashboard.user') }}">Аккаунт</a>
                    <a class="popup" href="{{ route('dashboard.admin') }}">Админ</a>
                @endif

                <button class="btn btn-danger" form="logout-form" type="submit">Выйти</button>



            @else
                <a class="popup" href="{{ route('login') }}">Вход</a>
                <a class="popup" href="{{ route('register') }}">Регистрация</a>
            @endauth
        </ul>
        <!--</editor-fold>-->
    </nav>
</div>

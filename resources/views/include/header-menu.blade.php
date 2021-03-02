<!-- Main-menu -->
<div class="main-menu d-none d-lg-block">
    <nav>
        <ul class="navigation">
            <a class="popup" href="{{ route('pages.show', 'about') }}"><span>О нас</span> </a>
            <a class="popup" href="{{ route('services.index') }}"><span>Услуги</span></a>
            <a class="popup" href="{{ route('prices.index') }}"><span>Цены</span></a>
            <a class="popup" href="{{ route('templates.index') }}"><span>Шаблоны</span></a>

            <a class="popup" href="{{ route('blog') }}">Блог</a>

            @auth()
                <form id="logout-form" action="{{ route('logout') }}"
                      method="post" style="display: none">
                    @csrf
                </form>

                @if( auth()->user()->role === \App\Model\User\User::ROLE['user'] )
                    <li><a class="popup" href="{{ route('dashboard.user') }}">Аккаунт</a></li>
                @elseif( auth()->user()->role === \App\Model\User\User::ROLE['admin'] )
                    <li><a class="popup" href="{{ route('dashboard.user') }}">Аккаунт</a></li>
                    <li><a class="popup" href="{{ route('dashboard.admin') }}">Админ</a></li>
                @endif

                <button class="btn btn-danger" form="logout-form" type="submit">Выйти</button>



            @else
                <li><a class="popup" href="{{ route('login') }}">Вход</a></li>
                <li><a class="popup" href="{{ route('register') }}">Регистрация</a></li>
            @endauth
        </ul>
        <!--</editor-fold>-->
    </nav>
</div>

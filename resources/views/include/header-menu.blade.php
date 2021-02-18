<!-- Main-menu -->
<div class="main-menu d-none d-lg-block">
    <nav>
        <ul id="navigation">
            <li><a href="{{ route('pages.show', 'about') }}">О нас</a></li>
            <li><a href="{{ route('services.index') }}">Услуги</a></li>
            <li><a href="{{ route('prices.index') }}">Цены</a></li>
            <li><a href="{{ route('templates.index') }}">Шаблоны</a></li>

            <li><a href="{{ route('blog') }}">Блог</a>
                {{--                <ul class="submenu">--}}
                {{--                    <li><a href="">Blog</a></li>--}}
                {{--                    <li><a href="">Blog Details</a></li>--}}
                {{--                </ul>--}}
            </li>
            {{--            <li><a href="javascript:void(0)">Pages</a>--}}
            {{--                <ul class="submenu">--}}
            {{--                    <li><a href="elements.html">Element</a></li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}



            @auth()
                <form id="logout-form" action="{{ route('logout') }}"
                      method="post" style="display: none">
                    @csrf
                </form>

                @if( auth()->user()->role === \App\Model\User\User::ROLE['user'] )
                    <li><a href="{{ route('dashboard.user') }}">Аккаунт</a></li>
                @elseif( auth()->user()->role === \App\Model\User\User::ROLE['admin'] )
                    <li><a href="{{ route('dashboard.user') }}">Аккаунт</a></li>
                    <li><a href="{{ route('dashboard.admin') }}">Админ</a></li>
                @endif

                <button class="btn-danger" form="logout-form" type="submit">Выйти</button>



            @else
                <li><a href="{{ route('login') }}">Вход</a></li>
                <li><a href="{{ route('register') }}">Регистрация</a></li>
            @endauth
        </ul>
    </nav>
</div>

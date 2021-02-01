<!-- Main-menu -->
<div class="main-menu d-none d-lg-block">
    <nav>
        <ul id="navigation">
            <li><a href="{{ route('pages.show', 'about') }}">О нас</a></li>
            <li><a href="{{ route('services.index') }}">Услуги</a></li>
            <li><a href="{{ route('pages.show', 'pricing') }}">Цены</a></li>
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



            @auth
                <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none">
                    @csrf
                </form>
                <li>
                    <button class="btn btn-link" form="logout-form" type="submit">Выйти</button>
                </li>
                <li><a href="{{ route('dashboard') }}">Аккаунт</a></li>
            @else
                <li><a href="{{ route('login') }}">Вход</a></li>
                <li><a href="{{ route('register') }}">Регистрация</a></li>
            @endauth
        </ul>
    </nav>
</div>

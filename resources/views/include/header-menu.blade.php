<!-- Main-menu -->
<div class="main-menu d-none d-lg-block">
    <nav>
        <ul id="navigation">
            <li><a href="{{ route('pages.show', 'about') }}">About Us</a></li>
            <li><a href="{{ route('pages.show', 'services') }}">Services</a></li>
            <li><a href="{{ route('pages.show', 'pricing') }}">Prices</a></li>
            <li><a href="{{ route('blog') }}">Blog</a>
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
                    <button class="btn btn-link" form="logout-form" type="submit">Logout</button>
                </li>
                <li><a href="{{ route('dashboard') }}">Account</a></li>
            @else
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @endauth
        </ul>
    </nav>
</div>

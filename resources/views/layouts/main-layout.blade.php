<!doctype html>
<html lang="en">

@include('include.head')



<body>

@include('include.preloader')

@include('include.header')

<main>
    @yield('main')
</main>

@include('include.footer')

@include('include.scripts')

@yield('scripts')
</body>
</html>

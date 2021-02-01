<!doctype html>
<html lang="en">

@include('include.head')

<body>

@include('include.header')

<main>
    @yield('main')
</main>

@include('include.footer')

@yield('scripts_before')
@include('include.scripts')
@yield('scripts_after')


<script defer src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>

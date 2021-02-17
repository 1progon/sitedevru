<!doctype html>
<html lang="en">

@include('include.head')

<body>

@include('include.header')


<main class="container-fluid d-flex flex-row flex-wrap my-3">
    <div class="col-12 col-md-3 my-2">
        @include('include.account.account-sidebar')
    </div>
    <div class="col my-2">
        @yield('main')
    </div>
</main>

@include('include.footer')

@yield('scripts_before')
@include('include.scripts')
@yield('scripts_after')


<script defer src="{{ asset('assets/js/main.js') }}"></script>


</body>
</html>

<!doctype html>
<html lang="en">

@include('include.head')

<body>

@include('include.header')


<main class="container-fluid d-flex flex-row flex-wrap my-3">
    <div class="col-12 col-md-2 my-2">
        @include('include.admin.admin-sidebar')
    </div>
    <div class="col-12 col-md-10 my-2">
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

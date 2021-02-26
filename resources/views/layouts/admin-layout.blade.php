<!doctype html>
<html lang="en">

@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/admin-app.css') }}">
@endsection

@include('include.head')


<body class="admin-template">

@include('include.header')


<main class="container-fluid d-flex flex-row flex-wrap my-3">
    <div class="col-12 col-sm-5 col-md-4 col-lg-3 col-xl-2 my-2">
        @include('include.admin.admin-sidebar')
    </div>
    <div class="col my-2">
        @yield('main')
    </div>
</main>

@include('include.footer')

@yield('scripts_before')
@include('include.scripts')
@include('include.admin.scripts')
@yield('scripts_after')


<script defer src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>

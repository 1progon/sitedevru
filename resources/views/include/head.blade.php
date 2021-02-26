<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('meta_title', 'No title page') | SiteDev</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">

    <meta name="keywords" content="@yield('meta_keywords', 'создание сайтов, изготовление сайтов, заказать сайт,
    сделать сайт, создать сайт недорого, создать сайт визитка, создать сайт магазин')">
    <meta name="description" content="@yield('meta_description', '')">
    <meta name="yandex-verification" content="7dab1397044bf980" />



    <!-- CSS here -->

    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="preload" href="{{ asset('assets/img/logo/logo.svg') }}" as="image">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>

    @yield('head')
</head>

<!doctype html>
<html lang="en">

@include('include.head')

<body class="base-template">

@include('include.header')

<main>
    @yield('main')
</main>

@include('include.footer')

@yield('scripts_before')
@include('include.scripts')
@yield('scripts_after')


<script defer src="{{ asset('assets/js/main.js') }}"></script>


<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(72436531, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true,
        trackHash: true
    });
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/72436531" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>

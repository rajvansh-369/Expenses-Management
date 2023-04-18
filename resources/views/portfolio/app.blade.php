<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FLZPF127K6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-FLZPF127K6');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KH627M5');
    </script>
    <!-- End Google Tag Manager -->


    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- color of address bar in mobile browser -->
    <meta name="theme-color" content="#2B2B35">

    <meta name="keywords"
        content="snehal, Snehal, Raj, raj , Rajvansh, Snehal rajvansh, Snehal raj, rajvansh, snehal portfolio">
    <meta name="description" content="Hi, I'm Snehal. A Software Developer.">
    <meta name=”robots” content="all">
    <!-- favicon  -->
    <link rel="shortcut icon" href="{{ asset('img/thumbnail.ico') }}" type="image/x-icon">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/plugins/bootstrap.min.css') }}">
    <!-- font awesome css -->
    <link rel="stylesheet" href="{{ asset('css/plugins/font-awesome.min.css') }}">
    <!-- swiper css -->
    <link rel="stylesheet" href="{{ asset('css/plugins/swiper.min.css') }}">
    <!-- fancybox css -->
    <link rel="stylesheet" href="{{ asset('css/plugins/fancybox.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Snehal Rajvansh</title>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7927060033825760"
        crossorigin="anonymous"></script>
</head>



<style>
    @media only screen and (max-width: 991px) {
        .full_screen {

            display: none;
        }

        .mobile_screen {
            display: block;
            margin-top: 20px;

       
        }

        .skillIcons {
                padding: 50px;
            }

    }

    @media only screen and (min-width: 600px) {
        .full_screen {

            display: block;
        }

        .mobile_screen {

            display: none;
        }

    }
</style>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KH627M5" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    @yield('content')


    {{-- @livewireScripts --}}

    <!-- app end -->
    <div id="swupMenu"></div>

    <!-- jquery js -->
    <script src="{{ asset('js/plugins/jquery.min.js') }}"></script>
    <!-- anime js -->
    <script src="{{ asset('js/plugins/anime.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('js/plugins/swiper.min.js') }}"></script>
    <!-- progressbar js -->
    <script src="{{ asset('js/plugins/progressbar.min.js') }}"></script>
    <!-- smooth scrollbar js -->
    <script src="{{ asset('js/plugins/smooth-scrollbar.min.js') }}"></script>
    <!-- overscroll js -->
    <script src="{{ asset('js/plugins/overscroll.min.js') }}"></script>
    <!-- typing js -->
    <script src="{{ asset('js/plugins/typing.min.js') }}"></script>
    <!-- isotope js -->
    <script src="{{ asset('js/plugins/isotope.min.js') }}"></script>
    <!-- fancybox js -->
    <script src="{{ asset('js/plugins/fancybox.min.js') }}"></script>
    <!-- swup js -->
    <script src="{{ asset('js/plugins/swup.min.js') }}"></script>

    <!-- main js -->
    <script src="{{ asset('js/main.js') }}"></script>


</body>

</html>

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

    @include('meta::manager', [
        'title' => 'Snehal Rajvansh | Portfolio | Resume',
        'description' =>
            'Snehal Rajvansh is a software developer with 3 years of experience. Visit his portfolio website to see his work and learn more about his skills',
        'image' => 'https://snehal.info/snehal/img/thumbnail.ico',
        'referrer' => 'default',
        'author' => 'Snehal Rajvansh',
        'geo_position' => '22.351115;78.667743',
        'geo_region' => 'IN',
        'ICBM' => '22.351115, 78.667743',
        'keywords' =>
            'snehal rajvansh, snehal linkedin, portfolio, web development, resume, CV, skills, experience, contact snehal ,rajvansh, Snehal rajvansh, Snehal raj, snehal portfolio',
    ])


    <!-- favicon  -->
    <link rel="shortcut icon" href="https://snehal.info/snehal/img/thumbnail.ico" type="image/x-icon">

    <!-- Required meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- color of address bar in mobile browser -->
    <meta name="theme-color" content="#2B2B35">

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
    <!-- jquery js -->
    <script src="{{ asset('js/plugins/jquery.min.js') }}"></script>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KH627M5" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!-- app -->
    <div class="art-app art-app-onepage clickable">

        <!-- mobile top bar -->
        <div class="art-mobile-top-bar"></div>

        <!-- app wrapper -->
        <div class="art-app-wrapper">

            <!-- app container end -->
            <div class="art-app-container">

                <!-- info bar -->
                <div class="art-info-bar" id="sidebarClass">

                    @include('portfolio.sidebar')

                </div>
                <!-- info bar end -->

                <!-- content -->
                <div class="art-content" id="sidebarClass2">

                    <!-- curtain -->
                    <div class="art-curtain"></div>




                    <!-- top background -->
                    <div class="art-top-bg" style="background-image: url({{ asset('storage/img/bg.jpg') }})">
                        <!-- overlay -->
                        <div class="art-top-bg-overlay"></div>
                        <!-- overlay end -->
                    </div>
                    <!-- top background end -->

                    <!-- swup container -->
                    <div class="transition-fade" id="swup">

                        <!-- scroll frame -->
                        <div id="scrollbar" class="art-scroll-frame">

                            @yield('content')

                            <!-- container -->
                            <div class="container-fluid">

                                <!-- footer -->
                                <footer>
                                    <!-- copyright -->
                                    <div class="art-copy"><a data-no-swup href="{{ route('privacy-Policy') }}">© 2023
                                            Snehal Rajvansh </a></div>
                                    <!-- author ( Please! Do not delete it. You are awesome! :) -->
                                    <div>Template author:&#160; Snehal Rajvansh</div>
                                </footer>
                                <!-- footer end -->

                            </div>
                            <!-- container end -->

                        </div>
                        <!-- scroll frame end -->

                    </div>
                    <!-- swup container end -->

                </div>
                <!-- content end -->



            </div>
            <!-- app container end -->

        </div>
        <!-- app wrapper end -->

        <!-- preloader -->
        <div class="art-preloader">
            <!-- preloader content -->
            <div class="art-preloader-content">
                <!-- title -->
                <h4>Snehal Rajvansh</h4>
                <!-- progressbar -->
                <div id="preloader" class="art-preloader-load"></div>
            </div>
            <!-- preloader content end -->
        </div>
        <!-- preloader end -->

    </div>

    {{-- @livewireScripts --}}

    <!-- app end -->
    <div id="swupMenu"></div>


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

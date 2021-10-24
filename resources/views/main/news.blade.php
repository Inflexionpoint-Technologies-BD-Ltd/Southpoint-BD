<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>News - Southpoint BD</title>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7COswald:300,400,500,600,700"
          rel="stylesheet" type="text/css">

    <link rel="shortcut icon" href="{{ asset('assets/images/logo/south_point_white.png') }}" type="image/x-icon">

    <!-- styles -->
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/about.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    {{--  ----------------------------------------------- audio ------------------------------------  --}}

    <audio autoplay>
        <source src="{{ asset('assets/music/bangla.mp3') }}" type="audio/ogg">
        Your browser does not support the audio element.
    </audio>

    {{--  ----------------------------------------------------------------------------- end - audio   --}}
</head>
<body class="loader">
{{-- --------------------------- loading ------------------------------ --}}
<x-loading></x-loading>
{{-- ---------------------------------------------------- end - loading --}}
<!-- pointer start -->
<div class="pointer" id="pointer">
    <i class="fas fa-long-arrow-alt-right"></i>
    <i class="fas fa-search"></i>
    <i class="fas fa-link"></i>
</div><!-- pointer end -->

<!-- to-top-btn start -->
<a class="to-top-btn pointer-small" href="#up">
    <span class="to-top-arrow"></span>
</a><!-- to-top-btn end -->

<!-- header start -->
<header class="fixed-header">
    <!-- header-flex-box start -->
    <div class="header-flex-box">
        <!-- logo start -->
        <a href="/" class="logo pointer-large animsition-link">
            {{-- ---------------------------------------------------------- icon component --------------------------------------------------------   --}}

            <x-logo-part></x-logo-part>

            {{-- ------------------------------------------------------------------------------------------------------------ end - icon component    --}}
        </a><!-- logo end -->

        <!-- menu-open start -->
        <div class="menu-open pointer-large">
            <span class="hamburger"></span>
        </div><!-- menu-open end -->
    </div><!-- header-flex-box end -->
</header><!-- header end -->

<!----------------------------------------------------- nav-container start --------------------------------------------- -->

<x-public-navbar></x-public-navbar>

<!--------------------------------------------------------------------------------------------- end - nav-container start -->

<!-- animsition-overlay start -->
<main class="animsition-overlay" data-animsition-overlay="true">
    <!-- page-head start -->
    <section id="up" class="page-head flex-min-height-box dark-bg-1">
        <!-- page-head-bg -->
        <div class="page-head-bg overlay-loading2"
             style="background-image: url({{ asset('assets/images/navbar/contact.jpg') }});"></div>

        <!-- flex-min-height-inner start -->
        <div class="flex-min-height-inner">
            <!-- flex-container start -->
            <div class="container top-bottom-padding-120 flex-container response-999">
                <!-- column start -->
                <div class="six-columns six-offset">
                    <div class="content-left-margin-40">
                        <h2 class="overlay-loading2 tr-delay03 large-title red-color"
                            style="background-color: #D6E6F6; padding: 10px">News Section</h2>
                        <h3 class="large-title-bold text-color-4"
                            style="font-size: 30px; margin-top: 20px; background-color: #D6E6F6; padding: 10px">
                            <span class="overlay-loading2 overlay-light-bg-1 tr-delay04 text-color-1"> A Professionally managed
                            </span><br>
                            <span
                                class="overlay-loading2 overlay-light-bg-1 tr-delay05 text-color-1">Human Resource</span><br>
                            <span class="overlay-loading2 overlay-light-bg-1 tr-delay06 text-color-1">Training and placement centre</span>
                        </h3>
                    </div>
                </div><!-- column end -->
            </div><!-- flex-container end -->
        </div><!-- flex-min-height-inner end -->

        <!-- scroll-btn start -->
        <a href="#down" class="scroll-btn pointer-large">
            <div class="scroll-arrow-box">
                <span class="scroll-arrow"></span>
            </div>
            <div class="scroll-btn-flip-box">
                <span class="scroll-btn-flip" data-text="Scroll">Scroll</span>
            </div>
        </a><!-- scroll-btn end -->
    </section><!-- page-head end -->

    <!-- section start -->
    <section class="dark-bg-1 top-bottom-padding-120" id="down">

            <!-- container start -->
                <div data-animation-container class="container small bottom-padding-60">
                    <div class="text-center">
                        <h2 data-animation-child class="large-title text-color-1 overlay-anim-box2"
                            data-animation="overlay-anim2">News Title</h2>
                    </div>
                    <div class="top-margin-30">
                        <p style="font-weight: 600; font-size: 14px; white-space: break-spaces; text-align: justify">News Content</p>
                        <img src="https://friendofthesea.org/wp-content/uploads/the-test-fun-for-friends-screenshot.png" alt="No image">
                    </div>

                </div><!-- container end -->
    </section><!-- section end -->


</main><!-- animsition-overlay end -->

<!-- footer start -->
<footer class="footer dark-bg-1">
    <!-- flex-container start -->
    <div class="flex-container container top-bottom-padding-90">

        <!-- column start -->
        <div class="two-columns bottom-padding-60">
            <div class="content-right-margin-10 footer-center-mobile">
                <img class="footer-logo" src="{{ asset('assets/images/logo/SP-Weblogo.png') }}" alt="logo">
            </div>
        </div><!-- column end -->

    @foreach($footers as $footer)

        <!-- column start -->
            <div class="five-columns bottom-padding-60">
                <div class="content-left-right-margin-10 footer-left-mobile">
                    <h4 style="color: black; font-weight: bold; font-size: 18px"
                        class="xsmall-title-oswald">{{ $footer->title }}</h4> <br>
                    <ul class="footer-information text-color-4" style="color: black">

                        <li>
                            <i class="far fa-envelope"></i><a href="#" class="xsmall-title-oswald"
                                                              style="color: black">
                                {{ $footer->email }}</a>
                        </li>

                        <li><i class="fas fa-mobile-alt"></i><a href="#"
                                                                class="xsmall-title-oswald"
                                                                style="color: black">{{ $footer->tel }}</a>
                        </li>

                        <li><i class="fas fa-map-marker-alt"></i><a href="#"
                                                                    class="xsmall-title-oswald text-height-17"
                                                                    style="color: black; font-size: 10px">{{ $footer->address }}</a>
                        </li>

                    </ul>
                </div>
            </div><!-- column end -->
    @endforeach
    <!-- column start -->
        <div class="twelve-columns">
            <p class="p-letter-style text-color-4 footer-copyright xsmall-title-oswald"><a
                    href="https://inflexionpointbd.com/"
                    target="_blank" style="color: black">&copy;
                    Copyright 2021.Designed and developed by SIS InflexionPoint (BD) Ltd</a></p>
        </div><!-- column end -->
    </div><!-- flex-container end -->
</footer><!-- footer end -->

<!-- scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>

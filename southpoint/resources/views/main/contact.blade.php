<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>Contact - SouthpointBD</title>

    <!-- fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7COswald:300,400,500,600,700"
        rel="stylesheet"
        type="text/css"
    />
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/south_point_white.png') }}" type="image/x-icon">

    <!-- styles -->
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/contact.css') }}" rel="stylesheet" type="text/css"/>

    {{--  ----------------------------------------------- audio ------------------------------------  --}}

    <audio autoplay>
        <source src="{{ asset('assets/music/bangla.mp3') }}" type="audio/ogg">
        Your browser does not support the audio element.
    </audio>

    {{--  ----------------------------------------------------------------------------- end - audio   --}}

</head>
<body class="loader">
<!-- loading start -->
<div class="loading">
    <img
        class="logo-loading"
        src="{{ asset('assets/images/logo/south_point_white.png') }}"
        alt="logo"
    />
</div>
<!-- loading end -->

<!-- pointer start -->
<div class="pointer" id="pointer">
    <i class="fas fa-long-arrow-alt-right"></i>
    <i class="fas fa-search"></i>
    <i class="fas fa-link"></i>
</div>
<!-- pointer end -->

<!-- to-top-btn start -->
<a class="to-top-btn pointer-small" href="#up">
    <span class="to-top-arrow"></span> </a
><!-- to-top-btn end -->

<!-- header start -->
<header class="fixed-header">
    <!-- header-flex-box start -->
    <div class="header-flex-box">
        <!-- logo start -->
        <a href="index.html" class="logo pointer-large animsition-link">
            <div class="logo-img-box">
                <img
                    class="logo-white"
                    src="{{ asset('assets/images/logo/Sp-Weblogo.png') }}"
                    alt="logo"
                />
                <img
                    class="logo-black"
                    src="{{ asset('assets/images/logo/Sp-Weblogo.png') }}"
                    alt="logo"
                />
            </div>
        </a><!-- logo end -->

        <!-- menu-open start -->
        <div class="menu-open pointer-large">
            <span class="hamburger"></span>
        </div>
        <!-- menu-open end -->
    </div>
    <!-- header-flex-box end -->
</header>
<!-- header end -->

<!-- nav-container start -->
<!-- nav-container end -->

{{-- ---------------------------------------------------------------- navbar ---------------------------------------------- --}}
<x-public-navbar></x-public-navbar>
{{-- ---------------------------------------------------------------------------------------------------------- end - navbar --}}


<!-- animsition-overlay start -->
<main class="animsition-overlay" data-animsition-overlay="true">
    <!-- page-head start -->
    <section id="up" class="page-head flex-min-height-box dark-bg-1">
        <!-- page-head-bg -->
        <div
            class="page-head-bg overlay-loading2"
            style="
                background-image: url({{ asset('assets/images/navbar/contact.jpg') }});
                "
        ></div>

        <!-- flex-min-height-inner start -->
        <div class="flex-min-height-inner">
            <!-- flex-container start -->
            <div class="container top-bottom-padding-120 flex-container response-999">
                <!-- column start -->
                <div class="six-columns six-offset hide-content">
                    <div class="content-left-margin-40">
                        <h2 class="overlay-loading2 tr-delay03 large-title red-color">South Point Overseas Limited</h2>
                        <h3 class="large-title-bold text-color-4" style="font-size: 30px; margin-top: 20px">
                            <span class="overlay-loading2 overlay-light-bg-1 tr-delay04">Most Established Company</span><br>
                            <span
                                class="overlay-loading2 overlay-light-bg-1 tr-delay05">For Human Resource Development</span><br>
                            <span class="overlay-loading2 overlay-light-bg-1 tr-delay06">& overseas employment</span>
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
        </a
        ><!-- scroll-btn end -->
    </section>
    <!-- page-head end -->

    <!-- ----------------------------------------------------------------- contact information ----------------------------------------------------------------- -->

@foreach($contact_info as $contact)
    <!-- flex-min-height-box start -->
        <section id="down" class="dark-bg-1 flex-min-height-box">
            <!-- flex-min-height-inner start -->
            <div class="flex-min-height-inner">
                <!-- container start -->
                <div class="container top-padding-120 bottom-padding-60">
                    <div data-animation-container>
                        <h2 class="large-title text-center">
                <span
                    data-animation-child
                    class="title-fill"
                    data-animation="title-fill-anim"
                    data-text="{{ $contact->title }}"
                >
                {{ $contact->title }}
                </span>
                        </h2>
                    </div>
                    <!-- flex-container start -->
                    <div class="flex-container top-padding-90 contact-box">
                        <iframe
                            src="{{ $contact->map }}"
                            width="600"
                            height="450"
                            style="border: 0; width: 100%"
                            allowfullscreen=""
                            loading="lazy"
                        ></iframe>
                    </div>
                    <!-- flex-container end -->

                    <div style="margin-top: 10px">
                        <h3 class="small-text text-center">{{ $contact->place }}</h3>
                        <div style="text-align: center; margin-top: 15px">
                            <span class="small-text text-center">{{ $contact->address }}</span><br>
                            <span class="small-text text-center">{{ $contact->tel }}</span><br>
                            <span class="small-text text-center">{{ $contact->email }}</span><br>
                        </div>
                    </div>


                </div>
                <!-- container end -->
            </div>
            <!-- flex-min-height-inner end -->
        </section>
        <!-- flex-min-height-box end -->
@endforeach

<!-- ------------------------------------------------------------------------------------------------------------------------------- end - contact information -->


    <!-- contact-form-box start -->
    <section
        class="contact-form-box flex-min-height-box"
        style="
            background-image: url({{ asset('assets/images/backgrounds/pexels-photo-1287145.jpeg') }});
            "
    >
        <div class="bg-overlay"></div>
        <!-- flex-min-height-inner start -->
        <div class="flex-min-height-inner">
            <!-- contact-form-container start -->
            <div class="contact-form-container">
                <!-- container start -->
                <div class="container small top-bottom-padding-120 form-box">
                    <h4 class="small-title-oswald text-color-4 text-center">
                        Lets Get In Touch!
                    </h4>
                    <!-- flex-container start -->
                    <form
                        class="flex-container top-padding-90"
                        method="post"
                        name="formobrsv"
                        id="send_form"
                    >
                        <!-- column start -->
                        <div class="four-columns">
                            <div class="content-right-margin-10 input-box">
                                <input
                                    type="text"
                                    name="first_name"
                                    id="first_name"
                                    required
                                    class="form-input pointer-small"
                                />
                                <label for="first_name" class="form-label"
                                >First name</label
                                >
                            </div>
                        </div>
                        <!-- column end -->
                        <!-- column start -->
                        <div class="four-columns">
                            <div class="content-left-right-margin-5 input-box">
                                <input
                                    type="text"
                                    name="last_name"
                                    id="last_name"
                                    required
                                    class="form-input pointer-small"
                                />
                                <label for="last_name" class="form-label">Last name</label>
                            </div>
                        </div>
                        <!-- column end -->
                        <!-- column start -->
                        <div class="four-columns">
                            <div class="content-left-margin-10 input-box">
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    required
                                    class="form-input pointer-small"
                                />
                                <label for="email" class="form-label email-label"
                                >Email address</label
                                >
                            </div>
                        </div>
                        <!-- column end -->
                        <!-- column start -->
                        <div class="twelve-columns input-box message-input">
                  <textarea
                      name="message"
                      id="message"
                      required
                      class="form-input pointer-small"
                  ></textarea>
                            <label for="message" class="form-label"
                            >Message content</label
                            >
                        </div>
                        <!-- column end -->
                        <!-- column start -->
                        <div class="twelve-columns text-center top-padding-90">
                            <button id="send" class="border-btn-box pointer-large">
                    <span class="border-btn-inner">
                      <span class="border-btn" data-text="submit">submit</span>
                      <span class="btn-wait">Wait...</span>
                    </span>
                            </button>
                        </div>
                        <!-- column end -->
                    </form>
                    <!-- flex-container end -->
                </div>
                <!-- container end -->

                <!-- alert start -->
                <div class="js-popup-fade" id="m_sent">
                    <div class="js-popup text-center">
                        <div class="popup-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="popup-alert title-style text-color-4">
                            Thank you!<br/>
                            Your submission<br/>
                            has been received!
                        </div>
                        <div class="flip-btn-box js-popup-close">
                            <div class="flip-btn pointer-large" data-text="Close">
                                Close
                            </div>
                        </div>
                    </div>
                </div>
                <!-- alert end -->

                <!-- alert start -->
                <div class="js-popup-fade" id="m_err">
                    <div class="js-popup text-center">
                        <div class="popup-icon">
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="popup-alert title-style text-color-4">Error</div>
                        <div class="flip-btn-box js-popup-close">
                            <div class="flip-btn pointer-large" data-text="Close">
                                Close
                            </div>
                        </div>
                    </div>
                </div>
                <!-- alert end -->
            </div>
            <!-- contact-form-container end -->
        </div>
        <!-- flex-min-height-inner end -->
    </section>
    <!-- contact-form-box end -->
</main>
<!-- animsition-overlay end -->

{{-- ----------------------------------------------- footer  ----------------------------------------------------- --}}

<!-- footer start -->
<footer class="footer dark-bg-1">
    <!-- flex-container start -->
    <div class="flex-container container top-bottom-padding-90">

        <!-- column start -->
        <div class="four-columns bottom-padding-60">
            <div class="content-right-margin-10 footer-center-mobile">
                <img class="footer-logo" src="{{ asset('assets/images/logo/SP-Weblogo.png') }}" alt="logo">
            </div>
        </div><!-- column end -->

    @foreach($footers as $footer)

        <!-- column start -->
            <div class="four-columns bottom-padding-60">
                <div class="content-left-right-margin-10 footer-left-mobile">
                    <h4>{{ $footer->title }}</h4> <br>
                    <ul class="footer-information text-color-4">
                        <li><i class="far fa-envelope"></i><a href="{{ $footer->email }}" class="xsmall-title-oswald">
                                spoint@agni.com</a></li>
                        <li><i class="fas fa-mobile-alt"></i><a href="#"
                                                                class="xsmall-title-oswald">{{ $footer->tel }}</a>
                        </li>
                        <li><i class="fas fa-map-marker-alt"></i><a href="#" class="xsmall-title-oswald text-height-17">{{ $footer->address }}</a>
                        </li>
                    </ul>
                </div>
            </div><!-- column end -->
    @endforeach
    <!-- column start -->
        <div class="twelve-columns">
            <p class="p-letter-style text-color-4 footer-copyright">&copy; Copyright 2019 InflexionPoint. Theme by <a
                    href="#">InflexionPoint</a></p>
        </div><!-- column end -->
    </div><!-- flex-container end -->
</footer><!-- footer end -->

{{-- ----------------------------------------------- end - footer ------------------------------------------------ --}}


<!-- scripts -->
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>

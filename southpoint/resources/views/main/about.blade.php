<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SouthPoint</title>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7COswald:300,400,500,600,700"
          rel="stylesheet" type="text/css">

    <!-- styles -->
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/about.css') }}" rel="stylesheet" type="text/css">
</head>
<body class="loader">
<!-- loading start -->
<div class="loading">
    <img class="logo-loading" src="{{ asset('assets/images/logo/south_point_white.png') }}" alt="logo">
</div><!-- loading end -->

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
        <a href="index.html" class="logo pointer-large animsition-link">
            <div class="logo-img-box">
                <img class="logo-white" src="{{ asset('assets/images/logo/SP-Weblogo.png') }}" alt="logo">
                <img class="logo-black" src="{{ asset('assets/images/logo/SP-Weblogo.png') }}" alt="logo">
            </div>
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
    <section id="up" class="page-head flex-min-height-box dark-bg-2">
        <!-- page-head-bg -->
        <div class="page-head-bg overlay-loading2"
             style="background-image: url({{ asset('assets/images/navbar/contact.jpg') }});"></div>

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
        </a><!-- scroll-btn end -->
    </section><!-- page-head end -->

    <!-- section start -->
    <section class="dark-bg-1 top-bottom-padding-120" data-midnight="black">

    @foreach($abouts as $about)
        <!-- container start -->
            <div data-animation-container class="container small bottom-padding-60">
                <div class="text-center">
                    <h2 data-animation-child class="large-title text-color-1 overlay-anim-box2"
                        data-animation="overlay-anim2">{{ $about->title }}</h2>
                </div>
                <div class="top-margin-30">
                    <p style="font-weight: 600;">
                        {{ $about->content }}
                    </p>
                    <!-- <h3 data-animation-child class="small-title-oswald text-color-2 text-height-20 fade-anim-box tr-delay01" data-animation="fade-anim">Succulents mlkshk hammock jean shorts flexitarian chicharrones, skateboard 90's knausgaard heirloom sustainable fixie forage. Vegan cloud bread forage lyft, cornhole food truck salvia portland locavore mlkshk. Etsy synth taxidermy godard DIY, tote bag fingerstache</h3>
                    <p data-animation-child class="p-style-xsmall text-color-1 fade-anim-box tr-delay02" data-animation="fade-anim">Hoodie roof party organic umami kombucha thundercats. Pok pok normcore snackwave venmo deep v, quinoa everyday carry la croix. Tattooed chia kickstarter, woke ramps subway tile meggings enamel pin. Sustainable pop-up craft beer single-origin coffee.</p>
                    <p data-animation-child class="p-style-xsmall text-color-1 fade-anim-box tr-delay03" data-animation="fade-anim">Pok pok authentic fashion axe, vegan venmo leggings raclette tousled twee tattooed.</p>
                    <p data-animation-child class="p-style-xsmall text-color-1 fade-anim-box tr-delay04" data-animation="fade-anim">Yuccie jianbing bespoke retro, photo booth salvia hella meh post-ironic cornhole tacos plaid. Helvetica hella vexillologist, prism lo-fi activated charcoal iPhone thundercats irony meggings meh cardigan chartreuse blue bottle hell of. Irony fixie tilde beard everyday.</p> -->
                </div>
            </div><!-- container end -->
        @endforeach
    </section><!-- section end -->


    <!-- light-bg-2 start -->
    <div class="dark-bg-2 top-bottom-padding-120" data-midnight="black">

    @foreach($messages as $message)
        <!-- testimonials-slider start -->
            <div class="testimonials-slider container small">
                <!-- swiper-wrapper start -->
                <div class="swiper-wrapper">
                    <!-- slide start -->
                    <div class="text-center">
                        <img src="{{ asset('storage/'.$message->image) }}" alt="author">
                        <div class="testimonials-content">
                            <p class="text-color-4" style="font-weight: 600;">{{ $message->message }}</p>
                        </div>
                        <div class="text-color-1 small-title-oswald">
                            <span class="text-color-2">{{ $message->name }},</span> <span
                                class="text-color-3">{{ $message->position }}</span>
                        </div>
                    </div><!-- slide end -->
                </div><!-- swiper-wrapper end -->

                <!-- swiper-pagination -->
                <div class="swiper-pagination"></div>
            </div><!-- testimonials-slider end -->
        @endforeach

    </div><!-- light-bg-2 end -->

    {{--  ------------------------------------------------ company profile ---------------------------------------------  --}}

    <section id="down" class="light-bg-2 flex-min-height-box about-page">
        <!-- flex-min-height-inner start -->
        <div class="flex-min-height-inner">
            <!-- container start -->
            <div data-animation-container class="container small bottom-padding-60"><br><br>
                <!-- flex-container start -->
                <div class="text-center">
                    <h4 data-animation-child class="large-title text-color-1 overlay-anim-box2"
                        data-animation="overlay-anim2">Company Profile</h4> <br><br><br>
                </div>
                <!-- table style start -->
                <style type="text/css">
                    td {
                        text-align: left;
                        border: 1px solid rgba(0, 0, 0, 0.1);
                        padding: 10px;
                    }
                </style>
                <!-- table style start -->
                <div data-animation-container class="flex-container">
                    <table style="border-collapse: collapse; border: 0px solid #FFCC00; color: #000000; width: 100%;"
                           border="0" cellspacing="2" cellpadding="3">
                        <tbody>
                        @foreach($profiles as $profile)
                            <tr>
                                <td>{{ $profile->title }}</td>
                                <td>: {{ $profile->content }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- flex-container end -->
            </div><!-- container end -->
        </div><!-- flex-min-height-inner end -->
    </section>

    {{--  ---------------------------------------------------------------------------------------- end - company profile   --}}

    {{--  ------------------------------------------------ client list ---------------------------------------------  --}}

    <section id="down" class="light-bg-2 flex-min-height-box about-page">
        <!-- flex-min-height-inner start -->
        <div class="flex-min-height-inner">
            <!-- container start -->
            <div data-animation-container class="container small bottom-padding-60"><br><br>
                <!-- flex-container start -->
                <div class="text-center">
                    <h4 data-animation-child class="large-title text-color-1 overlay-anim-box2"
                        data-animation="overlay-anim2">Clients List</h4> <br><br><br>
                </div>
                <!-- table style start -->
                <style type="text/css">
                    td {
                        text-align: left;
                        border: 1px solid rgba(0, 0, 0, 0.1);
                        padding: 10px;
                    }
                </style>


                <!-- table style start -->
                <div data-animation-container class="flex-container">
                    <table
                        style="border-collapse: collapse; border: 0px solid #FFCC00; color: #000000; width: 100%;"
                        border="0" cellspacing="2" cellpadding="3">
                        <tbody>
                        <tr>
                            <th>Location </th>
                            <th>Country </th>
                        </tr>
                        @foreach($clients as $client)
                            <tr>
                                <td>{{ $client->content }}</td>
                                <td>{{ $client->title }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- flex-container end -->

            </div><!-- container end -->
        </div><!-- flex-min-height-inner end -->
    </section>

    {{--  --------------------------------------------------------------------------------------- end - client list   --}}


</main><!-- animsition-overlay end -->

<!-- footer start -->
<footer class="footer dark-bg-1">
    <!-- flex-container start -->
    <div class="flex-container container top-bottom-padding-90">


    @foreach($footers as $footer)

        <!-- column start -->
            <div class="six-columns bottom-padding-60">
                <div class="content-left-right-margin-10 footer-left-mobile">

                    <ul class="footer-information text-color-4">
                        <li>{{ $footer->title }}</li>
                        <li><i class="fas fa-map-marker-alt"></i><a href="#"
                                                                    class="xsmall-title-oswald text-height-17">{{ $footer->address }}</a>
                        </li>
                        <li><i class="fas fa-mobile-alt"></i><a href="#"
                                                                class="xsmall-title-oswald">{{ $footer->tel }}</a></li>
                        <li><i class="far fa-envelope"></i><a href="mailto: spoint@agni.com"
                                                              class="xsmall-title-oswald">{{ $footer->email }}</a></li>
                    </ul>
                </div>
            </div><!-- column end -->

        @endforeach


    </div><!-- flex-container end -->
</footer><!-- footer end -->

<!-- scripts -->
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>

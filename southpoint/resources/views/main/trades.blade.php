<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>XEN</title>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7COswald:300,400,500,600,700"
          rel="stylesheet" type="text/css">

    <!-- styles -->
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/trades.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
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

<!--------------------------------------------------------------------------- nav-container start ----------------------------------------------------------- -->

<x-public-navbar></x-public-navbar>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------- nav-container end -->

<!-- animsition-overlay start -->
<main class="animsition-overlay" data-animsition-overlay="true">

    <!-- dark-bg-2 start -->
    <section id="down" class="dark-bg-2 top-bottom-padding-120">
        <!-- container start -->
        <div class="container">
            <div class="text-center">
                <h2 class="large-title text-height-10 title-fill" data-animation="title-fill-anim" data-text="TRADES">
                    TRADES</h2><br>
            </div>



            {{--    -------------------------------------------------- trade images --------------------------------------------------------        --}}
            <div class="works">
            <?php $id = 0 ?>
            @foreach($trades as $trade)
                <!-- grid-item start -->
                    <a href="project.html" class="animsition-link grid-item uiux">
                        <div class="work_item pointer-large hover-box hidden-box custom-work-item">
                            <img class="hover-img" src="{{asset('storage/'.$trade->image)}}" alt=""
                                 style="height: 200px;">
                            <div class="works-content">
                                <span class="small-title-oswald red-color work-title-overlay">{{ $id += 1 }} . </span>
                                <h3 class="title-style text-color-4">
                                    <span
                                        class="work-title-overlay work-title-delay02">{{ $trade->content }}</span><br>
                                    <!-- <span class="work-title-overlay work-title-delay03">brooklyn messeng</span> -->
                                </h3>
                            </div>
                        </div>
                    </a><!-- grid-item end -->
                @endforeach

            </div><!-- works end -->

            {{--    ------------------------------------------------------------------------------------------------ end - trade images        --}}
        </div><!-- container end -->
    </section><!-- dark-bg-2 end -->


    {{--    -------------------------------------------------- training activities --------------------------------------------------------        --}}


    @foreach($trainings as $training)
        <div class="text-center red-bg" data-midnight="black">
            <a href="#" class="pointer-large overlay-btn-box">
            <span class="overlay-btn" data-text="{{ $training->title }}"
                  style="font-size: 35px;">{{ $training->title }}</span>
            </a>
            <div class="container">
                <p class="train padding-for-training-activities">{{ $training->content }}</p>
            </div>
        </div>
    @endforeach

    {{--    --------------------------------------------------------------------------------------------------- end - training activities         --}}

</main><!-- animation-overlay end -->


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

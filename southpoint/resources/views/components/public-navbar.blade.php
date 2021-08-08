<nav class="nav-container dark-bg-1">
    <!-- nav-logo start -->
    <div class="nav-logo">
        <img src="{{ asset('assets/images/logo/SP-Weblogo.png') }}" alt="logo">
    </div><!-- nav-logo end -->

    <!-- menu-close -->
    <div class="menu-close pointer-large"></div>

    <!-- dropdown-close-box start -->
    <div class="dropdown-close-box">
        <div class="dropdown-close pointer-large">
            <span></span>
        </div>
    </div><!-- dropdown-close-box end -->

    <!-- nav-menu start -->
    <ul class="nav-menu dark-bg-1">
        <!-- nav-box start -->
        <li class="nav-box nav-bg-change active dropdown-open">
            <!-- <a class="pointer-large nav-link">
                <span class="nav-btn" data-text="Home">Home</span>
            </a> -->

            <a href="about.html" class="animsition-link pointer-large nav-link">
                <span class="nav-btn" data-text="Home">Home</span>
            </a>

            <!-- dropdown start -->
            <!-- <ul class="dropdown">
                <li class="nav-box">
                    <a href="index.html" class="animsition-link pointer-large">
                        <span class="nav-btn" data-text="Slider Home">Slider Home</span>
                    </a>
                </li>
                <li class="nav-box">
                    <a href="video_home.html" class="animsition-link pointer-large">
                        <span class="nav-btn" data-text="Video Bg">Video Bg</span>
                    </a>
                </li>
                <li class="nav-box">
                    <a href="home_fullscreen.html" class="animsition-link pointer-large">
                        <span class="nav-btn" data-text="Fullscreen Bg">Fullscreen Bg</span>
                    </a>
                </li>
                <li class="nav-box">
                    <a href="home_particles.html" class="animsition-link pointer-large">
                        <span class="nav-btn" data-text="Particles">Particles</span>
                    </a>
                </li>
                <li class="nav-box">
                    <a href="home_typewriter.html" class="animsition-link pointer-large">
                        <span class="nav-btn" data-text="Typewriter">Typewriter</span>
                    </a>
                </li>
            </ul> -->
            <!-- dropdown end -->

            <div class="nav-bg" style="background-image: url({{asset('assets/images/navbar/home.jpg')}});"></div>
        </li><!-- nav-box end -->
        <!-- nav-box start -->
        <li class="nav-box nav-bg-change">
            <a href="{{ route('page.about') }}" class="animsition-link pointer-large nav-link">
                <span class="nav-btn" data-text="About Us">About Us</span>
            </a>
            <div class="nav-bg" style="background-image: url({{ asset('assets/images/navbar/about.jpg') }});"></div>
        </li><!-- nav-box end -->
        <!-- nav-box start -->
        <li class="nav-box nav-bg-change">
            <a href="services.html" class="animsition-link pointer-large nav-link">
                <span class="nav-btn" data-text="Recruitment">Recruitment</span>
            </a>
            <div class="nav-bg"
                 style="background-image: url({{ asset('assets/images/navbar/recruitment.jpg') }});"></div>
        </li><!-- nav-box end -->

        <!-- nav-box start -->
        <li class="nav-box nav-bg-change">
            <a href="{{ route('page.infrastructure') }}" class="animsition-link pointer-large nav-link">
                <span class="nav-btn" data-text="Infrastructure">Infrastructure</span>
            </a>
            <div class="nav-bg"
                 style="background-image: url({{ asset('assets/images/navbar/infrastructure.jpg') }});"></div>
        </li>
        <!-- nav-box end -->

        <!-- nav-box start -->
        <li class="nav-box nav-bg-change">
            <a href="{{ route('page.trades') }}" class="animsition-link pointer-large nav-link">
                <span class="nav-btn" data-text="Trades">Trades</span>
            </a>
            <div class="nav-bg" style="background-image: url({{ asset('assets/images/navbar/trade.jpg') }});"></div>
        </li>
        <!-- nav-box end -->


        <!-- nav-box start -->
        <li class="nav-box nav-bg-change">
            <a href="{{ route('page.contacts') }}" class="animsition-link pointer-large nav-link">
                <span class="nav-btn" data-text="Contact">Contact</span>
            </a>
            <div class="nav-bg" style="background-image: url({{ asset('assets/images/navbar/contact.jpg') }});"></div>
        </li><!-- nav-box end -->
    </ul><!-- nav-menu end -->
</nav>

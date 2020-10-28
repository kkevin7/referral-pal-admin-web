<!--begin header -->
<header class="header">

    <!--begin nav -->
    <nav class="navbar navbar-default navbar-fixed-top">

        <!--begin container -->
        <div class="container">

            <!--begin navbar -->
            <div class="navbar-header">

                <button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!--logo -->
                <a href="{{ route('front.home') }}" class="navbar-brand" id="logo">Referral Pal</a>

            </div>

            <div id="navbar-collapse-02" class="collapse navbar-collapse">

                <ul class="nav navbar-nav navbar-right">

                    <li><a href="#home_wrapper">Home</a></li>

                    <li><a href="#about">About</a></li>

                    {{-- <li><a href="#team">Team</a></li> --}}

                    <li><a href="#gallery">Gallery</a></li>

                    <li><a href="#features">Features</a></li>

                    <li><a href="#pricing">Pricing</a></li>

                    {{-- <li><a href="#blog">Blog</a></li> --}}

                    <li><a href="#contact">Contact</a></li>

                    {{-- <li><a href="#download-app" class="external discover-btn">Get Started</a></li> --}}

                    <li><a href="{{ route('front.login') }}" class="external discover-btn">Login</a></li>

                    <li><a href="{{ route('front.register') }}" class="external discover-btn">Register</a></li>

                </ul>
            </div>
            <!--end navbar -->

        </div>
        <!--end container -->

    </nav>
    <!--end nav -->

</header>
<!--end header -->
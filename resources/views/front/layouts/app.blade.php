<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Referral Pal</title>

    <!-- Loading Bootstrap -->
    <link href="{{ asset('assets/css/front/bootstrap.css') }}" rel="stylesheet">

    <!-- Loading Template CSS -->
    <link href="{{ asset('assets/css/front/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/front/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/front/style-magnific-popup.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:500,600,700" rel="stylesheet">

    <!-- Awsome Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/front/pe-icon-7-stroke.css') }}">

    <!-- Optional - Adds useful class to manipulate icon font display -->
    <link rel="stylesheet" href="{{ asset('assets/css/front/helper.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/front/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/front/owl.theme.default.min.css') }}">

    <!-- Font Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/front/favicon.ico') }}">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="assets/js/front/html5shiv.js"></script>
      <script src="assets/js/front/respond.min.js"></script>
    <![endif]-->

    <!--headerIncludes-->

</head>

<body>

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
                    <a href="index.html" class="navbar-brand" id="logo">Referral Pal</a>

                </div>

                <div id="navbar-collapse-02" class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="#home_wrapper">Home</a></li>

                        <li><a href="#about">About</a></li>

                        <li><a href="#team">Team</a></li>

                        <li><a href="#gallery">Gallery</a></li>

                        <li><a href="#features">Features</a></li>

                        <li><a href="#pricing">Pricing</a></li>

                        <li><a href="#blog">Blog</a></li>

                        <li><a href="#contact">Contact</a></li>

                        {{-- <li><a href="#download-app" class="external discover-btn">Get Started</a></li> --}}

                        <li><a href="{{ route('front.login') }}" class="external discover-btn">Login</a></li>

                    </ul>
                </div>
                <!--end navbar -->

            </div>
            <!--end container -->

        </nav>
        <!--end nav -->

    </header>
    <!--end header -->

    @yield('content')

    <!--begin footer -->
    <div class="footer">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-12 -->
                <div class="col-md-12 text-center">

                    <p>
                        Copyrights © <script>
                            document.write(new Date().getFullYear());

                        </script> All Rights Reserved by <a href="https://makeitsimple.io/" class="font-weight-bold text-primary text-decoration-none">Make It Simple L.L.C </a>
                    </p>

                    <!--begin footer_social -->
                    <ul class="footer_social">

                        <li>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-skype"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-dribble"></i>
                            </a>
                        </li>

                    </ul>
                    <!--end footer_social -->

                </div>
                <!--end col-md-6 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </div>
    <!--end footer -->

    <!-- Load JS here for greater good =============================-->
    <script src="{{ asset('assets/js/front/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/front/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/front/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/front/jquery.scrollTo-min.js') }}"></script>
    <script src="{{ asset('assets/js/front/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/front/jquery.nav.js') }}"></script>
    <script src="{{ asset('assets/js/front/wow.js') }}"></script>
    <script src="{{ asset('assets/js/front/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/front/custom.js') }}"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>@yield('title') - Referral Pal</title>

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

    @yield('content')

    @include('front.footer.footer')

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

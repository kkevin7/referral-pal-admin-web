@extends('front.layouts.app')

@section('title', 'Home')

@section('content')

@include('front.navigation.navbar')

    <!--begin home section -->
    <section class="home-section" id="home_wrapper">

		<div class="home-section-overlay"></div>

		<!--begin container -->
		<div class="container">

	        <!--begin row -->
	        <div class="row">

	            <!--begin col-md-6-->
	            <div class="col-md-6 padding-top-40">

                      {{-- <h1>Welcome To Referral Pal, The Wold's Most Powerful App</h1> --}}
                      <h1>
                        Have your customers
                        lead after lead for
                        your company with
                        REFERRAL-PAL. THE #1
                        REFERRAL-GENERATING
                        SOFTWARE THAT WILL
                        WORK FOR ANY COMPANY
                      </h1>

	          		<p>Friend-to-friend referrals google reviews, social media marketing, and more.. grow your business directly from the referral-app app.</p>

                    {{-- <ul class="home-benefits">
                        <li><i class="fa fa-check"></i> Tendis tempor ante acu ipsum finibus.</li>
                        <li><i class="fa fa-check"></i> Atimus etims urnatis quisle ratione netis.</li>
                        <li><i class="fa fa-check"></i> Ratione lorem nets et sequi tempor.</li>
                        <li><i class="fa fa-check"></i> Santis netsum et quias magni.</li>
                    </ul> --}}

	        		<a href="#about" class="btn-green scrool">Explore Benefits</a>

	            </div>
	            <!--end col-md-6-->

				<!--begin col-md-6-->
	            <div class="col-md-6 wow bounceIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceIn;">
	          		<img src="{{ asset('assets/images/front/download-app-iphone.png') }}" class="width-100" alt="pic">
	            </div>
	            <!--end col-md-6-->

	        </div>
	        <!--end row -->

		</div>
		<!--end container -->

    </section>
    <!--end home section -->

    <!--begin section-grey -->
    <section class="section-grey" id="about">

		<!--begin container -->
		<div class="container">

	        <!--begin row -->
	        <div class="row">

				<!--begin col-md-12 -->
				<div class="col-md-12 text-center">

					<h2 class="section-title">GET ALL YOUR MARKETING IN 1 APP</h2>

                    <p class="section-subtitle">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>

                </div>
                <!--end col-md-12 -->

                <!--begin col-md-4 -->
                <div class="col-md-4">

                    <div class="main-services">

                        <img src="http://placehold.it/100x100" class="width-100" alt="pic">

                        <h3>Search Oportunities</h3>

                        <p>Curabitur quam etsum lacus etsumis nulat iaculis ets vitae etsum nisle varius sed aliquam ets vitae dictis netsum.</p>

                    </div>

                </div>
                <!--end col-md-4 -->

                <!--begin col-md-4 -->
                <div class="col-md-4">

                    <div class="main-services">

                        <img src="http://placehold.it/100x100" class="width-100" alt="pic">

                        <h3>Reach Clients</h3>

                        <p>Curabitur quam etsum lacus etsumis nulat iaculis ets vitae etsum nisle varius sed aliquam ets vitae dictis netsum.</p>

                    </div>

                </div>
                <!--end col-md-4 -->

                <!--begin col-md-4 -->
                <div class="col-md-4">

                    <div class="main-services">

                        <img src="http://placehold.it/100x100" class="width-100" alt="pic">

                        <h3>Get Rewarded</h3>

                        <p>Curabitur quam etsum lacus etsumis nulat iaculis ets vitae etsum nisle varius sed aliquam ets vitae dictis netsum.</p>

                    </div>

                </div>
                <!--end col-md-4 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end section-grey -->

    <!--begin features -->
    <section class="section-white">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-12 -->
                <div class="col-md-12 margin-bottom-40 text-center">

                    <h2 class="section-title">Amazing Features</h2>

                    <p class="section-subtitle">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>

                </div>
                <!--end col-md-12 -->

                <!--begin col-md-4 -->
                <div class="col-md-4 padding-top-40">

                    <!--begin features_item -->
                    <div class="features_item">

                        <div class="dropcaps_right">
                            <span class="fa fa-comments features_icons"></span>
                        </div>

                        <div class="text_align_right">
                            <h4>FRIEND-TO-FRIEND REFERRALS THROUGH TEXT MESSAGING</h4>
                            <p>Quis autem velis etis netsum etims quis voluptate velit nihil est netsum et quam donecs netis de etsum nisle lorem.</p>
                        </div>

                    </div>
                    <!--end features_item -->

                    <!--begin features_item -->
                    <div class="features_item">

                        <div class="dropcaps_right">
                            <span class="fa fa-google-plus features_icons"></span>
                        </div>

                        <div class="text_align_right">
                            <h4>COLLECTING MORE GOOGLE REVIEWS</h4>
                            <p>Quis autem velis etis netsum etims quis voluptate velit nihil est netsum et quam donecs netis de etsum nisle lorem.</p>
                        </div>

                    </div>
                    <!--end features_item -->

                    <!--begin features_item -->
                    <div class="features_item">

                        <div class="dropcaps_right">
                            <span class="fa fa-camera-retro features_icons"></span>
                        </div>

                        <div class="text_align_right">
                            <h4>SOCIAL MEDIA MARKETING</h4>
                            <p>Quis autem velis etis netsum etims quis voluptate velit nihil est netsum et quam donecs netis de etsum nisle lorem.</p>
                        </div>

                    </div>
                    <!--end features_item -->

                </div>
                <!--end col-md-4 -->

                <!--begin col-md-4 -->
                <div class="col-md-4 wow slideInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceIn;">

                    <img src="{{ asset('assets/images/front/features-iphone.png') }}" alt="picture" class="width-100">

                </div>
                <!--end col-md-4 -->

                <!--begin col-md-4 -->
                <div class="col-md-4 padding-top-40">

                    <!--begin features_item -->
                    <div class="features_item">

                        <div class="dropcaps_left">
                            <span class="fa fa-id-badge features_icons"></span>
                        </div>

                        <div class="text_align_left">
                            <h4>BRANDING PHOTOS WITH YOUR COMPANY LOGO</h4>
                            <p>Quis autem velis etis netsum etims quis voluptate velit nihil est netsum et quam donecs netis de etsum nisle lorem.</p>
                        </div>

                    </div>
                    <!--end features_item -->

                    <!--begin features_item -->
                    <div class="features_item">

                        <div class="dropcaps_left">
                            <span class="fa fa-bar-chart features_icons"></span>
                        </div>

                        <div class="text_align_left">
                            <h4>KEEPING TRACK OF REVENUE + INCOMING REFERRALS WITH THE REFERRAL-PAL REFERRAL-TREE</h4>
                           <p>Quis autem velis etis netsum etims quis voluptate velit nihil est netsum et quam donecs netis de etsum nisle lorem.</p>
                        </div>

                    </div>
                    <!--end features_item -->

                    <!--begin features_item -->
                    <div class="features_item">

                        <div class="dropcaps_left">
                            <span class="fa fa-envelope-o features_icons"></span>
                        </div>

                        <div class="text_align_left">
                            <h4>24/7 Support</h4>
                            <p>Quis autem velis etis netsum etims quis voluptate velit nihil est netsum et quam donecs netis de etsum nisle lorem.</p>
                        </div>

                    </div>
                    <!--end features_item -->

                </div>
                <!--end col-md-4 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end features -->

    <!--begin gallery section -->
    <section class="section-lyla" id="gallery">

        <!--begin container -->
        <div class="container-fluid ">

            <!--begin row -->
            <div class="row">

                <!--begin col md 12 -->
                <div class="col-md-12 text-center">

                    <h2 class="section-title white">Explore More About Our Application</h2>

                    <p class="section-subtitle white">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>

                </div>
                <!--end col md 12 -->

                <!--begin col md 12 -->
                <div class="gallery-item-wrapper padding-top-30">

                    <!--begin owl carousel -->
                    <div id="owl2" class="owl-carousel owl-theme">

                        <div>
                            <img src="{{ asset('assets/images/front/showcase1.jpg') }}" alt="showcase" class="gallery-show">
                        </div>

                        <div>
                            <img src="{{ asset('assets/images/front/showcase2.jpg') }}" alt="showcase" class="gallery-show">
                        </div>

                        <div>
                            <img src="{{ asset('assets/images/front/showcase3.jpg') }}" alt="showcase" class="gallery-show">
                        </div>

                        <div>
                            <img src="{{ asset('assets/images/front/showcase4.jpg') }}" alt="showcase" class="gallery-show">
                        </div>

                        <div>
                            <img src="{{ asset('assets/images/front/showcase5.jpg') }}" alt="showcase" class="gallery-show">
                        </div>

                        <div>
                            <img src="{{ asset('assets/images/front/showcase6.jpg') }}" alt="showcase" class="gallery-show">
                        </div>

                    </div>
                    <!--end owl carousel -->

                    <div class="owl-dots">
                        <div class="owl-dot active"><span></span></div>
                        <div class="owl-dot"><span></span></div>
                        <div class="owl-dot"><span></span></div>
                    </div>
                </div>
                <!--end col md  12-->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end gallery section -->

    <!--begin services section -->
    <section class="section-white small-padding-bottom" id="features">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-12-->
                <div class="col-md-12 text-center padding-bottom-10">

                    <h2 class="section-title">Amazing Features</h2>

                    <p class="section-subtitle">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>

                </div>
                <!--end col-md-12 -->

            </div>
            <!--end row -->

            <!--begin row -->
            <div class="row">

                <!--begin col-md-4-->
                <div class="col-md-4">

                    <div class="feature-box light-green wow fadeIn" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">

                        <i class="pe-7s-tools"></i>

                        <div class="feature-box-text">

                            <h4>Support 24/7</h4>

                            <p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat nihis.</p>

                        </div>

                    </div>
                </div>
                <!--end col-md-4 -->

                <!--begin col-md-4-->
                <div class="col-md-4">

                    <div class="feature-box light-blue wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">

                        <i class="pe-7s-users"></i>

                        <div class="feature-box-text">

                            <h4>User Friendly</h4>

                            <p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat nihis.</p>

                        </div>

                    </div>
                </div>
                <!--end col-md-4 -->

                <!--begin col-md 4-->
                <div class="col-md-4">

                    <div class="feature-box orange wow fadeIn" data-wow-delay="0.75s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">

                        <i class="pe-7s-bell"></i>

                        <div class="feature-box-text">

                            <h4>Notifications</h4>

                            <p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat nihis.</p>

                        </div>

                    </div>
                </div>
                <!--end col-md-4 -->

            </div>
            <!--end row -->

            <!--begin row -->
            <div class="row">

                <!--begin col-md-4-->
                <div class="col-md-4">

                    <div class="feature-box dark-green wow fadeIn" data-wow-delay="1s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">

                        <i class="pe-7s-chat"></i>

                        <div class="feature-box-text">

                            <h4>Chat With Friends</h4>

                            <p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat nihis.</p>

                        </div>

                    </div>
                </div>
                <!--end col-md-4 -->

                <!--begin col-md-4-->
                <div class="col-md-4">

                    <div class="feature-box dark-blue wow fadeIn" data-wow-delay="1.25s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">

                        <i class="pe-7s-world"></i>

                        <div class="feature-box-text">

                            <h4>Accesibility</h4>

                            <p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat nihis.</p>

                        </div>

                    </div>
                </div>
                <!--end col-md-4 -->

                <!--begin col-md-4-->
                <div class="col-md-4">

                    <div class="feature-box light-red wow fadeIn" data-wow-delay="1.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">

                        <i class="pe-7s-piggy"></i>

                        <div class="feature-box-text">

                            <h4>Cost Control</h4>

                            <p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat nihis.</p>

                        </div>

                    </div>
                </div>
                <!--end col-md-4 -->

            </div>
            <!--end row -->

            <!--begin row -->
            <div class="row">

                <!--begin col-md-12-->
                <div class="col-md-12 padding-top-40">

                    <img src="{{ asset('assets/images/front/iphone-v.png') }}" alt="home-iphone" class="extra-image width-100 wow fadeInUp" data-wow-delay="1s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">

                </div>
                <!--end col-md-4 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end services section -->

    <!--begin newsletter section -->
    <section class="section-lyla-shape" id="newsletter-section">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-12 -->
                <div class="col-md-12 text-center padding-top-60 padding-bottom-20">

                    <h3 class="white-text">Seen enough? We are currently in the closed beta.
                </h3>

                </div>
                <!--end col-md-12 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end newsletter section -->

    <!--begin pricing section -->
    <section class="section-white bottom-shape z-100" id="pricing">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-12 -->
                <div class="col-md-12 text-center padding-bottom-40">

                    <h2 class="section-title">Great Pricing Plans</h2>

                    <p class="section-subtitle">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>

                </div>
                <!--end col-md-12 -->

                <!--begin col-md-4-->
                <div class="col-md-4 col-sm-4">

                    <div class="price-box-white">

                        <ul class="pricing-list">

                            <li class="price-title">FREE</li>

                            <li class="price-value">$0</li>

                            <li class="price-subtitle">Per Month</li>

                            <li class="price-text">24/7 Support</li>

                            <li class="price-text">50 Gb Bandwidth</li>

                            <li class="price-text">1 User Acount</li>

                            <li class="price-tag"><a href="#">GET STARTED</a></li>

                        </ul>

                    </div>

                </div>
                <!--end col-md-4 -->

                <!--begin col-md-4 -->
                <div class="col-md-4 col-sm-4">

                    <div class="price-box-grey">

                        <ul class="pricing-list">

                            <li class="price-title">REGULAR</li>

                            <li class="price-value">$29</li>

                            <li class="price-subtitle">Per Month</li>

                            <li class="price-text">24/7 Support</li>

                            <li class="price-text">200 Gb Bandwidth</li>

                            <li class="price-text">Unlimited Experiences</li>

                            <li class="price-text">10 Themes</li>

                            <li class="price-text">Weekly Updates</li>

                            <li class="price-tag"><a href="#">GET STARTED</a></li>

                        </ul>

                    </div>

                </div>
                <!--end col-md-4 -->

                <!--begin col-md-4 -->
                <div class="col-md-4 col-sm-4">

                    <div class="price-box-blue">

                        <ul class="pricing-list">

                            <li class="price-title white-text">GOLD</li>

                            <li class="price-value white-text">$99</li>

                            <li class="price-subtitle white-text">Per Month</li>

                            <li class="price-text white-text">24/7 Support</li>

                            <li class="price-text white-text">Unlimited Bandwidth</li>

                            <li class="price-text white-text">50 Gb Bandwidth</li>

                            <li class="price-text white-text">Daily Updates</li>

                            <li class="price-text white-text">10 User Acounts</li>

                            <li class="price-text white-text">Custom Hosting</li>

                            <li class="price-text white-text">Unlimited Acces</li>

                            <li class="price-tag"><a href="#">GET STARTED</a></li>

                        </ul>

                    </div>

                </div>
                <!--end col-md-4 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end pricing section -->

    <!--begin section-white -->
    <section class="section-white small-padding-top">

        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row">

                <!--begin col-md-6-->
                <div class="col-md-6 wow slideInLeft" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">

                    <img src="{{ asset('assets/images/front/benefits.png') }}" class="width-100" alt="pic">

                </div>
                <!--end col-sm-6-->

                <!--begin col-md-6-->
                <div class="col-md-6 padding-top-20">

                    <h3>Get ready to discover all the benefits and secrets of a perfect launch</h3>

                    <p>Velis demo enim ipsam voluptatem quia voluptas sit aspernatur netsum lorem fugit, sed quia magni dolores eos qui ratione sequi nesciunt neque et poris ratione sequi enim quia tempor magni.</p>

                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur netsum lorem fugit, sed quia magni dolores eos qui ratione sequi.</p>

                    <ul class="benefits">
                        <li><i class="fa fa-check"></i> Quia magni netsum eos qui ratione sequi.</li>
                        <li><i class="fa fa-check"></i> Venis ratione sequi enim quia tempor magni.</li>
                        <li><i class="fa fa-check"></i> Enim ipsam voluptatem quia voluptas.</li>
                        <li><i class="fa fa-check"></i> Ratione nes sequi nesciunt neque.</li>
                    </ul>

                    <a href="#download-app" class="btn-lyla scrool">Download App</a>

                </div>
                <!--end col-md-6-->

            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </section>
    <!--end section-white-->

    <!--begin testimonials section -->
    <section class="section-grey">

        <!--begin container -->
        <div class="container">

          <!--begin row -->
          <div class="row">

                <!--begin col-md-10 -->
                <div class="col-md-8 col-md-offset-2">

                    <!--begin owl carousel -->
                    <div id="owl1" class="owl-carousel owl-theme">

                        <!--begin testim-inner -->
                        <div class="testim-inner">

                            <img src="http://placehold.it/200x200" alt="testimonials" class="testim-img">

                            <p>The attention of a traveller, should be particularly turned, in the first place, to the various works of Nature, to mark the distinctions of the climates he may explore, and to offer such useful observations on the different productions as may occur.</p>

                            <h6>Jennifer Smith<span class="job-text"> - Web Designer</span></h6>

                        </div>
                        <!--end testim-inner -->

                        <!--begin testim-inner -->
                        <div class="testim-inner">

                            <img src="http://placehold.it/200x200" alt="testimonials" class="testim-img">

                            <p>The attention of a traveller, should be particularly turned, in the first place, to the various works of Nature, to mark the distinctions of the climates he may explore, and to offer such useful observations on the different productions as may occur.</p>

                            <h6>John Doe<span class="job-text"> -  General Manager</span></h6>

                        </div>
                        <!--end testim-inner -->

                        <!--begin testim-inner -->
                        <div class="testim-inner">

                            <img src="http://placehold.it/200x200" alt="testimonials" class="testim-img">

                            <p>The attention of a traveller, should be particularly turned, in the first place, to the various works of Nature, to mark the distinctions of the climates he may explore, and to offer such useful observations on the different productions as may occur.</p>

                            <h6>Alexandra Smith<span class="job-text"> - App Magazine Editor</span></h6>

                        </div>
                        <!--end testim-inner -->

                    </div>
                    <!--end owl carousel -->

                    <!--begin owl carousel -->
                    <div class="owl-dots">

                        <div class="owl-dot active"><span></span></div>

                        <div class="owl-dot"><span></span></div>

                        <div class="owl-dot"><span></span></div>

                    </div>
                    <!--end owl carousel -->

                </div>
                <!--end-col-md-10 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end testimonials section -->

    <!--begin download-app-wrapper -->
    <section class="download-app-wrapper" id="download-app">

        <div class="download-app-wrapper-overlay"></div>

        <div class="shape-grey-image-top"></div>

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-5-->
                <div class="col-md-6 padding-top-100">

                    <h2 class="title-download-app-padding white-text">Get The App Now!</h2>

                    <p class="white-text">Curabitur quam etsum lacus etsumis nulatis etsumised vitae nisledita variustimuslis loremis sedit  feugiat ligula aliquam etsimus dictimelis etis dinetsumitis ipsum netsum etim quias nets ligula.</p>

                    <a href="#" class="btn-download-app"><span class="fa fa-apple"></span><p><small>Download On</small><br>App Store</p></a>

                    <a href="#" class="btn-download-app"><span class="fa fa-android"></span><p><small>Get It On</small><br>Google Play</p></a>

                </div>
                <!--end col-md-5-->

                <!--begin col-md-7-->
                <div class="col-md-6 wow slideInRight" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: slideInRight;">

                    <img src="{{ asset('assets/images/front/download-app-iphone.png') }}" alt="picture" class="download-app-iphone width-100">

                </div>
                <!--end col-md-7-->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end download-app-wrapper -->

    <!--begin section-white -->
    <section class="section-white small-paddings">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin fun-facts-box-->
                <div class="col-sm-3 fun-facts-box">

                    <div class="fun-facts-icon">
                        <i class="fa fa-trophy"></i>
                    </div>

                    <div class="fun-facts-text">

                        <h3 class="fun-facts-title">Trusted By 5K</h3>
                        <p class="fun-facts-subtitle">App Of The Year</p>

                    </div>

                </div>
                <!--end fun-facts-box -->

                <!--begin fun-facts-box-->
                <div class="col-sm-3 fun-facts-box">

                    <div class="fun-facts-icon">
                        <i class="fa fa-download"></i>
                    </div>

                    <div class="fun-facts-text">

                        <h3 class="fun-facts-title">11500</h3>
                        <p class="fun-facts-subtitle">Total Downloads</p>

                    </div>

                </div>
                <!--end fun-facts-box -->

                <!--begin fun-facts-box-->
                <div class="col-sm-3 fun-facts-box">

                    <div class="fun-facts-icon">
                        <i class="fa fa-heart"></i>
                    </div>

                    <div class="fun-facts-text">

                        <h3 class="fun-facts-title">5500</h3>
                        <p class="fun-facts-subtitle">Active Members</p>

                    </div>

                </div>
                <!--end fun-facts-box -->

                <!--begin fun-facts-box-->
                <div class="col-sm-3 fun-facts-box">

                    <div class="fun-facts-icon">
                        <i class="fa fa-rocket"></i>
                    </div>

                    <div class="fun-facts-text">

                        <h3 class="fun-facts-title">1000+</h3>
                        <p class="fun-facts-subtitle">Diferent Premium Avatars</p>

                    </div>

                </div>
                <!--end fun-facts-box -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end white-grey -->

    <!--begin blog -->
    {{-- <section class="section-grey" id="blog">

        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row">

                <!--begin col-md-12-->
                <div class="col-md-10 col-md-offset-1 text-center">
                    <h2 class="section-title">Our Latest News</h2>

                    <div class="separator_wrapper">
                        <i class="icon icon-star-two blue"></i>
                    </div>

                    <p class="section-subtitle">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>
                </div>
                <!--end col-md-12-->

            </div>
            <!--end row-->

            <!--begin row-->
            <div class="row">

                <!--begin col-md-12 -->
                <div class="col-md-12">

                    <div id="myCarousel" class="carousel carousel1 slide margin-top-20 margin-bottom-10" data-interval="false">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">

                            <div class="item active">

                                <!--begin col-sm-4 -->
                                <div class="col-sm-4">

                                    <!--begin blog-item -->
                                    <div class="blog-item">

                                        <!--begin popup image -->
                                        <div class="popup-wrapper">
                                            <div class="popup-gallery">
                                                <a href="#">
                                                    <img src="http://placehold.it/350x240" class="width-100" alt="pic">
                                                    <span class="eye-wrapper2"><i class="fa fa-link eye-icon"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <!--end popup image -->

                                        <!--begin blog-item_inner -->
                                        <div class="blog-item-inner">

                                            <h3 class="blog-title"><a href="#">Affinity Designer Quick Start</a></h3>

                                            <a href="#" class="blog-icons"><i class="fa fa-user"></i> Paul Smith</a>

                                            <a href="#" class="blog-icons last"><i class="fa fa-tags"></i> WordPress</a>

                                            <p>Quis autem velis etis reprehender etid quiste voluptate velite esse quam nihis etsa illum sedit varias netsum.</p>

                                        </div>
                                        <!--end blog-item-inner -->

                                    </div>
                                    <!--end blog-item -->

                                </div>
                                <!--end col-sm-4-->

                                <!--begin col-sm-4 -->
                                <div class="col-sm-4">

                                    <!--begin blog-item -->
                                    <div class="blog-item">

                                        <!--begin popup image -->
                                        <div class="popup-wrapper">
                                            <div class="popup-gallery">
                                                <a href="#">
                                                    <img src="http://placehold.it/350x240" class="width-100" alt="pic">
                                                    <span class="eye-wrapper2"><i class="fa fa-link eye-icon"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <!--end popup image -->

                                        <!--begin blog-item_inner -->
                                        <div class="blog-item-inner">

                                            <h3 class="blog-title"><a href="#">Solid HTML Form Structure</a></h3>

                                            <a href="#" class="blog-icons"><i class="fa fa-user"></i> By John Doe</a>

                                            <a href="#" class="blog-icons last"><i class="fa fa-tags"></i> Marketing</a>

                                            <p>Quis autem velis etis reprehender etid quiste voluptate velite esse quam nihis etsa illum sedit varias netsum.</p>

                                        </div>
                                        <!--end blog-item-inner -->

                                    </div>
                                    <!--end blog-item -->

                                </div>
                                <!--end col-sm-4-->

                                <!--begin col-sm-4 -->
                                <div class="col-sm-4">

                                    <!--begin blog-item -->
                                    <div class="blog-item">

                                        <!--begin popup image -->
                                        <div class="popup-wrapper">
                                            <div class="popup-gallery">
                                                <a href="#">
                                                    <img src="http://placehold.it/350x240" class="width-100" alt="pic">
                                                    <span class="eye-wrapper2"><i class="fa fa-link eye-icon"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <!--end popup image -->

                                        <!--begin blog-item_inner -->
                                        <div class="blog-item-inner">

                                            <h3 class="blog-title"><a href="#">New WordPress Theme</a></h3>

                                            <a href="#" class="blog-icons"><i class="fa fa-user"></i> By John Doe</a>

                                            <a href="#" class="blog-icons last"><i class="fa fa-tags"></i> Design</a>

                                            <p>Quis autem velis etis reprehender etid quiste voluptate velite esse quam nihis etsa illum sedit varias netsum.</p>

                                        </div>
                                        <!--end blog-item-inner -->

                                    </div>
                                    <!--end blog-item -->

                                </div>
                                <!--end col-sm-4-->

                            </div>

                            <div class="item text-center">

                                <!--begin col-sm-4 -->
                                <div class="col-sm-4">

                                    <!--begin blog-item -->
                                    <div class="blog-item">

                                        <!--begin popup image -->
                                        <div class="popup-wrapper">
                                            <div class="popup-gallery">
                                                <a href="#">
                                                    <img src="http://placehold.it/350x240" class="width-100" alt="pic">
                                                    <span class="eye-wrapper2"><i class="fa fa-link eye-icon"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <!--end popup image -->

                                        <!--begin blog-item_inner -->
                                        <div class="blog-item-inner">

                                            <h3 class="blog-title"><a href="#">Affinity Designer Quick Start</a></h3>

                                            <a href="#" class="blog-icons"><i class="fa fa-user"></i> Paul Smith</a>

                                            <a href="#" class="blog-icons last"><i class="fa fa-tags"></i> WordPress</a>

                                            <p>Quis autem velis etis reprehender etid quiste voluptate velite esse quam nihis etsa illum sedit varias netsum.</p>

                                        </div>
                                        <!--end blog-item-inner -->

                                    </div>
                                    <!--end blog-item -->

                                </div>
                                <!--end col-sm-4-->

                                <!--begin col-sm-4 -->
                                <div class="col-sm-4">

                                    <!--begin blog-item -->
                                    <div class="blog-item">

                                        <!--begin popup image -->
                                        <div class="popup-wrapper">
                                            <div class="popup-gallery">
                                                <a href="#">
                                                    <img src="http://placehold.it/350x240" class="width-100" alt="pic">
                                                    <span class="eye-wrapper2"><i class="fa fa-link eye-icon"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <!--end popup image -->

                                        <!--begin blog-item_inner -->
                                        <div class="blog-item-inner">

                                            <h3 class="blog-title"><a href="#">Solid HTML Form Structure</a></h3>

                                            <a href="#" class="blog-icons"><i class="fa fa-user"></i> By John Doe</a>

                                            <a href="#" class="blog-icons last"><i class="fa fa-tags"></i> Marketing</a>

                                            <p>Quis autem velis etis reprehender etid quiste voluptate velite esse quam nihis etsa illum sedit varias netsum.</p>

                                        </div>
                                        <!--end blog-item-inner -->

                                    </div>
                                    <!--end blog-item -->

                                </div>
                                <!--end col-sm-4-->

                                <!--begin col-sm-4 -->
                                <div class="col-sm-4">

                                    <!--begin blog-item -->
                                    <div class="blog-item">

                                        <!--begin popup image -->
                                        <div class="popup-wrapper">
                                            <div class="popup-gallery">
                                                <a href="#">
                                                    <img src="http://placehold.it/350x240" class="width-100" alt="pic">
                                                    <span class="eye-wrapper2"><i class="fa fa-link eye-icon"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <!--end popup image -->

                                        <!--begin blog-item_inner -->
                                        <div class="blog-item-inner">

                                            <h3 class="blog-title"><a href="#">New WordPress Theme</a></h3>

                                            <a href="#" class="blog-icons"><i class="fa fa-user"></i> By John Doe</a>

                                            <a href="#" class="blog-icons last"><i class="fa fa-tags"></i> Design</a>

                                            <p>Quis autem velis etis reprehender etid quiste voluptate velite esse quam nihis etsa illum sedit varias netsum.</p>

                                        </div>
                                        <!--end blog-item-inner -->

                                    </div>
                                    <!--end blog-item -->

                                </div>
                                <!--end col-sm-4-->

                            </div>

                        </div>

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol>

                    </div>

                </div>
                <!--end col-md-12-->

            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </section> --}}
    <!--end blog -->

    <!--begin contact -->
    <section class="section-white no-padding-bottom" id="contact">

        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row">

                <!--begin col-md-6 -->
                <div class="col-md-6">

                    <h4>Get in touch</h4>

                    <!--begin success message -->
                    <p class="contact_success_box" style="display:none;">We received your message and you'll hear from us soon. Thank You!</p>
                    <!--end success message -->

                    <!--begin contact form -->
                    <form id="contact-form" class="contact" action="php/contact.php" method="post">

                        <input class="contact-input white-input" required="" name="contact_names" placeholder="Full Name*" type="text">

                        <input class="contact-input white-input" required="" name="contact_email" placeholder="Email Adress*" type="email">

                        <input class="contact-input white-input" required="" name="contact_phone" placeholder="Phone Number*" type="text">

                        <textarea class="contact-commnent white-input" rows="2" cols="20" name="contact_message" placeholder="Your Message..."></textarea>

                        <input value="Send Message" id="submit-button" class="contact-submit" type="submit">

                    </form>
                    <!--end contact form -->

                </div>
                <!--end col-md-6 -->

                <!--begin col-md-6 -->
                <div class="col-md-6">

                    <h4>How to find us</h4>

                    <iframe class="contact-maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.9050207912896!2d-0.14675028449633118!3d51.514958479636384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ad554c335c1%3A0xda2164b934c67c1a!2sOxford+St%2C+London%2C+UK!5e0!3m2!1sen!2sro!4v1485889312335" width="600" height="270" style="border:0" allowfullscreen></iframe>

                    <h5>Head Office</h5>

                    <p class="contact-info"><i class="fa fa-map-o"></i> Mapleton, Utah 84664</p>

                    <p class="contact-info"><i class="fa fa-envelope-o"></i> <a href="mailto:contact@email.com">support@referral-pal.com</a></p>

                    <p class="contact-info"><i class="fa fa-phone"></i> 479-216-3642</p>

                </div>
                <!--end col-md-6 -->

            </div>
            <!--end row-->

      </div>
      <!--end container-->

    </section>
    <!--end contact-->

@endsection

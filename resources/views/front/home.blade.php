@extends('front.layouts.app')

@section('content')

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
                            <span class="fa fa-laptop features_icons"></span>
                        </div>

                        <div class="text_align_right">
                            <h4>Responsive Layout</h4>
                            <p>Quis autem velis etis netsum etims quis voluptate velit nihil est netsum et quam donecs netis de etsum nisle lorem.</p>
                        </div>

                    </div>
                    <!--end features_item -->

                    <!--begin features_item -->
                    <div class="features_item">

                        <div class="dropcaps_right">
                            <span class="fa fa-code features_icons"></span>
                        </div>

                        <div class="text_align_right">
                            <h4>Clean Code</h4>
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
                            <h4>Retina Ready</h4>
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
                            <span class="fa fa-leaf features_icons"></span>
                        </div>

                        <div class="text_align_left">
                            <h4>Modern Design</h4>
                            <p>Quis autem velis etis netsum etims quis voluptate velit nihil est netsum et quam donecs netis de etsum nisle lorem.</p>
                        </div>

                    </div>
                    <!--end features_item -->

                    <!--begin features_item -->
                    <div class="features_item">

                        <div class="dropcaps_left">
                            <span class="fa fa-rocket features_icons"></span>
                        </div>

                        <div class="text_align_left">
                            <h4>Premium Features</h4>
                           <p>Quis autem velis etis netsum etims quis voluptate velit nihil est netsum et quam donecs netis de etsum nisle lorem.</p>
                        </div>

                    </div>
                    <!--end features_item -->

                    <!--begin features_item -->
                    <div class="features_item">

                        <div class="dropcaps_left">
                            <span class="fa fa-comments features_icons"></span>
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

    <!--begin video-wrapper -->
    {{-- <section class="video-wrapper">

        <div class="video-wrapper-overlay"></div>

        <div class="shape-image-top"></div>

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-12-->
                <div class="col-md-12 text-center">

                    <!--begin popup-gallery-->
                    <div class="popup-gallery">
                        <a class="popup4 video-icon" href="https://www.youtube.com/watch?v=FPfQMVf4vwQ"><i class="fa fa-play"></i></a>
                    </div>
                    <!--end popup-gallery-->

                    <h3 class="video-title white">Watch Demo Video<br><span>Amazing Features, Unlimited Possibilities.</span></h3>

                </div>
                <!--end col-md-12-->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section> --}}
    <!--end video-wrapper -->

    <!--begin faq section -->
    <section class="section-white small-padding-bottom">

        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row">

                <!--begin col-md-6-->
                <div class="col-md-6 margin-top-10">

                    <img src="http://placehold.it/555x421" alt="picture" class="width-100">

                </div>
                <!--end col-sm-6-->

                <!--begin col-md-6-->
                <div class="col-md-6 margin-top-10">

                    <h3>Frequently Asked Questions</h3>

                    <!--begin panel-group -->
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <!--begin panel-default -->
                        <div class="panel panel-default">

                            <div class="panel-heading" role="tab" id="headingOne">

                                <h4 class="panel-title">

                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      <i class="icon icon-rocket panel-icon"></i> What's the difference between organic vs. paid results?
                                    </a>

                                </h4>

                            </div>

                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">

                                <div class="panel-body">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur netsum loris fugit, sed quia magni dolores eos qui ratione sequi nesciunt, neque et quis autem velis reprehenderit ets quis velit.</p>
                                </div>

                            </div>

                        </div>
                        <!--end panel-default -->

                        <!--begin panel-default -->
                        <div class="panel panel-default">

                            <div class="panel-heading" role="tab" id="headingTwo">

                                <h4 class="panel-title">

                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      <i class="icon icon-prize-award panel-icon"></i> Should I optimize my domain name to include keywords?
                                    </a>

                                </h4>

                            </div>

                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">

                                <div class="panel-body">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur netsum loris fugit, sed quia magni dolores eos qui ratione sequi nesciunt, neque et quis autem velis reprehenderit ets quis velit.</p>
                                </div>

                            </div>

                        </div>
                        <!--end panel-default -->

                        <!--begin panel-default -->
                        <div class="panel panel-default">

                            <div class="panel-heading" role="tab" id="headingThree">

                                <h4 class="panel-title">

                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      <i class="icon icon-present-gift panel-icon"></i> What is the difference between indexed and crawling?
                                    </a>

                                </h4>

                            </div>

                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">

                                <div class="panel-body">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur netsum loris fugit, sed quia magni dolores eos qui ratione sequi nesciunt, neque et quis autem velis reprehenderit ets quis velit.</p>
                                </div>

                            </div>

                        </div>
                        <!--end panel-default -->

                        <!--begin panel-default -->
                        <div class="panel panel-default">

                            <div class="panel-heading" role="tab" id="headingFour">

                                <h4 class="panel-title">

                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                      <i class="icon icon-present-gift panel-icon"></i> What is the difference between indexed and crawling?
                                    </a>

                                </h4>

                            </div>

                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">

                                <div class="panel-body">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur netsum loris fugit, sed quia magni dolores eos qui ratione sequi nesciunt, neque et quis autem velis reprehenderit ets quis velit.</p>
                                </div>

                            </div>

                        </div>
                        <!--end panel-default -->

                    </div>
                    <!--end panel-group -->

                </div>
                <!--end col-sm-6-->

            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </section>
    <!--end faq section -->

    <!--begin team section -->
    {{-- <section class="top-shape-wrapper">

        <!--begin top-shape section -->
        <div class="top-shape" id="team">

            <!--begin container-->
            <div class="container">

                <!--begin row-->
                <div class="row">

                    <!--begin col-md-12 -->
                    <div class="col-md-12 text-center">

                        <h2 class="section-title">The Team Behind Referral Pal</h2>

                        <p class="section-subtitle">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>

                    </div>
                    <!--end col-md-12 -->

                    <!--begin team-item -->
                    <div class="col-sm-12 col-md-4">

                        <div class="team-item">

                            <img src="http://placehold.it/200x200" class="team-img" alt="pic">

                            <h3>JOHNATHAN HAWKINS</h3>

                            <div class="team-info"><p>Head of SEO</p></div>

                            <p>Johnathan is our  co-founder and has developed search strategies for a variety of clients for over 5 years.</p>

                            <ul class="team-icon">

                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>

                                <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>

                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>

                                <li><a href="#" class="dribble"><i class="fa fa-dribbble"></i></a></li>

                            </ul>

                        </div>

                    </div>
                    <!--end team-item -->

                    <!--begin team-item -->
                    <div class="col-sm-12 col-md-4">

                        <div class="team-item">

                            <img src="http://placehold.it/200x200" class="team-img" alt="pic">

                            <h3>ALEXANDRA SMITHS</h3>

                            <div class="team-info"><p>SEO Specialist</p></div>

                            <p>Graduating with a degree in Spanish, English and French, Alexandra has always loved writing.</p>

                            <ul class="team-icon">

                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>

                                <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>

                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>

                                <li><a href="#" class="dribble"><i class="fa fa-dribbble"></i></a></li>

                            </ul>

                        </div>

                    </div>
                    <!--end team-item -->

                    <!--begin team-item -->
                    <div class="col-sm-12 col-md-4">

                        <div class="team-item">

                            <img src="http://placehold.it/200x200" class="team-img" alt="pic">

                            <h3>ANDRES JOHANSON</h3>

                            <div class="team-info"><p>Marketing Manager</p></div>

                            <p>Andres fell in love with marketing at the university and looks forward to being part of this industry for many years.</p>

                            <ul class="team-icon">

                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>

                                <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>

                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>

                                <li><a href="#" class="dribble"><i class="fa fa-dribbble"></i></a></li>

                            </ul>

                        </div>

                    </div>
                    <!--end team-item -->

                </div>
                <!--end row-->

            </div>
            <!--end container-->

        </div>
        <!--end top-shape section -->

    </section> --}}
    <!--end team section -->

    <!--begin gallery section -->
    <section class="section-lyla" id="gallery">

        <!--begin container -->
        <div class="container-fluid ">

            <!--begin row -->
            <div class="row">

                <!--begin col md 12 -->
                <div class="col-md-12 text-center">

                    <h2 class="section-title white">Explore Latest Projects</h2>

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

    <!--begin partners section -->
    {{-- <section class="section-grey partners-paddings">

        <div class="container">

            <div class="row">

                <div class="col-md-3">
                    <h4 class="our-partners-title">Our Amazing Partners<br><span>We’ve built apps featured on:</span></h4>
                </div>

                <div class="col-md-9">

                    <!--begin partners-mentions -->
                    <ul class="partners-mentions">

                        <li><img src="{{ asset('assets/images/front/award4a.png') }}" alt="CSS Awards"></li>

                        <li><img src="{{ asset('assets/images/front/award1a.png') }}" alt="Awwwards"></li>

                        <li><img src="{{ asset('assets/images/front/award5.png') }}" alt="CSS Winner"></li>

                        <li><img src="{{ asset('assets/images/front/award3a.png') }}" alt="CSS Design Awards"></li>

                    </ul>
                    <!--end partners-mentions -->

                </div>

            </div>

        </div>

    </section> --}}
    <!--end partners section -->

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

                    <p class="contact-info"><i class="fa fa-map-o"></i> 10 Oxford Street, London, UK, E1 1EC</p>

                    <p class="contact-info"><i class="fa fa-envelope-o"></i> <a href="mailto:contact@email.com">office@amazing-apps.co.uk</a></p>

                    <p class="contact-info"><i class="fa fa-phone"></i> +44 987 654 321</p>

                </div>
                <!--end col-md-6 -->

            </div>
            <!--end row-->

      </div>
      <!--end container-->

    </section>
    <!--end contact-->

@endsection

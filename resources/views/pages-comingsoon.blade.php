@extends('layouts.master-without-nav')

@section('title')
Comming soon
@endsection

@section('content')

<div class="home-btn d-none d-sm-block">
            <a href="index" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>

        <!-- Begin page -->
        <div class="authentication-bg d-flex align-items-center pb-0 vh-100">
            <div class="content-center w-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="home-wrapper text-center">
                                    <img src="assets/images/logo-dark.png" alt="logo" height="30" />
                                    <h3 class="mt-4">Let's get started with Referral Pal</h3>
                                    <p class="mb-5">It will be as simple as Occidental in fact it will be Occidental.</p>
    
                                    <div class="row justify-content-center mt-5">
                                        <div class="col-md-8">
                                            <div data-countdown="2020/12/31" class="counter-number"></div>
                                        </div> <!-- end col-->
                                    </div>
    
                                    <div class="text-center coming-soon-search-form pt-4">
                                        <form action="#">
                                            <input type="text" placeholder="Enter email address">
                                            <button type="submit" class="btn btn-primary">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- end home wrapper -->
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </div>
            </div>

@endsection

@section('script')
        <!-- Plugins js-->
        <script src="{{ URL::asset('assets/libs/jquery-countdown/jquery-countdown.min.js')}}"></script>

        <!-- Countdown js -->
        <script src="{{ URL::asset('assets/js/pages/coming-soon.init.js')}}"></script>
@endsection

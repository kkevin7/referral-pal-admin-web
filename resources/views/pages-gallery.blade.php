@extends('layouts.master')

@section('css')
        <!-- Lightbox css -->
        <link href="{{ URL::asset('assets/libs/magnific-popup/magnific-popup.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

                        <!-- start page title -->
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <div class="page-title-box">
                                    <h4 class="font-size-18">Gallery</h4>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Extra Pages</a></li>
                                        <li class="breadcrumb-item active">Gallery</li>
                                    </ol>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="float-right d-none d-md-block">
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi mdi-settings mr-2"></i> Settings
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <a href="assets/images/gallery/work-1.jpg" class="gallery-popup" title="Open Imagination">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="assets/images/gallery/work-1.jpg" alt="img" class="gallery-thumb-img">
                                            <div class="project-item-overlay">
                                                <h4>Open Imagination</h4>
                                                <p>
                                                    <img src="assets/images/users/user-1.jpg" alt="user" class="avatar-sm rounded-circle" />
                                                    <span class="ml-2">Curtis Marion</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <a href="assets/images/gallery/work-2.jpg" class="gallery-popup" title="Locked Steel Gate">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="assets/images/gallery/work-2.jpg" alt="img" class="gallery-thumb-img">
                                            <div class="project-item-overlay">
                                                <h4>Locked Steel Gate</h4>
                                                <p>
                                                    <img src="assets/images/users/user-2.jpg" alt="user" class="avatar-sm rounded-circle" />
                                                    <span class="ml-2">Curtis Marion</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <a href="assets/images/gallery/work-3.jpg" class="gallery-popup" title="Mac Sunglasses">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="assets/images/gallery/work-3.jpg" alt="img" class="gallery-thumb-img">
                                            <div class="project-item-overlay">
                                                <h4>Mac Sunglasses</h4>
                                                <p>
                                                    <img src="assets/images/users/user-3.jpg" alt="user" class="avatar-sm rounded-circle" />
                                                    <span class="ml-2">Curtis Marion</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <a href="assets/images/gallery/work-4.jpg" class="gallery-popup" title="Morning Dew">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="assets/images/gallery/work-4.jpg" alt="img" class="gallery-thumb-img">
                                            <div class="project-item-overlay">
                                                <h4>Morning Dew</h4>
                                                <p>
                                                    <img src="assets/images/users/user-4.jpg" alt="user" class="avatar-sm rounded-circle" />
                                                    <span class="ml-2">Curtis Marion</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <a href="assets/images/gallery/work-5.jpg" class="gallery-popup" title="Console Activity">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="assets/images/gallery/work-5.jpg" alt="img" class="gallery-thumb-img">
                                            <div class="project-item-overlay">
                                                <h4>Console Activity</h4>
                                                <p>
                                                    <img src="assets/images/users/user-5.jpg" alt="user" class="avatar-sm rounded-circle" />
                                                    <span class="ml-2">Curtis Marion</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <a href="assets/images/gallery/work-6.jpg" class="gallery-popup" title="Shake It!">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="assets/images/gallery/work-6.jpg" alt="img" class="gallery-thumb-img">
                                            <div class="project-item-overlay">
                                                <h4>Shake It!</h4>
                                                <p>
                                                    <img src="assets/images/users/user-6.jpg" alt="user" class="avatar-sm rounded-circle" />
                                                    <span class="ml-2">Curtis Marion</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <a href="assets/images/gallery/work-7.jpg" class="gallery-popup" title="Backpack Content">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="assets/images/gallery/work-7.jpg" alt="img" class="gallery-thumb-img">
                                            <div class="project-item-overlay">
                                                <h4>Backpack Content</h4>
                                                <p>
                                                    <img src="assets/images/users/user-1.jpg" alt="user" class="avatar-sm rounded-circle" />
                                                    <span class="ml-2">Curtis Marion</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <a href="assets/images/gallery/work-8.jpg" class="gallery-popup" title="Sunset Bulb Glow">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="assets/images/gallery/work-8.jpg" alt="img" class="gallery-thumb-img">
                                            <div class="project-item-overlay">
                                                <h4>Sunset Bulb Glow</h4>
                                                <p>
                                                    <img src="assets/images/users/user-2.jpg" alt="user" class="avatar-sm rounded-circle" />
                                                    <span class="ml-2">Curtis Marion</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <a href="assets/images/gallery/work-9.jpg" class="gallery-popup" title="Open Imagination">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="assets/images/gallery/work-9.jpg" alt="img" class="gallery-thumb-img">
                                            <div class="project-item-overlay">
                                                <h4>Open Imagination</h4>
                                                <p>
                                                    <img src="assets/images/users/user-3.jpg" alt="user" class="avatar-sm rounded-circle" />
                                                    <span class="ml-2">Curtis Marion</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <a href="assets/images/gallery/work-10.jpg" class="gallery-popup" title="Console Activity">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="assets/images/gallery/work-10.jpg" alt="img" class="gallery-thumb-img">
                                            <div class="project-item-overlay">
                                                <h4>Console Activity</h4>
                                                <p>
                                                    <img src="assets/images/users/user-4.jpg" alt="user" class="avatar-sm rounded-circle" />
                                                    <span class="ml-2">Curtis Marion</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <a href="assets/images/gallery/work-11.jpg" class="gallery-popup" title="Open Imagination">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="assets/images/gallery/work-11.jpg" alt="img" class="gallery-thumb-img">
                                            <div class="project-item-overlay">
                                                <h4>Open Imagination</h4>
                                                <p>
                                                    <img src="assets/images/users/user-5.jpg" alt="user" class="avatar-sm rounded-circle" />
                                                    <span class="ml-2">Curtis Marion</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <a href="assets/images/gallery/work-12.jpg" class="gallery-popup" title="Shake It!">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="assets/images/gallery/work-12.jpg" alt="img" class="gallery-thumb-img">
                                            <div class="project-item-overlay">
                                                <h4>Shake It!</h4>
                                                <p>
                                                    <img src="assets/images/users/user-6.jpg" alt="user" class="avatar-sm rounded-circle" />
                                                    <span class="ml-2">Curtis Marion</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

@endsection

@section('script')
        <!-- Plugins js -->
        <script src="{{ URL::asset('assets/libs/magnific-popup/magnific-popup.min.js')}}"></script>

        <script src="{{ URL::asset('assets/js/pages/gallery.init.js')}}"></script>

@endsection
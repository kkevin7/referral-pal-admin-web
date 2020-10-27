@extends('layouts.master')

@section('content')

                        <!-- start page title -->
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <div class="page-title-box">
                                    <h4 class="font-size-18">Sparkline Chart</h4>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Referral Pal</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
                                        <li class="breadcrumb-item active">Sparkline Chart</li>
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
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Pie Chart</h4>
                                        <div id="sparkline1" class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Bar Chart</h4>
                                        <div id="sparkline2" class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body analytics-info">
                                        <h4 class="card-title">Line Chart</h4>
                                        <div id="sparkline4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Composite Bar Chart</h4>
                                        <div id="sparkline3" class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Line Charts</h4>
                                        <div id="sparkline5" class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card bg-success mb-4">
                                    <div class="card-body">
                                        <h4 class="card-title text-white">Discrete Chart</h4>
                                        <div id="sparkline6" class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Bullet Chart</h4>
                                        <div id="sparkline7"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Box Plot Chart</h4>
                                        <div id="sparkline8" class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Tristate Charts</h4>
                                        <div id="sparkline9" class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

@endsection

@section('script')
        <script src="{{ URL::asset('assets/libs/jquery-sparkline/jquery-sparkline.min.js')}}"></script>

        <!-- demo js -->
        <script src="{{ URL::asset('assets/js/pages/sparklines.init.js')}}"></script>
@endsection
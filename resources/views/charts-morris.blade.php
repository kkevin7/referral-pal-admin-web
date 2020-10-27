@extends('layouts.master')

@section('content')

                        <!-- start page title -->
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <div class="page-title-box">
                                    <h4 class="font-size-18">Morris Chart</h4>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Referral Pal</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
                                        <li class="breadcrumb-item active">Morris Chart</li>
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
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title mb-4">Line Chart</h4>

                                        <div class="row justify-content-center">
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">25610</h5>
                                                <p class="text-muted">Activated</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">56210</h5>
                                                    <p class="text-muted">Pending</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">12485</h5>
                                                <p class="text-muted">Deactivated</p>
                                                </div>
                                            </div>
                                        </div>
                                        
        
                                        <div id="morris-line-example" class="morris-charts morris-chart-height" dir="ltr"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title mb-4">Bar Chart</h4>

                                        <div class="row justify-content-center">
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">6,95,412</h5>
                                                <p class="text-muted">Activated</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">1,63,542</h5>
                                                    <p class="text-muted">Pending</p>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div id="morris-bar-example" class="morris-charts morris-chart-height" dir="ltr"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title mb-4">Area Chart</h4>

                                        <div class="row justify-content-center">
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">86541</h5>
                                                <p class="text-muted">Activated</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">2541</h5>
                                                    <p class="text-muted">Pending</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">102030</h5>
                                                <p class="text-muted">Deactivated</p>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div id="morris-area-example" class="morris-charts morris-chart-height" dir="ltr"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title mb-4">Donut Chart</h4>


                                        <div class="row justify-content-center">
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">3201</h5>
                                                <p class="text-muted">Activated</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">85120</h5>
                                                    <p class="text-muted">Pending</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">65214</h5>
                                                <p class="text-muted">Deactivated</p>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div id="morris-donut-example" class="morris-charts morris-chart-height" dir="ltr"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title mb-4">Area Chart</h4>

                                        <div class="row justify-content-center">
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">86541</h5>
                                                <p class="text-muted">Activated</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">2541</h5>
                                                    <p class="text-muted">Pending</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">102030</h5>
                                                <p class="text-muted">Deactivated</p>
                                                </div>
                                            </div>
                                        </div>
        
                                        
        
                                        <div id="morris-bar-stacked" class="morris-charts morris-chart-height" dir="ltr"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                        </div> <!-- end row -->

@endsection

@section('script')
        <!-- Morris Chart -->
        <script src="{{ URL::asset('assets/libs/morris-js/morris-js.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/raphael/raphael.min.js')}}"></script>

        <!-- demo js -->
        <script src="{{ URL::asset('assets/js/pages/morris.init.js')}}"></script>
@endsection
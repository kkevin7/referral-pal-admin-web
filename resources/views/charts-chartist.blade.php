@extends('layouts.master')

@section('css')
        <!-- Plugin css -->
        <link href="{{ URL::asset('assets/libs/chartist/chartist.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

                        <!-- start page title -->
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <div class="page-title-box">
                                    <h4 class="font-size-18">Chartist Chart</h4>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Referral Pal</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Chartist Chart</li>
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
        
                                        <h4 class="card-title mb-4">Overlapping bars on mobile</h4>

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
        
                                        <div id="overlapping-bars" class="ct-chart ct-golden-section" dir="ltr"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title mb-4">Stacked bar chart</h4>

                                        <div class="row justify-content-center">
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">5241</h5>
                                                <p class="text-muted">Activated</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">65411</h5>
                                                    <p class="text-muted">Pending</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">51654</h5>
                                                <p class="text-muted">Deactivated</p>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div id="stacked-bar-chart" class="ct-chart ct-golden-section" dir="ltr"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title mb-4">Animating a Donut with Svg.animate</h4>

                                        <div class="row justify-content-center">
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">748949</h5>
                                                <p class="text-muted">Activated</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">5181</h5>
                                                    <p class="text-muted">Pending</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">101025</h5>
                                                <p class="text-muted">Deactivated</p>
                                                </div>
                                            </div>
                                        </div>
                                
        
                                        <div id="animating-donut" class="ct-chart ct-golden-section" dir="ltr"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title mb-4">Simple pie chart</h4>

                                        <div class="row justify-content-center">
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">48484</h5>
                                                <p class="text-muted">Activated</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">48652</h5>
                                                    <p class="text-muted">Pending</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">85412</h5>
                                                <p class="text-muted">Deactivated</p>
                                                </div>
                                            </div>
                                        </div>

        
                                        <div id="simple-pie" class="ct-chart ct-golden-section simple-pie-chart-chartist" dir="ltr"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title mb-4">Advanced Smil Animations</h4>


                                        <div class="row justify-content-center">
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">45410</h5>
                                                <p class="text-muted">Activated</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">4442</h5>
                                                    <p class="text-muted">Pending</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">3201</h5>
                                                <p class="text-muted">Deactivated</p>
                                                </div>
                                            </div>
                                        </div>
                                    
        
                                        <div id="smil-animations" class="ct-chart ct-golden-section" dir="ltr"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title mb-4">Simple line chart</h4>

                                        <div class="row justify-content-center">
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">44242</h5>
                                                <p class="text-muted">Activated</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">75221</h5>
                                                    <p class="text-muted">Pending</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">65212</h5>
                                                <p class="text-muted">Deactivated</p>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div id="simple-line-chart" class="ct-chart ct-golden-section" dir="ltr"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title mb-4">Line Scatter Diagram</h4>

                                        <div class="row justify-content-center">
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">5677</h5>
                                                <p class="text-muted">Activated</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">5542</h5>
                                                    <p class="text-muted">Pending</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">12422</h5>
                                                <p class="text-muted">Deactivated</p>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div id="scatter-diagram" class="ct-chart ct-golden-section" dir="ltr"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title mb-4">Line chart with area</h4>

                                        <div class="row justify-content-center">
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">4234</h5>
                                                <p class="text-muted">Activated</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">64521</h5>
                                                    <p class="text-muted">Pending</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">94521</h5>
                                                <p class="text-muted">Deactivated</p>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div id="chart-with-area" class="ct-chart ct-golden-section" dir="ltr"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
@endsection

@section('script')
        <!-- plugin js -->
        <script src="{{ URL::asset('assets/libs/chartist/chartist.min.js')}}"></script>

        <!-- demo js -->
        <script src="{{ URL::asset('assets/js/pages/chartist.init.js')}}"></script>
@endsection
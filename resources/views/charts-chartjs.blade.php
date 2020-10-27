@extends('layouts.master')

@section('content')

                        <!-- start page title -->
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <div class="page-title-box">
                                    <h4 class="font-size-18">Chartjs</h4>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
                                        <li class="breadcrumb-item active">Chartjs</li>
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
        
                                        <canvas id="lineChart" height="300"></canvas>
        
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
                                                    <h5 class="mb-0 font-size-20">2541</h5>
                                                <p class="text-muted">Activated</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">84845</h5>
                                                    <p class="text-muted">Pending</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">12001</h5>
                                                <p class="text-muted">Deactivated</p>
                                                </div>
                                            </div>
                                        </div>
        
                                        <canvas id="bar" height="300"></canvas>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title mb-4">Pie Chart</h4>

                                        <div class="row justify-content-center">
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">2536</h5>
                                                <p class="text-muted">Activated</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">69421</h5>
                                                    <p class="text-muted">Pending</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">89854</h5>
                                                <p class="text-muted">Deactivated</p>
                                                </div>
                                            </div>
                                        </div>
        
                                        <canvas id="pie" height="260"></canvas>
        
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
                                                    <h5 class="mb-0 font-size-20">9595</h5>
                                                <p class="text-muted">Activated</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">36524</h5>
                                                    <p class="text-muted">Pending</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">62541</h5>
                                                <p class="text-muted">Deactivated</p>
                                                </div>
                                            </div>
                                        </div>
        
                                        <canvas id="doughnut" height="260"></canvas>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title mb-4">Polar Chart</h4>

                                        <div class="row justify-content-center">
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">4852</h5>
                                                <p class="text-muted">Activated</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">3652</h5>
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
        
                                        <canvas id="polarArea" height="300"> </canvas>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title mb-4">Radar Chart</h4>

                                        <div class="row justify-content-center">
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">694</h5>
                                                <p class="text-muted">Activated</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">55210</h5>
                                                    <p class="text-muted">Pending</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <h5 class="mb-0 font-size-20">489498</h5>
                                                <p class="text-muted">Deactivated</p>
                                                </div>
                                            </div>
                                        </div>
        
                                        <canvas id="radar" height="300"></canvas>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

@endsection

@section('script')
        <!-- plugin js -->
        <script src="{{ URL::asset('assets/libs/chart-js/chart-js.min.js')}}"></script>

        <!-- demo js -->
        <script src="{{ URL::asset('assets/js/pages/chartjs.init.js')}}"></script>
@endsection
@extends('layouts.master')

@section('css')
        <!-- ION Slider -->        
        <link href="{{ URL::asset('assets/libs/ion-rangeslider/ion-rangeslider.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

                        <!-- start page title -->
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <div class="page-title-box">
                                    <h4 class="font-size-18">Range Slider</h4>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Referral Pal</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                                        <li class="breadcrumb-item active">Range Slider</li>
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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">ION Range slider</h4>
                                        <p class="card-title-desc">Cool, comfortable, responsive and easily customizable range slider</p>
        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="p-3">
                                                    <h5 class="font-size-14 mb-3 mt-0">Default</h5>
                                                    <input type="text" id="range_01">
                                                </div>
                                            </div>
        
                                            <div class="col-md-6">
                                                <div class="p-3">
                                                    <h5 class="font-size-14 mb-3 mt-0">Min-Max</h5>
                                                    <input type="text" id="range_02">
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="p-3">
                                                    <h5 class="font-size-14 mb-3 mt-0">Prefix</h5>
                                                    <input type="text" id="range_03">
                                                </div>
                                            </div>
        
                                            <div class="col-md-6">
                                                <div class="p-3">
                                                    <h5 class="font-size-14 mb-3 mt-0">Range</h5>
                                                    <input type="text" id="range_04">
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="p-3">
                                                    <h5 class="font-size-14 mb-3 mt-0">Step</h5>
                                                    <input type="text" id="range_05">
                                                </div>
                                            </div>
        
                                            <div class="col-md-6">
                                                <div class="p-3">
                                                    <h5 class="font-size-14 mb-3 mt-0">Custom Values</h5>
                                                    <input type="text" id="range_06">
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="p-3">
                                                    <h5 class="font-size-14 mb-3 mt-0">Prettify Numbers</h5>
                                                    <input type="text" id="range_07">
                                                </div>
                                            </div>
        
                                            <div class="col-md-6">
                                                <div class="p-3">
                                                    <h5 class="font-size-14 mb-3 mt-0">Disabled</h5>
                                                    <input type="text" id="range_08">
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="p-3">
                                                    <h5 class="font-size-14 mb-3 mt-0">Extra Example</h5>
                                                    <input type="text" id="range_09">
                                                </div>
                                            </div>
        
                                            <div class="col-md-6">
                                                <div class="p-3">
                                                    <h5 class="font-size-14 mb-3 mt-0">Use decorate_both option</h5>
                                                    <input type="text" id="range_10">
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="p-3">
                                                    <h5 class="font-size-14 mb-3 mt-0">Postfixes</h5>
                                                    <input type="text" id="range_11">
                                                </div>
                                            </div>
        
                                            <div class="col-md-6">
                                                <div class="p-3">
                                                    <h5 class="font-size-14 mb-3 mt-0">Hide</h5>
                                                    <input type="text" id="range_12">
                                                </div>
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

@endsection

@section('script')
        <!-- Plugins js -->
        <script src="{{ URL::asset('assets/libs/ion-rangeslider/ion-rangeslider.min.js')}}"></script>

        <script src="{{ URL::asset('assets/js/pages/range-sliders.init.js')}}"></script>
@endsection
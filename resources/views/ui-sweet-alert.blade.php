@extends('layouts.master')

@section('css')
        <!-- ION Slider -->        
        <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
                        <!-- start page title -->
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <div class="page-title-box">
                                    <h4 class="font-size-18">SweetAlert 2</h4>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                                        <li class="breadcrumb-item active">SweetAlert 2</li>
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
        
                                        <h4 class="card-title">Examples</h4>
                                        <p class="card-title-desc">A beautiful, responsive, customizable
                                            and accessible (WAI-ARIA) replacement for JavaScript's popup boxes. Zero
                                            dependencies.</p>
        
                                        <div class="row text-center">
                                            <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                                <p>A basic message</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-basic">Click me</button>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                                <p>A title with a text under</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-title">Click me</button>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                                <p>A success message!</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-success">Click me</button>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                                <p>A warning message, with a function attached to the "Confirm"-button...</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-warning">Click me</button>
                                            </div>
        
                                            <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                                <p>By passing a parameter, you can execute something else for "Cancel".</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-params">Click me</button>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                                <p>A message with custom Image Header</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-image">Click me</button>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                                <p>A message with auto close timer</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-close">Click me</button>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                                <p>Custom HTML description and buttons</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="custom-html-alert">Click me</button>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                                <p>A message with custom width, padding and background</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="custom-padding-width-alert">Click me</button>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                                <p>Ajax request example</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="ajax-alert">Click me</button>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                                <p>Chaining modals (queue) example</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="chaining-alert">Click me</button>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                                <p>Dynamic queue example</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="dynamic-alert">Click me</button>
                                            </div>
        
                                        </div> <!-- end row -->
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->  

@endsection

@section('script')
        <!-- Plugins js -->
        <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

        <script src="{{ URL::asset('assets/js/pages/sweet-alerts.init.js')}}"></script>
@endsection
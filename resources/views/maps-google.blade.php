
@extends('layouts.master')

@section('content')
                        <!-- start page title -->
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <div class="page-title-box">
                                    <h4 class="font-size-18">Google Map</h4>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Maps</a></li>
                                        <li class="breadcrumb-item active">Google Map</li>
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
                                        <h4 class="card-title">Markers</h4>
                                        <p class="card-title-desc">Example of google maps.</p>
                                        <div id="gmaps-markers" class="gmaps"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Overlays</h4>
                                        <p class="card-title-desc">Example of google maps.</p>
                                        <div id="gmaps-overlay" class="gmaps"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Street View Panoramas</h4>
                                        <p class="card-title-desc">Example of google maps.</p>
                                        <div id="panorama" class="gmaps-panaroma"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Map Types</h4>
                                        <p class="card-title-desc">Example of google maps.</p>
                                        <div id="gmaps-types" class="gmaps"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->        
@endsection

@section('script')
        <!-- Plugins js -->
        <script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>
        <script src="{{ URL::asset('assets/libs/gmaps/gmaps.min.js')}}"></script>

        <script src="{{ URL::asset('assets/js/pages/gmaps.init.js')}}"></script>
@endsection
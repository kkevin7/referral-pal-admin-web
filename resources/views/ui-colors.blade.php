@extends('layouts.master')

@section('content')

                        <!-- start page title -->
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <div class="page-title-box">
                                    <h4 class="font-size-18">Colors</h4>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Referral Pal</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                                        <li class="breadcrumb-item active">Colors</li>
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
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="color-box p-4 rounded bg-primary">
                                            <h5 class="my-2 text-white">#626ed4</h5>
                                        </div>
                                        <h5 class="mb-0 mt-4 text-primary text-center font-size-18">Primary</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="color-box p-4 rounded bg-success">
                                            <h5 class="my-2 text-white">#02a499</h5>
                                        </div>
                                        <h5 class="mb-0 mt-4 text-success text-center font-size-18">Success</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="color-box p-4 rounded bg-info">
                                            <h5 class="my-2 text-white">#38a4f8</h5>
                                        </div>
                                        <h5 class="mb-0 mt-4 text-info text-center font-size-18">Info</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="color-box p-4 rounded bg-warning">
                                            <h5 class="my-2 text-white">#f8b425</h5>
                                        </div>
                                        <h5 class="mb-0 mt-4 text-warning text-center font-size-18">Warning</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="color-box p-4 rounded bg-danger">
                                            <h5 class="my-2 text-white">#ec4561</h5>
                                        </div>
                                        <h5 class="mb-0 mt-4 text-danger text-center font-size-18">Danger</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="color-box p-4 rounded bg-dark">
                                            <h5 class="my-2 text-white">#343a40</h5>
                                        </div>
                                        <h5 class="mb-0 mt-4 text-dark text-center font-size-18">Dark</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="color-box p-4 rounded bg-secondary">
                                            <h5 class="my-2 text-white">#6c757d</h5>
                                        </div>
                                        <h5 class="mb-0 mt-4 text-muted text-center font-size-18">Secondary</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

@endsection
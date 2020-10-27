@extends('layouts.master')

@section('content')

                        <!-- start page title -->
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <div class="page-title-box">
                                    <h4 class="font-size-18">Form Masks</h4>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Referral Pal</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Form Masks</li>
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
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Example</h4>
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div>
                                                        <div class="form-group mb-4">
                                                            <label for="input-date1">Date Style 1</label>
                                                            <input id="input-date1" class="form-control input-mask" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy">
                                                            <span class="text-muted">e.g "dd/mm/yyyy"</span>
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <label for="input-date2">Date Style 2</label>
                                                            <input id="input-date2" class="form-control input-mask" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="mm/dd/yyyy">
                                                            <span class="text-muted">e.g "mm/dd/yyyy"</span>
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <label for="input-datetime">Date time</label>
                                                            <input id="input-datetime" class="form-control input-mask" data-inputmask="'alias': 'datetime'">
                                                            <span class="text-muted">e.g "yyyy-mm-dd'T'HH:MM:ss"</span>
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <label for="input-currency">Currency:</label>
                                                            <input id="input-currency" class="form-control input-mask text-left" data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'digits': 2, 'digitsOptional': false, 'prefix': '$ ', 'placeholder': '0'">
                                                            <span class="text-muted">e.g "$ 0.00"</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mt-4 mt-lg-0">
                                                        <div class="form-group mb-4">
                                                            <label for="input-repeat">repeat:</label>
                                                            <input id="input-repeat" class="form-control input-mask" data-inputmask="'mask': '9', 'repeat': 10, 'greedy' : false" >
                                                            <span class="text-muted">e.g "9999999999"</span>
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <label for="input-mask">Mask</label>
                                                            <input id="input-mask" class="form-control input-mask" data-inputmask="'mask': '99-9999999'">
                                                            <span class="text-muted">e.g "99-9999999"</span>
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <label for="input-ip">IP address</label>
                                                            <input id="input-ip" class="form-control input-mask" data-inputmask="'alias': 'ip'">
                                                            <span class="text-muted">e.g "99.99.99.99"</span>
    
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <label for="input-email">Email address::</label>
                                                            <input id="input-email" class="form-control input-mask" data-inputmask="'alias': 'email'">
                                                            <span class="text-muted">_@_._</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

@endsection

@section('script')
        <!-- form mask -->
        <script src="{{ URL::asset('assets/libs/inputmask/inputmask.min.js')}}"></script>

        <!-- form mask js -->
        <script src="{{ URL::asset('assets/js/pages/form-mask.init.js')}}"></script>
@endsection
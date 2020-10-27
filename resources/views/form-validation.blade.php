@extends('layouts.master')

@section('content')

                        <!-- start page title -->
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <div class="page-title-box">
                                    <h4 class="font-size-18">Form Validation</h4>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Form Validation</li>
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
        
                                        <h4 class="card-title">Validation type</h4>
                                        <p class="card-title-desc">Parsley is a javascript form validation
                                            library. It helps you provide your users with feedback on their form
                                            submission before sending it to your server.</p>
        
                                        <form class="custom-validation" action="#">
                                            <div class="form-group">
                                                <label>Required</label>
                                                <input type="text" class="form-control" required placeholder="Type something"/>
                                            </div>
        
                                            <div class="form-group">
                                                <label>Equal To</label>
                                                <div>
                                                    <input type="password" id="pass2" class="form-control" required
                                                            placeholder="Password"/>
                                                </div>
                                                <div class="mt-2">
                                                    <input type="password" class="form-control" required
                                                            data-parsley-equalto="#pass2"
                                                            placeholder="Re-Type Password"/>
                                                </div>
                                            </div>
        
                                            <div class="form-group">
                                                <label>E-Mail</label>
                                                <div>
                                                    <input type="email" class="form-control" required
                                                            parsley-type="email" placeholder="Enter a valid e-mail"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>URL</label>
                                                <div>
                                                    <input parsley-type="url" type="url" class="form-control"
                                                            required placeholder="URL"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Digits</label>
                                                <div>
                                                    <input data-parsley-type="digits" type="text"
                                                            class="form-control" required
                                                            placeholder="Enter only digits"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Number</label>
                                                <div>
                                                    <input data-parsley-type="number" type="text"
                                                            class="form-control" required
                                                            placeholder="Enter only numbers"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Alphanumeric</label>
                                                <div>
                                                    <input data-parsley-type="alphanum" type="text"
                                                            class="form-control" required
                                                            placeholder="Enter alphanumeric value"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Textarea</label>
                                                <div>
                                                    <textarea required class="form-control" rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                                        Submit
                                                    </button>
                                                    <button type="reset" class="btn btn-secondary waves-effect">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Range validation</h4>
                                        <p class="card-title-desc">Parsley is a javascript form validation
                                            library. It helps you provide your users with feedback on their form
                                            submission before sending it to your server.</p>
        
                                        <form class="custom-validation" action="#">
        
                                            <div class="form-group">
                                                <label>Min Length</label>
                                                <div>
                                                    <input type="text" class="form-control" required
                                                            data-parsley-minlength="6" placeholder="Min 6 chars."/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Max Length</label>
                                                <div>
                                                    <input type="text" class="form-control" required
                                                            data-parsley-maxlength="6" placeholder="Max 6 chars."/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Range Length</label>
                                                <div>
                                                    <input type="text" class="form-control" required
                                                            data-parsley-length="[5,10]"
                                                            placeholder="Text between 5 - 10 chars length"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Min Value</label>
                                                <div>
                                                    <input type="text" class="form-control" required
                                                            data-parsley-min="6" placeholder="Min value is 6"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Max Value</label>
                                                <div>
                                                    <input type="text" class="form-control" required
                                                            data-parsley-max="6" placeholder="Max value is 6"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Range Value</label>
                                                <div>
                                                    <input class="form-control" required type="text range" min="6"
                                                            max="100" placeholder="Number between 6 - 100"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Regular Exp</label>
                                                <div>
                                                    <input type="text" class="form-control" required
                                                            data-parsley-pattern="#[A-Fa-f0-9]{6}"
                                                            placeholder="Hex. Color"/>
                                                </div>
                                            </div>
        
                                            <div class="form-group mb-0">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                                        Submit
                                                    </button>
                                                    <button type="reset" class="btn btn-secondary waves-effect">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->    

@endsection

@section('script')
        <!-- Plugins js -->
        <script src="{{ URL::asset('assets/libs/parsleyjs/parsleyjs.min.js')}}"></script>

        <script src="{{ URL::asset('assets/js/pages/form-validation.init.js')}}"></script>
@endsection
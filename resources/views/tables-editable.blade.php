@extends('layouts.master')

@section('css')
        <!-- datatables css -->
        <link href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
                        <!-- start page title -->
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <div class="page-title-box">
                                    <h4 class="font-size-18">Editable Table</h4>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Referral Pal</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Editable Table</li>
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
        
                                        <h4 class="card-title mb-4">Datatable Editable</h4>
        
                                        <div class="table-responsive">
                                            <table class="table table-editable">
                                                <thead>
                                                    <tr>
                                                    <th>ID</th>
                                                    <th>Age (AutoFill)</th>
                                                    <th>Qty (AutoFill and Editable)</th>
                                                    <th>Cost (Editable)</th>
                                                    </tr>
                                                </thead>
                                                <tr>
                                                    <td>1</td>
                                                    <td data-original-value="11">11</td>
                                                    <td data-original-value="1"><a href="#" data-type="text" data-pk="1" class="editable" data-url="" data-title="Edit Quantity">1</a></td>
                                                    <td data-original-value="1.99"><a href="#" data-type="text" data-pk="1" class="editable" data-url="" data-title="Edit Quantity">1.99</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td data-original-value="22">22</td>
                                                    <td data-original-value="2"><a href="#" data-type="text" data-pk="2" class="editable" data-url="" data-title="Edit Quantity">2</a></td>
                                                    <td data-original-value="2.99"><a href="#" data-type="text" data-pk="1" class="editable" data-url="" data-title="Edit Quantity">2.99</a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td data-original-value="33">33</td>
                                                    <td data-original-value="3"><a href="#" data-type="text" data-pk="3" class="editable" data-url="" data-title="Edit Quantity">3</a></td>
                                                    <td data-original-value="3.99"><a href="#" data-type="text" data-pk="1" class="editable" data-url="" data-title="Edit Quantity">3.99</a></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td data-original-value="44">44</td>
                                                    <td data-original-value="4"><a href="#" data-type="text" data-pk="4" class="editable" data-url="" data-title="Edit Quantity">4</a></td>
                                                    <td data-original-value="4.99"><a href="#" data-type="text" data-pk="1" class="editable" data-url="" data-title="Edit Quantity">4.99</a></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td data-original-value="55">55</td>
                                                    <td data-original-value="5"><a href="#" data-type="text" data-pk="5" class="editable" data-url="" data-title="Edit Quantity">5</a></td>
                                                    <td data-original-value="5.99"><a href="#" data-type="text" data-pk="1" class="editable" data-url="" data-title="Edit Quantity">5.99</a></td>
                                                </tr>
                                            </table>
                                        </div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

@endsection

@section('script')

        <!-- Plugins js -->
        <script src="{{ URL::asset('assets/libs/datatables/datatables.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/bootstrap-editable/bootstrap-editable.min.js')}}"></script>

        <script src="{{ URL::asset('assets/js/pages/table-editable.init.js')}}"></script>

@endsection
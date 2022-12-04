@extends('admin.admin_master')
@section('admin')


 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Tablets All</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

    <a href="{{ route('unit.add') }}" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;"><i class="fas fa-plus-circle"> Add Tablet </i></a> <br>  <br>

                    <h4 class="card-title">Tablet List </h4>


                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Item ID</th>
                            <th>Hostname</th>
                            <th>Make</th>
                            <th>Model</th>
                            <th>Serial Number</th>
                            <th>Warranty</th>
                            <th>Location</th>
                            <th>Assigned To</th>
                        </thead>


                        <tbody>

                        	@foreach($units as $key => $item)
                        <tr>
                            <td> {{ $key+1}} </td>
                            <td> {{ $item->name }} </td>
                            <td> {{ $item->mobile_no }} </td>
                            <td> {{ $item->email }} </td>
                            <td> {{ $item->address }} </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->



                    </div> <!-- container-fluid -->
                </div>


@endsection

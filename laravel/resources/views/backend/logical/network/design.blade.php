@extends('admin.admin_master')
@section('admin')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Add Desktop Page </h4><br><br>



            <form method="post" action="{{ route('supplier.store') }}" id="myForm" >
                @csrf

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Hostname </label>
                <div class="form-group col-sm-10">
                    <input name="hostname" class="form-control" type="text"    >
                </div>
            </div>
            <!-- end row -->


              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Make </label>
                <div class="form-group col-sm-10">
                    <input name="make" class="form-control" type="text"    >
                </div>
            </div>
            <!-- end row -->


  <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Model </label>
                <div class="form-group col-sm-10">
                    <input name="model" class="form-control" type="email"  >
                </div>
            </div>
            <!-- end row -->


  <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Serial Number </label>
                <div class="form-group col-sm-10">
                    <input name="serial" class="form-control" type="text"  >
                </div>
            </div>
            <!-- end row -->


  <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Warranty </label>
                <div class="form-group col-sm-10">
                    <input name="warranty" class="form-control" type="text"  >
                </div>
            </div>
            <!-- end row -->

  <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Location </label>
                <div class="form-group col-sm-10">
                    <input name="location" class="form-control" type="text"  >
                </div>
            </div>
            <!-- end row -->

  <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Assigned To </label>
                <div class="form-group col-sm-10">
                    <input name="assigned" class="form-control" type="text"  >
                </div>
            </div>
            <!-- end row -->

  <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Upload Documents </label>
                <div class="form-group col-sm-10">
                    <input name="upload" class="form-control" type="file"  >
                </div>
            </div>
            <!-- end row -->

  <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Number of Entries to create </label>
                <div class="form-group col-sm-10">
                    <input name="quantity" class="form-control" type="number" min="1" max="10">
                </div>
            </div>
            <!-- end row -->

<input type="submit" class="btn btn-info waves-effect waves-light" value="Add Desktop">
            </form>



        </div>
    </div>
</div> <!-- end col -->
</div>



</div>
</div>

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                hostname: {
                    required : true,
                },
                 make: {
                    required : true,
                },
                 model: {
                    required : true,
                },
                 serial: {
                    required : true,
                },
                 warranty: {
                    required : true,
                },
                 location: {
                    required : true,
                },
                 assigned: {
                    required : true,
                },
                 upload: {
                    required : true,
                },
                quantity: {
                    required : true,
                },
            },
            messages :{
                hostname: {
                    required : 'Please Enter Your Hostname',
                },
                make: {
                    required : 'Please Enter Your Make',
                },
                model: {
                    required : 'Please Enter Your Model',
                },
                serial: {
                    required : 'Please Enter Your Serial Number',
                },
                warranty: {
                    required : 'Please Enter Your Warranty',
                },
                location: {
                    required : 'Please Enter Device Location',
                },
                assigned: {
                    required : 'Please Enter User of the device.',
                },
                upload: {
                    required : 'Please Upload Any supporting documents such as invoices.',
                },
                quantity: {
                    required : 'Please Enter a value between 1 and 10.',
                },
            },
            errorElement : 'span',
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });

</script>



@endsection

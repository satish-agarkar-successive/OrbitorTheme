@section('title') 
Tenant - Properties
@endsection 
@extends('layouts.main')


@section('style')

<!-- Datepicker css -->
<link href="{{ asset('assets/plugins/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css">

@endsection 




<style type="text/css">


  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  /* Firefox */
  input[type=number] {
    -moz-appearance: textfield;
  }

  .custom
  { margin-right: 10px; } 


</style>







@section('rightbar-content')


<!-- Start Contentbar -->    
<div class="contentbar breadcrumbbar" >                
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
               <!--  <div class="card-header">
                    <h5 class="card-title">Edit with button</h5>
                </div> -->
                <div class="card-body">

                  <div style="margin-bottom: 25px;">

                    <h5 class="card-title" style="display:inline-block; float: left">Properties</h5>

                    <button   href="javascript:void(0)" onclick="javascript: window.location = '/addproperty';" style="display:inline-block; float: right;" class="btn btn-primary-rgba" > 
                      <i class="feather icon-plus mr-2"></i>Add Property
                    </button>


                    <br>

                  </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="edit-btn">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Property Name , Building Name</th>
                                <th>User Name , Mobile</th>
                                <th>Property Type , Property Gender</th>
                                <th>Property Address , State , City , Pincode</th>
                                <th>Property Amenities</th>
                                <th>No. Of Bed</th>                
                                <th>Inventory</th>                                                   
                                <th>Action</th>                                        
                              </tr>
                            </thead>
                            <tbody>

@foreach($property as $p)
<tr>
<td>{{ $p -> id }} </td>
<td>{{ $p -> property_name }}<br>{{ $p -> building_name }}</td>
<td>{{ $p -> user_name }}<br>  <a href="tel:{{$p->user_mobile}}"> {{ $p -> user_mobile }} </a></td>
<td>{{ $p -> type }}<br>{{ $p -> gender }}</td>
<td>{{ $p -> property_address_1 }}<br>{{ $p -> property_address_2 }}<br>{{ $p -> state }}<br>{{ $p -> city }}<br>{{ $p -> property_pincode }}</td>
<td>{{ $p -> property_amenities }} </td>
<td>{{  $p->bedcount }}</td>

<td>
        <button type="button" onclick="javascript: window.location = '/propertyinventory?id={{$p->id}}'; " class="btn btn-warning"> <span class="custom ti-plus"></span>Add Inventory</button>
</td>

<td>
      <div class="btn-group btn-group-sm" style="float: none;">                             
            <button type="button" onclick="javascript: window.location = '/editproperty?id={{$p->id}}'; " class="tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-pencil"></span></button>
            <button type="button"  data-url="/adminproperty" data-action="delete" data-id="{{$p->id}}" class=" delete tabledit-delete-button btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-trash"></span></button>
      </div>
</td>


</tr>
  
@endforeach




                             
                            
                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="row" style="align-self: center;" >{{  $property->links() }}</div>


            </div>
        </div>
        <!-- End col -->

    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->



@endsection 



@section('script')
<!-- Tabledit js -->
<!-- <script src="{{ asset('assets/plugins/tabledit/jquery.tabledit.js') }}"></script>      -->
<!-- <script src="{{ asset('assets/js/custom/custom-table-editable.js') }}"></script> -->


<!-- <script type="text/javascript">

    function date() 
    {
     $('#datepicker').datepicker({
      "format": "mm-dd-yy",
      "startDate": "-5d",
      "endDate": "09-15-2017",
      "keyboardNavigation": false
     }); 

   }

    </script> -->




    <!-- Datepicker JS -->
<script src="{{ asset('assets/plugins/datepicker/datepicker.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datepicker/i18n/datepicker.en.js') }}"></script>
<!-- <script src="{{ asset('assets/js/custom/custom-form-datepicker.js') }}"></script> -->

<script type="text/javascript">

    function date() 
    {
     $('#autoclose-date').datepicker({
      "format": "mm-dd-yy",
      "startDate": "-5d",
      "endDate": "09-15-2017",
      "keyboardNavigation": false
     }); 

   }

    </script>


@endsection 
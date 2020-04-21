@section('title') 
Tenant - Users
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


</style>



@section('rightbar-content')




<!-- Start Contentbar -->    
<div class="contentbar breadcrumbbar">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30"  style="margin-bottom: 0%;"  >

                <div class="card-header">
                    <h5 class="card-title">Edit Guest</h5>
                </div>

                <div class="card-body" style="margin-bottom: 25px;">


                    <form method="POST" action="{{url('/')}}/addguest" >

                        {{ csrf_field() }}



                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <select id="property" class="form-control">
                                      <option  value="" selected>Select Property</option>
                                      <option  value="">Property 1</option>
                                      <option  value="">Property 2</option>
                                      <option  value="">Property 3</option>
                                      <option  value="">Property 4</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <select id="block" class="form-control">
                                      <option  value="" selected>Select Block</option>
                                      <option  value="">Block 1</option>
                                      <option  value="">Block 2</option>
                                      <option  value="">Block 3</option>
                                      <option  value="">Block 4</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <select id="floor" class="form-control">
                                      <option  value="" selected>Select Floor</option>
                                      <option  value="">Floor 1</option>
                                      <option  value="">Floor 2</option>
                                      <option  value="">Floor 3</option>
                                      <option  value="">Floor 4</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <select id="room" class="form-control">
                                      <option  value="" selected>Select Room</option>
                                      <option  value="">101</option>
                                      <option  value="">102</option>
                                      <option  value="">103</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <select id="bed" class="form-control">
                                      <option  value="" selected>Select Bed</option>
                                      <option  value="">Bed 1</option>
                                      <option  value="">Bed 2</option>
                                      <option  value="">Bed 3</option>
                                      <option  value="">Bed 4</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <select id="booktype" class="form-control">
                                      <option  value="" selected>Select Type Of Booking</option>
                                      <option  value="">Booking 1</option>
                                      <option  value="">Booking 2</option>
                                      <option  value="">Booking 3</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="name" placeholder="Name Of Guest">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="email" placeholder="Email Address Of Guest">
                            </div>
                        </div>



                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="number" class="form-control" id="mobile" placeholder="Guest Mobile Number" oninput="javascript: if (this.value.length > 10) this.value = this.value.slice(0, 10);">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="number" class="form-control" id="altmobile" placeholder="Guest Alternate Mobile Number" oninput="javascript: if (this.value.length > 10) this.value = this.value.slice(0, 10);">
                            </div>
                        </div>



                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="address" placeholder="Permanent Guest Address" >
                            </div>
                            <div class="form-group col-md-6">
                                    <input type="number" class="form-control" placeholder="Aadhar Number [ 12 Digit ]" oninput="javascript: if (this.value.length > 12) this.value = this.value.slice(0, 12);" required />
                              </div>
                        </div>


                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <select id="selectO" class="form-control">
                                      <option  value="" selected>Select Company / School / College / Organisation</option>
                                      <option  value="">Company</option>
                                      <option  value="">School</option>
                                      <option  value="">College</option>
                                      <option  value="">Organisation</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="addressO" placeholder="Address Of Company / School / College / Organisation" >
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" onfocus="(this.type='date')" class="form-control" id="bookdate" placeholder="Booking Date" >
                            </div>
                            <div class="form-group col-md-6">
                                    <input type="number" class="form-control" id="bookamount" placeholder="Booking Amount" required />
                              </div>
                        </div>


                         <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" onfocus="(this.type='date')" class="form-control" id="checkindate" placeholder="Check In Date" >
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" onfocus="(this.type='date')" class="form-control" id="checkoutdate" placeholder="Check Out Date" >
                            </div>
                        </div>


                         <div class="form-row">
                            <div class="form-group col-md-6">
                                  <input type="number" id="rent" class="form-control" placeholder="Rent Amount" required />
                            </div>
                            <div class="form-group col-md-6">
                                  <input type="number" id="deposit" class="form-control" placeholder="Deposit Amount" required />
                            </div>
                        </div>



                        <div class="form-row">
                            <div class="form-group col-md-6">
                                  <input type="number" id="dicount" class="form-control" placeholder="Dicount Amount" required />
                            </div>
                            <div class="form-group col-md-6">
                                 <select id="vehicle" class="form-control">
                                      <option  value="" selected>Select Vehicle</option>
                                      <option  value="">Bike</option>
                                      <option  value="">Car</option>
                                      <option  value="">Scooty</option>
                                      <option  value="">No Vehicle</option>
                                  </select>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                  <input type="text" id="vehiclenumber" class="form-control" placeholder="Vehicle Number" required />
                            </div>
                            <div class="form-group col-md-6">
                                  <input type="number" id="maintenancecharge" class="form-control" placeholder="Maintenance Charges" required />
                            </div>
                        </div>




                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <select id="gender" class="form-control">
                                      <option  value="" selected>Select Gender</option>
                                      <option  value="">Male</option>
                                      <option  value="">Female</option>
                                      <option  value="">Other</option>
                                </select>
                            </div>



                            <!-- foreach ($_FILES['uploads']['name'] as $filename) {
                                echo '<li>' . $filename . '</li>';
                            } -->


                            <div class="form-group col-md-6">
                                <label class="btn btn-primary-rgba btn-block" >            
                                      <input name='aadharuploads' type="file" id="aadharuploadid" accept="image/*" oninput="aadharupdatelist()" style="display: none; " multiple/>
                                      <i class="feather icon-upload"></i> Upload Aadhar
                                </label>
                                <label id="aadharuploadname" style=" float:center;  color: #007bff; margin:2%; display: none;"></label>

                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="btn btn-primary-rgba btn-block" >            
                                      <input name='iduploads' type="file" id="iduploadid" accept="image/*" oninput="idupdatelist()" style="display: none; " multiple/>
                                      <i class="feather icon-upload"></i> Upload ID
                                </label>
                                <label id="iduploadname" style=" float:center;  color: #007bff; margin:2%; display: none;"></label>
                            </div>
                            <div class="form-group col-md-6">
                                 <label class="btn btn-primary-rgba btn-block" >            
                                      <input name='selfieuploads' type="file" id="selfieuploadid" accept="image/*" oninput="selfieupdatelist()" style="display: none; " multiple/>
                                      <i class="feather icon-upload"></i> Upload Selfie
                                </label>
                                <label id="selfieuploadname" style=" float:center;  color: #007bff; margin:2%; display: none;"></label>
                            </div>
                        </div>


                        


<!-- onclick="Submit1();" id="submit1" -->
                        <button type="submit"  class="btn btn-primary-rgba" style="margin-top: 25px; display:inline-block; float: center;" ><i class="feather icon-chevrons-up"></i>Submit</button>


                    </form>


                </div>


            </div>
        </div>
        <!-- End col -->
    </div> <!-- End row -->
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

   function aadharupdatelist() 
   {

        $('#aadharuploadname').hide();
        $('#aadharuploadname').empty();


        var input = document.getElementById('aadharuploadid');
        var output = document.getElementById('aadharuploadname');
        
        //var children = "Selected Files For Aadhar";
      
        for (var i = 0; i < input.files.length; ++i) {
            // children += '<li>' + input.files.item(i).name + '</li>';
                var reader = new FileReader();
                reader.onload = function(event) {
                    $($.parseHTML('<img style=" width:20%; height:20%; margin:2%" >')).attr('src', event.target.result).appendTo(
                      '#aadharuploadname');
                }
                reader.readAsDataURL(input.files[i]);
        }


        //output.innerHTML = '<ul>'+children+'</ul>';

        $('#aadharuploadname').show();
   }



   function idupdatelist() 
   {
        $('#iduploadname').hide();
        $('#iduploadname').empty();

        var input = document.getElementById('iduploadid');
        var output = document.getElementById('iduploadname');
        var children = "Selected Files For ID";
        for (var i = 0; i < input.files.length; ++i) {
            
            // children += '<li>' + input.files.item(i).name + '</li>';

                var reader = new FileReader();
                reader.onload = function(event) {
                    $($.parseHTML('<img style=" width:20%; height:20%; margin:2%" >')).attr('src', event.target.result).appendTo(
                      '#iduploadname');
                }
                reader.readAsDataURL(input.files[i]);
        }

        //output.innerHTML = '<ul>'+children+'</ul>';
        $('#iduploadname').show();
   }


   function selfieupdatelist() 
   {
         
        $('#selfieuploadname').hide();
        $('#selfieuploadname').empty();


        var input = document.getElementById('selfieuploadid');
        var output = document.getElementById('selfieuploadname');
        
        //var children = "Selected Files For selfie";
      
        for (var i = 0; i < input.files.length; ++i) {
            // children += '<li>' + input.files.item(i).name + '</li>';
                var reader = new FileReader();
                reader.onload = function(event) {
                    $($.parseHTML('<img style=" width:20%; height:20%; margin:2%" >')).attr('src', event.target.result).appendTo(
                      '#selfieuploadname');
                }
                reader.readAsDataURL(input.files[i]);
        }


        //output.innerHTML = '<ul>'+children+'</ul>';

        $('#selfieuploadname').show();
   }



</script>


@endsection 
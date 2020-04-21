@section('title') 
Tenant - Business
@endsection 
@extends('layouts.main')
@section('style')

<!-- Datepicker css -->
<link href="{{ asset('assets/plugins/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css">

@endsection 
@section('rightbar-content')


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

                    <h5 class="card-title" style="display:inline-block; float: left">Business</h5>

                    <button href="javascript:void(0)" id="infobar-addbusiness-open" style="display:inline-block; float: right;" class="btn btn-primary-rgba" > 
                      <i class="feather icon-plus mr-2"></i>Add Business
                    </button>


                    <br>

                  </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="edit-btn">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Business Name</th>
                                <th>User Name</th>
                                <th>City</th>
                                <th>Type Of Buiness</th>
                                <th>No. Of Employee</th>                                                   
                                <th>Year Of Establishment</th>                                                   
                                <th>Number Of Property</th>                                                   
                                <th></th>                                                 
                                <th>Action</th>                                        
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>MAC Pvt. Ltd.</td>
                                  <td>Mrudul</td>
                                  <td>Mumbai</td>
                                  <td>Rental</td>                               
                                  <td>20</td>                               
                                  <td>May 15, 2020</td>
                                  <td>5</td>                               
                                  <td></td>      
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" class=" infobar-editbusiness-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
                              <span class="ti-pencil"></span>
                          </button>
                          <button type="button" class="tabledit-delete-button btn btn-sm btn-info" style="float: none; margin: 5px;">
                              <span class="ti-trash"></span>
                          </button>
                                    </div>

                                  </td>

                              </tr>



                               <tr>
                                  <td>2</td>
                                  <td>MAC Pvt. Ltd.</td>
                                  <td>Mrudul</td>
                                  <td>Mumbai</td>
                                  <td>Rental</td>                               
                                  <td>20</td>                               
                                  <td>May 15, 2020</td>
                                  <td>5</td>                               
                                  <td></td>      
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" class=" infobar-editbusiness-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
                              <span class="ti-pencil"></span>
                          </button>
                          <button type="button" class="tabledit-delete-button btn btn-sm btn-info" style="float: none; margin: 5px;">
                              <span class="ti-trash"></span>
                          </button>
                                    </div>

                                  </td>

                              </tr>

                               <tr>
                                  <td>3</td>
                                  <td>MAC Pvt. Ltd.</td>
                                  <td>Mrudul</td>
                                  <td>Mumbai</td>
                                  <td>Rental</td>                               
                                  <td>20</td>                               
                                  <td>May 15, 2020</td>
                                  <td>5</td>                               
                                  <td></td>      
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" class=" infobar-editbusiness-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
                              <span class="ti-pencil"></span>
                          </button>
                          <button type="button" class="tabledit-delete-button btn btn-sm btn-info" style="float: none; margin: 5px;">
                              <span class="ti-trash"></span>
                          </button>
                                    </div>

                                  </td>

                              </tr>

                               <tr>
                                  <td>4</td>
                                  <td>MAC Pvt. Ltd.</td>
                                  <td>Mrudul</td>
                                  <td>Mumbai</td>
                                  <td>Rental</td>                               
                                  <td>20</td>                               
                                  <td>May 15, 2020</td>
                                  <td>5</td>                               
                                  <td></td>      
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" class=" infobar-editbusiness-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
                              <span class="ti-pencil"></span>
                          </button>
                          <button type="button" class="tabledit-delete-button btn btn-sm btn-info" style="float: none; margin: 5px;">
                              <span class="ti-trash"></span>
                          </button>
                                    </div>

                                  </td>

                              </tr>


                             
                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="row" style="align-self: center;" >
                  

                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="default-datatable_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="default-datatable_previous">
                                      <a href="#" tabindex="0" class="page-link">
                                        <i class="dripicons-arrow-thin-left"></i>
                                      </a>
                                    </li>
                                    <li class="paginate_button page-item active">
                                      <a href="#" aria-controls="default-datatable" style="z-index: 0;" class="page-link">1</a>
                                    </li> 
                                    <li class="paginate_button page-item">
                                      <a href="#" aria-controls="default-datatable" class="page-link">2</a>
                                    </li>
                                    <li class="paginate_button page-item next" id="default-datatable_next">
                                      <a href="#" tabindex="0" class="page-link">
                                        <i class="dripicons-arrow-thin-right"></i>
                                      </a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                </div>


            </div>
        </div>
        <!-- End col -->

    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->




  <!-- Modal: addmodal -->

 <!-- sidebar for adding user -->


                        <div id="infobar-addbusiness-sidebar" class="infobar-settings-sidebar">
                            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                                <h4>Add Business</h4><a href="javascript:void(0)" id="infobar-business-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
                            </div>
                            <div class="infobar-settings-sidebar-body">
                                <div class="custom-mode-setting">

                                  <form id="add_business" enctype="multipart/form-data">

                                    {{ csrf_field() }}


                                     <div class="row align-items-center pb-3">
                                            <input name="businessname" type="text" class="form-control" placeholder="Name Of Business" required />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <select name="user" class="form-control" required  >
                                              <option  value="" selected>Select User</option>
                                              <option  value="">User 1</option>
                                              <option  value="">User 2</option>
                                              <option  value="">User 3</option>
                                              <option  value="">user 4</option>
                                            </select>
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <select name="state" class="form-control" required  >
                                              <option  value="" selected>Select State</option>
                                              <option  value="">Maharashtra</option>
                                              <option  value="">Andhra Pradesh</option>
                                              <option  value="">Gujurat</option>
                                              <option  value="">Karnataka</option>
                                            </select>
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <select name="city" class="form-control" required >
                                              <option  value="" selected>Select City</option>
                                              <option  value="">Mumbai</option>
                                              <option  value="">Hyderabad</option>
                                              <option  value="">Vasant Nagari</option>
                                              <option  value="">Ooty</option>
                                            </select>
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <input name="pincode" type="email" class="form-control" placeholder="000000" oninput="javascript: if (this.value.length > 6) this.value = this.value.slice(0, 6);" required />
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <input name="url" type="webaddress" class="form-control" placeholder="Web Address [ http: //www.google.com ] " required />
                                      </div>


                                      <div class="row align-items-center pb-3">


                                          <label class="btn btn-primary-rgba btn-block" >            
                                                <input type="file" style="display: none;" name="companylogo" accept="image/*"  onchange="PreviewImage();" />
                                                 <i class="feather icon-upload"></i> Upload Logo
                                          </label>

                                          <!-- <label id="imagelable" style="color: #007bff; margin:2%; display: none;">You Can Replace This Image By Re-Uploading New Image</label> -->
                                          
                                          <label id="imagename" style=" float:center;  color: #007bff; margin:2%; display: none;"></label>

                                          <img id="uploadPreview" style=" float:center margin:2%; width: 100%; height: 100%; display: none;" />
                                          
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <select name="businesstype" class="form-control" required  >
                                              <option  value="" selected>Type Of Business</option>
                                              <option  value="">Rental</option>
                                              <option  value="">Manufacturing</option>
                                              <option  value="">Textile</option>
                                            </select>
                                      </div>



                                      <div class="row align-items-center pb-3">
                                            <input name="noofemployees" type="number" class="form-control" placeholder="Number Of Employees" required />
                                      </div>


                                      <div class="row align-items-center pb-3">                                
                                            <input name="estyear" type="number" class="form-control" placeholder="Year Of Establishment [ YYYY ]" oninput="javascript: if (this.value.length > 4) this.value = this.value.slice(0, 4);" required />
                                      </div>



                                      <div class="row align-items-center pb-3">
                                            <input name="gst" type="number" class="form-control" placeholder="GST Number [ 15 Digit ]" oninput="javascript: if (this.value.length > 15) this.value = this.value.slice(0, 15);" required />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input name="pan" type="number" class="form-control" placeholder="PAN Number [ 10 Digit ]" oninput="javascript: if (this.value.length > 10) this.value = this.value.slice(0, 10);" required />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input name="fssai" type="number" class="form-control" placeholder="FSSAI Number [ 14 Digit ]" oninput="javascript: if (this.value.length > 14) this.value = this.value.slice(0, 14);" required />
                                      </div>


                                      <div class="row align-items-center pb-3"> <input type="text" class="form-control" /> </div>
                                      <div class="row align-items-center pb-3"> <input type="text" class="form-control" /> </div>


                                      

                                      <div class="row align-items-center pb-5 pull-right">

                                          <button type="submit" class="btn btn-primary-rgba" > 
                                            <i class="feather icon-plus mr-2"></i>Add Business Details
                                          </button>
                                        
                                      </div>

                                      <div class="row align-items-center pb-3">
                                      </div>


                                    </form>
                                    
                                </div>


                            </div>
                        </div>



        <!-- sidebar for adding user -->

  <!-- Modal: addmodal -->



<!-- Modal: editmodal -->

 <!-- sidebar for editing user -->


                        <div id="infobar-editbusiness-sidebar" class="infobar-settings-sidebar">
                            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                                <h4>Edit Business</h4><a href="javascript:void(0)" id="infobar-editbusiness-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
                            </div>
                            <div class="infobar-settings-sidebar-body">
                                <div class="custom-mode-setting">
                                    

                                   <form id="edit_business" enctype="multipart/form-data">


                                    {{ csrf_field() }}


                                     <div class="row align-items-center pb-3">
                                            <input name="businessname" type="text" class="form-control" placeholder="Name Of Business" required />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <select name="user" class="form-control" required  >
                                              <option  value="" selected>Select User</option>
                                              <option  value="">User 1</option>
                                              <option  value="">User 2</option>
                                              <option  value="">User 3</option>
                                              <option  value="">user 4</option>
                                            </select>
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <select name="state" class="form-control" required  >
                                              <option  value="" selected>Select State</option>
                                              <option  value="">Maharashtra</option>
                                              <option  value="">Andhra Pradesh</option>
                                              <option  value="">Gujurat</option>
                                              <option  value="">Karnataka</option>
                                            </select>
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <select name="city" class="form-control" required >
                                              <option  value="" selected>Select City</option>
                                              <option  value="">Mumbai</option>
                                              <option  value="">Hyderabad</option>
                                              <option  value="">Vasant Nagari</option>
                                              <option  value="">Ooty</option>
                                            </select>
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <input name="pincode" type="email" class="form-control" placeholder="000000" oninput="javascript: if (this.value.length > 6) this.value = this.value.slice(0, 6);" required />
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <input name="url" type="webaddress" class="form-control" placeholder="Web Address [ http: //www.google.com ] " required />
                                      </div>


                                      <div class="row align-items-center pb-3">


                                          <label class="btn btn-primary-rgba btn-block" >            
                                                <input type="file" style="display: none;" name="companylogo" accept="image/*"  onchange="PreviewImage();" />
                                                 <i class="feather icon-upload"></i> Upload Logo
                                          </label>

                                          <!-- <label id="imagelable" style="color: #007bff; margin:2%; display: none;">You Can Replace This Image By Re-Uploading New Image</label> -->

                                          <img id="uploadPreview" style=" float:center margin:2%; width: 100%; height: 100%; display: none;" />
                                          
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <select name="businesstype" class="form-control" required  >
                                              <option  value="" selected>Type Of Business</option>
                                              <option  value="">Rental</option>
                                              <option  value="">Manufacturing</option>
                                              <option  value="">Textile</option>
                                            </select>
                                      </div>



                                      <div class="row align-items-center pb-3">
                                            <input name="noofemployees" type="number" class="form-control" placeholder="Number Of Employees" required />
                                      </div>


                                      <div class="row align-items-center pb-3">                                
                                            <input name="estyear" type="number" class="form-control" placeholder="Year Of Establishment [ YYYY ]" oninput="javascript: if (this.value.length > 4) this.value = this.value.slice(0, 4);" required />
                                      </div>



                                      <div class="row align-items-center pb-3">
                                            <input name="gst" type="number" class="form-control" placeholder="GST Number [ 15 Digit ]" oninput="javascript: if (this.value.length > 15) this.value = this.value.slice(0, 15);" required />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input name="pan" type="number" class="form-control" placeholder="PAN Number [ 10 Digit ]" oninput="javascript: if (this.value.length > 10) this.value = this.value.slice(0, 10);" required />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input name="fssai" type="number" class="form-control" placeholder="FSSAI Number [ 14 Digit ]" oninput="javascript: if (this.value.length > 14) this.value = this.value.slice(0, 14);" required />
                                      </div>


                                      <div class="row align-items-center pb-3"> <input type="text" class="form-control" /> </div>
                                      <div class="row align-items-center pb-3"> <input type="text" class="form-control" /> </div>


                                      

                                      <div class="row align-items-center pb-5 pull-right">

                                          <button type="submit" class="btn btn-primary-rgba" > 
                                            <i class="feather icon-plus mr-2"></i>Edit Business Details
                                          </button>
                                        
                                      </div>

                                      <div class="row align-items-center pb-3">
                                      </div>


                                    </form>
                                    
                                </div>

                            </div>
                        </div>



        <!-- sidebar for editing user -->

  <!-- Modal: editmodal -->






@endsection 
@section('script')
<!-- Tabledit js -->
<!-- <script src="{{ asset('assets/js/custom/custom-table-editable.js') }}"></script> -->

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


    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL( $('input[type=file]')[0].files[0] );

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };

        $('#uploadPreview').show();
        //$('#imagelable').show();
        $('#imagename').text("").hide();
        $('#imagename').text( "[ " + $('input[type=file]')[0].files[0].name + " ] , You Can Replace This Image By Re-Uploading New Image").show();



    };

</script>



@endsection 
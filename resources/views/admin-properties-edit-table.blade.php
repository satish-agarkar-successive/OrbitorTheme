@section('title') 
Tenant - Users
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

                    <h5 class="card-title" style="display:inline-block; float: left">User Details</h5>

                    <button href="javascript:void(0)" id="infobar-adduser-open" style="display:inline-block; float: right;" class="btn btn-primary-rgba" > 
                      <i class="feather icon-plus mr-2"></i>Add User
                    </button>


                    <br>

                  </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="edit-btn">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>User Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Company Name</th>                                                   
                                <th>Activation Date</th>                                                   
                                <th>Renewal Date</th>                                                   
                                <th>Deal Value</th>                                                   
                                <th>No. Of Properties</th>                                                   
                                <th>Status</th>                                                   
                                <th>Action</th>                                        
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Mark</td>
                                  <td>8446184884</td>
                                  <td>demo@example.com</td>
                                  <td>MAC Pvt. Ltd.</td>                               
                                  <td>Apr 15, 2020</td>                               
                                  <td>May 15, 2020</td>
                                  <td>5000/-</td>                               
                                  <td>8</td>                               
                                  <td>

                                          <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                          </label>

                                  </td> 
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">


                          <button type="button"  href="javascript:void(0)"  id="infobar-edituser-open1" class=" infobar-edituser-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
                              <span class="ti-pencil"></span>
                          </button>
                          <button type="button" class="tabledit-delete-button btn btn-sm btn-info" style="float: none; margin: 5px;">
                              <span class="ti-trash"></span>
                          </button>
                                    </div>

                                  </td>

                              </tr>

                              <tr>
                                  <td>1</td>
                                  <td>Mrudul Addipalli</td>
                                  <td>8446184884</td>
                                  <td>demo@example.com</td>
                                  <td>MAC</td>                               
                                  <td>May 15, 2020</td>                               
                                  <td>June 15, 2020</td>
                                  <td>10,000/-</td>                               
                                  <td>15</td>                               
                                  <td>

                                          <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                          </label>

                                  </td>

                                   <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">

                                       
                          <button type="button"  href="javascript:void(0)"  id="infobar-edituser-open2" class=" infobar-edituser-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
                              <span class="ti-pencil"></span>
                          </button>
                          <button type="button" class="tabledit-delete-button btn btn-sm btn-info" style="float: none; margin: 5px;">
                              <span class="ti-trash"></span>
                          </button>
                                    </div>

                                  </td>             

                              </tr>

                              <tr>
                                  <td>1</td>
                                  <td>Mark</td>
                                  <td>8446184884</td>
                                  <td>demo@example.com</td>
                                  <td>MAC Pvt. Ltd.</td>                               
                                  <td>Apr 15, 2020</td>                               
                                  <td>May 15, 2020</td>
                                  <td>5000/-</td>                               
                                  <td>8</td>                               
                                  <td>

                                          <label class="switch">
                                            <input type="checkbox" checked>
                                            <span class="slider round"></span>
                                          </label>

                                  </td>                      

                                   </td>

                                   <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">

                                       
                          <button type="button" href="javascript:void(0)"  id="infobar-edituser-open3" class=" infobar-edituser-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
                              <span class="ti-pencil"></span>
                          </button>
                          <button type="button" class="tabledit-delete-button btn btn-sm btn-info" style="float: none; margin: 5px;">
                              <span class="ti-trash"></span>
                          </button>
                                    </div>

                                  </td>      

                              </tr>

                              <tr>
                                  <td>1</td>
                                  <td>Mark</td>
                                  <td>8446184884</td>
                                  <td>demo@example.com</td>
                                  <td>MAC Pvt. Ltd.</td>                               
                                  <td>Apr 15, 2020</td>                               
                                  <td>May 15, 2020</td>
                                  <td>5000/-</td>                               
                                  <td>8</td>                               
                                  <td>

                                          <label class="switch">
                                            <input type="checkbox" checked>
                                            <span class="slider round"></span>
                                          </label>

                                  </td>            

                                   </td>

                                   <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">

                                       
                          <button type="button"  href="javascript:void(0)"  id="infobar-edituser-open4" class=" infobar-edituser-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
                              <span class="ti-pencil"></span>
                          </button>
                          <button type="button" class="tabledit-delete-button btn btn-sm btn-info" style="float: none; margin: 5px;">
                              <span class="ti-trash"></span>
                          </button>
                                    </div>

                                  </td>      


                              </tr>


                              <tr>
                                  <td>1</td>
                                  <td>Mark</td>
                                  <td>8446184884</td>
                                  <td>demo@example.com</td>
                                  <td>MAC Pvt. Ltd.</td>                               
                                  <td>Apr 15, 2020</td>                               
                                  <td>May 15, 2020</td>
                                  <td>5000/-</td>                               
                                  <td>8</td>                               
                                  <td>

                                          <label class="switch">
                                            <input type="checkbox" checked>
                                            <span class="slider round"></span>
                                          </label>

                                  </td>            

                                   </td>

                                   <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">

                                       
                          <button type="button"  href="javascript:void(0)"  id="infobar-edituser-open5" class=" infobar-edituser-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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
                                      <a href="#" aria-controls="default-datatable" class="page-link">1</a>
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


                        <div id="infobar-adduser-sidebar" class="infobar-settings-sidebar">
                            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                                <h4>Add User</h4><a href="javascript:void(0)" id="infobar-adduser-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
                            </div>
                            <div class="infobar-settings-sidebar-body">
                                <div class="custom-mode-setting">

                                  <form id="add_user">

                                    {{ csrf_field() }}

                                     <div class="row align-items-center pb-3">
                                            <input name="username" type="text" class="form-control" placeholder="User Name" required />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input name="phone" type="number" class="form-control" placeholder="Mobile" oninput="javascript: if (this.value.length > 10) this.value = this.value.slice(0, 10);" required />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input name="email" type="email" class="form-control" placeholder="abc@xyz.com" required />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input name="company" type="text" class="form-control" placeholder="Company Name" required />
                                      </div>

                                      <!-- <div class="row align-items-center pb-3">
                                            <input type="date" class="form-control">
                                      </div>-->

                                      <div class="row align-items-center pb-3">                                
                                            <input name="renewal_date" type="text" id="autoclose-date" onclick="date();" class="datepicker-here form-control" placeholder="Renewal Date - mm/dd/yyyy" aria-describedby="basic-addon3" required />
                                         
                                      </div>
 
                                      <div class="row align-items-center pb-3">
                                            <textarea name="address" type="text" placeholder="Address" class="form-control" style="height:100px;" required /></textarea>
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

                                      

                                      <div class="row align-items-center pb-5 pull-right">

                                          <button type="submit" class="btn btn-primary-rgba" > 
                                            <i class="feather icon-plus mr-2"></i>Add User Details
                                          </button>
                                        
                                      </div>

                                      <div class="row align-items-center pb-3">
                                      </div>


                                </div>


                              </form>


                            </div>
                        </div>



        <!-- sidebar for adding user -->

  <!-- Modal: addmodal -->



<!-- Modal: editmodal -->

 <!-- sidebar for editing user -->


                        <div id="infobar-edituser-sidebar" class="infobar-settings-sidebar">
                            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                                <h4>Edit User</h4><a href="javascript:void(0)" id="infobar-edituser-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
                            </div>
                            <div class="infobar-settings-sidebar-body">
                                <div class="custom-mode-setting">
                                    

                                    <form id="edit_user">

                                      {{ csrf_field() }}

                                     <div class="row align-items-center pb-3">
                                            <input name="username" type="text" class="form-control" placeholder="User Name" required />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input name="phone" type="number" class="form-control" placeholder="Mobile" oninput="javascript: if (this.value.length > 10) this.value = this.value.slice(0, 10);" required />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input name="email" type="email" class="form-control" placeholder="abc@xyz.com" required />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input name="company" type="text" class="form-control" placeholder="Company Name" required />
                                      </div>

                                      <!-- <div class="row align-items-center pb-3">
                                            <input type="date" class="form-control">
                                      </div>-->

                                      <div class="row align-items-center pb-3">                                
                                            <input name="renewal_date" type="text" id="autoclose-date" onclick="date();" class="datepicker-here form-control" placeholder="Renewal Date - mm/dd/yyyy" aria-describedby="basic-addon3" required />
                                         
                                      </div>
 
                                      <div class="row align-items-center pb-3">
                                            <textarea name="address" type="text" placeholder="Address" class="form-control" style="height:100px;" required /></textarea>
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

                                      

                                      <div class="row align-items-center pb-5 pull-right">

                                          <button type="submit" class="btn btn-primary-rgba" > 
                                            <i class="feather icon-plus mr-2"></i>Edit User Details
                                          </button>
                                        
                                      </div>

                                      <div class="row align-items-center pb-3">
                                      </div>


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
<!-- <script src="{{ asset('assets/plugins/tabledit/jquery.tabledit.js') }}"></script>      -->
<script src="{{ asset('assets/js/custom/custom-table-editable.js') }}"></script>


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
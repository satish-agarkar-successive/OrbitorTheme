@section('title') 
Tenant - Users
@endsection 
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<!-- <div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Editable</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Editable</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button>
            </div>                        
        </div>
    </div>          
</div> -->
<!-- End Breadcrumbbar -->


<style type="text/css">

.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}


</style>

<!-- Start Contentbar -->    
<div class="contentbar" style="margin-top:10%;" >                
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


                          <button type="button" class="tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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

                                       
                          <button type="button" class="tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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

                                       
                          <button type="button" class="tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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

                                       
                          <button type="button" class="tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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

                                       
                          <button type="button" class="tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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
                  <div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="default-datatable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="default-datatable_previous"><a href="#" aria-controls="default-datatable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="default-datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="default-datatable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="default-datatable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="default-datatable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="default-datatable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="default-datatable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="default-datatable_next"><a href="#" aria-controls="default-datatable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div>


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
                                    <div class="row align-items-center pb-3">
                                        <div class="col-8"><h6 class="mb-0">Payment Reminders</h6></div>
                                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-first" checked /></div>
                                    </div>
                                    <div class="row align-items-center pb-3">
                                        <div class="col-8"><h6 class="mb-0">Stock Updates</h6></div>
                                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-second" checked /></div>
                                    </div>
                                    <div class="row align-items-center pb-3">
                                        <div class="col-8"><h6 class="mb-0">Open for New Products</h6></div>
                                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-third" /></div>
                                    </div>
                                    <div class="row align-items-center pb-3">
                                        <div class="col-8"><h6 class="mb-0">Enable SMS</h6></div>
                                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fourth" checked /></div>
                                    </div>
                                    <div class="row align-items-center pb-3">
                                        <div class="col-8"><h6 class="mb-0">Newsletter Subscription</h6></div>
                                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fifth" checked /></div>
                                    </div>
                                    <div class="row align-items-center pb-3">
                                        <div class="col-8"><h6 class="mb-0">Show Map</h6></div>
                                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-sixth" /></div>
                                    </div>
                                    <div class="row align-items-center pb-3">
                                        <div class="col-8"><h6 class="mb-0">e-Statement</h6></div>
                                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-seventh" checked /></div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-8"><h6 class="mb-0">Monthly Report</h6></div>
                                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-eightth" checked /></div>
                                    </div>
                                </div>
                            </div>
                        </div>



        <!-- sidebar for adding user -->

  <!-- Modal: addmodal -->



@endsection 
@section('script')
<!-- Tabledit js -->
<!-- <script src="{{ asset('assets/plugins/tabledit/jquery.tabledit.js') }}"></script>      -->
<script src="{{ asset('assets/js/custom/custom-table-editable.js') }}"></script>
@endsection 
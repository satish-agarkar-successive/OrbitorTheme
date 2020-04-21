@section('title') 
Orbiter - Form Layouts
@endsection 
@extends('layouts.main')


@section('style')


<!-- For Editor -->


<!-- Summernote css -->
<link href="{{ asset('assets/plugins/summernote/summernote-bs4.css') }}" rel="stylesheet" type="text/css">
<!-- Code Mirror css -->
<link href="{{ asset('assets/plugins/code-mirror/codemirror.css') }}" rel="stylesheet" type="text/css">


<!-- For Editor -->


@endsection 




@section('script')




<!-- For Editor -->

<!-- Wysiwig js -->
<!-- <script src="{{ asset('assets/plugins/tinymce/tinymce.min.js') }}"></script> -->
<!-- Wysiwig js -->


<!-- Summernote JS -->
<script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- Summernote JS -->


<!-- Code Mirror JS -->
<!-- <script src="{{ asset('assets/plugins/code-mirror/codemirror.js') }}"></script>
<script src="{{ asset('assets/plugins/code-mirror/htmlmixed.js') }}"></script>
<script src="{{ asset('assets/plugins/code-mirror/css.js') }}"></script>
<script src="{{ asset('assets/plugins/code-mirror/javascript.js') }}"></script>
<script src="{{ asset('assets/plugins/code-mirror/xml.js') }}"></script> -->
<!-- Code Mirror JS -->

<script src="{{ asset('assets/js/custom/custom-form-editor.js') }}"></script>

<!-- For Editor -->





<script type="text/javascript">

    function Submit1() 
    {
         $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
         setInterval(function(){ 
         $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"}); 
         }, 3000);
         
    }

    function Submit2() 
    {
         $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
         setInterval(function(){ 
         $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"}); 
         }, 3000);
         
    }

    function Submit3() 
    {
         
         $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
         setInterval(function(){ 
         $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"}); 
         }, 3000);
         
    }


    function Submit4() 
    {

         alert( $('.note-editable').text() );


         $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
         setInterval(function(){ 
         $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"}); 
         }, 3000);
         
    }
    


</script>

@endsection 





@section('rightbar-content')


<!-- Start Contentbar -->    
<div class="contentbar breadcrumbbar">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30"  style="margin-bottom: 0%;"  >

                <div class="card-header">
                    <h5 class="card-title">Edit Properties Details</h5>
                </div>

                <div class="card-body" style="margin-bottom: 25px;">


                    <form method="POST" action="{{url('/')}}/addproperties" >

                        {{ csrf_field() }}

                        <div class="form-row">
                            <div class="form-group col-md-6">
                               
                                <input type="text" class="form-control" id="propertyname" placeholder="Property Name" >
                            </div>
                            <div class="form-group col-md-6">
                               
                                <input type="text" class="form-control" id="buildingname" placeholder="Building Name" >
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                
                                <input type="text" class="form-control" id="address1" placeholder="Address Line 1" >
                            </div>
                            <div class="form-group col-md-6">
                                
                                <input type="text" class="form-control" id="address2" placeholder="Address Line 2" >
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <select id="state" class="form-control">
                                      <option  value="" selected>Select State</option>
                                      <option  value="">Maharashtra</option>
                                      <option  value="">Andhra Pradesh</option>
                                      <option  value="">Gujurat</option>
                                      <option  value="">Karnataka</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <select id="city" class="form-control">
                                      <option  value="" selected>Select City</option>
                                      <option  value="">Mumbai</option>
                                      <option  value="">Hyderabad</option>
                                      <option  value="">Vasant Nagari</option>
                                      <option  value="">Ooty</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" id="zip" placeholder="Zip" oninput="javascript: if (this.value.length > 6) this.value = this.value.slice(0, 6);">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" id="landmark" placeholder="Landmark" >
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-3">
                               
                                <select id="propertytype" class="form-control">
                                      <option  value="" selected>Select Property Type</option>
                                      <option  value="">Flat</option>
                                      <option  value="">Villa</option>
                                      <option  value="">Bungalow</option>
                                      <option  value="">Duplex</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                               
                                <select id="city" class="form-control">
                                      <option  value="" selected>Select Accommodation Type</option>
                                      <option  value="">....</option>
                                      <option  value="">....</option>
                                      <option  value="">....</option>
                                      <option  value="">....</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                               
                                <select id="user" class="form-control">
                                      <option  value="" selected>Select User</option>
                                      <option  value="">User 1</option>
                                      <option  value="">User 2</option>
                                      <option  value="">User 3</option>
                                      <option  value="">user 4</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <select id="gender" class="form-control">
                                      <option  value="" selected>Select Gender</option>
                                      <option  value="">Male</option>
                                      <option  value="">Female</option>
                                      <option  value="">Other</option>
                                </select>
                            </div>
                        </div>


                        <button type="button" onclick="Submit1();" id="submit1" class="btn btn-primary-rgba" style="margin-top: 25px; display:inline-block; float: center;" ><i class="feather icon-chevrons-up"></i>Submit</button>


                    </form>


                </div>


            </div>
        </div>
        <!-- End col -->
    </div> <!-- End row -->
</div>
<!-- End Contentbar -->



<!-- Start Contentbar -->    
<div class="contentbar breadcrumbbar"  style="margin-top: 5%;"  >                
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

                    <h5 class="card-title" style="display:inline-block; float: left">Block And Floor</h5>

                    <button href="javascript:void(0)" id="infobar-add-block-floor-open" style="display:inline-block; float: right;" class="btn btn-primary-rgba" > 
                      <i class="feather icon-plus mr-2"></i>Add
                    </button>


                    <br>

                  </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="edit-btn">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Block Name</th>
                                <th>No. Of Floor</th>                                                  
                                <th></th>                                                 
                                <th>Action</th>                                        
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Block A</td>
                                  <td>Basement + 6 + Terace</td>                              
                                  <td></td>      
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" class=" infobar-edit-block-floor-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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
                                  <td>Block B</td>
                                  <td>Basement + 7 + Terace</td>                              
                                  <td></td>      
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" class=" infobar-edit-block-floor-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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
                                  <td>Block C</td>
                                  <td>Basement + 6 + Terace</td>                              
                                  <td></td>      
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" class=" infobar-edit-block-floor-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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



<!-- Start Contentbar -->    
<div class="contentbar breadcrumbbar"  style="margin-top: 5%;"  >                
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

                    <h5 class="card-title" style="display:inline-block; float: left">Room Details</h5>

                    <button href="javascript:void(0)" id="infobar-add-room-open" style="display:inline-block; float: right;" class="btn btn-primary-rgba" > 
                      <i class="feather icon-plus mr-2"></i>Add Room
                    </button>


                    <br>

                  </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="edit-btn">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Block Name</th>
                                <th>Floor</th>                                                  
                                <th>Room Number</th>                                          
                                <th>Action</th>                                        
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Block A</td>
                                  <td>Basement</td>                              
                                  <td>B01</td>      
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" class=" infobar-edit-room-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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
                                  <td>Block A</td>
                                  <td>Basement</td>                              
                                  <td>B02</td>   
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" class=" infobar-edit-room-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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
                                  <td>Block A</td>
                                  <td>6</td>                              
                                  <td>601</td>  
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" class=" infobar-edit-room-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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



<!-- Start Contentbar -->    
<div class="contentbar breadcrumbbar"  style="margin-top: 5%;"  >                
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

                    <h5 class="card-title" style="display:inline-block; float: left">Bed Details</h5>

                    <button href="javascript:void(0)" id="infobar-add-bed-open" style="display:inline-block; float: right;" class="btn btn-primary-rgba" > 
                      <i class="feather icon-plus mr-2"></i>Add Bed
                    </button>


                    <br>

                  </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="edit-btn">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Block</th>
                                <th>Floor</th>                                                  
                                <th>Room Number</th>
                                <th>Bed Number</th>
                                <th>Rent</th>                                                  
                                <th>Deposit</th>                                          
                                <th>Maintenance</th>                                          
                                <th>Action</th>                                        
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Block A</td>
                                  <td>Basement</td>                              
                                  <td>B01</td>      
                                  <td>1</td>      
                                  <td>5000/-</td>      
                                  <td>2000/-</td>      
                                  <td>500/-</td>      
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" class=" infobar-edit-bed-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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
                                  <td>Block A</td>
                                  <td>1</td>                              
                                  <td>101</td>      
                                  <td>1</td>      
                                  <td>7000/-</td>      
                                  <td>2500/-</td>      
                                  <td>1000/-</td>  
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" class=" infobar-edit-bed-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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
                                  <td>Block A</td>
                                  <td>1</td>                              
                                  <td>101</td>      
                                  <td>2</td>      
                                  <td>7000/-</td>      
                                  <td>2500/-</td>      
                                  <td>1000/-</td>  
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" class=" infobar-edit-bed-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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
                                  <td>Block A</td>
                                  <td>1</td>                              
                                  <td>101</td>      
                                  <td>3</td>      
                                  <td>7000/-</td>      
                                  <td>2500/-</td>      
                                  <td>1000/-</td>  
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" class=" infobar-edit-bed-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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
                                  <td>Block A</td>
                                  <td>2</td>                              
                                  <td>201</td>      
                                  <td>5</td>      
                                  <td>8000/-</td>      
                                  <td>3000/-</td>      
                                  <td>1500/-</td>   
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" class=" infobar-edit-bed-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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




<!-- Start Contentbar -->    
<div class="contentbar breadcrumbbar" style="margin-top: 5%;" >
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30"  style="margin-bottom: 0%;"   style="margin-bottom: 0%;"  >

                <div class="card-header">
                    <h5 class="card-title">Select Amenities</h5>
                </div>

                <div class="card-body" style="margin-bottom: 25px;">

                    <!-- bifurcate form post by data present inside -->
                    <form method="POST" action="{{url('/')}}/addproperties" >

                        {{ csrf_field() }}

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="parking" name="parking">
                                    <label class="custom-control-label" for="parking">Parking</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="laundry " name="laundry ">
                                    <label class="custom-control-label" for="laundry ">Laundry</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="ac" name="ac">
                                    <label class="custom-control-label" for="ac">Air Conditioning</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="balcony" name="balcony">
                                    <label class="custom-control-label" for="balcony">Balcony</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="wifi" name="wifi">
                                    <label class="custom-control-label" for="wifi">Wifi</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="tv" name="tv">
                                    <label class="custom-control-label" for="tv">Tele Vision [ T.V. ]</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="dth" name="dth">
                                    <label class="custom-control-label" for="dth">DTH / Cable</label>
                                </div>
                            </div>                            
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="gym" name="gym">
                                    <label class="custom-control-label" for="gym">GYM</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="spa" name="spa">
                                    <label class="custom-control-label" for="spa">SPA</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="playground" name="playground">
                                    <label class="custom-control-label" for="playground">Playground</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="pool" name="pool">
                                    <label class="custom-control-label" for="pool">Pool</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="security_guard" name="security_guard">
                                    <label class="custom-control-label" for="security_guard">Security Guard</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="cctv" name="cctv">
                                    <label class="custom-control-label" for="cctv"> CCTV Camera </label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="hotwater" name="hotwater">
                                    <label class="custom-control-label" for="hotwater">Hot Water</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="shower" name="shower">
                                    <label class="custom-control-label" for="shower">Shower</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="" name="">
                                    <label class="custom-control-label" for=""></label>
                                </div>
                            </div>
                        </div>


                        <button type="button" onclick="Submit2();" id="submit2" class="btn btn-primary-rgba" style="margin-top: 25px; display:inline-block; float: center;" ><i class="feather icon-chevrons-up"></i>Submit</button>


                    </form>

                    
                </div>


            </div>
        </div>
        <!-- End col -->
    </div> <!-- End row -->
</div>
<!-- End Contentbar -->




<!-- Start Contentbar -->    
<div class="contentbar breadcrumbbar" style="margin-top: 5%;" >
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30"  style="margin-bottom: 0%;"   style="margin-bottom: 0%;"  >

                <div class="card-header">
                    <h5 class="card-title">Select Furnishing</h5>
                </div>

                <div class="card-body" style="margin-bottom: 25px;">

                    <!-- bifurcate form post by data present inside -->
                    <form method="POST" action="{{url('/')}}/addproperties" >

                        {{ csrf_field() }}

                         <div class="form-row">
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="shoe" name="shoe">
                                    <label class="custom-control-label" for="shoe">Shoe Rack</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="tvstand" name="tvstand">
                                    <label class="custom-control-label" for="tvstand">T.V Stand</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="dining" name="dining">
                                    <label class="custom-control-label" for="dining">Dining Table</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="chair" name="chair">
                                    <label class="custom-control-label" for="chair">Chair</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="stool" name="stool">
                                    <label class="custom-control-label" for="stool">Stool</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="tea" name="tea">
                                    <label class="custom-control-label" for="tea">Tea Pie</label>
                                </div>
                            </div>                            
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="sofa" name="sofa">
                                    <label class="custom-control-label" for="sofa">Sofa</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="bed " name="bed ">
                                    <label class="custom-control-label" for="bed ">Bed</label>
                                </div>
                            </div>
                        </div>



                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="cupboard" name="cupboard">
                                    <label class="custom-control-label" for="cupboard">Cupboard</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="" name="">
                                    <label class="custom-control-label" for=""></label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="" name="">
                                    <label class="custom-control-label" for=""></label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="" name="">
                                    <label class="custom-control-label" for=""></label>
                                </div>
                            </div>
                        </div>


                        

                       



                        <button type="button" onclick="Submit3();" id="submit3" class="btn btn-primary-rgba" style="margin-top: 25px; display:inline-block; float: center;" ><i class="feather icon-chevrons-up"></i>Submit</button>


                    </form>

                    
                </div>


            </div>
        </div>
        <!-- End col -->
    </div> <!-- End row -->
</div>
<!-- End Contentbar -->





<!-- Start Contentbar -->    
<div class="contentbar breadcrumbbar"  style="margin-top: 5%;"  >                
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

                    <h5 class="card-title" style="display:inline-block; float: left">Other Charges</h5>

                    <button href="javascript:void(0)" id="infobar-add-charges-open" style="display:inline-block; float: right;" class="btn btn-primary-rgba" > 
                      <i class="feather icon-plus mr-2"></i>Add Other Charges
                    </button>


                    <br>

                  </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="edit-btn">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Description</th>
                                <th>Type Of Other Charge</th>                                                  
                                <th>Rate</th>                                                 
                                <th></th>                                                 
                                <th>Action</th>                                        
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>A.C Electricity Bill</td>
                                  <td>Amenities</td>                              
                                  <td>50/- Per Hour</td>                              
                                  <td></td>      
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" class=" infobar-edit-charges-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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
                                  <td>New Matress</td>
                                  <td>Furniture</td>                              
                                  <td>2000/- Per Member</td>                              
                                  <td></td>      
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" class=" infobar-edit-charges-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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





<!-- Start Contentbar -->    
<div class="contentbar breadcrumbbar"  style="margin-top: 5%;"   >
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header" style="margin-bottom: 25px;">
                    <h5 class="card-title">Terms And Condition</h5>
                </div>
                <div class="card-body" style="margin-bottom: 25px;">

                  <!-- <form method="POST" action="{{url('/')}}/addproperties" > -->

                        <div id="summernote"></div>

                        <button type="button" onclick="Submit4();" id="submit4" class="btn btn-primary-rgba" style="margin-top: 25px; display:inline-block; float: center;" ><i class="feather icon-chevrons-up"></i>Submit</button>


                    <!-- </form> -->


                </div>
            </div>
        </div>  
        <!-- End col -->
      
       
    </div> 
    <!-- End row -->
</div>
<!-- End Contentbar -->

























<!-- Modal: block and floor -->

 <!-- sidebar for add-block-floor  -->


                        <div id="infobar-add-block-floor-sidebar" class="infobar-settings-sidebar">
                            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                                <h4>Add Block And Floor</h4><a href="javascript:void(0)" id="infobar-add-block-floor-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
                            </div>
                            <div class="infobar-settings-sidebar-body">
                                <div class="custom-mode-setting">
                                    

                                   <form id="add_block_floor" >


                                    {{ csrf_field() }}


                                     <div class="row align-items-center pb-3">
                                            <input name="blockname" type="text" class="form-control" placeholder="Block Name"  />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input name="floorcount" type="number" class="form-control" placeholder="No. Of Floor" 
                                            oninput="javascript: if (this.value.length > 6) this.value = this.value.slice(0, 6);" />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                           <label style="color: #007bff; margin:2%;">If Your Properties Have Below Thing Then Select Respective Box</label>
                                      </div>

                                      <div class="row align-items-center pb-3">
                                             <div class="custom-control custom-checkbox ">
                                                <input type="checkbox" class="custom-control-input" id="basement" name="basement">
                                                <label class="custom-control-label" for="basement">Basement</label>
                                            </div>
                                      </div>

                                      <div class="row align-items-center pb-3">
                                             <div class="custom-control custom-checkbox ">
                                                <input type="checkbox" class="custom-control-input" id="terace" name="terace">
                                                <label class="custom-control-label" for="terace">Terace</label>
                                            </div>
                                      </div>
                                      

                                      <div class="row align-items-center pb-5 pull-right">

                                          <button type="submit" class="btn btn-primary-rgba" > 
                                            <i class="feather icon-plus mr-2"></i>Add Block And Floor
                                          </button>
                                        
                                      </div>

                                      <div class="row align-items-center pb-3">
                                      </div>


                                    </form>

                                </div>

                            </div>
                        </div>



        <!-- sidebar for add-block-floor -->

  <!-- Modal: block and floor -->



<!-- Modal: block and floor -->

 <!-- sidebar for edit-block-floor -->


                        <div id="infobar-edit-block-floor-sidebar" class="infobar-settings-sidebar">
                            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                                <h4>Edit Block And Floor</h4><a href="javascript:void(0)" id="infobar-edit-block-floor-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
                            </div>
                            <div class="infobar-settings-sidebar-body">
                                <div class="custom-mode-setting">
                                    

                                   <form id="edit_block_floor" >


                                    {{ csrf_field() }}


                                     <div class="row align-items-center pb-3">
                                            <input name="blockname" type="text" class="form-control" placeholder="Block Name"  />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input name="floorcount" type="number" class="form-control" placeholder="No. Of Floor" 
                                            oninput="javascript: if (this.value.length > 6) this.value = this.value.slice(0, 6);" />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                           <label style="color: #007bff; margin:2%;">If Your Properties Have Below Thing Then Select Respective Box</label>
                                      </div>

                                      <div class="row align-items-center pb-3">
                                             <div class="custom-control custom-checkbox ">
                                                <input type="checkbox" class="custom-control-input" id="basement" name="basement">
                                                <label class="custom-control-label" for="basement">Basement</label>
                                            </div>
                                      </div>

                                      <div class="row align-items-center pb-3">
                                             <div class="custom-control custom-checkbox ">
                                                <input type="checkbox" class="custom-control-input" id="terace" name="terace">
                                                <label class="custom-control-label" for="terace">Terace</label>
                                            </div>
                                      </div>
                                      

                                      <div class="row align-items-center pb-5 pull-right">

                                          <button type="submit" class="btn btn-primary-rgba" > 
                                            <i class="feather icon-plus mr-2"></i>Edit Details
                                          </button>
                                        
                                      </div>

                                      <div class="row align-items-center pb-3">
                                      </div>


                                    </form>

                                </div>

                            </div>
                        </div>



        <!-- sidebar for edit-block-floor  -->

  <!-- Modal: block and floor -->




































































<!-- Modal: Rooms -->

 <!-- sidebar for add-room  -->


                        <div id="infobar-add-room-sidebar" class="infobar-settings-sidebar">
                            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                                <h4>Add Room</h4><a href="javascript:void(0)" id="infobar-add-room-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
                            </div>
                            <div class="infobar-settings-sidebar-body">
                                
                                <div class="custom-mode-setting">
                                    

                                   <form id="add_room" >


                                    {{ csrf_field() }}


                                     <div class="row align-items-center pb-3">
                                            <select name="block" class="form-control"   >
                                                  <option  value="" selected>Select Block</option>
                                                  <option  value="">Block A</option>
                                                  <option  value="">Block B</option>
                                                  <option  value="">Block C</option>
                                            </select>
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <select name="floor" class="form-control"   >
                                                  <option  value="" selected>Select Floor</option>
                                                  <option  value="">Basement</option>
                                                  <option  value="">1</option>
                                                  <option  value="">2</option>
                                                  <option  value="">3</option>
                                                  <option  value="">4</option>
                                                  <option  value="">5</option>
                                                  <option  value="">Terace</option>
                                            </select>
                                      </div>



                                     <div class="row align-items-center pb-3">
                                            <input name="room" type="text" class="form-control" placeholder="Room Number"  />
                                      </div>

                                     

                                      <div class="row align-items-center pb-5 pull-right">

                                          <button type="submit" class="btn btn-primary-rgba" > 
                                            <i class="feather icon-plus mr-2"></i>Add Room
                                          </button>
                                        
                                      </div>

                                      <div class="row align-items-center pb-3">
                                      </div>

                                    </form>

                                </div>

                            </div>
                        </div>



        <!-- sidebar for add-room -->

  <!-- Modal: Rooms -->



<!-- Modal: Rooms -->

 <!-- sidebar for edit-room -->


                        <div id="infobar-edit-room-sidebar" class="infobar-settings-sidebar">
                            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                                <h4>Edit Room</h4><a href="javascript:void(0)" id="infobar-edit-room-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
                            </div>
                            <div class="infobar-settings-sidebar-body">
                                <div class="custom-mode-setting">
                                    

                                   <form id="edit_room" >


                                    {{ csrf_field() }}


                                       <div class="row align-items-center pb-3">
                                            <select name="block" class="form-control"   >
                                                  <option  value="" selected>Select Block</option>
                                                  <option  value="">Block A</option>
                                                  <option  value="">Block B</option>
                                                  <option  value="">Block C</option>
                                            </select>
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <select name="floor" class="form-control"   >
                                                  <option  value="" selected>Select Floor</option>
                                                  <option  value="">Basement</option>
                                                  <option  value="">1</option>
                                                  <option  value="">2</option>
                                                  <option  value="">3</option>
                                                  <option  value="">4</option>
                                                  <option  value="">5</option>
                                                  <option  value="">Terace</option>
                                            </select>
                                      </div>



                                     <div class="row align-items-center pb-3">
                                            <input name="room" type="text" class="form-control" placeholder="Room Number"  />
                                      </div>

                                     

                                      <div class="row align-items-center pb-5 pull-right">

                                          <button type="submit" class="btn btn-primary-rgba" > 
                                            <i class="feather icon-plus mr-2"></i>Edit Room
                                          </button>
                                        
                                      </div>

                                      <div class="row align-items-center pb-3">
                                      </div>


                                    </form>

                                </div>

                            </div>
                        </div>



        <!-- sidebar for edit-room  -->

  <!-- Modal: Rooms -->



































































<!-- Modal: Beds -->

 <!-- sidebar for add-beds  -->


                        <div id="infobar-add-bed-sidebar" class="infobar-settings-sidebar">
                            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                                <h4>Add Bed</h4><a href="javascript:void(0)" id="infobar-add-bed-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
                            </div>
                            <div class="infobar-settings-sidebar-body">
                                
                                <div class="custom-mode-setting">
                                    

                                   <form id="add_bed" >


                                    {{ csrf_field() }}


                                     <div class="row align-items-center pb-3">
                                            <select name="block" class="form-control"   >
                                                  <option  value="" selected>Select Block</option>
                                                  <option  value="">Block A</option>
                                                  <option  value="">Block B</option>
                                                  <option  value="">Block C</option>
                                            </select>
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <select name="floor" class="form-control"   >
                                                  <option  value="" selected>Select Floor</option>
                                                  <option  value="">Basement</option>
                                                  <option  value="">1</option>
                                                  <option  value="">2</option>
                                                  <option  value="">3</option>
                                                  <option  value="">4</option>
                                                  <option  value="">5</option>
                                                  <option  value="">Terace</option>
                                            </select>
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <select name="room" class="form-control"   >
                                                  <option  value="" selected>Select Room</option>
                                                  <option  value="">101</option>
                                                  <option  value="">102</option>
                                                  <option  value="">103</option>
                                                  <option  value="">104</option>
                                            </select>
                                     </div>


                                     <div class="row align-items-center pb-3">
                                            <input name="bed" type="text" class="form-control" placeholder="Bed Number"  />
                                     </div>


                                     <div class="row align-items-center pb-3">
                                            <input name="rent" type="number" class="form-control" placeholder="Rent Amount"  />
                                     </div>


                                     <div class="row align-items-center pb-3">
                                            <input name="deposit" type="number" class="form-control" placeholder="Deposit Amount"  />
                                     </div>


                                     <div class="row align-items-center pb-3">
                                            <input name="maintenance" type="number" class="form-control" placeholder="Maintenance Amount"  />
                                     </div>

                                     

                                      <div class="row align-items-center pb-5 pull-right">

                                          <button type="submit" class="btn btn-primary-rgba" > 
                                            <i class="feather icon-plus mr-2"></i>Add Bed
                                          </button>
                                        
                                      </div>

                                      <div class="row align-items-center pb-3">
                                      </div>

                                    </form>

                                </div>

                            </div>
                        </div>



        <!-- sidebar for add-beds -->

  <!-- Modal: Beds -->



<!-- Modal: beds -->

 <!-- sidebar for edit-bed -->


                        <div id="infobar-edit-bed-sidebar" class="infobar-settings-sidebar">
                            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                                <h4>Edit Bed</h4><a href="javascript:void(0)" id="infobar-edit-bed-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
                            </div>
                            <div class="infobar-settings-sidebar-body">
                                <div class="custom-mode-setting">
                                    

                                   <form id="edit_bed" >


                                    {{ csrf_field() }}


                                     <div class="row align-items-center pb-3">
                                            <select name="block" class="form-control"   >
                                                  <option  value="" selected>Select Block</option>
                                                  <option  value="">Block A</option>
                                                  <option  value="">Block B</option>
                                                  <option  value="">Block C</option>
                                            </select>
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <select name="floor" class="form-control"   >
                                                  <option  value="" selected>Select Floor</option>
                                                  <option  value="">Basement</option>
                                                  <option  value="">1</option>
                                                  <option  value="">2</option>
                                                  <option  value="">3</option>
                                                  <option  value="">4</option>
                                                  <option  value="">5</option>
                                                  <option  value="">Terace</option>
                                            </select>
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <select name="room" class="form-control"   >
                                                  <option  value="" selected>Select Room</option>
                                                  <option  value="">101</option>
                                                  <option  value="">102</option>
                                                  <option  value="">103</option>
                                                  <option  value="">104</option>
                                            </select>
                                     </div>


                                     <div class="row align-items-center pb-3">
                                            <input name="bed" type="text" class="form-control" placeholder="Bed Number"  />
                                     </div>


                                     <div class="row align-items-center pb-3">
                                            <input name="rent" type="number" class="form-control" placeholder="Rent Amount"  />
                                     </div>


                                     <div class="row align-items-center pb-3">
                                            <input name="deposit" type="number" class="form-control" placeholder="Deposit Amount"  />
                                     </div>


                                     <div class="row align-items-center pb-3">
                                            <input name="maintenance" type="number" class="form-control" placeholder="Maintenance Amount"  />
                                     </div>
                                      
                                     

                                      <div class="row align-items-center pb-5 pull-right">

                                          <button type="submit" class="btn btn-primary-rgba" > 
                                            <i class="feather icon-plus mr-2"></i>Edit Bed
                                          </button>
                                        
                                      </div>

                                      <div class="row align-items-center pb-3">
                                      </div>


                                    </form>

                                </div>

                            </div>
                        </div>



        <!-- sidebar for edit-bed  -->

  <!-- Modal: Beds -->


























































<!-- Modal: Charges -->

 <!-- sidebar for add-charges  -->


                        <div id="infobar-add-charges-sidebar" class="infobar-settings-sidebar">
                            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                                <h4>Add Other Charges</h4><a href="javascript:void(0)" id="infobar-add-charges-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
                            </div>
                            <div class="infobar-settings-sidebar-body">
                                
                                <div class="custom-mode-setting">
                                    

                                   <form id="add_charges" >


                                    {{ csrf_field() }}


                                     <div class="row align-items-center pb-3">
                                            <textarea name="description" type="text" placeholder="Other Charge Description" class="form-control" style="height:100px;"  /></textarea>
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <select name="charge_type" class="form-control"   >
                                                  <option  value="" selected>Type Of Other Charge</option>
                                                  <option  value="">Amenities</option>
                                                  <option  value="">Furniture</option>
                                            </select>
                                      </div>



                                     <div class="row align-items-center pb-3">
                                            <input name="rate" type="number" class="form-control" placeholder="Rate"  />
                                      </div>

                                     

                                      <div class="row align-items-center pb-5 pull-right">

                                          <button type="submit" class="btn btn-primary-rgba" > 
                                            <i class="feather icon-plus mr-2"></i>Add Other Charges
                                          </button>
                                        
                                      </div>

                                      <div class="row align-items-center pb-3">
                                      </div>

                                    </form>

                                </div>

                            </div>
                        </div>



        <!-- sidebar for add-charges -->

  <!-- Modal: Charges -->



<!-- Modal: Charges -->

 <!-- sidebar for edit-charges -->


                        <div id="infobar-edit-charges-sidebar" class="infobar-settings-sidebar">
                            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                                <h4>Edit Other Charges</h4><a href="javascript:void(0)" id="infobar-edit-charges-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
                            </div>
                            <div class="infobar-settings-sidebar-body">
                                <div class="custom-mode-setting">
                                    

                                   <form id="edit_charges" >


                                    {{ csrf_field() }}


                                    <div class="row align-items-center pb-3">
                                            <textarea name="description" type="text" placeholder="Other Charge Description" class="form-control" style="height:100px;"  /></textarea>
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <select name="charge_type" class="form-control"   >
                                                  <option  value="" selected>Type Of Other Charge</option>
                                                  <option  value="">Amenities</option>
                                                  <option  value="">Furniture</option>
                                            </select>
                                      </div>



                                     <div class="row align-items-center pb-3">
                                            <input name="rate" type="number" class="form-control" placeholder="Rate"  />
                                      </div>




                                      <div class="row align-items-center pb-5 pull-right">

                                          <button type="submit" class="btn btn-primary-rgba" > 
                                            <i class="feather icon-plus mr-2"></i>Edit Other Charges
                                          </button>
                                        
                                      </div>

                                      <div class="row align-items-center pb-3">
                                      </div>


                                    </form>

                                </div>

                            </div>
                        </div>



        <!-- sidebar for edit-charges  -->

  <!-- Modal: Charges -->

















@endsection 

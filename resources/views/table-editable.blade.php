@section('title') 
Orbiter - Editable
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

.modal.left .modal-dialog,
  .modal.right .modal-dialog {
    -webkit-transform: translate3d(0%, -0%, 0);
        -ms-transform: translate3d(0%, -0%, 0);
         -o-transform: translate3d(0%, -0%, 0);
            transform: translate3d(0%, -0%, 0);
  }

  


  .modal.right.fade .modal-dialog {
    right: -520px;
    -webkit-transition: opacity 0.3s linear, right 0.5s ease-out;
       -moz-transition: opacity 0.3s linear, right 0.5s ease-out;
         -o-transition: opacity 0.3s linear, right 0.5s ease-out;
            transition: opacity 0.3s linear, right 0.5s ease-out;
  }
  
  .modal.right.fade.in .modal-dialog {
    right: 0;
  }



  .tabledit-toolbar-column
  {
    display: none;
  }

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

                    <button style="display:inline-block; float: right;" class="btn btn-primary-rgba" id="infobar-settings-open" > 
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
                                            <span class="slider"></span>
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
                                            <span class="slider"></span>
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
                                            <span class="slider"></span>
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
                                            <span class="slider"></span>
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
                                            <span class="slider"></span>
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
            </div>
        </div>
        <!-- End col -->

    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->




  <!-- Modal: addmodal -->

 <div class="modal right fade " id="addmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" data-backdrop="true">
    <div class="modal-dialog modal-full-height modal-right modal-notify modal-success" role="document">
      

      <!--Content-->
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
          <h5>Add User</h5>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
          </button>
        </div>

        <!--Body-->
        <div class="modal-body">
          <div class="text-center">
            <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam blanditiis ad
              consequatur
              in dolores culpa, dignissimos, eius non possimus fugiat. Esse ratione fuga, enim, ab officiis totam.
            </p>
          </div>
          <ul class="list-group z-depth-0">
            <li class="list-group-item justify-content-between">
              Cras justo odio
              <span class="badge badge-primary badge-pill">14</span>
            </li>
            <li class="list-group-item justify-content-between">
              Dapibus ac facilisis in
              <span class="badge badge-primary badge-pill">2</span>
            </li>
            <li class="list-group-item justify-content-between">
              Morbi leo risus
              <span class="badge badge-primary badge-pill">1</span>
            </li>
            <li class="list-group-item justify-content-between">
              Cras justo odio
              <span class="badge badge-primary badge-pill">14</span>
            </li>
            <li class="list-group-item justify-content-between">
              Dapibus ac facilisis in
              <span class="badge badge-primary badge-pill">2</span>
            </li>
            <li class="list-group-item justify-content-between">
              Morbi leo risus
              <span class="badge badge-primary badge-pill">1</span>
            </li>
          </ul>
        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
          <a type="button" class="btn btn-success">Get it now
            <i class="far fa-gem ml-1"></i>
          </a>
          <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">No, thanks</a>
        </div>
      </div> 
      <!--/.Content-->
    </div>
  </div>

  <!-- Modal: addmodal -->



@endsection 
@section('script')
<!-- Tabledit js -->
<!-- <script src="{{ asset('assets/plugins/tabledit/jquery.tabledit.js') }}"></script>      -->
<script src="{{ asset('assets/js/custom/custom-table-editable.js') }}"></script>
@endsection 
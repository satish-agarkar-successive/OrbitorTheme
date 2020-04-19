@section('title') 
Orbiter - Form Layouts
@endsection 
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')


<!-- Start Contentbar -->    
<div class="contentbar breadcrumbbar">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">

                <div class="card-header">
                    <h5 class="card-title">Add Properties </h5>
                </div>
                
                <!-- <div class="card-body">

                  <div style="margin-bottom: 25px;">
                    <h5 class="card-title" style="display:inline-block; float: left"> Add Properties</h5>
                  </div>

                </div> -->

                <div class="card-body" style="margin-bottom: 25px;">


                    <form method="POST" action="{{url('/')}}/addproperties" >

                        {{ csrf_field() }}

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Property Name</label>
                                <input type="text" class="form-control" id="propertyname" >
                            </div>
                            <div class="form-group col-md-6">
                                <label>Building Name</label>
                                <input type="text" class="form-control" id="buildingname" >
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Address Line 1</label>
                                <input type="text" class="form-control" id="address1" >
                            </div>
                            <div class="form-group col-md-6">
                                <label>Address Line 2</label>
                                <input type="text" class="form-control" id="address2" >
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>State</label>
                                <select id="state" class="form-control">
                                      <option  value="" selected>Select State</option>
                                      <option  value="">Maharashtra</option>
                                      <option  value="">Andhra Pradesh</option>
                                      <option  value="">Gujurat</option>
                                      <option  value="">Karnataka</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label>City</label>
                                <select id="city" class="form-control">
                                      <option  value="" selected>Select City</option>
                                      <option  value="">Mumbai</option>
                                      <option  value="">Hyderabad</option>
                                      <option  value="">Vasant Nagari</option>
                                      <option  value="">Ooty</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Zip</label>
                                <input type="number" class="form-control" id="zip">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Landmark</label>
                                <input type="text" class="form-control" id="landmark">
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>Type Of Property</label>
                                <select id="propertytype" class="form-control">
                                      <option  value="" selected>Select Property Type</option>
                                      <option  value="">Flat</option>
                                      <option  value="">Villa</option>
                                      <option  value="">Bungalow</option>
                                      <option  value="">Duplex</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Type Of Accomodation</label>
                                <select id="city" class="form-control">
                                      <option  value="" selected>Select Accomodation Type</option>
                                      <option  value="">....</option>
                                      <option  value="">....</option>
                                      <option  value="">....</option>
                                      <option  value="">....</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Select User</label>
                                <select id="user" class="form-control">
                                      <option  value="" selected>Select User</option>
                                      <option  value="">User 1</option>
                                      <option  value="">User 2</option>
                                      <option  value="">User 3</option>
                                      <option  value="">user 4</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Gender</label>
                                <select id="gender" class="form-control">
                                      <option  value="" selected>Select Gender</option>
                                      <option  value="">Male</option>
                                      <option  value="">Female</option>
                                      <option  value="">Other</option>
                                </select>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary">Sign in</button>


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

@endsection 
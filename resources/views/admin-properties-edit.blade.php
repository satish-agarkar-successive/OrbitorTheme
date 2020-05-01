@section('title') 
Tenant - Edit Properties
@endsection 
@extends('layouts.main')
@section('style')

<!-- Summernote css -->
<link href="{{ asset('assets/plugins/summernote/summernote-bs4.css') }}" rel="stylesheet" type="text/css">
<!-- Code Mirror css -->
<link href="{{ asset('assets/plugins/code-mirror/codemirror.css') }}" rel="stylesheet" type="text/css">

@endsection 


<style type="text/css">
   .custom
   { margin-right: 10px; } 

   .previewimg
   {
      margin:20px;
      display:inline-block;
   }

</style>



@section('rightbar-content')


 <form method="POST" id="form" action="{{url('/')}}/addproperty"  enctype="multipart/form-data">
      {{ csrf_field() }}


<!-- Start Contentbar -->    
<div class="contentbar breadcrumbbar">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30"  style="margin-bottom: 0%;"  >

                <div class="card-header">
                    <h5 class="card-title">Edit Property</h5>
                </div>

                <div class="card-body" style="margin-bottom: 25px;">


                         <div class="form-row">
                            <div class="form-group col-md-4">
                               
                                <select name="property_type_id" id="property_type_id" class="form-control">
                                      <option  value="" selected>Select Property Type</option>
                                      @foreach($property_type as $pt)
                                          @if( $pt->id == json_decode($property_details)->property_type_id )
                                              <option  value='{{$pt->id}}' selected >{{$pt->type}}</option>
                                          @else
                                              <option  value='{{$pt->id}}'>{{$pt->type}}</option>
                                          @endif
                                      @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                               
                                <select name="user_id" id="user_id" class="form-control">
                                     <option  value="" selected>Select User</option>
                                      @foreach($users as $u)
                                          @if( $u->id == json_decode($property_details)->user_id )
                                              <option  value='{{$u->id}}' selected> {{$u->user_name}} [  {{$u->id}} - {{$u->user_mobile}} ]</option>
                                          @else
                                              <option  value='{{$u->id}}'> {{$u->user_name}} [  {{$u->id}} - {{$u->user_mobile}} ]</option>
                                          @endif
                                      @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <select name="property_gender_id" id="property_gender_id" class="form-control">
                                      <option  value="" selected>Select Property Gender</option>
                                      @foreach($property_gender as $pg)
                                          @if( $pg->id == json_decode($property_details)->property_gender_id )
                                               <option  value='{{$pg->id}}' selected>{{$pg->gender}}</option>
                                          @else
                                               <option  value='{{$pg->id}}'>{{$pg->gender}}</option>
                                          @endif
                                      @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" value="{{ json_decode($property_details)->property_name }}" class=" onlyalphaspace form-control" id="property_name" name="property_name" placeholder="Property Name" >
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" value="{{ json_decode($property_details)->building_name }}" class=" onlyalphaspace form-control" name="building_name" placeholder="Building Name" >
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" value="{{ json_decode($property_details)->property_address_1 }}" class=" form-control" id="property_address_1" name="property_address_1" placeholder="Address Line 1" >
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" value="{{ json_decode($property_details)->property_address_2 }}" class=" form-control" name="property_address_2" placeholder="Address Line 2" >
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <select name="state_id" id="state_id" class="form-control">
                                      <option  value="" selected>Select State</option>
                                      @foreach($states as $s)
                                          @if( $s->id == json_decode($property_details)->state_id )
                                               <option  value='{{$s->id}}' selected>{{$s->state}}</option>
                                          @else
                                               <option  value='{{$s->id}}'>{{$s->state}}</option>
                                          @endif
                                      @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <input name="city" value="{{ json_decode($property_details)->city }}" type="text" id="city" class=" city form-control" placeholder="City" />
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" value="{{ json_decode($property_details)->property_pincode }}" id="property_pincode" class=" zip form-control" name="property_pincode" placeholder="Zip">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" value="{{ json_decode($property_details)->property_landmark }}" class=" city form-control" id="property_landmark" name="property_landmark" placeholder="Landmark" >
                            </div>
                        </div>


                       <!--  <div class="form-row">
                            <div class="form-group col-md-4">
                               
                                <select name="propertytype" class="form-control">
                                      <option  value="" selected>Select Property Type</option>
                                      <option  value="">Paying Guest</option>
                                      <option  value="">Hostel</option>
                                      <option  value="">Private</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                               
                                <select name="accommodationtype" class="form-control">
                                      <option  value="" selected>Select Accommodation Type</option>
                                      <option  value="">Guest House</option>
                                      <option  value="">Hostel</option>
                                      <option  value="">Apartment</option>
                                      <option  value="">Hotel</option>
                                      <option  value="">Resort</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                               
                                <select name="user" class="form-control">
                                      <option  value="" selected>Select User</option>
                                      <option  value="">User 1</option>
                                      <option  value="">User 2</option>
                                      <option  value="">User 3</option>
                                      <option  value="">user 4</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <select name="propgender" class="form-control">
                                      <option  value="" selected>Select Property Gender</option>
                                      <option  value="">Male</option>
                                      <option  value="">Female</option>
                                      <option  value="">Co-Head</option>
                                      <option  value="">Co-Living</option>
                                </select>
                            </div>
                        </div> -->

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
                    <h5 class="card-title">Select Amenities</h5>
                </div>

                <div class="card-body" style="margin-bottom: 25px;">

                

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="parking" value="parking" name="property_amenities[]" >
                                    <label class="custom-control-label" for="parking">Parking</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="laundry" value="laundry" name="property_amenities[]">
                                    <label class="custom-control-label" for="laundry">Laundry</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="ac" value="ac" name="property_amenities[]">
                                    <label class="custom-control-label" for="ac">Air Conditioning</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="balcony" value="balcony" name="property_amenities[]">
                                    <label class="custom-control-label" for="balcony">Balcony</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="wifi" value="wifi" name="property_amenities[]">
                                    <label class="custom-control-label" for="wifi">Wifi</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="tv" value="tv" name="property_amenities[]">
                                    <label class="custom-control-label" for="tv">Tele Vision [ T.V. ]</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="dth" value="dth" name="property_amenities[]">
                                    <label class="custom-control-label" for="dth">DTH / Cable</label>
                                </div>
                            </div>                            
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="gym" value="gym" name="property_amenities[]">
                                    <label class="custom-control-label" for="gym">GYM</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="spa" value="spa" name="property_amenities[]">
                                    <label class="custom-control-label" for="spa">SPA</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="playground" value="playground" name="property_amenities[]">
                                    <label class="custom-control-label" for="playground">Playground</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="pool" value="pool" name="property_amenities[]">
                                    <label class="custom-control-label" for="pool">Pool</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="security_guard" value="security_guard" name="property_amenities[]">
                                    <label class="custom-control-label" for="security_guard">Security Guard</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="cctv" value="cctv" name="property_amenities[]">
                                    <label class="custom-control-label" for="cctv"> CCTV Camera </label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="hotwater" value="hotwater" name="property_amenities[]">
                                    <label class="custom-control-label" for="hotwater">Hot Water</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="shower" value="shower" name="property_amenities[]">
                                    <label class="custom-control-label" for="shower">Shower</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="none"  value="" name="property_amenities[]">
                                    <label class="custom-control-label" for="none">None</label>
                                </div>
                            </div>
                        </div>

                    
                </div>


            </div>
        </div>
        <!-- End col -->
    </div> <!-- End row -->
</div>
<!-- End Contentbar -->



<!-- 
<div class="contentbar breadcrumbbar" style="margin-top: 5%;" >
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-30"  style="margin-bottom: 0%;"   style="margin-bottom: 0%;"  >

                <div class="card-header">
                    <h5 class="card-title">Select Furnishing</h5>
                </div>

                <div class="card-body" style="margin-bottom: 25px;">

                    <form method="POST" action="{{url('/')}}/addproperties" >

                        {{ csrf_field() }}

                         <div class="form-row">
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="shoe" value="shoe"  name="Furnishing[]">
                                    <label class="custom-control-label" for="shoe">Shoe Rack</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="tvstand" value="tvstand"  name="Furnishing[]">
                                    <label class="custom-control-label" for="tvstand">T.V Stand</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="dining" value="dining"  name="Furnishing[]">
                                    <label class="custom-control-label" for="dining">Dining Table</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="chair" value="chair"  name="Furnishing[]">
                                    <label class="custom-control-label" for="chair">Chair</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="stool" value="stool"  name="Furnishing[]">
                                    <label class="custom-control-label" for="stool">Stool</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="tea" value="tea"  name="Furnishing[]">
                                    <label class="custom-control-label" for="tea">Tea Pie</label>
                                </div>
                            </div>                            
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="sofa" value="sofa"  name="Furnishing[]">
                                    <label class="custom-control-label" for="sofa">Sofa</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="bed" value="bed"  name="Furnishing[]">
                                    <label class="custom-control-label" for="bed">Bed</label>
                                </div>
                            </div>
                        </div>



                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="cupboard" value="cupboard"  name="Furnishing[]">
                                    <label class="custom-control-label" for="cupboard">Cupboard</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id=""  value="" name="Furnishing[]" >
                                    <label class="custom-control-label" for=""></label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id=""  value="" name="Furnishing[]" >
                                    <label class="custom-control-label" for=""></label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id=""  value="" name="Furnishing[]" >
                                    <label class="custom-control-label" for=""></label>
                                </div>
                            </div>
                        </div>


                </div>


            </div>
        </div>
    </div> 
</div>
 -->


<!-- Start Contentbar -->    
<div class="contentbar breadcrumbbar"  style="margin-top: 5%;"   >
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Photo Gallary</h5>
                </div>
                <div class="card-body">
                        <div id="preview"></div>
                        <div class="fallback">
                           <label class="btn btn-warning" >   
                               <input id="file-input" style="display: none;" name="property_photo_gallery[]" type="file" accept="image/*" multiple="multiple" size="2" /><i class="feather icon-upload"></i> Upload Photo
                          </label>
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
                        <div class="form-group" id="summernote"></div>
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
                <div class="card-header">
                    <h5 class="card-title">About</h5>
                </div>
                <div class="card-body">
                    <form method="post">
                        <textarea id="tinymce-example" name="area"></textarea>
                    </form>
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


  <!-- error messages -->
 <div class="row">
      <div class="alert alert-danger" align="left" id="errors" style="display: none;"> 
      </div>
  </div>
                                      


    <button type="button" onclick="Submit1();" id="submit1" class="btn btn-primary-rgba btn-lg btn-block" style=" width: 100%; margin-top: 15px; margin-bottom: 15px; display:inline-block; float: center;" ><i class=" custom feather icon-chevrons-up"></i>Submit New Details</button>
</div>
<!-- End Contentbar -->





</form>





@endsection 
@section('script')

<!-- Wysiwig js -->
<script src="{{ asset('assets/plugins/tinymce/tinymce.min.js') }}"></script>
<!-- Summernote JS -->
<script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- Code Mirror JS -->
<script src="{{ asset('assets/plugins/code-mirror/codemirror.js') }}"></script>
<script src="{{ asset('assets/plugins/code-mirror/htmlmixed.js') }}"></script>
<script src="{{ asset('assets/plugins/code-mirror/css.js') }}"></script>
<script src="{{ asset('assets/plugins/code-mirror/javascript.js') }}"></script>
<script src="{{ asset('assets/plugins/code-mirror/xml.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-form-editor.js') }}"></script>

<script type="text/javascript">

      var urlx = new URL(window.location.href);
      var idx = urlx.searchParams.get("id");


//append using php
  var property_details = <?= $property_details; ?> ;
  console.log(property_details);

  var property_amenities = property_details.property_amenities.split( " , " );
  for( $i=0 ; $i<property_amenities.length ; $i++ )  {   $('#'+property_amenities[$i]).prop('checked', true);   }
  

  var i=0;
  var requiredFiles = [] ;
  var oldrequiredFiles = property_details.property_photo_gallery.split( " , " ) ;


  $('#tinymce-example').val( property_details.property_about );


  $(document).ready(function() 
  {
      document.getElementById("property_type_id").focus(); 
      $("#summernote").summernote("code", property_details.property_tc );
      //setTimeout(function() {  tinyMCE.get('tinymce-example').setContent( property_details.property_about  );  }, 2000);
      viewimage();

  });


  function viewimage() 
  {


        for( $i=0; $i<oldrequiredFiles.length ; $i++)
        {
            $url = "{{ URL::asset('/PropertyGallery/') }}/"+oldrequiredFiles[$i];

             var div = '<div class="previewimg '+(i)+' " > <div> <button style="margin-bottom:5px;" type="button" onclick="olddeleteimage('+(i)+', \''+oldrequiredFiles[$i]+'\');" class="btn btn-danger-rgba "><i class="custom feather icon-x"></i></button> </div>   <img class="pull-center '+(i)+' " title="'+oldrequiredFiles[$i]+'" src="'+$url+'" id="'+oldrequiredFiles[$i]+'" height="140" >  </img>  </div>';
              i++;
              $("#preview").append(div);


        }
      
  }


  function olddeleteimage(id,filename) 
  {

      $('#'+id).remove(); //img id
      $('.'+id).remove(); //upper div class

      var index = oldrequiredFiles.indexOf(filename);
      if (index > -1) {  oldrequiredFiles.splice(index, 1);  }
      console.log(oldrequiredFiles);

      //ajax call
      $.ajax({
      type: "POST",
      url: "{{url('/')}}/deleteoldimage" ,
      data: { "_token": "{{ csrf_token() }}" , 'id' : idx , 'filename' : filename },
      dataType:"json",
      async:'true',
      success: function(result) { }});

  }






    $('html, body').animate({ scrollTop: 0 }, 'fast');
    document.querySelector('#file-input').addEventListener("change", previewImages);

    function previewImages() 
    {

          var valid = ['jpg','jpeg','bmp','png','gif','svg'];

          if (this.files) { [].forEach.call(this.files, readAndPreview); }


          function readAndPreview(file) 
          {

          if (!/\.(jpe?g|png|gif|bmp|svg)$/i.test(file.name)) { return alert("Only [ "+valid.join(', ')+" ]\nImage Formats Are Accepted "); }
            
            var reader = new FileReader();
            
            reader.addEventListener("load", function() 
            {

              var div = '<div class="previewimg '+(i)+' " > <div> <button style="margin-bottom:5px;" type="button" onclick="deleteimage('+(i)+', \''+file.name+'\');" class="btn btn-danger-rgba "><i class="custom feather icon-x"></i></button> </div>   <img class="pull-center '+(i)+' " title="'+file.name+'" src="'+this.result+'" id="'+file.name+'" height="140" >  </img>  </div>';
              i++;
              requiredFiles.push(file.name);
              console.log(requiredFiles);
              $("#preview").append(div);

            });
            
            reader.readAsDataURL(file);
          }  

    }

    function deleteimage(id,filename) 
    {

       $('#'+id).remove(); //img id
       $('.'+id).remove(); //upper div class

      var index = requiredFiles.indexOf(filename);
      if (index > -1) {
        requiredFiles.splice(index, 1);
      }
      console.log(requiredFiles);

    }


    function Submit1() 
    {

       var error=false;

       $("#errors").empty().hide();
        $("#errors").append("<ul>");


        if( $('#property_type_id').val() == "" ) 
            {  $("#errors").append("<li>Select Property Type.</li>").show();  error = true; }
      
        if( $('#user_id').val() == "" ) 
            {  $("#errors").append("<li>Select User.</li>").show();  error = true; }

        if( $('#property_gender_id').val() == "" ) 
        {  $("#errors").append("<li>Select Property Gender.</li>").show();  error = true; }

        if( $('#property_name').val() == "" ) 
          {  $("#errors").append("<li>Enter Property Name.</li>").show();  error = true; }

        if( $('#property_address_1').val() == "" ) 
          {  $("#errors").append("<li>Enter Property Address.</li>").show();  error = true; }

        if( $('#state_id').val() == "" ) 
          {  $("#errors").append("<li>Select State.</li>").show();  error = true; }

        if( $('#city').val() == "" ) 
          {  $("#errors").append("<li>Enter City.</li>").show();  error = true; }

        if( $('#property_pincode').val() == "" ) 
          {  $("#errors").append("<li>Enter Pincode.</li>").show();  error = true; }

        if( $('#property_landmark').val() == "" ) 
          {  $("#errors").append("<li>Enter Landmark.</li>").show();  error = true; }

        var checkbox= document.querySelector('input[name="property_amenities[]"]:checked');
        if(!checkbox) 
          {  $("#errors").append("<li>Select Amenities.</li>").show();  error = true; }

        if( oldrequiredFiles.length == 0 || requiredFiles.length == 0 ) 
          {  $("#errors").append("<li>Select Property Photos For Photo Galary.</li>").show();  error = true; }

         $tc = stripScripts ( $('#summernote').summernote('code') )  ;
         $about = stripScripts ( tinyMCE.activeEditor.getContent() )  ;

        if( $tc == "<p><br></p>" ) 
          {  $("#errors").append("<li>Enter Terms And Condition.</li>").show();  error = true; }

        if( $about == "" ) 
          {  $("#errors").append("<li>Enter About.</li>").show();  error = true; }


        $("#errors").append("</ul>");

        if( error == false ) { ajax(); }

       
    }


    function ajax() 
    {

          $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});

          document.getElementById("submit1").disabled = true;
          $("#submit1").html("Please Wait....");


          $tc = stripScripts ( $('#summernote').summernote('code') )  ;
          $about = stripScripts ( tinyMCE.activeEditor.getContent() )  ;

           formdata = new FormData($('#form')[0]);
           if( requiredFiles.length != 0 ) {  formdata.append('requiredFiles', requiredFiles);  }
           formdata.append('oldrequiredFiles', oldrequiredFiles);
           if( $tc != "<p><br></p>" ) { formdata.append('property_tc', $tc); }
           formdata.append('property_about', $about);
           formdata.append('idx', idx );


            $.ajax({
            type: "POST",
            url: "{{url('/')}}/editproperty" ,
            data: formdata,
            dataType:"json",
            cache:false,
            processData:false,
            contentType:false,
            success: function(result) 
            { 
                window.location = "/adminproperty";
                document.getElementById("submit1").disabled = false;
                $("#submit1").html("Property Edited Successfully");
                alert("Property Edited Successfully");
                $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"}); 

            },
            error: function(json) 
              {

                 $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"}); 

                 document.getElementById("submit1").disabled = false;
                 $("#submit1").html("<i class=custom feather icon-chevrons-up'></i>Submit All Details");

                  if(json.status === 422) 
                    {
                        $("#errors").empty();
                        $("#errors").append("<ul>");
                        var errors = json.responseJSON;
                        $.each(errors['errors'], function (key, value) {  $("#errors").append("<li>"+value+"</li>");  });
                        $("#errors").append("</ul>").show();
                    } 
                    else { $("#errors").hide();  }

              }
            
        });

    }


    function stripScripts(s) {
    var div = document.createElement('div');
    div.innerHTML = s;
    var scripts = div.getElementsByTagName('script');
    var i = scripts.length;
    while (i--) {
      scripts[i].parentNode.removeChild(scripts[i]);
    }
    return div.innerHTML;
  }


</script>

@endsection 
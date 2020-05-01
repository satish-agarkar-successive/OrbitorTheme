<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Response;
use Storage;
use File;

use App\Models\Property;

class AdminPropertyController extends Controller
{


    function index()
    {


        // for status toggle and delete
        if(  isset($_GET['action']) && isset($_GET['id'])  ) 
        { 
            
            $action = Strip_tags($_GET['action']) ;
            $id = Strip_tags($_GET['id']) ;

            if(  $action == "delete" && $id!="" ) // $value != "" for toggle status
            {
                $business = Property::destroy($id);
                return redirect('/adminproperty');
            }

        }

        else
        {

                // id,property_name,building_name,user_id,property_address_1,property_address_2,state_id,city,property_pincode,property_landmark,property_type_id,property_gender_id,property_amenities,property_photo_gallery,property_about,property_tc,property_status

                $property_list =DB::table('property')
                    ->leftjoin('bed','bed.property_id', '=', 'property.id')
                    ->join('users','users.id', '=', 'property.user_id')
                    ->join('state', 'state.id', '=', 'property.state_id')
                    ->join('property_type', 'property_type.id', '=', 'property.property_type_id')
                    ->join('property_gender', 'property_gender.id', '=', 'property.property_gender_id')
                    ->select(DB::raw( 'count(bed.id) as bedcount , property.id , property_name , building_name , property_address_1 , property_address_2 , property_pincode , property_landmark , user_name , user_mobile , state.state , city , property_type.type , property_gender.gender , property_amenities' ) )
                    ->groupBy('property.id')
                    ->orderBy('property.id' , 'desc')
                    ->paginate(10);

                    $data = array('property' => $property_list);
                  return view('admin-properties-table',$data);
        }


    }


    function addpropertyget()
    {
        $property_type=DB::table('property_type')->select('id','type')->get();
        $users=DB::table('users')->select('id','user_name','user_mobile')->get();
        $property_gender=DB::table('property_gender')->select('id','gender')->get();
        $states=DB::table('state')->select('id','state')->get();
        

        $data = array('property_type' => $property_type , 'users' => $users, 'property_gender' => $property_gender , 'states' => $states );
        return view('admin-properties-add',$data);
    }
    function addpropertypost(Request $req)
    {
       

        // xampp/php ->search php.ini and open configuration file edit below fields and restart xampp
        //upload_max_filesize = 2M -> 100M
        //post_max_size = 8M -> 100M

        $rules = [    

            'property_type_id' => 'required',
            'user_id' => 'required',
            'property_gender_id' => 'required',
            'property_name' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
            'building_name' => ['nullable', 'regex:/^[a-zA-Z\s]*$/'],
            'property_address_1' => 'required',
            'property_address_2' => 'nullable',
            'state_id' => 'required',
            'city' => 'required|max:50',
            'property_pincode' => 'required|digits:6',
            'property_landmark' => 'required|max:50',
            'property_amenities' => 'required',            
            //'property_photo_gallery'=> 'required',  // |mimes:jpg,jpeg,bmp,png,gif,svg,pdf
            'requiredFiles'=> 'required',  // |mimes:jpg,jpeg,bmp,png,gif,svg,pdf
            'property_tc' => 'required',
            'property_about' => 'required',

        ];
    
        $customMessages = [

            'property_amenities.required' => 'Amenities Required.',
            
            // 'property_photo_gallery.required' => 'Photo Gallery Required.',
            'requiredFiles.required' => 'Photo Gallery Required.',
            
            'property_tc.required' => 'Terms And Condition Required Required.',
            'property_about.required' => 'About Required.',
            

            'property_name.required' => 'Property Name Required And Should Not Contain Numeric Value.',
            'property_name.regex' => 'Property Name Should Not Contain Numeric Value.',

            'building_name.required' => 'Building Name Required And Should Not Contain Numeric Value.',
            'building_name.regex' => 'Building Name Should Not Contain Numeric Value.',

            'property_address_1.required' => 'Property Address_1 Required And Should Not Contain Numeric Value.',
            'property_address_1.regex' => 'Property Address_1 Should Not Contain Numeric Value.',

            'property_address_2.required' => 'Property Address_2 Required And Should Not Contain Numeric Value.',
            'property_address_2.regex' => 'Property Address_2 Should Not Contain Numeric Value.',

            'property_type_id.required' => 'Property Type Required.',
            'property_gender_id.required' => 'Property Gender Required.',
            'user_id.required' => 'User Required.',
            'state_id.required' => 'State Required.',
            'city.required' => 'City Required.',
            'city.max' => 'City Should Be Max 50 Characters.',

            'property_landmark.required' => 'Landmark Required.',
            'property_landmark.max' => 'Landmark Should Be Max 50 Characters.',

            'property_pincode.required' => 'Pincode Required.',
            'property_pincode.max' => 'Pincode Should Be Max 6 Characters.',
            
        ];

        if( $this->validate($req, $rules, $customMessages) )
        {


            $path = public_path('PropertyGallery');
            if(!File::isDirectory($path)) {  File::makeDirectory($path, 0777, true, true);  }


            $requiredFiles = explode("," , $req['requiredFiles'] );

            $property_photo_gallery = array();

            $count = count( $_FILES['property_photo_gallery']['name'] );
            for( $i=0 ; $i < $count ; $i++ ) 
            {
                if ( in_array( $_FILES['property_photo_gallery']['name'][$i] , $requiredFiles ) )
                {
                    
                    if( is_uploaded_file( $_FILES['property_photo_gallery']['tmp_name'][$i] ) )
                    {   
                        $file_fullname = $_FILES['property_photo_gallery']["name"][$i];
                        $file_fullname = explode('.', $file_fullname);
                        $gallery_photo_name = $file_fullname[0].'_'.date('YmdHis').'.'.$file_fullname[1];
                        $move =  move_uploaded_file($_FILES['property_photo_gallery']['tmp_name'][$i], public_path().'/PropertyGallery/'.$gallery_photo_name);

                        array_push( $property_photo_gallery , $gallery_photo_name );

                    }

                }

            }

            
            $property_amenities = implode( " , " , $req['property_amenities'] );
            $property_photo_gallery = implode( " , " , $property_photo_gallery );

            
            $property_data = array
            (
              'property_type_id' => strip_tags( $req['property_type_id'] ),
              'user_id' => strip_tags( $req['user_id'] ),
              'property_gender_id' => strip_tags( $req['property_gender_id'] ),
              'property_name' => strip_tags( $req['property_name'] ),
              'building_name' => strip_tags( $req['building_name'] ),
              'property_address_1' => strip_tags( $req['property_address_1'] ),
              'property_address_2'  => strip_tags( $req['property_address_2'] ),
              'state_id' => strip_tags( $req['state_id'] ),
              'city' => strip_tags( $req['city'] ),
              'property_pincode' => strip_tags( $req['property_pincode'] ),
              'property_landmark' => strip_tags( $req['property_landmark'] ),
              'property_amenities' => $property_amenities,
              'property_photo_gallery' => $property_photo_gallery,
              'property_tc' => strip_tags( $req['property_tc'] ),
              'property_about' => strip_tags( $req['property_about'] ),
              'property_status' => 1,
            );

            $id =  DB::table('property')->insertgetID($property_data);
            return Response::json(array('status' => 'success' ),200 );



        }

    }

    function editpropertyget() // for id 
    {

        $property_type=DB::table('property_type')->select('id','type')->get();
        $users=DB::table('users')->select('id','user_name','user_mobile')->get();
        $property_gender=DB::table('property_gender')->select('id','gender')->get();
        $states=DB::table('state')->select('id','state')->get();


        $id= strip_tags( $_GET['id'] );
        if( !is_numeric($id)){  return redirect('/adminproperty');  }
        $property_details =DB::table('property')->where('property.id',$id)->first();

        $data = array( 'property_details' => json_encode($property_details) , 'property_type' => $property_type , 'users' => $users, 'property_gender' => $property_gender , 'states' => $states );
        return view('admin-properties-edit',$data);

    }


    

    function deleteoldimagepost(Request $req) // updated fields
    {

        $id= strip_tags( $req['id'] );
        if( !is_numeric($id)){  return redirect('/adminproperty');  }

        $file_path = public_path().'/PropertyGallery/'.$req['filename'];
        
        if(file_exists($file_path))
        {

            unlink($file_path);
            $gallery = DB::table('property')->select('property_photo_gallery')->where('property.id',$id)->first();

            $gallary = explode( " , " , $gallery->property_photo_gallery );
            $index = array_search( $req['filename'] , $gallary );
            unset( $gallary[$index] );

            $new_property_photo_gallery = implode(" , ", $gallary);

            $update = DB::table('property')
                        ->where('property.id',$id)
                        ->update(['property_photo_gallery'=>$new_property_photo_gallery]);

        }

        return Response::json(array('status' => 'success' ),200 );

    }



    function editpropertypost(Request $req) // updated fields
    {

        $rules = [    

            'property_type_id' => 'required',
            'user_id' => 'required',
            'property_gender_id' => 'required',
            'property_name' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
            'building_name' => ['nullable', 'regex:/^[a-zA-Z\s]*$/'],
            'property_address_1' => 'required',
            'property_address_2' => 'nullable',
            'state_id' => 'required',
            'city' => 'required|max:50',
            'property_pincode' => 'required|digits:6',
            'property_landmark' => 'required|max:50',
            'property_amenities' => 'required',            
            //'property_photo_gallery'=> 'required',  // |mimes:jpg,jpeg,bmp,png,gif,svg,pdf
            //'oldrequiredFiles'=> 'required',  // |mimes:jpg,jpeg,bmp,png,gif,svg,pdf
            'property_tc' => 'required',
            'property_about' => 'required',

        ];
    
        $customMessages = [

            'property_amenities.required' => 'Amenities Required.',
            
            // 'property_photo_gallery.required' => 'Photo Gallery Required.',
            //'oldrequiredFiles.required' => 'Photo Gallery Required.',
            
            'property_tc.required' => 'Terms And Condition Required Required.',
            'property_about.required' => 'About Required.',
            

            'property_name.required' => 'Property Name Required And Should Not Contain Numeric Value.',
            'property_name.regex' => 'Property Name Should Not Contain Numeric Value.',

            'building_name.required' => 'Building Name Required And Should Not Contain Numeric Value.',
            'building_name.regex' => 'Building Name Should Not Contain Numeric Value.',

            'property_address_1.required' => 'Property Address_1 Required And Should Not Contain Numeric Value.',
            'property_address_1.regex' => 'Property Address_1 Should Not Contain Numeric Value.',

            'property_address_2.required' => 'Property Address_2 Required And Should Not Contain Numeric Value.',
            'property_address_2.regex' => 'Property Address_2 Should Not Contain Numeric Value.',

            'property_type_id.required' => 'Property Type Required.',
            'property_gender_id.required' => 'Property Gender Required.',
            'user_id.required' => 'User Required.',
            'state_id.required' => 'State Required.',
            'city.required' => 'City Required.',
            'city.max' => 'City Should Be Max 50 Characters.',

            'property_landmark.required' => 'Landmark Required.',
            'property_landmark.max' => 'Landmark Should Be Max 50 Characters.',

            'property_pincode.required' => 'Pincode Required.',
            'property_pincode.max' => 'Pincode Should Be Max 6 Characters.',
            
        ];

        if( $this->validate($req, $rules, $customMessages) )
        {


            $path = public_path('PropertyGallery');
            if(!File::isDirectory($path)) {  File::makeDirectory($path, 0777, true, true);  }


            $new_requiredFiles = explode("," , $req['requiredFiles'] );

            $property_photo_gallery = array();

            $count = count( $_FILES['property_photo_gallery']['name'] );
            for( $i=0 ; $i < $count ; $i++ ) 
            {
                if ( in_array( $_FILES['property_photo_gallery']['name'][$i] , $new_requiredFiles ) )
                {
                    
                    if( is_uploaded_file( $_FILES['property_photo_gallery']['tmp_name'][$i] ) )
                    {   
                        $file_fullname = $_FILES['property_photo_gallery']["name"][$i];
                        $file_fullname = explode('.', $file_fullname);
                        $gallery_photo_name = $file_fullname[0].'_'.date('YmdHis').'.'.$file_fullname[1];
                        $move =  move_uploaded_file($_FILES['property_photo_gallery']['tmp_name'][$i], public_path().'/PropertyGallery/'.$gallery_photo_name);

                        array_push( $property_photo_gallery , $gallery_photo_name );

                    }

                }

            }

            $property_amenities = implode( " , " , $req['property_amenities'] );
            $property_photo_gallery = implode( " , " , $property_photo_gallery );
            

$id= strip_tags( $req['idx'] );
if( !is_numeric($id)){  return redirect('/adminproperty');  }
$current_gallery = DB::table('property')->select('property_photo_gallery')->where('property.id',$id)->first();
// $current_gallery = explode( " , " , $current_gallery->property_photo_gallery );

if( $current_gallery->property_photo_gallery != "" )
{   
    if( $property_photo_gallery!= "" )
    {
        $property_photo_gallery = $current_gallery->property_photo_gallery.' , '.$property_photo_gallery ; 
    }
    else
    {
        $property_photo_gallery = $current_gallery->property_photo_gallery;
    }

}

            
            $property_data = array
            (
              'property_type_id' => strip_tags( $req['property_type_id'] ),
              'user_id' => strip_tags( $req['user_id'] ),
              'property_gender_id' => strip_tags( $req['property_gender_id'] ),
              'property_name' => strip_tags( $req['property_name'] ),
              'building_name' => strip_tags( $req['building_name'] ),
              'property_address_1' => strip_tags( $req['property_address_1'] ),
              'property_address_2'  => strip_tags( $req['property_address_2'] ),
              'state_id' => strip_tags( $req['state_id'] ),
              'city' => strip_tags( $req['city'] ),
              'property_pincode' => strip_tags( $req['property_pincode'] ),
              'property_landmark' => strip_tags( $req['property_landmark'] ),
              'property_amenities' => $property_amenities,
              'property_photo_gallery' => $property_photo_gallery,
              'property_tc' => strip_tags( $req['property_tc'] ),
              'property_about' => strip_tags( $req['property_about'] ),
              'property_status' => 1,
            );

            $id =  DB::table('property')->where('property.id',$id)->update($property_data);
            return Response::json(array('status' => 'success' ),200 );



        }

 
    }



    function propertydetailsget()
    {
        return view('admin-properties-details-add-edit');
    }
    function propertydetailspost(Request $req)
    {
        dd($req);
        return view('admin-properties-details-add-edit');
    }



}

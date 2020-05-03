<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

use Response;

class AdminInventoryController extends Controller
{


    function propertyinventoryget()
    {

        $id= strip_tags( $_GET['id'] );
        if( !is_numeric($id)){  return redirect('/adminproperty');  }
        $have_basement = ""; $have_terrace = "";


            $blockfloors =DB::table('block')->select('id','block_name','floor_count','have_basement','have_terrace','block_status')->where('property_id',$id)->get();



            for($i=0;$i<count($blockfloors);$i++)
            {

                $have_basement = "";$have_terrace = "";
                if($blockfloors[$i]->have_basement!=null||$blockfloors[$i]->have_basement!=""||$blockfloors[$i]->have_basement!="0")
                { $have_basement = "Basement + " ; }
                if($blockfloors[$i]->have_terrace!=null||$blockfloors[$i]->have_terrace!=""||$blockfloors[$i]->have_terrace!="0")
                { $have_terrace = " + Terrace" ; }
                $blockfloors[$i]->floor_count = $have_basement.$blockfloors[$i]->floor_count.$have_terrace;

            }


            $room_sharing_type = DB::table('room_sharing')->get();
            $room_gender_type = DB::table('room_gender')->get();
            $room_type = DB::table('room_type')->get();

            // $states=DB::table('state')->select('id','state')->get();
            // $users=DB::table('users')->select('id','user_name','user_mobile')->get();
            // $business_types=DB::table('business_type')->select('id','type')->get();


            // $data = array( 'blockfloors' => $blockfloors , 'rooms' => $rooms , 'room_sharing_type' => $room_sharing_type , 'room_gender_type' => $room_gender_type, 'room_type' => $room_type , 'beds' => $beds, 'otcharges' => $otcharges);

            $data = array('blockfloors' => $blockfloors , 'room_sharing_type' => $room_sharing_type , 'room_gender_type' => $room_gender_type, 'room_type' => $room_type );

        return view('admin-properties-inventory',$data);

    }



    function addblockfloorpost(Request $req)
    {

    $id = strip_tags( $req['id'] );
    if(!is_numeric($id)){return Response::json(array('status'=>'error','errors'=>['Incorrect ID Format.']),422); }
        
           $block_floor = array
            (
              'property_id' => $id ,
              'block_name' => strip_tags( $req['block_name'] ),
              'floor_count' => strip_tags( $req['floor_count'] ),
              'have_basement' => strip_tags( $req['have_basement'] ),
              'have_terrace' => strip_tags( $req['have_terrace'] ),
              'block_status' => 1,
            );
        
            $id =  DB::table('block')->insertgetID($block_floor);
            return Response::json(array('status' => 'success' ),200 );
       
    }





    function deleteblockfloor()
    {

        if( isset($_GET['action']) && isset($_GET['id']) )
        { 
            
            $action = Strip_tags($_GET['action']) ;
            $id = Strip_tags($_GET['id']) ;

            if(  $action == "delete" && $id!="" ) // $value != "" for toggle status
            {
                $blockfloor = DB::table('block')->where('id',$id)->delete($id);
                return Redirect::back();
            }
        }
       
    }



    function editblockfloorget(Request $req)
    {
        $id= strip_tags( $req['id'] );
        $blockfloor =DB::table('block')->where('id',$id)->get();
        $data = array('blockfloor' => $blockfloor);
        return Response::json(array('status' => 'success', 'data' => $data['blockfloor'][0] ),200 );
    }

    function editblockfloorpost(Request $req)
    {
         $id = strip_tags( $req['blockfloor_id'] );
         if(!is_numeric($id)){return Response::json(array('status'=>'error','errors'=>['Incorrect ID Format.']),422); }
        
           $block_floor = array
            (
              'block_name' => strip_tags( $req['block_name'] ),
              'floor_count' => strip_tags( $req['floor_count'] ),
              'have_basement' => strip_tags( $req['have_basement'] ),
              'have_terrace' => strip_tags( $req['have_terrace'] ),
              'block_status' => 1,
            );
        
            $id =  DB::table('block')->where('id',$id)->update($block_floor);
            return Response::json(array('status' => 'success' ),200 );

    }
    

}
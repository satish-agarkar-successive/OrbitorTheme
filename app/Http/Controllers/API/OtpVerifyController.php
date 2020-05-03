<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;
use App\Models\OTP;
use App\Events\Registered;
use App\Traits\SendSms;
use DB;
use Validator;
use Illuminate\Http\Response;

class OtpVerifyController extends Controller
{
    use SendSms;
    public $successStatus = 200;
    public function resendOtp(Request $request)
    {

        $id = $request->id;
        
        $user = Users::where("id", $id)->first();
        
        $mobile = $user->user_mobile;

        $otp = mt_rand(1000, 9999);
        $otp_exist = DB::table('otp')->where('user_id',$id)->first();
        
        if ($otp_exist != null) {

            $otp_exist = DB::table('otp')->where('user_id', $id)->update(['otp' => $otp]);

            $msg = "Your mobile verification code is for login on tenant App";
           
            $this->SendSms($msg, $mobile);

            return response()->json([ 'message' => "OTP send on your registered mobile number",'otp'=>$otp], $this->successStatus);


        }
        return response()->json(['message' => "OTP send on your registered mobile number"], $this->successStatus);
    }

    public function verifyOtp(Request $request)
    {
        $validator  = Validator::make($request->all(),
            [
                'otp' => 'required',
            ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $id = $request->id;
        $otp = $request->otp;
        $user_otp = DB::table('otp')->where('user_id',$id)->first();

        if ($user_otp->otp == $otp) {
            
            $user = Users::where('id', $request->get('id'))
                         ->update(['is_mobile_verified' => 1]);
            $user_info = Users::where("id", $id)->first();
            return response()->json(['message' => "Mobile verification successfully done.",'user'=>$user_info], $this->successStatus);

        } else {
            return response()->json(['message' => "Please check otp you have entered"], 401);
        }
        // $user = User::findOrFail($id);

    }
}

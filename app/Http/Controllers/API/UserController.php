<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;
use App\Traits\SendSms;
use Validator;
use DB;


class UserController extends Controller
{
    public $successStatus = 200;
    use SendSms;

    /** 
     * login api 
     * 
     * @return \Illuminate\Http\Response 
     */
    public function login(Request $request)
    {
        // Check validation
        $validator  = Validator::make($request->all(), [
            'user_mobile' => 'required|regex:/[0-9]{10}/|digits:10',
        ]);
        //validation msg
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        // Get user record
        $user = Users::where('user_mobile', $request->get('user_mobile'))->first();

        // Check Condition Mobile No. Found or Not
        if ($user != null) {
            if ($request->get('user_mobile') != $user->user_mobile) {

                return response()->json(['errors' => 'Your mobile number not match in our system..!!'], 401);
            }
        } else {

            return response()->json(['errors' => 'Your mobile number not match in our system..!!'], 401);
        }

        $user_data = array(
            'user_mobile'  =>  $user->user_mobile,
        );

        if ($user_data) {
            $success['token'] =  $user->createToken('MyApp')->accessToken;
            if ($user->is_mobile_verified == 0) {

                $otp = mt_rand(1000, 9999);
                $otp_exist = DB::table('otp')
                    ->where('user_id', $user->id)
                    ->first();

                if ($otp_exist == null) {

                    DB::table('otp')->insert(['user_id' => $user->id, 'otp' => $otp, 'status' => 1]);

                    $msg = "Your mobile verification code is $otp for login on tenant App";

                    $this->SendSms($msg, $user->user_mobile);

                    return response()->json(['success' => $success, "user" => $user, 'message' => "OTP send on your registered mobile number", 'otp' => $otp], 200);
                }
            } else {

                return response()->json(['success' => $success, "user" => $user], $this->successStatus);
            }
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }

    // public function details()
    // {
    //     $user = Auth::user();
    //     return response()->json(['success' => $user], $this->successStatus);
    // }
}

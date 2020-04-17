<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Response;
use Redirect;

class LoginLogoutController extends Controller
{
	function index()
    {
    	if( Auth::check() ) { return redirect('/home'); }
    	//Auth::logout();
    	return view('user-login');
    }

    function login(Request $request)
    {

    	if( Auth::check() ) { return redirect('/home'); }


	    $rules = [
          'phone'   => 'required|numeric|digits:10',
	      'password'  => 'required|min:8',
	    ];

	    $customMessages = [
	        
	        'phone.required' => 'Phone Number Required.',
	        'phone.numeric' => 'Phone Number Should Be Numeric.',
	        'phone.digits' => 'Phone Number Should Be 10 Digit Long.',
	        
	        'password.required' => 'Password Required.',
	        'password.min' => 'Password Length Should be 8 Characters Long.',
	        
	    ];

	    $this->validate($request, $rules, $customMessages);


	     $user_data = array(
	      'phone'  => $request->get('phone'),
	      'password' => $request->get('password')
	     );


	     if(Auth::attempt($user_data))
	     {
	      	return redirect('/home');
	     }
	     else
	     {
	     	return Redirect('/home?err=Invalid Phone Number Or Password.');
	     }

    }


    function logout()
    {
		Auth::logout();
    	return redirect('/home');    

    }
    	

}

?>
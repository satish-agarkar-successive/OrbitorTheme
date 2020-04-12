<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Response;
use Redirect;

class HomeController extends Controller
{
    function index()
    {
    	if( ! Auth::check() ) { return view('user-login'); }

       	return view('dashboard-ecommerce');
    }


}

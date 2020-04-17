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
    	//this check is removed now since middle ware is used
    	//if( ! Auth::check() ) { return view('user-login'); }

       	return view('index');  //crm index view

    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
    	//this check is removed now since middle ware is used
    	//if( ! Auth::check() ) { return view('user-login'); }

       	return view('table-editable');  //crm index view

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPropertyController extends Controller
{
    function index()
    {
    	//this check is removed now since middle ware is used
    	//if( ! Auth::check() ) { return view('user-login'); }

       	return view('admin-users-table');  //crm index view

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Response;
use Redirect;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index()
    {
       	return view('admin-dashboard');  //crm index view
    }

}

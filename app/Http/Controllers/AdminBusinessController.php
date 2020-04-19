<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBusinessController extends Controller
{
    function index()
    {
       	return view('admin-business-table'); 

    }
}

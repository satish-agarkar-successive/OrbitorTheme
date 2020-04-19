<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPropertyController extends Controller
{

    function index()
    {
       	return view('admin-properties-table'); 
    }

    function addget()
    {
        return view('admin-properties-add-table');
    }

    function addpost(Request $req)
    {
        dd($req);
        return view('admin-properties-add-table');
    }


    function editget(Request $req) // { id } 
    {
       	return view('admin-properties-edit-table'); 
    }

    function editpost(Request $req) // { id } 
    {
        return view('admin-properties-edit-table'); 
    }

}

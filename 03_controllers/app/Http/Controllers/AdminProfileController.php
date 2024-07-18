<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    //
    function admin_profile()
    {
        return view("admin.profile");
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    //

    function user_profile()
    {
        return view("user.profile");
    }
}
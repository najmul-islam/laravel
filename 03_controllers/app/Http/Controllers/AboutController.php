<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    // function show()
    // {
    //     return "Hello Controller";
    // }

    // function show($name)
    // {
    //     return "Hello $name from Controller";
    // }

    function show()
    {
        $name = "Laravel";
        return view("about", ["name" => $name]);
    }
}
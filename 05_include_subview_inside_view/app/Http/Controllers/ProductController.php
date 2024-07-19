<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    function show()
    {
        $website_name = "ClickKart";
        $user = "guest";
        $user_type = $user === "Admin" ? true : false;
        // $students = ["Sonam", "Rahul", "Jay", "Sumit"];
        $students = [];
        return view("products", ["website_name" => $website_name, "user_type" => $user_type, "students" => $students]);
    }
}
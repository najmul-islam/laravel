<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    function contact()
    {
        $name = "Sonam";
        $students = ["Rahul", "Sumit", "Raj", "Kunal"];
        // $students = [];
        return view("contact", ["name" => $name, "students" => $students]);
    }
}
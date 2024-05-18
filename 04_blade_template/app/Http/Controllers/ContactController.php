<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function show()
    {
        $name = "Sonam";
        return view("contact", ["name" => $name]);
    }
}
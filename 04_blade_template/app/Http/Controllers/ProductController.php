<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function show()
    {
        $website = "ClickKart";
        return view("product", ["website" => $website]);
    }
}
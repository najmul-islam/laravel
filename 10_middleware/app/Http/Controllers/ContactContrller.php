<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactContrller extends Controller
{
    //

    public function show()
    {
        return view("contact");
    }
}
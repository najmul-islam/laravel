<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function showform()
    {
        return view("registration");
    }

    public function signup(Request $request)
    {
        $validate = $request->validate([
            "name" => "required|min:10",
            "email" => "required",
            "password" => "required"
        ]);

        $input = $request->except(["_token"]);
        return view("registration", ['data' => $input]);
    }
}
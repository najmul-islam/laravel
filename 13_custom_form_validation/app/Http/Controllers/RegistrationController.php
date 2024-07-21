<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use Illuminate\Http\Request;
use App\Rules\Uppercase;

class RegistrationController extends Controller
{
    public function showform()
    {
        return view("registration");
    }

    public function signup(RegistrationRequest $request)
    {
        // $request->validate([
        //     "name" => ['required', new Uppercase],
        //     "email" => "required",
        //     "password" => "required"
        // ]);

        // $input = $request->except(["_token"]);
        // return view("registration", ['data' => $input]);

        $request->validated();
        $input = $request->except(["_token"]);
        return view('registration', ["data" => $input]);
    }
}
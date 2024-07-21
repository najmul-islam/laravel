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
        // dd($request);
        // print_r($request->input('name'));
        // print_r($request->input("email"));
        // print_r($request->input("password"));

        // print_r($request->name);
        // print_r($request->email);
        // print_r($request->password);

        // if ($request->has(['name', 'email'])) {
        //     print_r($request->input('name'));
        //     print_r($request->input('email'));
        // }

        // if ($request->hasAny(['name', 'email'])) {
        //     print_r($request->input('name'));
        //     print_r($request->input('email'));
        // }

        // if ($request->filled('name')) {
        //     print_r($request->input('name'));
        // }

        // if ($request->missing('user')) {
        //     print_r('');
        // }

        // $request->whenHas('name', function ($input) {
        //     print_r("Data modified");
        // });

        // $request->whenFilled("name", function ($input) {
        //     print_r("Data modified");
        // });

        // $request->flash();
        // $request->flashOnly(["name", "email"]);
        // $request->flashExcept(["password"]);

        return redirect("/olddata")->withInput();
        // print_r($request->old("name"));
        // print_r($request->old("email"));
        // print_r($request->old("password"));

        // return view("registration");
    }
}
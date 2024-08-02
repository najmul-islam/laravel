<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentContrller extends Controller
{

    public function show()
    {
        // get all data
        $students = DB::table('student')->get();
        // $students = DB::table('student')->select('name', 'email')->get();

        //get where clues
        // $students = DB::table('student')->where('id', 'like', 's%')->get();

        // get single data
        //$student = DB::table('student')->first();
        // return view("student", ["student" => $student]);


        DB::table('student')->insert([
            'name' => 'Suman',
            'email' => 'suman@gmail.com',
            'city' => 'Bokaro'
        ]);
        return view("student", ["students" => $students]);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentContrller extends Controller
{
    //

    public function show()
    {
        // $name = 'Ranbir';
        // $email = 'ranbir@gmail.com';
        // $city = 'Mumbai';
        // DB::insert('insert into student (name, email, city) values(?, ?, ?)', ['Jack', 'jack@gmail.com', 'Rachi']);
        // DB::insert('insert into student(name, email, city) value(:name, :email, :city)', ['name' => 'kunal', 'email' => 'jack@gmail.com', 'city' => 'Ranchi']);
        // DB::insert(
        //     'insert into student(name, email, city) values(:name, :email, :city)',
        //     ['name' => $name, 'email' => $email, 'city' => $city]
        // );

        // update
        // DB::update('update student set city = ? where id = ?', ['Dhanbad', 4]);
        // DB::update('update student set city = :city where id = :id', ['city' => 'Ranchi', 'id' => 4]);

        // delete
        // DB::delete('delete from student where id=?', [5]);
        // DB::delete('delete from student where id = :id', ['id' => 7]);

        // $students = DB::select('select * from student where city = ?', ['Rachi']);
        $students = DB::select('select * from student');
        return view("student", ["students" => $students]);
    }
}
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get("/about", function () {
//     return view("about");
// });

Route::view("/about", "about");
Route::get("/admin/profile", function () {
    return view("admin.profile");
});

// Route::get("/contact", function () {
//     return view("contact", ["name" => "Rahul"]);
// });

// Route::view("/contact", "contact", ["name" => "Sonam"]);

// Route::get("/contact", function () {
//     return view("contact", ["name" => "Sonam", "roll" => 101]);
// });

Route::get("/contact", function () {
    return view("contact")->with("name", "Sonam");
});
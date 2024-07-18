<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/about", function () {
    return view("about");
});

Route::get("/user/{userId}", function ($userId) {
    return view("user.profile", ['userId' => $userId]);
});

// Route::view("/about", "about");

Route::get("/admin/profile", function () {
    return view("admin.profile");
});

// Route::view("/admin/profile", "admin.profile");

// Route::get("/contact", function () {
//     return view("contact", ["name" => "Sonam"]);
// });

// Route::view("/contact", "contact", ["name" => "Sonam"]);

// Route::get("/contact", function () {
//     return view("contact", ["name" => "Sonam", "roll" => 123]);
// });

Route::get("/contact", function () {
    return view("contact")->with(["name" => "Sonam", "roll" => 1234]);
});
<?php

use App\Http\Controllers\ContactContrller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get("/about", function () {
    return view("about");
})->name("about");

Route::get("/contact", [ContactContrller::class, "show"])->name("contact");

Route::get("/post/{category}", function ($category) {
    return view("post", ["category" => $category]);
})->name("post");
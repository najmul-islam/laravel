<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ["name" => "Sonam"]);
});

Route::get("/contact", [ContactController::class, "contact"]);

//products
Route::get("/products", [ProductController::class, "show"]);

Route::get("/php", function () {
    return view("writephp");
});
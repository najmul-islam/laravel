<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome', ["name" => "Sonam"]);
});

Route::get("/contact", [ContactController::class, "show"]);
Route::get("/product", [ProductController::class, "show"]);
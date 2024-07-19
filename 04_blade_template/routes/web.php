<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ["name" => "Sonam"]);
});

Route::get("/contact", [ContactController::class, "contact"]);
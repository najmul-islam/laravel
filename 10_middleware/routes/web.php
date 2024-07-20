<?php

use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get("/dashboard", function () {
    return view("dashboard");
});

Route::middleware(['construction'])->group(function () {
    Route::get("/stock", function () {
        return view("stock");
    });

    Route::get("/report", [ReportController::class, "show"]);
});
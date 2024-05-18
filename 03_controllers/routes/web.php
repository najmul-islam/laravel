<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminProfileController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get("/about", [AboutController::class, "show"]);
// Route::get("/about/{name}", [AboutController::class, "show"]);
// Route::get("/admin/profile", [AdminProfileController::class, "show"]);

Route::get("/about", [AboutController::class, "show"]);
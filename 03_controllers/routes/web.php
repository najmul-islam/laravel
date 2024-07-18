<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/about", [AboutController::class, "show"]);
Route::get("/about/{name}", [AboutController::class, "show"]);


Route::get("/admin/profile", [AdminProfileController::class, "admin_profile"]);
Route::get("/user/profile", [UserProfileController::class, "user_profile"]);

Route::get("/post", [PostController::class, "posts"]);
Route::get("/post/{post_id}", [PostController::class, "post"]);
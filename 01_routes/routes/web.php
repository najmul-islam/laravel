<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/about", function () {
    return "Hello world";
});

Route::get("user/{userId}", function ($id) {
    return $id;
});

Route::get("/post/{post_id}/comment/{comment_id}", function ($post_id, $comment_id) {
    // return $post_id . $comment_id;
    return "Post Id: " . $post_id . " Comment Id: " . $comment_id;
});

Route::get("/student/{name?}", function ($name = null) {
    return "Hello " . $name;
});

Route::get("/student/{name?}", function ($name = "sonam") {
    return "Hello " . $name;
});

Route::get("/product/{name}", function ($name) {
    return "Product Name: " . $name;
})->where("name", "[A-Za-z]+");

Route::redirect("/service", "/about");

Route::redirect("/service", "/about", 301);
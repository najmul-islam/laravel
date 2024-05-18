<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/about", function () {
    return "This is about page";
});

Route::get("/user/{u_id}", function ($id) {
    return $id;
});

Route::get("/post/{post_id}/comment/{comment_id}", function ($post_id, $comment_id) {
    return "Post id: " . $post_id . " Comment id: " . $comment_id;
});

Route::get("/student/{name?}", function ($name = null) {
    return "Hello " . $name;
});

Route::get("/product/{p_name}", function ($name) {
    return "Porduct Name" . $name;
})->where("p_name", "[A-Za-z]+");

Route::get("/manager/{id}/{name}", function ($id, $name) {
    return "Manger id: " . $id . " Manager name: " . $name;
})->where(["id" => "[0-9]+", "name" => "[a-z]+"]);


Route::get("/employe/{id}/{name}", function ($id, $name) {
    return "Employe id: " . $id . " Employe name: " . $name;
})->whereNumber("id")->whereAlpha("name");

Route::redirect("/contact", "/");
Route::redirect("/contact-us", "/", 301);
Route::permanentRedirect("/contact-with", "/");

Route::fallback(function () {
    return "Default message";
});
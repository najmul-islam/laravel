<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return 'This is about route';
});


Route::get('/user/{user_id}', function ($user_id) {
    return $user_id;
});


Route::get('/post/{post_id}/comment/{comment_id}', function ($post_id, $comment_id) {
    return 'post_id: ' . $post_id . ' comment_id: ' . $comment_id;
});

// Route::get('/student/{name?}', function ($name = null) {
//     return 'Hello ' . $name;
// });

Route::get('/student/{name?}', function ($name = 'sonam') {
    return 'Hello ' . $name;
});

Route::get('/product/{product_name}', function ($product_name) {
    return 'Product Name: ' . $product_name;
})->where('product_name', '[A-za-z]+');

Route::get('/manager/{id}/{name}', function ($id, $name) {
    return 'Manager Id: ' . $id . " Manager Name: " . $name;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);


Route::get('/employee/{id}/{name}', function ($id, $name) {
    return "Employee Id: " . $id . " Employee name: " . $name;
})->whereNumber('id')->whereAlpha('name');


Route::get('/login', function () {
    return "Login page";
});

// Route::redirect('/profile', 'login');
Route::redirect('/profile', '/login', 301);
Route::permanentRedirect('/profile', '/login');


Route::fallback(function () {
    return "Not found";
});

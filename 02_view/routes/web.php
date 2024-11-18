<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------
| Basic view
|--------------------------------------------------------------------------
| These routes map specific URIs to corresponding views. The `Route::get()`
| method is used to handle HTTP GET requests and return a view.
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
/*
|--------------------------------------------------------------------------
| View in folder
|--------------------------------------------------------------------------
| This route demonstrates how to return a view located within a folder
| in the resources/views directory. In this case, the view 'admin.profile'
| is located in the 'admin' folder.
*/
Route::get('/user/profile', function () {
    return view('user.profile');
});
Route::get('/admin/profile', function () {
    return view('admin.profile');
});

/*
|--------------------------------------------------------------------------
| View shrotcut
|--------------------------------------------------------------------------
| These routes use the Route::view() method to return a simple view
| without the need for defining a controller. The method provides
| an easy way to map a URI to a view.
*/

Route::view('/service', 'service');
Route::view('/faq', 'faq');

Route::view('/user/dashboard', 'user.dashboard');
Route::view('/admin/dashboard', 'admin.dashboard');

/*
|--------------------------------------------------------------------------
| Passing Data to View
|--------------------------------------------------------------------------
| This route demonstrates how to pass data from the route to the view.
| In this case, the data array contains the variable 'name' with the value 'Sonam'.
| The data is passed to the 'contact' view.
*/

Route::get('/blog/author', function () {
    return view('blog.author', ['author' => 'Sonam']);
});
// Route::view('/blog/author', 'blog.author', ['author' => 'Sonam']);
Route::get('/blog/comments', function () {
    return view('blog.comments', ['id' => '1', 'text' => 'Nice post']);
});
// Route::view('/blog/comments', 'blog.comments', ['id' => '1', 'text' => 'Nice post']);

/*
|--------------------------------------------------------------------------
| Passing Data to View with() Function
|--------------------------------------------------------------------------
| This route demonstrates how to pass data from the route to the view.
| The 'with()' function is used to pass the data to the view.
| In this example, we are passing an associative array with the key 'name'
| and the value 'Sonam' to the 'contact' view.
| The view will be able to access the 'name' variable and use it.
*/

Route::get('/blog/author', function () {
    return view('blog.author')->with('author', 'Sonam');
});
// Route::view('/blog/author', 'blog.author', ['author' => 'Sonam']);
Route::get('/blog/comments', function () {
    return view('blog.comments', ['id' => '1', 'text' => 'Nice post']);
});
// Route::view('/blog/comments', 'blog.comments', ['id' => '1', 'text' => 'Nice post']);

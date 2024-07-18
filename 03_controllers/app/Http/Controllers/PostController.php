<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    function posts()
    {
        return view("post.posts");
    }

    function post($post_id)
    {
        return view("post.post", ["post_id" => $post_id]);
    }
}
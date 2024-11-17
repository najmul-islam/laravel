<?php

namespace App\Http\Controllers\Backend;

use APP\Http\Controllers\Controller;

class FrontController extends Controller
{
    //
    public  function index()
    {
        view('welcome');
    }
}
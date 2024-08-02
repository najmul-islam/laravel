<?php

use App\Http\Controllers\StudentContrller;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;

Route::get('/', [StudentContrller::class, "show"]);
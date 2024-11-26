<?php

use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/stock', function () {
    return view('stock');
})->middleware('construction');
Route::get('/report', [ReportController::class, "show"])->middleware('construction');
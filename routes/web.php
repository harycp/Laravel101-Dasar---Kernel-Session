<?php

use App\Http\Controllers\RequestController;
use App\Http\Controllers\ResponseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [ViewController::class, 'viewHome']);
Route::get('/about', [ViewController::class, 'viewAbout']);
Route::get('/contact', [ViewController::class, 'viewContact']);
Route::get('/blog', [ViewController::class, 'viewBlog']);

Route::get('/request/hello', [RequestController::class, 'request']);
Route::post('/request/hello', [RequestController::class, 'request']);

Route::get('/response', [ResponseController::class, 'response']);
Route::get("/response/header", [ResponseController::class, 'headerResponse']);
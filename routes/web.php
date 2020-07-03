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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    //return view('welcome');
    //return "user test";
    return view('blog');
});

Route::get('/blog/create', function () {
    //return view('welcome');
    //return "user test";
    return view('blog');
});


Route::get('/user', function () {
    //return view('welcome');
    //return "user test";
    return view('user');
});

Route::get('/layout_test', function () {
    //return view('welcome');
    //return "user test";
    return view('test');
});

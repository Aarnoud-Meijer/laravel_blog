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
*/

$pages = array(
 //   '/'             => 'welcome',
    '/'             => 'index',
    '/blog'         => 'blog',
    '/blog/create'  => 'blog',
    '/user'         => 'user',
    '/layout_test'  => 'test',
    '/test'         => 'test',
);

foreach($pages as $key => $val){
    Route::get($key, [
        'as'    => $key,
        'uses'  => 'PagesController@'.$val,
    ]);
}


foreach($pages as $key => $val){
//    echo $val;
    /*
    Route::get($key, function ($val) {
        return view($val);
    });
    */
}

$pagestest = array(
    '/test'  => 'test',
);

foreach($pages as $key => $val){
    //echo $val;
    /*
    Route::get($key, function (&$val) {
        return view($val);
    });
    
    Route::get($key, [
        'as'    => $key,
        'uses'  => 'PagesController@'.$val,
    ]);
    */
}

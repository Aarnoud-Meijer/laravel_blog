<?php

use Illuminate\Support\Facades\Route;

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
        // 'key' => !empty($val) ? $val : 'default', 
    ]);
}

Route::group(['as' => 'admin::', 'prefix' => 'admin'], function(){
    // $router->pattern('id', '[0-9]+');
    // 'where' => ['id' => '[0-9]+'],
    Route::get('dashboard/{id?}', [
        'as'    => 'dashboard',
        'uses'  => 'adminController@dashboard',
//        'id'    => 'id',
    ]);
    Route::get('blogpage/{id?}', [
        'as'    => 'dashboard',
        'uses'  => 'adminController@blogpage',
    ]);
});

Route::post('/blog', [
    'as'    => 'blog',
    'uses'  => 'PagesController@blog',
]);


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

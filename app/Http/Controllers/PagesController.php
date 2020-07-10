<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PagesController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    use \App\Http\Controllers\baseController;

    public function index($val = NULL){
        Blog::all();
        return view('welcome');
    }

    public function test($val = NULL){
        return view('blog/blog');
        return view('test');
    }

    public function blog($val = NULL){
        return view('blog/blog');
    }

    public function user($val = NULL){

        return 'user';
    }
}

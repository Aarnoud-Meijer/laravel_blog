<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PagesController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index($val = NULL){
        return view('welcome');
    }

    public function test($val = NULL){
        return view('blog/test');
        return view('test');
    }

    public function blog($val = NULL){
        return view('blog/test');
        return view('test');
    }

    public function user($val = NULL){

        return 'user';
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class adminController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index($val = NULL){
        return view('welcome in dashboard');
    }

    public function dashboard($val = NULL, $id = null){
        //return view('blog/test');
        var_dump($val);
        return 'dashboard';
    }

    public function blogpage($val = NULL, $id = null){
        //return view('blog/test');
        var_dump($val);
        return 'dashboard';
    }
}


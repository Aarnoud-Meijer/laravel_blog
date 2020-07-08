<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class BlogController extends Controller
{
    public function index(){
        Message::all();


    }
}

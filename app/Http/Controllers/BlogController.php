<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Message;
use App\Blog;

class BlogController extends Controller
{
    public function index(){
        Blog::all();

/*
$table->id();
$table->string('title');
$table->text('body');
$table->string('autor');
$table->timestamps();
*/
    }

    
    public function createPost(Request $request){
        // Post or blog entry
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->autor = $request->autor;
        $blog->save();
    }
}

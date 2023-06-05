<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogProjectController extends Controller
{
    public function index(){
        return view('website.home.index');
    }
    public function singleBlog(){
        return view('website.blog.index');
    }
}

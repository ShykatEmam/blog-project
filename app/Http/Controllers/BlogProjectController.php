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
    public function about(){
        return view('website.about.index');
    }
    public function contact(){
        return view('website.contact.index');
    }
    public function category(){
        return view('website.category.index');
    }
}

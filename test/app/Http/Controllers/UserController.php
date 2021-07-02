<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\Image;
use App\Category;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function create()
    {
        $categories=Category::all();
        //return view('index',compact('posts','categories'));

    	return view('create',compact('categories'));
    }
    public function store(Request $request)
    {

     $this->validate($request, ['name' => 'required']);
       
    }
    public function index()
    {
        $posts=Post::all();
        return view('index',compact('posts'));

    }
}

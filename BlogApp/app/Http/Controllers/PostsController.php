<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index (){
        return view('posts.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body'=>'required'
        ]);
      $request->user()->posts()->create([
        'body'=>$request->body
      ]);
      return back();
        }
}

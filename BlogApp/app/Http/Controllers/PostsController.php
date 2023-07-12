<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index (){
        $posts = Posts::with(['user', 'likes'])->paginate(8);

        return view('posts.index', [
            'posts' =>$posts
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body'=>'required'
        ]);
      $request->user()->posts()->create($request->only('body'));
      return back();
        }
}

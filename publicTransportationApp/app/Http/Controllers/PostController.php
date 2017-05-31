<?php

namespace App\Http\Controllers;
use App\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function postCreatePost(Request $request){
        $post = new post();
        $post->body = $request['body'];
//        $request->user()->posts()->save($post);
//        return redirect()->route('Dashboard');
        $post->save();
    }
}

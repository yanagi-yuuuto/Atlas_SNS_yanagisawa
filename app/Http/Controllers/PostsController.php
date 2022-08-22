<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::with('User')->get();
        return view('posts.index', compact('posts'));
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
          'post' => 'required|max:150',
        ]);

        if ($validator->fails()) {
            return redirect('/top')
               ->withInput()
               ->withErrors($validator);
        }

        $posts = new Post;
        $posts->post = $request->post;
        $posts->user_id = Auth::id();//ここでログインしているユーザidを登録しています
        $posts->save();

        return redirect('/top');
    }
}

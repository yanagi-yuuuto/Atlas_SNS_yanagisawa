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
        $user_id = Auth::id();
        $login_user = Auth::user();
        $posts = Post::query()->whereIn('user_id', Auth::user()->follows()->pluck('followed_id'))->orWhere('user_id', Auth::user()->id)->latest()->get();
        return view('posts.index', compact('user_id','login_user','posts'));
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

    public function update(Request $request){
        $update_post = $request->input('update-post');
        $update_id = $request->input('update-id');
        \DB::table('posts')
            ->where('id', $update_id)
            ->update(
                ['post' => $update_post]
            );
        return redirect('/top');
    }

    public function delete($id){
        \DB::table('posts')
            ->where('id', $id)
            ->delete();
        return redirect('/top');
    }
}

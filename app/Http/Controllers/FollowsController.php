<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Follow;
use App\Post;
use Auth;

class FollowsController extends Controller
{
    //
    public function followList(){
        $following_id = Auth::user()->follows()->pluck('followed_id');
        $users = \DB::table('users')->whereIn('users.id', $following_id)->get();
        $posts = Post::with('user')->whereIn('posts.user_id', $following_id)->get();
        return view('follows.followList', compact('users','posts'));
    }


    public function followerList(){
        $followed_id = Auth::user()->followers()->pluck('following_id');
        $users = \DB::table('users')->whereIn('users.id', $followed_id)->get();
        $posts = Post::with('user')->whereIn('posts.user_id', $followed_id)->get();
        return view('follows.followerList', compact('users','posts'));
    }

}

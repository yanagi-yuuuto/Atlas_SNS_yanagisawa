<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Follow;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    //
    public function profile(){
        $user = Auth::user();
        return view('users.profile', compact('user'));
    }

    public function update(Request $request) {

        $validator = Validator::make($request->all(), [
          'username' => 'required|string|min:2|max:12',
          'mail' => 'required|string|email|min:5|max:40|unique:users',
          'password' => 'required|string|alpha_num|min:8|max:20|confirmed',
          'bio' => 'string|max:150',
          'image' => 'image',
        ]);

        if ($validator->fails()) {
            return redirect('/profile')
               ->withInput()
               ->withErrors($validator);
        }

        $id = Auth::id();
        $update_username = $request->input('username');
        \DB::table('users')
            ->where('id', Auth::id())
            ->update(['username' => $update_username]);

        $update_mail = $request->input('mail');
        \DB::table('users')
            ->where('id', Auth::id())
            ->update(['mail' => $update_mail]);

        $update_password = $request->input('password');
        \DB::table('users')
            ->where('id', Auth::id())
            ->update(['password' => $update_password]);


        $update_bio = $request->input('bio');
        \DB::table('users')
            ->where('id', Auth::id())
            ->update(['bio' => $update_bio]);

        $image_path = $request->file('image')->store('/public');
        $update_image = basename($image_path);
        \DB::table('users')
            ->where('id', Auth::id())
            ->update(['images' => $update_image]);

        return redirect('/top');
    }

    public function search(){
        $users = \DB::table('users')->get();    // 全てのデータが取得できる
        return view('users.search', compact('users'));
    }

    public function result(Request $request){
        $keyword = $request->input('keyword');
        $user_id = Auth::id();
        $query = User::query();
        if (!empty($keyword)) {
            $query->where('username', 'LIKE', "%{$keyword}%");
        }
        $users = $query->get();
        return view('users.search', compact('users','keyword','user_id'));
    }

    public function follow($id){
        $follows = new Follow;
        $follows->followed_id = $id;
        $follows->following_id = Auth::id();
        $follows->save();
        return back();
    }

    public function unfollow($id){
        \DB::table('follows')
            ->where([
                ['followed_id' , $id ],
                ['following_id' , Auth::id()]
            ])
            ->delete();
        return back();
    }

    public function userProfile($id) {
        $user = User::find($id);
        $user_id = Auth::id();
        $login_user = Auth::user();
        $posts = User::find($id)->posts()->get();
        return view('users.userProfile' , compact('user','login_user','user_id','posts'));
    }
}

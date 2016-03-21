<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use App\Todo;
use App\Profile;
use Illuminate\Http\Request;

use Illuminate\Contracts\Auth\Authenticatable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Profile $profile, Todo $todos, Authenticatable $user)
    {
        $id = $user->id;
        $todos = Todo::where("user_id", "=", $id)->get();
        $profile = Profile::where("user_id", "=", $id)->orderBy('created_at', 'desc')->first();
        return view('home', compact('profile', 'todos'));
    }

    public function showProfile(User $name, Todo $todos, Profile $profile)
    {

      $id = $name->id;
      $todos = Todo::where("user_id", "=", $id)->get();
      $profile = Profile::where("user_id", "=", $id)->orderBy('created_at', 'desc')->first();
      return view('profile', compact('name', 'todos', 'profile'));
    }
}

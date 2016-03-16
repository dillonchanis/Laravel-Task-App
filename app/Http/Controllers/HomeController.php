<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use App\Todo;
use Illuminate\Http\Request;

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
    public function index()
    {
        return view('home');
    }

    public function showProfile(User $name, Todo $todos)
    {

      $id = $name->id;
      $todos = Todo::where("user_id", "=", $id)->get();

      return view('profile', compact('name', 'todos'));
    }
}

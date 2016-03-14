<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use App\Http\Requests;

class ToDoController extends Controller
{
    public function index()
    {
      $todos = Todo::all();

      return view('todo.index', compact('todos'));
    }

    public function show(Todo $todos)
    {
      return view('todo.show', compact('todos'));
    }

    public function store(Request $request, ToDo $todos)
    {
      $todo = new ToDo;
      $todo->title = $request->title;

      $todo->save();
      return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Todo;
use App\Note;
use Illuminate\Http\Request;
use App\Http\Requests;

class NotesController extends Controller
{
    public function store(Request $request, Todo $todos)
    {
      $note = new Note;
      $note->body = $request->body;

      $todos->notes()->save($note);

      return back();
    }
}

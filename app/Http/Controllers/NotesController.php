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

    public function edit(Note $note)
    {
      return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
      $note->update($request->all());

      return back();
    }

    public function delete(Note $note)
    {
      Note::destroy($note->id);
      return back();
    }
}

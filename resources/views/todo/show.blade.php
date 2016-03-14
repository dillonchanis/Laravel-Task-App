@extends('layouts.app')

@section('content')
<div class="container">
  <h2>{{ $todos->title }}</h2>
  <hr>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h3>Current Tasks</h3>
      <ul class="list-group">
        @foreach ($todos->notes as $note)
        <div class="col-md-12 list-group-item">
          <li style="list-style:none;">{{ $note->body  }}<a href="/notes/{{ $note->id }}/edit"class="btn btn-warning pull-right">Edit</a></li>
        </div>

        <div class="col-md-2">

        </div>
        @endforeach
      </ul>
    </div>
  </div>

  <hr>

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h3>Add a New Task</h3>

      <form method="POST" action="/todo/{{ $todos->id }}/notes">
        {{ csrf_field() }}

        <div class="form-group">
          <textarea name="body" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Add a Task</button>
        </div>
      </form>
  </div>
</div>

  <a href="/todo/">Back To Index</a>
</div>
@stop

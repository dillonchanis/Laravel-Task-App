@extends('layouts.app')

@section('content')
<div class="container">
  <h2>{{ $todos->title }}</h2>
  <hr>
  <ul>
    @foreach ($todos->notes as $note)
      <li>{{ $note->body  }}</li>
    @endforeach
  </ul>
  <a href="/todo/">Back To Index</a>

  <form method="POST" action="/todo/{{ $todos->id }}/notes">
    {{ csrf_field() }}

    <div class="form-group">
      <textarea class="form-control"></textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Add a ToDo</button>
    </div>
  </form>
</div>
@stop

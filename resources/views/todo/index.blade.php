@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>All To Do Lists</h1>
      <hr>
        <ul class="list-group">
          @foreach ($todos as $todo)
            <li class="list-group-item">
              <a href="/todo/{{ $todo->id }}">{{ $todo->title }}</a>
              <a href="/todo/{{ $todo->id }}/delete" data-method="delete" class="btn btn-danger pull-right">Delete</a>
            </li>
          @endforeach
        </ul>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h3>Add a ToDo</h3>

      <form method="POST" action="/todo/new">
        {{ csrf_field() }}

        <div class="form-group">
          <textarea name="title" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Add ToDo</button>
        </div>
      </form>
  </div>
  </div>
</div>
@stop

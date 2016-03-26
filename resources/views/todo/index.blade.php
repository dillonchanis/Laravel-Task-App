@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-todo">
        <div class="panel-body">
          <div class="col-md-6 col-md-offset-3">
          <h2>All Tasks List</h2>
            <ul class="list-group">
              @foreach ($todos as $todo)
                <li class="list-group-item">
                  <a href="/todo/{{ $todo->id }}">{{ $todo->title }}</a>
                  <a href="/todo/{{ $todo->id }}/delete" data-method="delete" class="pull-right"><i class="material-icons">delete</i></a>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h3>Add a Task</h3>

      <form method="POST" action="/todo/new">
        {{ csrf_field() }}

        <div class="form-group">
          <textarea name="title" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn call-to-button">Add Task</button>
        </div>
      </form>

      @if (count($errors))
        @foreach($errors->all() as $error)
          <div class="col-md-12 alert alert-danger" role="alert">{{ $error }}</div>
        @endforeach
      @endif

  </div>
  </div>
</div>
@stop

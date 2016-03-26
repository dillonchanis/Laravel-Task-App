@extends('layouts.app')

@section('content')


  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-todo">
          <div class="panel-body">
            <div class="col-md-6 col-md-offset-3">
            <h2>{{ $todos->title }} : Notes</h2>
              <ul class="list-group">
                @foreach ($todos->notes as $note)
                <li class="list-group-item">
                  <p>
                  {{ $note->body  }}
                  <span class="pull-right">
                    <a href="/notes/{{ $note->id }}/edit" class="btn"><i class="material-icons">mode_edit</i></a>
                    <a href="/notes/{{ $note->id }}/delete" class="btn"><i class="material-icons">delete</i></a>
                  <span>
                  </p>
                </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
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

      @if(count($errors))
          @foreach($errors->all() as $error)
            <div class="col-md-12 alert alert-danger" role="alert">{{ $error }}</div>
          @endforeach
      @endif
  </div>
</div>

  <a href="/todo/">Back To Index</a>
</div>
@stop

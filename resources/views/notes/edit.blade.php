@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-edit">
        <div class="panel-body">
          <h2>Edit the Task</h2>

          <form method="POST" action="/notes/{{ $note->id }}">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            <div class="form-group">
              <textarea name="body" class="form-control">{{ $note->body }}</textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn call-to-button btn-small">Update</button>
            </div>
          </form>
          <a href="/todo/{{ $note->todo_id }}" class="btn call-to-button btn-small">Go Back</a>
        </div>
      </div>
    </div>
  </div>

</div>
@stop

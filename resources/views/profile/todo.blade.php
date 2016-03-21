@extends('layouts.initial')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">

      <h1>Create My First ToDo</h1>

      <form method="POST" action="/todo/new">
        {{ csrf_field() }}

        <div class="form-group">
          <textarea name="title" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success">Create</button>
          <a href="/home" class="btn btn-primary">Next</a>
        </div>
      </form>

      @if (count($errors))
        @foreach($errors->all() as $error)
          <div class="col-md-12 alert alert-danger" role="alert">{{ $error }}</div>
        @endforeach
      @endif

    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
          <span class="sr-only">90% Complete</span>
        </div>
      </div>
    </div>
  </div>
</div>
@stop

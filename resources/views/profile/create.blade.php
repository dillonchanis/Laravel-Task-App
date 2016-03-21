@extends('layouts.initial')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">

      <h1>Create My Profile</h1>

      <form method="POST" action="/profile/new">
        {{ csrf_field() }}

        <div class="form-group">
          <textarea name="bio" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success">Create!</button>
          <a href="/create/todo" class="btn btn-primary">Next</a>
        </div>
      </form>

    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
          <span class="sr-only">45% Complete</span>
        </div>
      </div>
    </div>
  </div>
</div>
@stop

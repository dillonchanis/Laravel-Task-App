@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row">
    <h2 class="text-center">Welcome {{ Auth::user()->name }}!</h2>
      <div class="col-md-3 col-md-offset-1">
        <div class="panel panel-dashboard">
          <div class="panel-body">
            <h3>My Profile:</h3>
              <p>{{ $profile->bio }}</p>
            <a href="/profile/{{$profile->id}}/edit" class="btn call-to-button">Edit Profile</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-dashboard">
          <div class="panel-body">
            <h3>My Tasks</h3>
            <ul class="list-group">
              @foreach ($todos as $todo)
                <li class="list-group-item"><a href="/todo/{{ $todo->id }}">{{ $todo->title }}</a></li>
              @endforeach
            </ul>
        </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="panel panel-dashboard">
          <div class="panel-body">
            <h3>Quick Nav</h3>
            <ul class="list-group">
              <li class="list-group-item"><a href="/"><i class="material-icons pull-left">home</i>Home</a></li>
              <li class="list-group-item"><a href="/todo/"><i class="material-icons pull-left">list</i> All Tasks</a></li>
              <li class="list-group-item"><a href="/profile/{{ Auth::user()->name }}"><i class="material-icons pull-left">perm_identity</i>Profile Page</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-dashboard">
          <div class="panel-body">
            <h3>Add a ToDo</h3>

            <form method="POST" action="/todo/new">
              {{ csrf_field() }}

              <div class="form-group">
                <textarea name="title" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-circle"><i class="material-icons">add</i></button>
              </div>
            </form>

            @if (count($errors))
            @foreach($errors->all() as $error)
              <div class="col-md-8 alert alert-danger" role="alert">{{ $error }}</div>
            @endforeach
            @endif
        </div>
      </div>
    </div>
  </div>
</div><!-- end of container-fluid -->
@endsection

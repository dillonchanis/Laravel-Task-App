@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-profile">
        <div class="panel-body">
          <h2>{{ $name->name }}</h2>
          <hr>
          <p>{{ $profile->bio }}</p>
          <h3>My Tasks:</h3>
          @foreach ($todos as $todo)
            <li><a href="/todo/{{ $todo->id }}">{{ $todo->title }}</a></li>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@stop

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <h2 class="text-center">Welcome {{ Auth::user()->name }}!</h2>
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                      <h3>Profile:</h3>
                      {{ $profile->bio }}

                    </div>
                  </div>
                </div>

            </div>

            <a href="/profile/{{$profile->id}}/edit" class="btn btn-warning">Edit Profile</a>

    @foreach ($todos as $todo)
    <h3><a href="/todo/{{ $todo->id }}">{{ $todo->title }}</a></h3>
    @endforeach
</div>
@endsection

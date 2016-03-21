@extends('layouts.app')

@section('content')
<div class="container">
  <h1>{{ $name->name }}</h1>


<div class="row">
  <div class="col-md-9">
    <p>{{ $profile->bio }}</p>
  </div>
</div>
<div class="row">
  <div class"col-md-6 col-md-offset-3">
    @foreach ($todos as $todo)
      <li><a href="/todo/{{ $todo->id }}">{{ $todo->title }}</a></li>
    @endforeach
  </div>
</div>

</div>
@stop

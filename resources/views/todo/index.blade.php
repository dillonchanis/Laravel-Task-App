@extends('layout')

@section('content')

<div class="container">
  <h1>All To Do Lists</h1>
  <ul>
    @foreach($todos as $todo)
      <li>{{ $todo }}</li>
    @endforeach
  </ul>
</div>

@stop

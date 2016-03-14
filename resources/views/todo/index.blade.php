@extends('layout')

@section('content')

<div class="container">
  <h1>All To Do Lists</h1>
    @foreach($todos as $todo)
      {{ $todo->title }}
    @endforeach
</div>

@stop

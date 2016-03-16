@extends('layouts.app')

@section('content')
<div class="container">
  <h1>{{ $name->name }}</h1>
</div>

<div class="row">
  @foreach ($todos as $todo)
    <li><a href="/todo/{{ $todo->id }}">{{ $todo->title }}</a></li>
  @endforeach
</div>

@stop

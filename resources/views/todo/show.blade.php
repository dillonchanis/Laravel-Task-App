@extends('layouts.app')

@section('content')
<div class="container">
  <h2>{{ $todos->title }}</h2>
  <hr>
  <ul>
    @foreach ($todos->notes as $note)
      <li>{{ $note->body  }}</li>
    @endforeach
  </ul>
  <a href="/todo/">Back To Index</a>
</div>
@stop

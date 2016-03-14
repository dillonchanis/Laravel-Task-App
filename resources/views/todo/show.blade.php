@extends('layouts.app')

@section('content')
<div class="container">
  <ul>
    @foreach ($todo->notes as $note)
      <li>{{ $note->body  }}</li>
    @endforeach
  </ul>
</div>
@stop

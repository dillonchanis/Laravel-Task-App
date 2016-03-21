@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">

      <h1>Edit My Profile</h1>

      <form method="POST" action="/profile/{{ $profile->id }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <div class="form-group">
          <textarea name="bio" class="form-control">{{ $profile->bio }}</textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-warning">Update</button>
        </div>
      </form>

    </div>
  </div>

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <a href="/home" class="btn btn-primary">Go Back</a>
    </div>
  </div>

</div>
@stop

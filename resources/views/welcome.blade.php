@extends('layouts.initial')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="mast">
      <h1>Laravel task app</h1>
        <a href="/register" class="call-to-action">Sign Up</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-md-offset-3 sub-header">
      <h2 class="text-center">Your notes powered by Laravel</h2>
      <br><hr><br>
      <p class="text-center">Life can get hectic. Manage your life with this simple App built on Laravel. Whether it is a list of tasks or a random note write it down. Connect with your friends to see what they are up to!</p>
    </div>
  </div>
  <div class="row app-uses">
    <div class="col-md-4">
      <p class="text-center"><i class="fa fa-pencil-square-o fa-3x"></i></p>
      <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur nunc vitae lectus placerat porttitor. Fusce convallis gravida mauris id tempor.</p>
    </div>
    <div class="col-md-4">
      <p class="text-center"><i class="fa fa-file-text fa-3x"></i></p>
      <p class="desc">Nam semper euismod velit, eu venenatis magna laoreet sed. Proin eu lorem vulputate, elementum est vel, iaculis mi. Nulla dapibus eros lacus, a tincidunt mi congue interdum.</p>
    </div>
    <div class="col-md-4">
      <p class="text-center"><i class="fa fa-shopping-cart fa-3x"></i></p>
      <p class="desc">Fusce eget risus id dolor tincidunt dapibus consequat et quam. Aliquam a purus aliquam, ornare massa sit amet, blandit elit.</p>
    </div>
  </div>

  <div class="row">
    <div class="pre-footer">
      <div class="col-md-6 col-md-offset-3">
        <h2 class="text-center">Sign Up Today!</h2>
        <hr>
      </div>
      <div class="col-md-12 text-center">
        <a href="/login" class="btn btn-custom">Login</a>
        <a href="/register" class="btn btn-custom">Sign Up</a>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-md-offset-3">
     <a href="github.com/dillonchanis" target="_blank"><i class="fa fa-github fa-3x"></i></a>
     <a href="https://www.linkedin.com/in/dillon-chanis-b20b87111" target="_blank"><i class="fa fa-linkedin-square fa-3x"></i></a>
   </div>
   <div class="col-md-12">
     <a href="http://dillonchanis.com/" target="_blank"><small>Dillon Chanis</small></a>
   </div>
  </div>
</footer>
@endsection

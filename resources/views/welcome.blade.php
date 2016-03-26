@extends('layouts.app')

@section('content')
<div class="container-fluid main-header">
  <div class="row">
    <div class="col-md-12 mast">
      <h1>Task Keeper </h1>
    </div>
  </div>
</div><!--end main header-->
<div class="container-fluid sub-header">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <i class="material-icons large-icons">border_color</i>
          <h2>Your Notes Powered by Laravel</h2>
          <hr>
          <p>Life can get hectic. Keep and manage your notes easily.  Keep track of your friends too!
          Jot down quick notes on the fly or maintain paragraphs of text to keep your ideas in order</p>
        </div>
      </div>
    </div>
  </div>
</div><!-- end sub-header -->
<div class="container-fluid app-uses">
  <div class="row">
    <div class="col-md-4 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-body">
            <p class="text-center"><i class="material-icons large-icons">format_list_bulleted</i></p>
            <p>Easily create, edit, and delete your tasks from your phone, tablet, or desktop. Your tasks are always kept on your account for you to access anywhere and anytime.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <p class="text-center"><i class="material-icons large-icons">people</i></p>
            <p>Creating an account is simple. Keep your account up to date and let people know a little something about yourself.  Make your profile your own and share your tasks with others.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid app-uses">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <p class="text-center"><i class="material-icons large-icons">public</i></p>
            <p>Stay connected with friends and family. Look at tasks they are trying to accomplish and give them hand! Look at tasks people create from all around the world and see how you can contribute.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid call-to-action">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h3 class="text-center">Ready to Join</h3>
      <hr>
      <p class="text-center">From industry leaders, tech start-ups, and even lowly plebs...actually no one uses this. Why are you still reading this?</p>
      <button class="btn call-to-button"><a href="/register">Register</a></button>
    </div>
  </div>
</div>
@endsection

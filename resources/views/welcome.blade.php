@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <div class="col-md-4 col-md-offset-1">
        <div class="jumbotron">
  <form>
  <div class="form-group">
    <label for="exampleInputEmail1">first name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="First name">
  </div>
 
   <div class="form-group">
    <label for="exampleInputEmail1">Last name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Last name">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>
</form>

  <p><a class="btn btn-primary btn-lg" href="#" role="button">Sing up</a></p>
</div>
       </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
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
             @if ($errors->has('password'))
            <span class="help-block">
             <strong>{{ $errors->first('password') }}</strong>
         </span>
        @endif
  </div>
 
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>
</form>
         <button type="submit" class="btn btn-primary">
    <i class="fa fa-btn fa-sign-in"></i> signup
    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('include.adminMaster')
@section('content')


<div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form method="post" action="/updateAccount/{{$id->id}}" name="f">
          {{csrf_field()}}
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" value="{{$id->name}}" name="form_name" id="firstName" class="form-control" required="required" autofocus="autofocus">

                </div>
              </div>

            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" value="{{$id->email}}" name="form_email" id="inputEmail" class="form-control" placeholder="Email address" required="required">

            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" name="form_password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                  <label for="inputPassword">Password</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" name="confirmed" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                  <label for="confirmPassword">Confirm password</label>
                </div>
              </div>
<!--              --><?php
//              $this->validate($request, [
//              'form_name' => 'required|min:3|max:50',
//              'form_email' => 'email',
//              'password' => 'required|confirmed|min:6',
//              ]);?>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Save</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login">Login Page</a>
          <a class="d-block small" href="forgot-password">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

@endsection

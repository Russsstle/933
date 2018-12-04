@extends("cpanel.layouts.app")

@section("body")
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Add User</h4>
    <form action="">
      <div class="form-group">
        <input id="username" type="text" name="username" required data-msg="Please enter your username" class="input-material">
        <label for="username" class="label-material">Username</label>
      </div>
      <div class="form-group">
        <input id="email" type="email" name="email" required data-msg="Please enter your email" class="input-material">
        <label for="email" class="label-material">Email Address</label>
      </div>
      <div class="form-group">
        <input id="password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
        <label for="password" class="label-material">Password</label>
      </div>
    </form>
  </div>
</div>
@endsection

@extends("cpanel.layouts.app")

@section("body")
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Add User</h4>
    <form name="frmAddData" data-url="users" data-redirect="user">
      <div class="form-group">
        <label for="username" class="form-control-label">Username</label>
       <input id="username" type="text" name="username" class="form-control"  required>
      </div>
      <div class="form-group">
        <label for="email_address" class="form-control-label">Email Address</label>
        <input id="email_address" type="email" name="email_address" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="password" class="form-control-label">Password</label>
        <input id="password" type="password" name="password" class="form-control"   required>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">
          <i class="fa fa-save"></i>&nbsp;Save
        </button>
      </div>
    </form>
  </div>
</div>
@endsection

@extends("cpanel.layouts.app")

@section("body")
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Edit User</h4>
    <form name="frmEditData" data-url="users/{{ $row->id }}" data-redirect="users">
      <div class="form-group">
        <label for="username" class="form-control-label">Username</label>
       <input id="username" type="text" name="username" class="form-control" value="{{ $row->username}}" required>
      </div>
      <div class="form-group">
        <label for="email_address" class="form-control-label">Email Address</label>
        <input id="email_address" type="email" name="email_address" class="form-control" value="{{ $row->email_address }}"required>
      </div>
      <div class="form-group">
        <label for="password" class="form-control-label">Password</label>
        <input id="password" type="password" name="password" class="form-control"  value="{{ $row->password }}" required>
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

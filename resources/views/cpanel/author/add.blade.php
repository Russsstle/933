@extends("cpanel.layouts.app")

@section("body")
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Add Author</h4>
    <form name="frmAddAuthor">
      <div class="form-group">
        <label for="username" class="form-control-label">Username</label>
        <select class="form-control" name="user_id" required>
          <option disabled selected></option>
          @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->username }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="first_name" class="form-control-label">First Name</label>
        <input id="first_name" type="text" name="first_name" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="last_name" class="form-control-label">Last Name</label>
        <input id="last_name" type="text" name="last_name" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="position" class="form-control-label">Position</label>
        <input id="position" type="text" name="position" class="form-control" required>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">
          <i class="fa fa-save"></i>&nbsp;Save
        </button>
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

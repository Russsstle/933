@extends("cpanel.layouts.app")

@section("body")
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Edit Author</h4>
    <form name="frmEditData" data-url="authors/{{ $row->id }}" data-redirect="authors">
      <div class="form-group">
        <label for="username" class="form-control-label">Username</label>
        <select class="form-control" name="user_id" required>
          @foreach($users as $user)
            <option value="{{ $user->id }}" {{ $user->id == $row->id ? "selected" : "" }}>{{ $user->username }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="first_name" class="form-control-label">First Name</label>
        <input id="first_name" type="text" name="first_name" class="form-control" value="{{ $row->user->profile->first_name }}" required>
      </div>
      <div class="form-group">
        <label for="last_name" class="form-control-label">Last Name</label>
        <input id="last_name" type="text" name="last_name" class="form-control" value="{{ $row->user->profile->last_name }}" required>
      </div>
      <div class="form-group">
        <label for="position" class="form-control-label">Position</label>
        <input id="position" type="text" name="position" class="form-control" value="{{ $row->user->profile->position }}" required>
      </div>
      <div class="form-group">
        <label for="display_name" class="form-control-label">Display Name</label>
        <input id="display_name" type="text" name="display_name" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="image" class="form-control-label">Upload Image</label>
        <input id="image" type="file" name="image" class="form-control" accept="image/*">
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

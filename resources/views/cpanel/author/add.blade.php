@extends("cpanel.layouts.app")

@section("body")
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Add Author</h4>
    <form action="">
      <div class="form-group">
        <input id="username" type="text" name="username" required data-msg="Please enter your username" class="input-material">
        <label for="username" class="label-material">Username</label>
      </div>
    </form>
  </div>
</div>
@endsection

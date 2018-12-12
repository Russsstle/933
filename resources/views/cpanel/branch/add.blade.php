@extends("cpanel.layouts.app")

@section("body")
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Add Branch</h4>
    <form name="frmAddData" data-url="branches" data-redirect="branches">
      <div class="form-group">
        <label for="name" class="form-control-label">Name</label>
        <input id="name" type="text" name="name" class="form-control" required>
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

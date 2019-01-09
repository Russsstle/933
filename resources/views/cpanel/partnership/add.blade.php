@extends("cpanel.layouts.app")

@section("body")
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Add Logo</h4>
    <form name="frmAddData" data-url="partnerships" data-redirect="partnerships" hasFile>
      <div class="form-group">
        <label for="name" class="form-control-label">Name</label>
        <input id="name" type="text" name="name" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="email" class="form-control-label">Email</label>
        <input id="email" type="email" name="email" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="position" class="form-control-label">Position</label>
        <input id="position" type="text" name="position" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="school" class="form-control-label">School</label>
        <input id="school" type="text" name="school" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="organization" class="form-control-label">Organization</label>
        <input id="organization" type="text" name="organization" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="organization_type" class="form-control-label">Organization Type</label>
        <input id="organization_type" type="text" name="organization_type" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="image" class="form-control-label">Upload Image</label>
        <input id="image" type="file" name="image" class="form-control" accept="image/*" required>
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

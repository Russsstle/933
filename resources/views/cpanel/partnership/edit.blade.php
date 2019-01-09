@extends("cpanel.layouts.app")

@section("body")
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Edit Partnership</h4>
     <form name="frmEditData" data-url="partnerships/{{ $row->id }}" data-redirect="partnerships" hasFile>
       <div class="form-group">
        <label for="name" class="form-control-label">Name</label>
        <input id="name" type="text" name="name" class="form-control"  value="{{ $row->name }}" required>
      </div>
      <div class="form-group">
        <label for="email" class="form-control-label">Email</label>
        <input id="email" type="email" name="email" class="form-control" value="{{ $row->email }}" required>
      </div>
      <div class="form-group">
        <label for="position" class="form-control-label">Position</label>
        <input id="position" type="text" name="position" class="form-control" value="{{ $row->position }}" required>
      </div>
      <div class="form-group">
        <label for="school" class="form-control-label">School</label>
        <input id="school" type="text" name="school" class="form-control" value="{{ $row->school }}" required>
      </div>
      <div class="form-group">
        <label for="organization" class="form-control-label">Organization</label>
        <input id="organization" type="text" name="organization" class="form-control" value="{{ $row->organization }}"required>
      </div>
      <div class="form-group">
        <label for="organization_type" class="form-control-label">Organization Type</label>
        <input id="organization_type" type="text" name="organization_type" class="form-control"  value="{{ $row->organization_type }}" required>
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

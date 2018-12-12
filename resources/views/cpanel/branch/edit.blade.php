@extends("cpanel.layouts.app")

@section("body")
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Edit Branch</h4>
    <form name="frmEditData" data-url="branches/{{ $row->id }}" data-redirect="branches">
      <div class="form-group">
        <label for="name" class="form-control-label">Name</label>
        <input id="name" type="text" name="name" class="form-control" value="{{ $row->name }}"required>
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

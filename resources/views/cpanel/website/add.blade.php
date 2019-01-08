@extends("cpanel.layouts.app")

@section("body")
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Add Slide</h4>
    <form name="frmAddData" data-url="carousel" data-redirect="website" hasFile>
      <div class="form-group">
        <label for="title" class="form-control-label">Title</label>
        <input id="title" type="text" name="title" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="subtitle" class="form-control-label">Subtitle</label>
        <input id="subtitle" type="text" name="subtitle" class="form-control" required>
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

@extends("cpanel.layouts.app")

@section("body")
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Edit Slide</h4>
     <form name="frmEditData" data-url="carousel/{{ $row->id }}" data-redirect="website" hasFile>
      <div class="form-group">
        <label for="title" class="form-control-label">Title</label>
        <input id="title" type="text" name="title" class="form-control" value="{{ $row->title }}"required>
      </div>
      <div class="form-group">
        <label for="subtitle" class="form-control-label">Subtitle</label>
        <textarea id="subtitle" name="subtitle" class="form-control" required> {{ $row->subtitle }}</textarea>
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

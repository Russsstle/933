@extends("cpanel.layouts.app")

@section("body")
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Edit Slide</h4>
     <form name="frmEditData" data-url="carousel/{{ $row->id }}" data-redirect="website/carousel" hasFile>
      <div class="form-group">
        <label for="title" class="form-control-label">Title</label>
        <input id="title" type="text" name="title" class="form-control" value="{{ $row->title }}"required>
      </div>
      <div class="form-group">
        <label for="description" class="form-control-label">Description</label>
        <textarea id="description" name="description" class="form-control" required> {{ $row->description }}</textarea>
      </div>
      <div class="form-group">
        <label for="label_align" class="form-control-label">Label Align</label>
        <select name="label_align" id="label_align" class="form-control">
          <option value="left" {{ $row->label_align == "left" ? "selected" : "" }}>Left</option>
          <option value="center" {{ $row->label_align == "center" ? "selected" : "" }}>Center</option>
          <option value="right" {{ $row->label_align == "right" ? "selected" : "" }}>Right</option>
        </select>
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

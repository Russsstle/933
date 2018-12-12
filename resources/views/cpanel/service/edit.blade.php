@extends("cpanel.layouts.app")

@section("body")
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Edit Service</h4>
    <form name="frmEditData" data-url="services/{{ $row->id }}" data-redirect="services" hasFile>
      <div class="form-group">
        <label for="branch" class="form-control-label">Branch</label>
        <select id="branch" class="form-control" name="branch_id" required>
          @foreach($branches as $branch)
            <option value="{{ $branch->id }}">{{ $branch->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="name" class="form-control-label">Title</label>
        <input id="name" type="text" name="name" class="form-control" value="{{ $row->title }}" required>
      </div>
      <div class="form-group">
        <label for="description" class="form-control-label">Description</label>
        <textarea id="description" name="description" class="form-control" required>{{ $row->description }}</textarea>
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

@extends("cpanel.layouts.app")

@section("body")
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Add Service</h4>
    <form name="frmAddData" data-url="services" data-redirect="services" hasFile>
      <div class="form-group">
        <label for="branch" class="form-control-label">Branch</label>
        <select id="branch" class="form-control" name="branch_id" required>
          <option disabled selected></option>
          @foreach($branches as $branch)
            <option value="{{ $branch->id }}">{{ $branch->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="title" class="form-control-label">Title</label>
        <input id="title" type="text" name="title" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="description" class="form-control-label">Description</label>
        <textarea id="description" name="description" class="form-control" required></textarea>
      </div>
      <div class="form-group">
        <label for="image" class="form-control-label">Upload Image</label>
        <input id="image" type="file" name="image" class="form-control" accept="image/*" required>
      </div>
      <div class="form-group">
        <label for="rates" class="form-control-label">Rates</label>
        <textarea id="rates" name="rates" placeholder="Rate Name| Price"class="form-control" required></textarea>
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

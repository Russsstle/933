@extends("cpanel.layouts.app")

@section("body")
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Edit Branch</h4>
    <form name="frmEditData" data-url="feedbacks/{{ $row->id }}" data-redirect="feedbacks">
      <div class="form-group">
        <label for="name" class="form-control-label">Name</label>
        <input id="name" type="text" name="name" class="form-control" value="{{ $row->name }}"required>
      </div>
      <div class="form-group">
        <label for="email" class="form-control-label">Email</label>
        <input id="email" type="text" name="email" class="form-control" value="{{ $row->email }}"required>
      </div>
       <div class="form-group">
        <label for="message" class="form-control-label">Message</label>
        <textarea id="message" name="message" class="form-control" required> {{ $row->message }}</textarea>
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

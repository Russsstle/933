@extends("cpanel.layouts.app")

@section("body")
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Edit Article</h4>
     <form name="frmEditData" data-url="articles/{{ $row->id }}" data-redirect="articles" hasFile>
      <div class="form-group">
        <label for="author" class="form-control-label">Article</label>
        <select id="author" class="form-control" name="author_id" required>
          @foreach($authors as $author)
            <option value="{{ $author->id }}" {{ $author->id == $row->id ? "selected" : "" }}>{{ $author->user->profile->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="type" class="form-control-label">Type</label>
        <select name="type" id="type" class="form-control">
          <option value="news" {{ $author->type == "news" ? "selected" : "" }}>News</option>
          <option value="features" {{ $author->type == "features" ? "selected" : "" }}>Features</option>
          <option value="upcoming_events" {{ $author->type == "upcoming_events" ? "selected" : "" }}>Upcoming Events</option>
          <option value="tips" {{ $author->type == "tips" ? "selected" : "" }}>Tips</option>
        </select>
      </div>
      <div class="form-group">
        <label for="title" class="form-control-label">Title</label>
        <input id="title" type="text" name="title" class="form-control" value="{{ $row->title }}"required>
      </div>
      <div class="form-group">
        <label for="content" class="form-control-label">Content</label>
        <textarea id="content" name="content" class="form-control" required> {{ $row->content }}</textarea>
      </div>
      <div class="form-group">
        <label for="image" class="form-control-label">Upload Image</label>
        <input id="image" type="file" name="image" class="form-control" accept="image/*">
      </div>
      <div class="form-group">
        <label for="date" class="form-control-label">Date</label>
        <input id="date" type="date" name="date" class="form-control" value="{{ $row->date->format("Y-m-d") }}" required>
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

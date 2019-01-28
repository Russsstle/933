@extends("cpanel.layouts.app")

@section("body")
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Add Article</h4>
    <form name="frmAddData" data-url="articles" data-redirect="articles" hasFile>
      <div class="form-group">
        <label for="author" class="form-control-label">Author</label>
        <select id="author" class="form-control" name="author_id" required>
          <option disabled selected></option>
          @foreach($authors as $author)
            <option value="{{ $author->id }}">{{ $author->display_name}}{{-- {{ $author->users->profiles->name }} --}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="type" class="form-control-label">Type</label>
        <select name="type" id="type" class="form-control">
          <option value="news">News</option>
          <option value="features">Features</option>
          <option value="upcoming_events">Upcoming Events</option>
          <option value="tips">Tips</option>
        </select>
      </div>
      <div class="form-group">
        <label for="title" class="form-control-label">Title</label>
        <input id="title" type="text" name="title" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="content" class="form-control-label">Content</label>
        <textarea id="content" name="content" class="form-control" required></textarea>
      </div>
      <div class="form-group">
        <label for="tags" class="form-control-label">Tags</label>
        <textarea id="tags" name="tags" class="form-control" required></textarea>
      </div>
      <div class="form-group">
        <label for="image" class="form-control-label">Upload Image</label>
        <input id="image" type="file" name="image" class="form-control" accept="image/*" required>
      </div>
      <div class="form-group">
        <label for="date" class="form-control-label">Date</label>
        <input id="date" type="date" name="date" class="form-control" required>
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

@extends("cpanel.layouts.app")

@section("body")
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Edit Article</h4>
     <form name="frmEditData" data-url="articles/{{ $row->id }}" data-redirect="articles">
      <div class="form-group">
        <label for="author" class="form-control-label">Article</label>
        <select id="author" class="form-control" name="author_id" required>
          @foreach($authors as $author)
            <option value="{{ $author->id }}" {{ $author->id == $row->id ? "selected" : "" }}>{{ $author->users->profiles->name }}</option>
          @endforeach
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
        <label for="date" class="form-control-label">Date</label>
        <input id="date" type="date" name="date" class="form-control" value="{{ $row->date }}" required>
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

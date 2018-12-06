@extends("cpanel.layouts.app")

@section("body")
<div class="card">
  <div class="card-body">
<<<<<<< HEAD
    <h4 class="card-title">Add User</h4>
    <form name="frmAddData" data-url="users" data-redirect="user">
      <div class="form-group">
        <label for="username" class="form-control-label">Username</label>
       <input id="username" type="text" name="username" class="form-control"  required>
      </div>
      <div class="form-group">
        <label for="email_address" class="form-control-label">Email Address</label>
        <input id="email_address" type="email" name="email_address" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="password" class="form-control-label">Password</label>
        <input id="password" type="password" name="password" class="form-control"   required>
=======
    <h4 class="card-title">Add Article</h4>
    <form name="frmAddData" data-url="articles" data-redirect="article">
      <div class="form-group">
        <label for="author" class="form-control-label">Author</label>
        <select id="author" class="form-control" name="author_id" required>
          <option disabled selected></option>
          @foreach($authors as $author)
            <option value="{{ $author->id }}">{{ $author->users->profiles->name }}</option>
          @endforeach
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
        <label for="tags" class="form-control-label">tags</label>
        <input id="tags" name="tags" data-role="tagsinput" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="date" class="form-control-label">Date</label>
        <input id="date" type="date" name="date" class="form-control" required>
>>>>>>> 346aa643ecb5fad9060709a241edafd4b16bda20
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

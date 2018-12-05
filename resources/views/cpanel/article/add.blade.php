@extends("cpanel.layouts.app")

@section("body")
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Add Article</h4>
    <form action="">
      <div class="form-group">
        <input id="username" type="text" name="username" required data-msg="Please enter your username" class="input-material">
        <label for="username" class="label-material">Author</label>
      </div>
      <div class="form-group">
        <input id="title" type="text" name="email" required data-msg="Please enter title" class="input-material">
        <label for="title" class="label-material">Title</label>
      </div>
      <div class="form-group">
        <input id="date" type="date" name="date" required data-msg="Please enter your date" class="input-material">
        <label for="date" class="label-material">Date</label>
      </div>
      <div class="form-group">
        <textarea id="content"  name="content"  class="md-textarea form-control" rows="3"></textarea>
        <label for="content" class="label-material"></label>
      </div>
    </form>
  </div>
</div>
@endsection

@extends("navbar")
@section("body")
<div class="header">
  <h4><b>Share us your Feedback</b></h4>
</div>
<div class="content" >
  <form method="POST">
    @csrf
    Name <input type="text" name="user">
    Email <input type="text" name="user">
    <textarea name="message" style="height:100px"></textarea>
    <button class="waves-effect waves-light btn right" type="submit">Send</button>
  </form>
</div>
@include('footer')
@endsection
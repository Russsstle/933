@extends("navbar")
@section("body")
<div class="header">
  <h4><b>Partnerships</b></h4>
</div>
<div class="content" >
  <h5>Interested in partnering with us?<br/>Fill up the form/ note and we'll get back to you soon!</h5>
   <form method="POST">
     @csrf
     Name <input type="text" name="user">
     Email <input type="text" name="user">
     Position <input type="text" name="user">
     School <input type="text" name="user">
     Organization <input type="text" name="user">
     Type of Organization <input type="text" name="user">
     <button class="waves-effect waves-light btn right" type="submit">Send</button>

   </form>
</div>
@include('footer')
@endsection
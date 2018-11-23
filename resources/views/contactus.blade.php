@extends("navbar")
@section("body")
<div class="header">
  <h4><b>Let's Get in Touch</b></h4>
</div>
<div class="content" >
  <div style="float:left">
    <table >
      <form method="POST">
      @csrf
      <tr>
        <td>USER</td>
        <td>EMAIL</td>
      </tr>
      <tr>
          <td><input type="text" name="user"></td>
          <td><input type="text" name="email"></td>
      </tr>
      <tr>
        <td>Subject</td>
      </tr>
      <tr>
          <td colspan=2><input type="text" name="subject"></td>
      </tr>
      <tr>
        <td>Message</td>
      </tr>
      <tr>
          <td rowspan="1" colspan="2"><textarea name="message"></textarea></td>
      </tr>
      <tr>
          <td></td>
          <td><button class="waves-effect waves-light btn right" type="submit">Send</button></td>
      </tr>
    </form>
    </table>
  </div>
  <div style="float:left;margin-left:100px">
   <h5><b> Address</b></h5>
   <p style="font-size: 20px">933 Main branch <br>933 G.M Tolentino St. Sampaloc<br/>11:00 am - 5:00 am<br/><br/>
    933 Creatives<br/>1042 G.M Tolentino St. Sampaloc<br/> 8:00 am - 5:00 am
   </p>
   <h5><b>Email</b></h5>
   <p style="font-size: 20px">Info@933mnl.com</p>
   <h5><b>Phone</b></h5>
   <p style="font-size: 15px">+63 945 217 6021<br/>+63 995 338 3313</p>

  </div>
  <img src="../resources/pictures/sample.png" style="margin-top:30px"height="430" width="100%" >
</div>
@include('footer')
@endsection
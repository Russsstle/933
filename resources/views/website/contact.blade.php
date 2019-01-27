@php($title = "Contact")

@extends("website.layouts.app")

@section("body")
<div class="header">
  Let's Get in Touch
</div>
<div class="content">
  <div class="row">
    <div class="col l6">
      <form name="frmAddData" data-url="contactus" data-redirect="contact">
        @csrf
        <div class="input-field col m12 l6">
          <input id="name" name="name" type="text" class="validate">
          <label for="name">Name</label>
        </div>
        <div class="input-field col m12 l6">
          <input id="email" type="email" name="email" class="validate">
          <label for="email">Email</label>
        </div>
        <div class="input-field col m12 l12">
          <input id="subject" name="subject" type="text" class="validate">
          <label for="subject">Subject</label>
        </div>
        <div class="input-field col m12 l12">
          <textarea id="message" name="message" class="materialize-textarea"></textarea>
          <label for="message">Message</label>
        </div>
        <button class="waves-effect waves-light btn right" type="submit">Send</button>
      </form>
    </div>
    <div class="col l6 contact-info">
      <h5><b> Address</b></h5>
      <p style="font-size:20px;text-align:left">
        933 Main branch<br>
        933 G.M Tolentino St. Sampaloc<br>
        11:00 am - 5:00 am<br><br>
        933 Creatives<br>
        1042 G.M Tolentino St. Sampaloc<br>
        8:00 am - 5:00 am
      </p>
      <h5><b>Email</b></h5>
      <p style="font-size: 20px;text-align:left">Info@933mnl.com</p>
      <h5><b>Phone</b></h5>
      <p style="font-size: 15px;text-align:left">+63 945 217 6021<br/>+63 995 338 3313</p>
    </div>
  </div>
  <iframe src="https://www.google.com/maps/d/embed?mid=1sQREQkc-arI0yRjUl8EaLf7ayfHozkte" width="640" height="480"></iframe>
</div>
@endsection

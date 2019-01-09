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
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241.30306054864585!2d120.98749521983216!3d14.607678115309355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ca0025d116e7%3A0xfd3450a55859002c!2s1024+Tolentino+St%2C+Sampaloc%2C+Manila%2C+1008+Metro+Manila!5e0!3m2!1sen!2sph!4v1543001036495" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
@endsection

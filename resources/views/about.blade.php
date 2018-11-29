@extends("layout")

@section("body")
<div class="header">
  About 933 Co-working Manila
</div>
<div class="content">
  <div class="row">
    <div class="col m4">
      <h5 class="text-bold">COMMUNITY</h5>
    </div>
    <div class="col m8">
      <p>
        933 Co-working Mnl is one of Manila's newest community of entrepreneurs, creative, startups, and students.<br>
        We offer a high-end yet affordable coworking space, workshops, events and study labs.<br>
        Whether you are an entrepreneur, startups or corporate professional conducting day to day business, holding meetings or a student looking for a vibrant, secure and peaceful place to study 933 Co-working Mnl is designed to suit all your personal and business needs.
      </p>
    </div>
    <div class="col m4">
      <h5 class="text-bold">Space</h5>
    </div>
    <div class="col m8">
      <p>
        People who use co-working spaces see themselves as part of a community. Connecting with people and expanding your network are just two reasons why people pay to work in a shared communal working space as opposed to working in a traditional office setup.<br>
        Enjoy an exceptional co-working space experience with a variety of space designed to suit all requirements.<br>
        We are open 18 hours a day and 7 days a week, located at 933 G.M. Tolentino st. Sampaloc Manila.<br>
        933 Co-working Mnl is a fully equipped office with fast fiber optics wifi, fully centralized air condition, toilet with amenities shower, and napping area.
      </p>
    </div>
    <div class="col m4">
      <h5 class="text-bold">Space</h5>
    </div>
    <div class="col m8">
      <ul class="dashed">
        <li>Bookable meeting room and conference room.</li>
        <li>Comfortable & professional office furniture</li>
        <li>Fiber optics Internet connection.</li>
        <li>Audiovisual equipment</li>
        <li>Toilet with amenities</li>
        <li>Napping area</li>
        <li>Printing</li>
        <li>Shower</li>
      </ul>
    </div>
  </div>
  <h4 class="center-align text-bold">Gallery</h4>
  <div class="carousel carousel-about">
    <a class="carousel-item" href="#one!"><img src="{{ asset('img/sample.png') }}"></a>
    <a class="carousel-item" href="#two!"><img src="{{ asset('img/sample.png') }}"></a>
    <a class="carousel-item" href="#three!"><img src="{{ asset('img/sample.png') }}"></a>
    <a class="carousel-item" href="#four!"><img src="{{ asset('img/sample.png') }}"></a>
    <a class="carousel-item" href="#five!"><img src="{{ asset('img/sample.png') }}"></a>
  </div>
  <h4 class="center-align text-bold">Meet the Team</h4>
  <br><br>
  <div class="row" style="width:80%">
    <div class="col m4 center-align mb-30">
      <img class="circle" src="{{ asset('img/sample.png') }}" width="120px" height="120px">
      <div>
        Name<br>
        Position
      </div>
    </div>
    <div class="col m4 center-align mb-30">
      <img class="circle" src="{{ asset('img/sample.png') }}" width="120px" height="120px">
      <div>
        Name<br>
        Position
      </div>
    </div>
    <div class="col m4 center-align mb-30">
      <img class="circle" src="{{ asset('img/sample.png') }}" width="120px" height="120px">
      <div>
        Name<br>
        Position
      </div>
    </div>
    <div class="col m4 center-align mb-30">
      <img class="circle" src="{{ asset('img/sample.png') }}" width="120px" height="120px">
      <div>
        Name<br>
        Position
      </div>
    </div>
    <div class="col m4 center-align mb-30">
      <img class="circle" src="{{ asset('img/sample.png') }}" width="120px" height="120px">
      <div>
        Name<br>
        Position
      </div>
    </div>
    <div class="col m4 center-align mb-30">
      <img class="circle" src="{{ asset('img/sample.png') }}" width="120px" height="120px">
      <div>
        Name<br>
        Position
      </div>
    </div>
  </div>
  <h4 class="center-align text-bold">Our Amazing Partners</h4>
  <br><br>
  <div class="row">
    <img class="col m5ths" src="{{ asset('img/sample.png') }}" height="70px" width="140px">
    <img class="col m5ths" src="{{ asset('img/sample.png') }}" height="70px" width="140px">
    <img class="col m5ths" src="{{ asset('img/sample.png') }}" height="70px" width="140px">
    <img class="col m5ths" src="{{ asset('img/sample.png') }}" height="70px" width="140px">
    <img class="col m5ths" src="{{ asset('img/sample.png') }}" height="70px" width="140px">
  </div>
  <br><br>
  <div class="center-align">
    <a class="waves-effect waves-light btn center-align"  href="{{ url('partnerships') }}" style="background-color:#d3d2d2;color:black">Partner with us!</a>
  </div>
</div>
@endsection

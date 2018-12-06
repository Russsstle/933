@extends("website.layouts.app")

@section("body")
<div class="slider">
  <ul class="slides">
    <li>
         <img src="https://images.unsplash.com/photo-1464817739973-0128fe77aaa1?dpr=1&auto=compress,format&fit=crop&w=1199&h=799&q=80&cs=tinysrgb&crop=">
      <div class="caption center-align">
        <h3>This is our big Tagline!</h3>
        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
      </div>
    </li>
    <li>
      <img src="https://ununsplash.imgix.net/photo-1414849424631-8b18529a81ca?q=75&fm=jpg&s=0e993004a2f3704e8f2ad5469315ccb7">
      <div class="caption left-align">
        <h3>Left Aligned Caption</h3>
        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
      </div>
    </li>
    <li>
      <img src="https://ununsplash.imgix.net/uploads/1413259835094dcdeb9d3/6e609595?q=75&fm=jpg&s=6a4fc66161293fc4a43a6ca6f073d1c5">
      <div class="caption right-align">
        <h3>Right Aligned Caption</h3>
        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
      </div>
    </li>
  </ul>
</div>
<div class="home-content center-align" style="padding-top:0">
  <h4 class="text-bold ">Benefits of Studying in Co-working Spaces</h4>
  <br>
  <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquet gravida lorem sit amet posuere.<br>
    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
  </p>
  <br>
  <div class="row">
    <div class="col s12 m4">
      <img class="shadow" src="{{ asset('img/sample.png') }}" height="100%" width="95%">
      <br>
      <h6 class="text-bold">
        Benefits of Studying in<br>
        Co-working Spaces
      </h6>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquet gravida lorem sit amet posuere.
      </p>
    </div>
    <div class="col s12 m4">
      <img class="shadow" src="{{ asset('img/sample.png') }}" height="100%" width="95%">
      <br>
      <h6 class="text-bold">
        Benefits of Studying in<br>
        Co-working Spaces
      </h6>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquet gravida lorem sit amet posuere.
      </p>
    </div>
    <div class="col s12 m4">
      <img class="shadow" src="{{ asset('img/sample.png') }}" height="100%" width="95%">
      <br>
      <h6 class="text-bold">
        Benefits of Studying in<br>
        Co-working Spaces
      </h6>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquet gravida lorem sit amet posuere.
      </p>
    </div>
  </div>
</div>
<div class="home-content">
  <div class="row">
    <div class="col s12 m5 white-text">
      <div class="text-bold title">
        Budget-friendly<br>
        to students
      </div>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquet gravida lorem sit amet posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
      </p>
    </div>
    <div class="col s12 m6 offset-m1">
      <div class="row white center-align home-price-time">
        <div class="col s12 m4">
          <div class="card-title">1 hour</div>
          <p>Lorem ipsum dolor sit amet, consectetur</p>
          <div class="card-title">₱ 50</div>
        </div>
        <div class="col s12 m4">
          <div class="card-title">4 hours</div>
          <p>Lorem ipsum dolor sit amet, consectetur</p>
          <div class="card-title">₱ 100</div>
        </div>
        <div class="col s12 m4">
          <div class="card-title">Day Pass</div>
          <p>Lorem ipsum dolor sit amet, consectetur</p>
          <div class="card-title">₱ 250</div>
        </div>
      </div>
      <a class="waves-effect btn-flat white-text margin-top link-font-size" href="{{ url('services/main') }}">
        <span class="icon-title text-underline">Check Rates for 933 Main Branch</span>
        <i class=" material-icons left">chevron_right</i>
      </a>
      <br>
      <a class="waves-effect btn-flat white-text link-font-size" href="{{ url('services/creatives') }}">
        <span class="icon-title text-underline">Check Rates for 933 Creatives Branch</span>
        <i class=" material-icons left">chevron_right</i>
      </a>
    </div>
  </div>
</div>
<div class="home-content">
  <div class="center-align">
    <h4 class="text-bold">
      Amenities for our Valued Clients
    </h4>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquet gravida lorem sit amet posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
    </p>
  </div>
  <br>
  <div class="row center-align amenities-card">
    <div class="col s12 m3">
      <img class="circle" src="{{ asset('img/icons/meeting.png') }}" height="70px" width="70px">
      <div>
        Booking meeting<br>
        room and conference
      </div>
    </div>
    <div class="col s12 m3">
      <img class="circle" src="{{ asset('img/icons/office.png') }}" height="70px" width="70px">
      <div>
        Comfortable &<br>
        professional office<br>
        furniture
      </div>
    </div>
    <div class="col s12 m3">
      <img class="circle" src="{{ asset('img/icons/wifi.png') }}" height="70px" width="70px">
      <div>
        Fiber optics Internet<br>
        connection
      </div>
    </div>
    <div class="col s12 m3">
      <img class="circle" src="{{ asset('img/icons/audiovisual.png') }}" height="70px" width="70px">
      <div>
        Audiovisual<br>
        equipment
      </div>
    </div>
    <div class="col s12 m4 push-m1">
      <img class="circle" src="{{ asset('img/icons/toilet.png') }}" height="70px" width="70px">
      <div>
        Toilet with amenities
      </div>
    </div>
    <div class="col s12 m4">
      <img class="circle" src="{{ asset('img/icons/nap area.png') }}" height="70px" width="70px">
      <div>
        Napping area
      </div>
    </div>
    <div class="col s12 m4 pull-m1">
      <img class="circle" src="{{ asset('img/icons/printing.png') }}" height="70px" width="70px">
      <div>
        Printing
      </div>
    </div>
  </div>
</div>
<div class="home-content">
  <div class="row flex-s marg">
    <div class="col s12 m7 box-a">
      <div class="row" style="margin-top:50px">
        <div class="col s12 m4">
          <img src="{{ asset('img/sample.png') }}" width="100%">
        </div>
        <div class="col s12 m4">
          <img src="{{ asset('img/sample.png') }}" width="100%">
        </div>
        <div class="col s12 m4">
          <img src="{{ asset('img/sample.png') }}" width="100%">
        </div>
        <div class="col s12 m4">
          <img src="{{ asset('img/sample.png') }}" width="100%">
        </div>
        <div class="col s12 m4">
          <img src="{{ asset('img/sample.png') }}" width="100%">
        </div>
        <div class="col s12 m4">
          <img src="{{ asset('img/sample.png') }}" width="100%">
        </div>
      </div>
    </div>
    <div class="col s12 m5 right-align white-text box-b">
      <h4 class="text-bold">
        Our Partners in<br>
        Business
      </h4>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquet gravida lorem sit amet posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
      </p>
    </div>
  </div>
</div>
<div class="home-content">
  <h4 class="text-bold center-align">
    What our happy clients<br>
    say about us
  </h4>
  <br><br>
  <div class="carousel carousel-slider carousel-client-message">
    <div class="carousel-fixed-item center middle-indicator">
      <div class="left">
        <a href="#" class="movePrevCarousel middle-indicator-text waves-effect waves-light content-indicator"><i class="material-icons left middle-indicator-text">chevron_left</i></a>
      </div>
      <div class="right">
        <a href="#" class=" moveNextCarousel middle-indicator-text waves-effect waves-light content-indicator"><i class="material-icons right middle-indicator-text">chevron_right</i></a>
      </div>
    </div>
    <a class="carousel-item" href="#one!">
      <div class="row">
        <div class="col s12 m5">
          <div class="client-message-left-card">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquet gravida lorem sit amet posuere."
            <br><br>
            <b>Juan Dela Cruz,</b><br>
            University of Sto. Tomas
          </div>
        </div>
        <div class="col s12 m7">
          <div class="client-message-right-card">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
            <br>
            <b>Juan Dela Cruz,</b>
            University of Sto. Tomas
          </div>
          <div class="client-message-right-card">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
            <br>
            <b>Juan Dela Cruz,</b>
            University of Sto. Tomas
          </div>
        </div>
      </div>
    </a>
    <a class="carousel-item" href="#two!">
      <div class="row">
        <div class="col s12 m5">
          <div class="client-message-left-card">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquet gravida lorem sit amet posuere."
            <br><br>
            <b>Juan Dela Cruz,</b><br>
            University of Sto. Tomas
          </div>
        </div>
        <div class="col s12 m7">
          <div class="client-message-right-card">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
            <br>
            <b>Juan Dela Cruz,</b>
            University of Sto. Tomas
          </div>
          <div class="client-message-right-card">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
            <br>
            <b>Juan Dela Cruz,</b>
            University of Sto. Tomas
          </div>
        </div>
      </div>
    </a>
  </div>
  <h4 class="text-bold center-align">
    Latest Updates
  </h4>
  <div class="row">
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class='activator'src="{{ asset('img/sample.png') }}">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </div>
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <img src="{{ asset('img/sample.png') }}">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </div>
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <img src="{{ asset('img/sample.png') }}">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="right-align">
    <a class="waves-effect btn-flat" href="#">
      <span class="icon-title">See All Posts</span>
      <i class=" material-icons right">chevron_right</i>
    </a>
  </div>
</div>
@endsection

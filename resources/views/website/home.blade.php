@php($title = "Home")

@extends("website.layouts.app")

@section("body")
<div class="slider">
  <ul class="slides">
    {{-- <li>
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
    </li> --}}
    @if($data->count() > 0)
      @foreach($data as $row)
      <li>
          <img src="{{ asset("img/carousel/" . $row->filename) }}">
          <div class="caption {{ $row->label_align }}-align">
            <h3>{{ $row->title}}</h3>
            <h5 class="light grey-text text-lighten-3">{{ $row->description}}</h5>
          </div>
      </li>
      @endforeach
    @else
      <li>
        <img src="{{ asset("img/sample.png") }}">
      </li>
    @endif
  </ul>
</div>
<div class="home-content center-align" style="padding-top:40px">
  <h4 class="text-bold">Benefits of Studying in Co-working Spaces</h4>
  <br>
  <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquet gravida lorem sit amet posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
  </p>
  <br>
  <div class="row">
    <div class="col m12 l4">
      <img class="shadow" src="{{ asset('img/sample.png') }}" height="100%" width="95%">
      <br>
      <h6 class="text-bold">
        Benefits of Studying in Co-working Spaces
      </h6>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquet gravida lorem sit amet posuere.
      </p>
    </div>
    <div class="col m12 l4">
      <img class="shadow" src="{{ asset('img/sample.png') }}" height="100%" width="95%">
      <br>
      <h6 class="text-bold">
        Benefits of Studying in Co-working Spaces
      </h6>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquet gravida lorem sit amet posuere.
      </p>
    </div>
    <div class="col m12 l4">
      <img class="shadow" src="{{ asset('img/sample.png') }}" height="100%" width="95%">
      <br>
      <h6 class="text-bold">
        Benefits of Studying in Co-working Spaces
      </h6>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquet gravida lorem sit amet posuere.
      </p>
    </div>
  </div>
</div>
<div class="home-content">
  <div class="row">
    <div class="col s12 m12 l5 white-text">
      <div class="text-bold title">
        Budget-friendly<br>
        to students
      </div>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquet gravida lorem sit amet posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
      </p>
    </div>
    <div class="col s12 m12 l6 offset-l1">
      <div class="row white center-align home-price-card">
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
  <div class="row center-align amenities-card" style="padding-top:40px">
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
  <div class="row flex-s">
    <div class="col s12 m12 l7 box-a">
      <div class="row" style="margin-top:61px">
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
    <div class="col s12 m12 l5 right-align white-text box-b">
      <h4 class="text-bold title-home">
        Our Partners in Business
      </h4>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquet gravida lorem sit amet posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
      </p>
    </div>
  </div>
</div>
<div class="home-content">
  <h4 class="text-bold center-align ">
    What our happy clients say about us
  </h4>
  <br><br>
  <div class="carousel carousel-slider carousel-client-message">
    <div class="carousel-fixed-item center middle-indicator">
      <div class="left">
        <a href="#" class="movePrevCarousel middle-indicator-text waves-effect waves-light content-indicator"><i class="material-icons left middle-indicator-text">chevron_left</i></a>
      </div>
      <div class="right">
        <a href="#" class="moveNextCarousel middle-indicator-text waves-effect waves-light content-indicator"><i class="material-icons right middle-indicator-text">chevron_right</i></a>
      </div>
    </div>
    @if($comments->count() > 0)
      @foreach($comments as $row)
        <a class="carousel-item">
          <div class="row" style="height:100%;color:black">
            <blockquote style="height:100%;">
              <div style="font-size:25px;height:100%;position:relative;">
                {{ $row->message }}
                <div align="right" style="font-size:20px;position:absolute;right:5px;bottom:233px">
                  <b>{{ $row->name }}</b>
                </div>
              </div>
            </blockquote>
          </div>
        </a>
      @endforeach
    @else
      <a class="carousel-item"></a>
    @endif
  </div>
  {{-- <h4 class="text-bold center-align top-title" >
    Latest Updates
  </h4> --}}
  <div class="row">
    @foreach($updates as $article)
     <div class="col s12 m12 l4">
      <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class='activator'src="{{ asset('uploads/'. $article->filename) }}" width="100%" height="250px">
          <span class="card-title">{{ $article->title }}</span>
        </div>
        <div class="card-content">
          <p class="truncate">{{ $article->content }}</p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">{{$article->title}}<i class="material-icons right">close</i></span>
          <p>{{ $article->content }}</p>
          <a href="{{ url('blog/' . $article->type . "/" . $article->title) }}">See Full Story</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="right-align">
    <a class="waves-effect btn-flat" href="{{ url('blog') }}">
      <span class="icon-title">See All Posts</span>
      <i class=" material-icons right">chevron_right</i>
    </a>
  </div>
</div>
@endsection

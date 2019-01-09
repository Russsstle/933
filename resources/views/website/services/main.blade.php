@extends("website.layouts.app")

@section("body")
<div class="header">
  933 Main Branch<br>
  Package Plan
</div>
<div class="content">
  @foreach($data as $id => $row)
    @if($id % 2 == 0)
      <div class="row">
        <div class="col s12 l7 m12 rates-card">
          <img src="{{ asset('uploads/' . $row->filename) }}" width="100%" height="100%">
        </div>
        <div class="col s12 l5 rates-card rates-text">
          <div class="title">{{ $row->title }}</div>
          <div class="subtitle">{{ $row->description }}</div>
          <br><br>
          @foreach($row->rates as $rate)
            <div class="col l8 m8 s8 l8 left-align">
              {{ $rate->name }}
            </div>
            <div class="col l4 m4 s4 l4 right-align">
              ₱ {{ number_format($rate->price) }}
            </div>
            <br><br>
          @endforeach
        </div>
      </div>
    @else
      <div class="row flex-s">
        <div class="col l5 m12 rates-card rates-text box-a">
          <div class="title">{{ $row->title }}</div>
          <div class="subtitle">{{ $row->description }}</div>
          <br><br>
          @foreach($row->rates as $rate)
            <div class="col l8 m8 s8 l8 left-align">
              {{ $rate->name }}
            </div>
            <div class="col l4 m4 s4 l4 right-align">
              ₱ {{ number_format($rate->price) }}
            </div>
            <br><br>
          @endforeach
        </div>
        <div class="col l7 m12 rates-card box-b">
          <img src="{{ asset('img/sample.png') }}" width="100%" height="100%">
        </div>
      </div>
    @endif
  @endforeach
  {{-- <div class="rates-title">Private Room Rates</div>
  <div class="row">
    <div class="col l7 m12 s12 rates-card">
      <img src="{{ asset('img/sample.png') }}" width="100%" height="100%">
    </div>
    <div class="col s12 m12 l5 rates-card rates-text">
      <div class="title">VIP Room</div>
      <div class="subtitle">Good for 4-6 pax</div>
      <br><br>
      <div class="col l8 m8 s8 left-align">
        1 hour (₱ 50/pax)
      </div>
      <div class="col l4 m4 s4 right-align">
        ₱ 300
      </div>
      <br><br>
      <div class="col l8 m8 s8 left-align">
        3 hours (₱ 120/pax)
      </div>
      <div class="col l4 m4 s4 right-align">
        ₱ 720
      </div>
      <br><br>
      <div class="col l8 m8 s8 left-align">
        6 hours (₱ 210/pax)
      </div>
      <div class="col l4 m4 s4 right-align">
        ₱ 1,260
      </div>
      <br><br>
      <div class="col l8 m8 s8 left-align">
        8 hours (₱ 240/pax)
      </div>
      <div class="col l4 m4 s4 right-align">
        ₱ 1,440
      </div>
    </div>
  </div>
  <div class="row flex-s">
    <div class="col s12 l5 rates-card rates-text box-a">
      <div class="title">Prepaid Rates</div>
      <div class="subtitle">whole day pass = 18 hours</div>
      <br><br>
      <div class="row">
        <div class="col l8 m8 s8 left-align">
          1 hour (₱ 50/pax)
        </div>
        <div class="col l4 m4 s4 right-align">
          ₱ 500
        </div>
        <br><br>
        <div class="col l8 m8 s8 left-align">
          3 hours (₱ 120/pax)
        </div>
        <div class="col l4 m4 s4 right-align">
          ₱ 1,200
        </div>
        <br><br>
        <div class="col l8 m8 s8 left-align">
          6 hours (₱ 210/pax)
        </div>
        <div class="col l4 m4 s4 right-align">
          ₱ 2,100
        </div>
        <br><br>
        <div class="col l8 m8 s8 left-align">
          8 hours (₱ 240/pax)
        </div>
        <div class="col l4 m4 s4 right-align">
          ₱ 2,400
        </div>
      </div>
    </div>
    <div class="col l7 rates-card box-b">
      <img src="{{ asset('img/sample.png') }}" width="100%" height="100%">
    </div>
  </div> --}}
  <div class="rates-title">All our clients can enjoy the following</div>
  <div class="row">
    <div class="col s12 m2 m5ths  l5ths center-align">
      <img class="circle" src="{{ asset('img/icons/coffee.png') }}" height="70px" width="70px">
      <div>
        Unlimited Coffee<br>&amp; Juice
      </div>
    </div>
    <div class="col s12 m2 m5ths  l5ths center-align">
      <img class="circle" src="{{ asset('img/icons/socket.png') }}" height="70px" width="70px">
      <div>
        Power Outlets
      </div>
    </div>
    <div class="col s12 m2 m5ths  l5ths center-align">
      <img class="circle" src="{{ asset('img/icons/nap area.png') }}" height="70px" width="70px">
      <div>
        Napping Area
      </div>
    </div>
    <div class="col s12 m2 m5ths  l5ths center-align">
      <img class="circle" src="{{ asset('img/icons/shower.png') }}" height="70px" width="70px">
      <div>
        Shower<br>(₱ 75.00)
      </div>
    </div>
    <div class="col s12 m2 m5ths  l5ths center-align">
      <img class="circle" src="{{ asset('img/icons/wifi.png') }}" height="70px" width="70px">
      <div>
        Free<br>Wi-Fi
      </div>
    </div>
  </div>
</div>
@endsection

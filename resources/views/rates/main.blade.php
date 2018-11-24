@extends("layout")

@section("body")
<div class="header">
  933 Main Branch<br>
  Package Plan
</div>
<div class="content">
  <div class="row">
    <div class="col m7 rates-card">
      <img src="{{ url('public/img/sample.png') }}" width="100%" height="100%">
    </div>
    <div class="col m5 rates-card rates-text">
      <div class="title">Rates</div>
      <div class="subtitle">9 hours and above = whole day</div>
      <br><br>
      <div class="col m9">
        1 hour
      </div>
      <div class="col m3 right-align">
        ₱ 50
      </div>
      <br><br>
      <div class="col m9">
        4 hours
      </div>
      <div class="col m3 right-align">
        ₱ 100
      </div>
      <br><br>
      <div class="col m9">
        Whole Day Pass
      </div>
      <div class="col m3 right-align">
        ₱ 250
      </div>
    </div>
    <div class="col m5 rates-card rates-text">
      <div class="title">Prepaid Rates</div>
      <div class="subtitle">whole day pass = 18 hours</div>
      <br><br>
      <div class="col m9">
        7 Days<br>
        <i>Valid within one month</i>
      </div>
      <div class="col m3 right-align">
        ₱ 1,499
      </div>
      <br><br>
      <div class="col m9">
        30 Days<br>
        <i>Valid within 3 months</i>
      </div>
      <div class="col m3 right-align">
        ₱ 3,999
      </div>
    </div>
    <div class="col m7 rates-card">
      <img src="{{ url('public/img/sample.png') }}" width="100%" height="100%">
    </div>
    <div class="rates-title">Private Room Rates</div>
    <div class="col m7 rates-card">
      <img src="{{ url('public/img/sample.png') }}" width="100%" height="100%">
    </div>
    <div class="col m5 rates-card rates-text">
      <div class="title">VIP Room</div>
      <div class="subtitle">Good for 4-6 pax</div>
      <br><br>
      <div class="col m9">
        1 hour (₱ 50/pax)
      </div>
      <div class="col m3 right-align">
        ₱ 300
      </div>
      <br><br>
      <div class="col m9">
        3 hours (₱ 120/pax)
      </div>
      <div class="col m3 right-align">
        ₱ 720
      </div>
      <br><br>
      <div class="col m9">
        6 hours (₱ 210/pax)
      </div>
      <div class="col m3 right-align">
        ₱ 1,260
      </div>
      <br><br>
      <div class="col m9">
        8 hours (₱ 240/pax)
      </div>
      <div class="col m3 right-align">
        ₱ 1,440
      </div>
    </div>
    <div class="col m5 rates-card rates-text">
      <div class="title">Prepaid Rates</div>
      <div class="subtitle">whole day pass = 18 hours</div>
      <br><br>
      <div class="col m9">
        1 hour (₱ 50/pax)
      </div>
      <div class="col m3 right-align">
        ₱ 500
      </div>
      <br><br>
      <div class="col m9">
        3 hours (₱ 120/pax)
      </div>
      <div class="col m3 right-align">
        ₱ 1,200
      </div>
      <br><br>
      <div class="col m9">
        6 hours (₱ 210/pax)
      </div>
      <div class="col m3 right-align">
        ₱ 2,100
      </div>
      <br><br>
      <div class="col m9">
        8 hours (₱ 240/pax)
      </div>
      <div class="col m3 right-align">
        ₱ 2,400
      </div>
    </div>
    <div class="col m7 rates-card">
      <img src="{{ url('public/img/sample.png') }}" width="100%" height="100%">
    </div>
    <div class="rates-title">All our clients can enjoy the following</div>
    <div class="col m5ths center-align">
      <img class="circle" src="{{ url('public/img/sample.png') }}" height="70px" width="70px">
      <div>
        Unlimited Coffee<br>&amps; Juice
      </div>
    </div>
    <div class="col m5ths center-align">
      <img class="circle" src="{{ url('public/img/sample.png') }}" height="70px" width="70px">
      <div>
        Power Outlets
      </div>
    </div>
    <div class="col m5ths center-align">
      <img class="circle" src="{{ url('public/img/sample.png') }}" height="70px" width="70px">
      <div>
        Napping Area
      </div>
    </div>
    <div class="col m5ths center-align">
      <img class="circle" src="{{ url('public/img/sample.png') }}" height="70px" width="70px">
      <div>
        Shower<br>(₱ 75.00)
      </div>
    </div>
    <div class="col m5ths center-align">
      <img class="circle" src="{{ url('public/img/sample.png') }}" height="70px" width="70px">
      <div>
        Free<br>Wi-Fi
      </div>
    </div>
  </div>
</div>
@endsection

@extends("layout")

@section("body")
<div class="header">
  933 Creatives<br>
  Package Plan
</div>
<div class="content">
  <div class="row">
    <div class="col m7 rates-card">
      <img src="{{ asset('img/sample.png') }}" width="100%" height="100%">
    </div>
    <div class="col m5 rates-card rates-text">
      <div class="title">Rates</div>
      <div class="subtitle">9 hours and above = whole day</div>
      <br><br>
      <div class="col s8 m9 left-align">
        1 hour
      </div>
      <div class="col s4 m3 right-align">
        ₱ 50
      </div>
      <br><br>
      <div class="col s8 m9 left-align">
        4 hours
      </div>
      <div class="col s4 m3 right-align">
        ₱ 100
      </div>
      <br><br>
      <div class="col s8 m9 left-align">
        4 hours for Dedicated Desk / Drafting Table
      </div>
      <div class="col s4 m3 right-align">
        ₱ 250
      </div>
      <div class="col s8 m9 left-align" style="font-style:italic;font-size:12px">
        * Exceeding Hours
      </div>
      <div class="col s4 m3 right-align" style="font-size:12px">
        ₱ 75/hr
      </div>
    </div>
  </div>
  <div class="row flex-s">
    <div class="col m5 rates-card rates-text box-a">
      <div class="title">Prepaid Rates</div>
      <div class="subtitle">whole day pass = 18 hours</div>
      <br><br>
      <div class="col m8">
        Whole Day Pass
      </div>
      <div class="col m4 right-align">
        ₱ 300
      </div>
      <br><br>
      <div class="col m8">
        Whole Day Pass<br>
        (Dedicated Desk)
      </div>
      <div class="col m4 right-align">
        ₱ 350
      </div>
      <br><br>
      <div class="col m8">
        7 Days<br>
        <i>Valid within one month</i>
      </div>
      <div class="col m4 right-align">
        ₱ 1,499
      </div>
      <br><br>
      <div class="col m8">
        30 Days<br>
        <i>Valid within 3 months</i>
      </div>
      <div class="col m4 right-align">
        ₱ 3,999
      </div>
      <br><br>
      <div class="col m8">
        Monthly Rate for<br>
        Dedicated Desk
      </div>
      <div class="col m4 right-align">
        ₱ 10,000
      </div>
    </div>
    <div class="col m7 rates-card box-b">
      <img src="{{ asset('img/sample.png') }}" width="100%" height="100%">
    </div>
  </div>
  <div class="rates-title">Private Room Rates</div>
  <div class="row">
    <div class="col m7 rates-card">
      <img src="{{ asset('img/sample.png') }}" width="100%" height="100%">
    </div>
    <div class="col m5 rates-card rates-text">
      <div class="title">Film Room</div>
      <div class="subtitle">Good for 20 pax</div>
      <br><br>
      <div class="col s8 m9 left-align">
        1 hour (₱ 60/pax)
      </div>
      <div class="col s4 m3 right-align">
        ₱ 1,200
      </div>
      <br><br>
      <div class="col s8 m9 left-align">
        3 hours (₱ 144/pax)
      </div>
      <div class="col s4 m3 right-align">
        ₱ 2,880
      </div>
      <br><br>
      <div class="col s8 m9 left-align">
        6 hours (₱ 252/pax)
      </div>
      <div class="col s4 m3 right-align">
        ₱ 5,040
      </div>
      <br><br>
      <div class="col s8 m9 left-align">
        8 hours (₱ 288/pax)
      </div>
      <div class="col s4 m3 right-align">
        ₱ 5,760
      </div>
    </div>
  </div>
  <div class="row flex-s">
    <div class="col m5 rates-card rates-text box-a">
      <div class="title">Seminar Room</div>
      <div class="subtitle">Good for 24 pax</div>
      <br><br>
      <div class="col s8 m9 left-align">
        1 hour (₱ 60/pax)
      </div>
      <div class="col s4 m3 right-align">
        ₱ 1,440
      </div>
      <br><br>
      <div class="col s8 m9 left-align">
        3 hours (₱ 144/pax)
      </div>
      <div class="col s4 m3 right-align">
        ₱ 3,456
      </div>
      <br><br>
      <div class="col s8 m9 left-align">
        6 hours (₱ 252/pax)
      </div>
      <div class="col s4 m3 right-align">
        ₱ 6,048
      </div>
      <br><br>
      <div class="col s8 m9 left-align">
        8 hours (₱ 288/pax)
      </div>
      <div class="col s4 m3 right-align">
        ₱ 6,912
      </div>
    </div>
    <div class="col m7 rates-card">
      <img src="{{ asset('img/sample.png') }}" width="100%" height="100%">
    </div>
  </div>
  <div class="rates-title">All our clients can enjoy the following</div>
  <div class="row">
    <div class="col s12 m5ths center-align">
      <img class="circle" src="{{ asset('img/sample.png') }}" height="70px" width="70px">
      <div>
        Unlimited Coffee<br>&amps; Juice
      </div>
    </div>
    <div class="col s12 m5ths center-align">
      <img class="circle" src="{{ asset('img/sample.png') }}" height="70px" width="70px">
      <div>
        Power Outlets
      </div>
    </div>
    <div class="col s12 m5ths center-align">
      <img class="circle" src="{{ asset('img/sample.png') }}" height="70px" width="70px">
      <div>
        Napping Area
      </div>
    </div>
    <div class="col s12 m5ths center-align">
      <img class="circle" src="{{ asset('img/sample.png') }}" height="70px" width="70px">
      <div>
        Shower<br>(₱ 75.00)
      </div>
    </div>
    <div class="col s12 m5ths center-align">
      <img class="circle" src="{{ asset('img/sample.png') }}" height="70px" width="70px">
      <div>
        Free<br>Wi-Fi
      </div>
    </div>
  </div>
</div>
@endsection

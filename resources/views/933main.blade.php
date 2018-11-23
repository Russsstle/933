@extends("navbar")
@section("body")
<div class="header">
  <h5><b>933 Main Branch<br/>Package Plan</b></h5>
</div>
<div class="content">
  <div class="row">
    <div >
      <p style="float: left;margin-right:30px;margin-bottom:40px;margin-top:0px"> <img src="../resources/pictures/sample.png" height="230" width = "400" ></p>
      <h5 style="padding-top:20px;padding-bottom:-2px"><b>RATES</b></h5>
      <i style="color:gray" >9 hours and above  =  whole day</i>
      <pre style="font-size:15px">1 hour                 ₱50  </pre>
      <pre style="font-size:15px">4 hour                 ₱100 </pre>
      <pre style="font-size:15px">Whole Day Pass         ₱250  </pre>
    </div>
    <div style="margin:100px auto">
      <p style="float: right;margin-bottom:40px;margin-top:0px"> <img src="../resources/pictures/sample.png" height="230" width = "400" ></p>
      <h5 style="padding-top:20px;padding-bottom:-2px"><b>PREPAID RATES</b></h5>
      <i style="color:gray" >whole day pass = 18 hours</i>
      <pre style="font-size:15px">7 Days                   ₱1,499<br/>Valid within one month</pre>
      <pre style="font-size:15px">30 Days                  ₱3,999<br/>Valid within 3 months</pre>
    </div>
    <center><h4><b>Private Room Rates</b></h4></center>
    <div >
      <p style="float: left;margin-right:30px;margin-bottom:40px;margin-top:0px"> <img src="../resources/pictures/sample.png" height="230" width = "400" ></p>
      <h5 style="padding-top:20px;padding-bottom:-2px"><b>VIP ROOM</b></h5>
      <i style="color:gray" >Good for 4-6 pax</i>
      <pre style="font-size:15px">1 hour (₱50/pax)      ₱300 </pre>
      <pre style="font-size:15px">3 hours (₱120/pax)    ₱720 </pre>
      <pre style="font-size:15px">6 hours (₱210/pax)    ₱1,260 </pre>
      <pre style="font-size:15px">8 hours (₱240/pax)    ₱1,440</pre>
    </div>
    <div style="margin:50px auto">
      <p style="float: right;margin-bottom:40px;margin-top:0px"> <img src="../resources/pictures/sample.png" height="230" width = "400" ></p>
      <h5 style="padding-top:20px;padding-bottom:-2px"><b>CONFERENCE ROOM</b></h5>
      <i style="color:gray" >Good for 8-10 pax</i>
      <pre style="font-size:15px">1 hour  (₱50/pax)       ₱300 </pre>
      <pre style="font-size:15px">3 hours (₱120/pax)      ₱1,200 </pre>
      <pre style="font-size:15px">6 hours (₱210/pax)      ₱2,100 </pre>
      <pre style="font-size:15px">6 hours (₱240/pax)      ₱2,400 </pre>
    </div>
     <center><h5><b>All our clients enjoy the following</b></h5></center>
      <div style="margin:40px 35px;float:left">
        <center><img class="circle" src="../resources/pictures/sample.png"  height="70px" width="70px"></center>
        <h6 style="margin-top:25px;text-align:center">Unlimited Coffee<br/>& Juice</h6>
      </div>
       <div style="margin:40px 35px;float:left">
        <center><img class="circle" src="../resources/pictures/sample.png"  height="70px" width="70px"></center>
        <h6 style="margin-top:25px;text-align:center">Power<br/> Outlets</h6>
      </div>
       <div style="margin:40px 35px;float:left">
        <center><img class="circle" src="../resources/pictures/sample.png"  height="70px" width="70px"></center>
        <h6 style="margin-top:25px;text-align:center">Napping<br/>Area</h6>
      </div>
       <div style="margin:40px 35px;float:left">
        <center><img class="circle" src="../resources/pictures/sample.png"  height="70px" width="70px"></center>
        <h6 style="margin-top:25px;text-align:center">Shower<br/>(₱75.00)</h6>
      </div>
       <div style="margin:40px 35px;float:left">
        <center><img class="circle" src="../resources/pictures/sample.png"  height="70px" width="70px"></center>
        <h6 style="margin-top:25px;text-align:center">Free <br/>WiFi</h6>
      </div>
    </div>
  </div>

@include('footer')
@endsection

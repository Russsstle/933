@extends("navbar")
@section("body")
  <div class="header">
    <h4><b>About 933 Co-working Manila</b></h4>
  </div>
  <div class="content">
    <div class="row">
      <div class = "col s3" style = "width:100%">
        <h5 style="float:left"><b>COMMUNITY</b></h5>
         <p class="about-desc"style="float:right">933 Co-working Mnl is one of Manila's newest community of entrepreneurs, creative, startups, and students.<br/><br/>We offer a high-end yet affordable coworking space, workshops, events and study labs.<br/><br/>Whether you are an entrepreneur, startups or corporate professional conducting day to day business, holding meetings or a student looking for a vibrant, secure and peaceful place to study 933 Co-working Mnl is designed to suit all your personal and business needs. </p>
      </div>
      <div class = "col s3" style = "width:100%">
        <h5 style="float:left"><b>Space</b></h5>
         <p class="about-desc"style="float:right">People who use co-working spaces see themselves as part of a community. Connecting with people and expanding your network are just two reasons why people pay to work in a shared communal working space as opposed to working in a traditional office setup. <br/><br/>Enjoy an exceptional co-working space experience with a variety of space designed to suit all requirements.<br/><br/>We are open 18 hours a day and 7 days a week, located at 933 G.M. Tolentino st. Sampaloc Manila.<br/><br/>933 Co-working Mnl is a fully equipped office with fast fiber optics wifi, fully centralized air condition, toilet with amenities shower, and napping area. </p>
      </div>
      <div class = "col s3" style = "width:100%">
        <h5 style="float:left"><b>Space</b></h5>
        <p class="about-desc"style="float:right">- Bookable meeting room and conference room.<br/>
           - Comfortable & professional office furniture<br/>
           - Fiber optics Internet connection.<br/>
           - Audiovisual equipment<br/>
           - Toilet with amenities<br/>
           - Napping area<br/>
           - Printing<br/>
           - Shower </p>
      </div>
      <center><h4><b>Gallery</b></h4></center>
      <div class="carousel">
        <a class="carousel-item" href="#one!"><img src="../resources/pictures/sample.png"></a>
        <a class="carousel-item" href="#two!"><img src="../resources/pictures/sample.png"></a>
        <a class="carousel-item" href="#three!"><img src="../resources/pictures/sample.png"></a>
        <a class="carousel-item" href="#four!"><img src="../resources/pictures/sample.png"></a>
        <a class="carousel-item" href="#five!"><img src="../resources/pictures/sample.png"></a>
      </div>
      <center><h4 style="padding-top:0px !important"><b>Meet the Team</b></h4>
        <div style="margin:40px 90px;float:left">
          <img class="circle" src="../resources/pictures/sample.png"  height="130px" width="130px">
          <h6 style="margin-top:25px">Name<br/>Position</h6>
        </div>
        <div style="margin:40px 50px;float:left">
          <img class="circle" src="../resources/pictures/sample.png"  height="130px" width="130px">
          <h6 style="margin-top:25px">Name<br/>Position</h6>
        </div>
        <div style="margin:40px 50px;float:left">
          <img class="circle" src="../resources/pictures/sample.png"  height="130px" width="130px">
          <h6 style="margin-top:25px">Name<br/>Position</h6>
        </div>
        <div style="margin:40px 90px;float:left">
          <img class="circle" src="../resources/pictures/sample.png"  height="130px" width="130px">
          <h6 style="margin-top:25px">Name<br/>Position</h6>
        </div>
        <div style="margin:40px 50px;float:left">
          <img class="circle" src="../resources/pictures/sample.png"  height="130px" width="130px">
          <h6 style="margin-top:25px">Name<br/>Position</h6>
        </div>
        <div style="margin:40px 50px;float:left">
          <img class="circle" src="../resources/pictures/sample.png"  height="130px" width="130px">
          <h6 style="margin-top:25px">Name<br/>Position</h6>
        </div>
        <h4>Our Amazing Partners</h4>
        <img  src="../resources/pictures/sample.png" style="margin:40px 12px;float:left" height="70px" width="140px">
        <img  src="../resources/pictures/sample.png" style="margin:40px 12px;float:left" height="70px" width="140px">
        <img  src="../resources/pictures/sample.png" style="margin:40px 12px;float:left" height="70px" width="140px">
        <img  src="../resources/pictures/sample.png" style="margin:40px 12px;float:left" height="70px" width="140px">
        <img  src="../resources/pictures/sample.png" style="margin:40px 12px;float:left" height="70px" width="140px">
        <a class="waves-effect waves-light btn"  href = "#" style="background-color:#d3d2d2;color:black">Partner with us!</a>
      </center>
    </div>
  </div>
@include('footer')
@endsection
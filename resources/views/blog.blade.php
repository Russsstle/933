@extends("navbar")
@section("body")
  <div class="header">
    <h4><b>Blogs</b></h4>
  </div>
  <ul class="tabs " style = "padding-left: 18%;" >
    <li class="tab col s3"><a href="#test1">All</a></li>
    <li class="tab col s3"><a href="#test2">News</a></li>
    <li class="tab col s3"><a class="active" href="#test3">Features</a></li>
    <li class="tab col s3"><a href="#test4">Upcoming Events</a></li>
    <li class="tab col s3"><a href="#test5">Tips</a></li>
  </ul>
  <div id="test1" class="col s12">Test 1</div>
  <div id="test2" class="col s12">Test 2</div>
  <div id="test3" class="col s12">
    <div class="content">
       <p style="float: left;margin-right:30px;margin-bottom:40px;margin-top:0px"> <img src="../resources/pictures/sample.png" height="230" width = "400" ></p>
       <i style = "color:gray;">FEATURE</i>
       <h5><b>TITLE OF FEATURE STORY</b></h5>
       <p>Lorem ipsum dolor sit amet, oporteat singulis vituperatoribus et has, quodsi volumus necessitatibus eum ea. Primis conclusionemque at quo, vix odio wisi ut. Cum scripta molestie ei, facete virtute menandri duo ei. </p>
       <a class="waves-effect waves-light btn"  href = "{{url('feature')}}" style="background-color:#d3d2d2;color:black">See More</a>
     </div>
     <div class="content">
       <p style="float: left;margin-right:30px;margin-bottom:40px;margin-top:0px"> <img src="../resources/pictures/sample.png" height="230" width = "400" ></p>
       <i style = "color:gray;">FEATURE</i>
       <h5><b>TITLE OF FEATURE STORY</b></h5>
       <p>Lorem ipsum dolor sit amet, oporteat singulis vituperatoribus et has, quodsi volumus necessitatibus eum ea. Primis conclusionemque at quo, vix odio wisi ut. Cum scripta molestie ei, facete virtute menandri duo ei. </p>
       <a class="waves-effect waves-light btn"  href = "{{url('feature')}}" style="background-color:#d3d2d2;color:black">See More</a>
     </div>
     <div class="content">
       <p style="float: left;margin-right:30px;margin-bottom:40px;margin-top:0px"> <img src="../resources/pictures/sample.png" height="230" width = "400" ></p>
       <i style = "color:gray;">FEATURE</i>
       <h5><b>TITLE OF FEATURE STORY</b></h5>
       <p>Lorem ipsum dolor sit amet, oporteat singulis vituperatoribus et has, quodsi volumus necessitatibus eum ea. Primis conclusionemque at quo, vix odio wisi ut. Cum scripta molestie ei, facete virtute menandri duo ei. </p>
       <a class="waves-effect waves-light btn"  href = "{{url('feature')}}" style="background-color:#d3d2d2;color:black">See More</a>
     </div>
     <div class="content">
       <p style="float: left;margin-right:30px;margin-bottom:40px;margin-top:0px"> <img src="../resources/pictures/sample.png" height="230" width = "400" ></p>
       <i style = "color:gray;">FEATURE</i>
       <h5><b>TITLE OF FEATURE STORY</b></h5>
       <p>Lorem ipsum dolor sit amet, oporteat singulis vituperatoribus et has, quodsi volumus necessitatibus eum ea. Primis conclusionemque at quo, vix odio wisi ut. Cum scripta molestie ei, facete virtute menandri duo ei. </p>
       <a class="waves-effect waves-light btn"  href = "{{url('feature')}}" style="background-color:#d3d2d2;color:black">See More</a>
     </div>
      <img src="../resources/pictures/numbers.png" height="60" width = "247"  style = "margin-left: -115px">



  </div>
  <div id="test4" class="col s12">Test 4</div>
  <div id="test5" class="col s12">Test 5</div>
@include('footer')
@endsection
@extends("website.layouts.app")

@section("body")
<div class="header">
  Blogs
</div>
<ul class="blog-tabs tabs tabs-fixed-width">
  <li class="tab col s12 m3"><a href="#test1">All</a></li>
  <li class="tab col s12 m3"><a href="#test2">News</a></li>
  <li class="tab col s12 m3"><a class="active" href="#test3">Features</a></li>
  <li class="tab col s12 m3"><a href="#test4">Upcoming Events</a></li>
  <li class="tab col s12 m3"><a href="#test5">Tips</a></li>
</ul>
<div id="test1" class="col s12">Test 1</div>
<div id="test2" class="col s12">Test 2</div>
<div id="test3" class="col s12">
  <div class="content">
    <div class="row">
      <div class="col s12 m7">
        <img src="{{ asset('img/sample.png') }}" width="100%">
      </div>
      <div class="col s12 m5 blog-card ">
        <div class="subtitle">Feature</div>
        <div class="title">Title of Feature Story</div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquet gravida lorem sit amet posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
        </p>
        <a class="waves-effect waves-light btn" href="{{ url('blog/feature') }}">See More</a>
      </div>
      <div class="col s12 m7">
        <img src="{{ asset('img/sample.png') }}" width="100%">
      </div>
      <div class="col s12 m5 blog-card">
        <div class="subtitle">Feature</div>
        <div class="title">Title of Feature Story</div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquet gravida lorem sit amet posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
        </p>
        <a class="waves-effect waves-light btn" href="{{ url('blog/feature') }}">See More</a>
      </div>
      <div class="col s12 m7">
        <img src="{{ asset('img/sample.png') }}" width="100%">
      </div>
      <div class="col s12 m5 blog-card">
        <div class="subtitle">Feature</div>
        <div class="title">Title of Feature Story</div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquet gravida lorem sit amet posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
        </p>
        <a class="waves-effect waves-light btn" href="{{ url('blog/feature') }}">See More</a>
      </div>
      <div class="col s12 m7">
        <img src="{{ asset('img/sample.png') }}" width="100%">
      </div>
      <div class="col s12 m5 blog-card">
        <div class="subtitle">Feature</div>
        <div class="title">Title of Feature Story</div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquet gravida lorem sit amet posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
        </p>
        <a class="waves-effect waves-light btn" href="{{ url('blog/feature') }}">See More</a>
      </div>
    </div>
  </div>
</div>
<div id="test4" class="col s12">Test 4</div>
<div id="test5" class="col s12">Test 5</div>
@endsection

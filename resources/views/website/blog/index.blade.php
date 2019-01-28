@php($title = "Blog")

@extends("website.layouts.app")

@section("body")
<div class="header">
  Blogs
</div>
<ul class="blog-tabs tabs tabs-fixed-width">
  <li class="tab col s12 m3"><a class="active" href="#all">All</a></li>
  <li class="tab col s12 m3"><a href="#news">News</a></li>
  <li class="tab col s12 m3"><a href="#features">Features</a></li>
  <li class="tab col s12 m3"><a href="#upcoming_events">Upcoming Events</a></li>
  <li class="tab col s12 m3"><a href="#tips">Tips</a></li>
</ul>
<div id="all" class="col s12">
  @include("website.blog.tabs", ["data" => $data->get()])
</div>
<div id="news" class="col s12">
  @include("website.blog.tabs", ["data" => $data->where("type", "news")->get()])
</div>
<div id="features" class="col s12">
  @include("website.blog.tabs", ["data" => $data->where("type", "features")->get()])
</div>
<div id="upcoming_events" class="col s12">
  @include("website.blog.tabs", ["data" => $data->where("type", "upcoming_events")->get()])
</div>
<div id="tips" class="col s12">
  @include("website.blog.tabs", ["data" => $data->where("type", "tips")->get()])
</div>
@endsection

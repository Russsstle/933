@extends("layout")
@section("navbar")
  <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo" style="padding:10px"><img src='../resources/pictures/logo.png'></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="hide-on-med-and-down" style="padding-left:300px">
        <li><a href="{{ url('home') }}">Home</a></li>
        <li><a class='dropdown-trigger ' href='#' data-target='dropdown2'>Services</a></li>
        <li><a href="{{ url('blog') }}">Blog</a></li>
        <li><a href="{{ url('about') }}">About</a></li>
        <li><a href="{{ url('contactus') }}">Contact Us</a></li>
      </ul>
    </div>
  </nav>
  <ul id='dropdown2' class='dropdown-content'>
    <li><a href="{{ url('933main') }}">933 MAIN</a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="{{ url('933creatives') }}">933 CREATIVES</a></li>
  </ul>
  <ul class="sidenav" id="mobile-demo">
    <li><a href="{{ url('home') }}">Home</a></li>
    <li><a href="{{ url('services') }}">Services</a></li>
    <li><a href="{{ url('blog') }}">Blog</a></li>
    <li><a href="{{ url('about') }}">About</a></li>
    <li><a href="{{ url('contactus') }}">Contact Us</a></li>
  </ul>
@endsection
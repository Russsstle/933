<nav>
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo"><img src="{{ url('public/img/logo.png') }}"></a>
    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="{{ url('/') }}">Home</a></li>
      <li><a class='dropdown-trigger' href='#' data-target='dropdown2'>Services</a></li>
      <li><a href="{{ url('blog') }}">Blog</a></li>
      <li><a href="{{ url('about') }}">About</a></li>
      <li><a href="{{ url('contact') }}">Contact</a></li>
    </ul>
  </div>
</nav>
<ul id='dropdown2' class='dropdown-content'>
  <li><a href="{{ url('services/main') }}">933 MAIN</a></li>
  <li class="divider" tabindex="-1"></li>
  <li><a href="{{ url('services/creatives') }}">933 CREATIVES</a></li>
</ul>
<ul class="sidenav" id="mobile-demo">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="{{ url('services') }}">Services</a></li>
  <li><a href="{{ url('blog') }}">Blog</a></li>
  <li><a href="{{ url('about') }}">About</a></li>
  <li><a href="{{ url('contact') }}">Contact Us</a></li>
</ul>

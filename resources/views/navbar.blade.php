<nav>
  <div class="nav-wrapper">
    <a href="{{ url('/') }}" class="brand-logo"><img src="{{ asset('img/logo.png') }}"></a>
    <a href="#" data-target="mobile-sidebar" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li class="{{ active('/') }}"><a href="{{ url('/') }}">Home</a></li>
      <li class="{{ active('services/*') }}"><a class="dropdown-trigger" href="#" data-target='dropdown2'>Services<i class="material-icons right">arrow_drop_down</i></a></li>
      <li class="{{ active('blog/*') }}"><a  href="{{ url('blog') }}">Blog</a></li>
      <li class="{{ active('about') }}"><a  href="{{ url('about') }}">About</a></li>
      <li class="{{ active('contact') }}"><a  href="{{ url('contact') }}">Contact</a></li>
    </ul>
  </div>
</nav>
<ul id='dropdown2' class='dropdown-content'>
  <li><a href="{{ url('services/main') }}">933 MAIN</a></li>
  <li class="divider"></li>
  <li><a href="{{ url('services/creatives') }}">933 CREATIVES</a></li>
</ul>
<ul class="sidenav" id="mobile-sidebar">
  <li class="sidebar-header">933 Co-working Manila</li>
  <div class="divider"></div>
  <li><a href="{{ url('/') }}">Home</a></li>
  <li>
    <ul class="collapsible collapsible-accordion">
      <li>
        <a class="collapsible-header">Services<i class="material-icons right">arrow_drop_down</i></a>
        <div class="collapsible-body">
          <ul>
            <li><a href="{{ url('services/main') }}" >933 MAIN</a></li>
            <li><a href="{{ url('services/creatives') }}">933 CREATIVES</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
  <li><a href="{{ url('blog') }}">Blog</a></li>
  <li><a href="{{ url('about') }}">About</a></li>
  <li><a href="{{ url('contact') }}">Contact</a></li>
</ul>

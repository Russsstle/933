<div class="page">
  <header class="header">
    <nav class="navbar">
      <div class="container-fluid">
        <div class="navbar-holder d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <a href="{{ url('/') }}" class="navbar-brand d-none d-sm-inline-block">
              <div class="brand-text d-none d-lg-inline-block"><span>933</span><strong> Co-Working</strong></div>
              <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>933</strong></div></a>
            <a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
          </div>
          <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
            <li class="nav-item">Hello, {{ Auth::user()->username }}</li>
            <li class="nav-item">
              <a href="{{ url('cpanel/logout') }}" onclick="return confirm('Are you sure do you want to logout?')" class="nav-link logout">
                <span class="d-none d-sm-inline">Logout</span>
                <i class="fa fa-sign-out"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="page-content d-flex align-items-stretch">
    <nav class="side-navbar">
      <ul class="list-unstyled">
        <li class="{{ active('cpanel') }}">
          <a href="{{ url('cpanel') }}">
            <i class="fa fa-home"></i>
            Home
          </a>
        </li>
        <li class="{{ active('cpanel/user*') }}">
          <a href="{{ url('cpanel/user') }}">
            <i class="fa fa-user-circle"></i>
            Users
          </a>
        </li>
        <li class="{{ active('cpanel/article*') }}">
          <a href="{{ url('cpanel/article') }}">
            <i class="fa fa-newspaper-o"></i>
            Articles
          </a>
        </li>
        <li class="{{ active('cpanel/author*') }}">
          <a href="{{ url('cpanel/author') }}">
            <i class="fa fa-address-book"></i>
            Authors
          </a>
        </li>
        <li class="{{ active('cpanel/service*') }}">
          <a href="{{ url('cpanel/service') }}">
            <i class="fa fa-money"></i>
            Rates
          </a>
        </li>
        <li class="{{ active('cpanel/branch*') }}">
          <a href="{{ url('cpanel/branch') }}">
            <i class="fa fa-home"></i>
            Branches
          </a>
        </li>

        <!-- <li>
          <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse">
            <i class="fa fa-file"></i>
            Example dropdown
          </a>
          <ul id="exampledropdownDropdown" class="collapse list-unstyled">
            <li><a href="#">Page</a></li>
            <li><a href="#">Page</a></li>
            <li><a href="#">Page</a></li>
          </ul>
        </li> -->
      </ul>
    </nav>
    <div class="content-inner">
      <section class="no-padding-bottom">
        @yield("body")
      </section>
      <footer class="main-footer">
        <div class="container-fluid">
          <p>&copy; 2018 933 Co-Working Mnl. All Rights Reserved</p>
        </div>
      </footer>
    </div>
  </div>
</div>

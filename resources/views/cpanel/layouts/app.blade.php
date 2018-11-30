<!DOCTYPE html>
<html lang="en">
<head>
  <base href="{{ url('/') . '/' }}">
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="{{ asset('css/cpanel/packages.css') }}?v={{ filemtime(public_path('css/cpanel/packages.css')) }}">
  <link rel="stylesheet" href="{{ asset('css/cpanel/app.css') }}?v={{ filemtime(public_path('css/cpanel/app.css')) }}">
  <link rel="stylesheet" href="{{ asset('css/cpanel/app-responsive.css') }}?v={{ filemtime(public_path('css/cpanel/app-responsive.css')) }}" media="screen and (max-width:767px)">
  <title>933 Co-working Manila</title>
</head>
<body>
  <div class="loader-wrapper">
    <div class="preloader-wrapper big active loader">
      <div class="spinner-layer spinner-blue-only">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
    </div>
  </div>
  @section("content")
    @yield("body")
  @overwrite
  @include("cpanel.layouts.sidebar")
  <script src="{{ asset('js/cpanel/packages.js') }}?v={{ filemtime(public_path('js/cpanel/packages.js')) }}"></script>
  <script src="{{ asset('js/cpanel/app.js') }}?v={{ filemtime(public_path('js/cpanel/app.js')) }}"></script>
</body>
</html>

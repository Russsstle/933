<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="{{ asset('public/css/packages.css') }}?v={{ filemtime(public_path('css/packages.css')) }}">
  <link rel="stylesheet" href="{{ asset('public/css/app.css') }}?v={{ filemtime(public_path('css/app.css')) }}">
  <link rel="stylesheet" href="{{ asset('public/css/app-responsive.css') }}?v={{ filemtime(public_path('css/app-responsive.css')) }}" media="screen and (max-width:767px)">
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
  @include('navbar')
  @yield('body')
  @include('footer')
  <script src="{{ asset('public/manifest.js') }}?v={{ filemtime(public_path('manifest.js')) }}"></script>
  <script src="{{ asset('public/js/vendor.js') }}?v={{ filemtime(public_path('js/vendor.js')) }}"></script>
  <script src="{{ asset('public/js/packages.js') }}?v={{ filemtime(public_path('js/packages.js')) }}"></script>
  <script src="{{ asset('public/js/app.js') }}?v={{ filemtime(public_path('js/app.js')) }}"></script>
</body>
</html>

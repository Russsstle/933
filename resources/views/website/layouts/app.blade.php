<!DOCTYPE html>
<html lang="en">
<head>
  <base href="{{ url('/') . '/' }}">
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('apple-icon-57x57.png') }}">
  <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('apple-icon-60x60.png') }}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('apple-icon-72x72.png') }}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('apple-icon-76x76.png') }}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('apple-icon-114x114.png') }}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('apple-icon-120x120.png') }}">
  <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('apple-icon-144x144.png') }}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('apple-icon-152x152.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-icon-180x180.png') }}">
  <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('android-icon-192x192.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon-96x96.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('manifest.json') }}">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="{{ asset('ms-icon-144x144.png') }}">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="{{ asset('css/website/packages.css') }}?v={{ filemtime(public_path('css/website/packages.css')) }}">
  <link rel="stylesheet" href="{{ asset('css/website/app.css') }}?v={{ filemtime(public_path('css/website/app.css')) }}">
  <link rel="stylesheet" href="{{ asset('css/website/app-responsive.css') }}?v={{ filemtime(public_path('css/website/app-responsive.css')) }}" media="screen and (max-width:767px)">
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
  @includeWhen(!request()->is('*login'), 'website.layouts.navbar')
  @yield('body')
  @includeWhen(!request()->is('*login'), 'website.layouts.footer')
  <script src="{{ asset('js/website/packages.js') }}?v={{ filemtime(public_path('js/website/packages.js')) }}"></script>
  <script src="{{ asset('js/website/app.js') }}?v={{ filemtime(public_path('js/website/app.js')) }}"></script>
</body>
</html>

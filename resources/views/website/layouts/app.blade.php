<!DOCTYPE html>
<html lang="en">
<head>
  <base href="{{ url('/') . '/' }}">
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="{{ asset('icon/ms-icon-144x144.png') }}">
  <meta name="theme-color" content="#ffffff">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('icon/apple-icon-57x57.png') }}">
  <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('icon/apple-icon-60x60.png') }}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('icon/apple-icon-72x72.png') }}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('icon/apple-icon-76x76.png') }}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('icon/apple-icon-114x114.png') }}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('icon/apple-icon-120x120.png') }}">
  <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('icon/apple-icon-144x144.png') }}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('icon/apple-icon-152x152.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icon/apple-icon-180x180.png') }}">
  <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('icon/android-icon-192x192.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('icon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('icon/favicon-96x96.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icon/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('icon/manifest.json') }}">
  <link rel="stylesheet" href="{{ url('/') . mix('css/website/packages.css') }}">
  <link rel="stylesheet" href="{{ url('/') . mix('css/website/app.css') }}">
  <link rel="stylesheet" href="{{ url('/') . mix('css/website/app-responsive.css') }}" media="screen and (max-width:767px)">
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
  <script src="{{ url('/') . mix('js/website/packages.js') }}"></script>
  <script src="{{ url('/') . mix('js/website/app.js') }}"></script>
</body>
</html>

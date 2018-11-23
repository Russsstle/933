<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="{{ asset('css/packages.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>933</title>
</head>
<body>
  @yield('navbar')
  @yield('body')
  <script src="{{ asset('js/packages.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
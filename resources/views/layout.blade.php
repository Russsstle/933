<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="{{ asset('public/css/materialize.min.css') }}">
  <title>933</title>
</head>
<body>
  @yield('body')
  <script src="{{ asset('public/js/jquery.min.js') }}"></script>
  <script src="{{ asset('public/js/materialize.min.js') }}"></script>
</body>
</html>
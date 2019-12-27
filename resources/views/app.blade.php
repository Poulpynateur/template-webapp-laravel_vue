<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>DE GHESELLE - {{ $name }}</title>

  <link rel="stylesheet" href="{{ asset('common/common.css') }}">
  <link rel="stylesheet" href="{{ asset($name.'Assets/app.css') }}">
</head>

<body>
  <div id="app">
    @yield('content')
    <app></app>
  </div>

  <script src="{{ asset('common/manifest.js') }}"></script>
  <script src="{{ asset('common/vendor.js') }}"></script>
  <script src="{{ asset('common/common.js') }}"></script>
  <script src="{{ asset($name.'Assets/app.js') }}"></script>
</body>
</html>
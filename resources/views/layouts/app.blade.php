<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>{{ $name }}</title>
  
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
  <!-- Yeah, I heavily use generic CSS classes and happily mix structure and design. Well, I am not a designer ¯\_(ツ)_/¯ -->
  <div id="app" class="container">
    @yield('content')
  </div>

  <script src="{{ asset($path.'/js/app.js') }}"></script>

</body>
</html>
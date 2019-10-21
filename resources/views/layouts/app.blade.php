<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Home</title>
  
  <link rel="stylesheet" href="{{ asset('root/css/app.css') }}">
</head>

<body>

  <div id="app">
      <main>
          @yield('content')
      </main>
  </div>

  <script src="{{ asset('base/js/app.js') }}"></script>
</body>
</html>
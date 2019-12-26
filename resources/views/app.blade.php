<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>DE GHESELLE - {{ $name }}</title>

  <link rel="stylesheet" href="{{ asset('common/common.css') }}">
  <link rel="stylesheet" href="{{ asset($name.'Assets/app.css') }}">
</head>

<body>
  
  <!-- May replace theses elements by global vue components -->

  <div id="main-menu">
    <div>
      <a class="btn btn-link text-gray" href="{{ route('home') }}">Nicolas DE GHESELLE</a>
    </div>
    <div>
      <div class="dropdown dropdown-right">
        <a href="#" class="btn btn-link dropdown-toggle" tabindex="0" disabled>
          <i class="icon icon-more-horiz"></i>
        </a>
    
        <ul class="menu">
          <li class="menu-item">
            <a class="btn btn-link float-right" href="{{ route('about') }}">About<i class="icon ml-2 icon-emoji"></i></a>
          </li>
          <li class="menu-item">
            <a class="btn btn-link float-right" href="{{ route('login') }}">Login<i class="icon ml-2 icon-people"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div id="app" class="container">
    @yield('content')
    <app></app>
  </div>

  <script src="{{ asset('common/manifest.js') }}"></script>
  <script src="{{ asset('common/vendor.js') }}"></script>
  <script src="{{ asset('common/common.js') }}"></script>
  <script src="{{ asset($name.'Assets/app.js') }}"></script>
</body>
</html>
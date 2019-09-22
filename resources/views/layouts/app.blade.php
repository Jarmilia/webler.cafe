<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'webler.cafe') }}</title>
  <!-- Scripts -->
  <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>
  <script type="text/javascript"
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app" class="app-container">
    <header>
      <div class="dark-backg padding0-5 fixed width100 navi">
        @include('inc.navigation')
      </div>
      @yield('header')
    </header>
    <main class="padding-top0">
      <div class="container">
        @include('inc.messages')
        @yield('content')
      </div>
    </main>
        @include('inc.footer')
  </div>
</body>
</html>

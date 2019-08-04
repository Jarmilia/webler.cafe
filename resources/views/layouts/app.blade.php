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
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cutive+Mono" rel="stylesheet">

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
      
      {{-- <button id="btt">
        <?xml version="1.0" encoding="utf-8"?>
        <svg version="1.1" id="arrow" focusable="false" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
          x="0px" y="0px" viewBox="0 0 222 222" style="enable-background:new 0 0 222 222;" xml:space="preserve">
          <style type="text/css">
            .st0{fill:#110F0A;}
          </style>
          <path class="st0" d="M0,111C0,49.7,49.7,0,111,0s111,49.7,111,111s-49.7,111-111,111S0,172.3,0,111z M64.3,123.9l32.4-33.8v81.7
          c0,6,4.8,10.7,10.7,10.7h7.2c6,0,10.7-4.8,10.7-10.7V90.1l32.4,33.8c4.2,4.3,11.1,4.4,15.4,0.2l4.9-4.9c4.2-4.2,4.2-11,0-15.2
          l-59.3-59.4c-4.2-4.2-11-4.2-15.2,0L44,104c-4.2,4.2-4.2,11,0,15.2l4.9,4.9C53.2,128.4,60.1,128.3,64.3,123.9z"/>
        </svg>
      </button>   --}}
    </main>
        @include('inc.footer')
  </div>
    <!-- GSAP Bibliothek-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>

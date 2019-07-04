<!DOCTYPE html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
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
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Ruge+Boogie" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cutive+Mono" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app">
    <header>
      @yield('header')
    </header>
    <main class="py-4">
      @include('inc.navigation')
      <div class="container">

        @include('inc.messages')
        <div class="space-between">
          @include('inc.sidebar')
          @yield('content')
        </div>

      </div>
    </main>
        @include('inc.footer')
    {{-- <script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script> --}}
  </div>

     {{-- <div class="wrapper">
            <header>
                @yield('header')
            </header>
            <main>
                @include('inc.messages')
                @yield('main')
            </main>--}}
            {{-- <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script> --}}
           {{--  <script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
            <script>
                CKEDITOR.replace( 'article-ckeditor' );
            </script>
        </div> --}}


    {{-- <div class="wrapper">
        <header>
            @yield('header')
        </header>
        <main>
          <div class="container">
            @include('inc.navigation')
            @include('inc.messages')
            @yield('main')
          </div>
        </main>--}}
        {{-- <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script> --}}
       {{--  <script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
    </div>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    </div> --}}
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>

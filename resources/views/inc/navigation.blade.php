<nav class="navbar navbar-expand-lg navbar-inverse bg-inverse">
  <a class="navbar-brand" href="#"><img class="logo block" src="assets/pictures/logo-webler.png" alt="Logo von dem webler.cafe">
</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">FEED <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">FRONTEND</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">BACKEND</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">DESIGN</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         	&equiv; MENÜ
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form>
      <input class="search-input dark-backg" type="text" placeholder="Suche" aria-label="Search">
      <button class="search-button dark-backg" type="submit">Suchen</button>
    </form>
       <form class="form-inline my-2 my-lg-0 dark-backg">
        <input class="search-input" type="search" placeholder="Gebe ein Suchwort ein" aria-label="Search">
        <button class="search-button" type="submit">Suche</button>
      </form>
       <ul class=" navbar-dark bg-dark ml-auto">
      <!-- Authentication Links -->
        <div class="space-between">
          @guest
            <li class="nav-item dark-backg">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
              <li class="nav-item dark-backg">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
            @endif
          @else
        </div>
          <li class="nav-item dropdown dark-backg">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="profile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->username }} <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dark-backg" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="articles/create">Artikel schreiben</a>
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Ausloggen') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </div>
          </li>
        @endguest
      </ul>
  </div>
</nav>

{{--
<nav class="navbar navbar-expand-lg navbar-inverse bg-inverse">
  <div class="container">
    <div class="collapse navbar-collapse space-between" id="navbarSupportedContent">
      <img class="logo block" src="assets/pictures/logo-webler.png" alt="Logo von dem webler.cafe">
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Gebe ein Suchwort ein" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Suche</button>
      </form>
      <ul>
        <li>Menü</li>
      </ul>
      <ul class=" navbar-dark bg-dark ml-auto">
      <!-- Authentication Links -->
        <div class="space-between">
          @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
            @endif
          @else
        </div>
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="profile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->username }} <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="articles/create">Artikel schreiben</a>
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Ausloggen') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </div>
          </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-inverse">
  <div class="container wrapper">
    <div class="column" id="navbarSupportedContent">
      <ul class="navbar navbar-dark space-around">
        {{-- <li><a href="/">Startseite</a></li> --}}
      {{--  <li class="nav-item dropdown main-nav-li"><a class="text1-2rem bold" href="pages/feed/">FEED</a></li>
        <li class="nav-item dropdown main-nav-li"><a class="text1-2rem bold" href="frontend/">FRONTEND</a></li>
        <li class="nav-item dropdown main-nav-li"><a class="text1-2rem bold" href="backend/">BACKEND</a></li>
        <li class="nav-item dropdown main-nav-li"><a class="text1-2rem bold" href="design/">DESIGN</a></li>
      </ul>
  </div>
  </div>
</nav> --}}

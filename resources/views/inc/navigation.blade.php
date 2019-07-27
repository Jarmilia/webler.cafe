<nav class="navbar navbar-expand-lg">
  <div>
    <a class="navbar-brand" href="{{ url('/') }}"><img class="logo block" src="{{ asset('assets/pictures/logo-webler.png') }}" alt="Logo von dem webler.cafe"></a>
  </div>
  <div class="collapse navbar-collapse " id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link hover-gold underline-effect Sofia-Pro" href="{{ url('/articles') }}">Feed <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link hover-gold underline-effect Sofia-Pro" href="{{ url('/articles') }}">Frontend</a>
      </li>
      <li class="nav-item">
        <a class="nav-link hover-gold underline-effect Sofia-Pro" href="{{ url('/articles') }}">Backend</a>
      </li>
      <li class="nav-item">
        <a class="nav-link hover-gold underline-effect Sofia-Pro" href="{{ url('/articles') }}">Design</a>
      </li>
    </ul>
  </div>

  <div class="space-between">
    <div class="container h-100">
      <div class="d-flex justify-content-center h-100">
        <div class="searchbar">
          <input class="search_input" type="text" name="" style="cursor:text" placeholder="Suche in Hashtags # ...">
          <a href="#" class="search_icon hover-gold hover-nounderline"><i class="fas fa-search hover-gold"></i></a>
        </div>
      </div>
    </div>
    <div>
      <ul class="navbar-dark bg-dark ml-auto">
    <!-- Authentication Links -->
        <div class="space-between align-center">
          @guest
            <li class="nav-item dark-backg">
              <a class="nav-link hover-gold underline-effect Sofia-Pro" href="{{ route('login') }}">{{ __('Einloggen') }}</a>
            </li>
            @if (Route::has('register'))
              <li class="nav-item dark-backg">
                <a class="nav-link hover-gold underline-effect Sofia-Pro" href="{{ route('register') }}">{{ __('Registrieren') }}</a>
              </li>
            @endif
          @else
        </div>
        <li class="dark-backg text-creme name-li">
        {{-- TODO: --}}
          <a id="navbarDropdown" class="nav-link  hover-gold Sofia-Pro" href="{{ url('users/profile') }}"href="users/profile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->username }} <span class="caret"></span>
          </a>
        {{-- End TODO --}}
          <div class="dark-backg text-creme navi-dropdown" aria-labelledby="navbarDropdown">
            <a class="nav-link hover-gold Sofia-Pro text-left" href="{{ url('articles/create') }}" >Artikel schreiben</a>
            {{-- <a class="nav-link hover-gold Sofia-Pro" href="users/profile">Artikel schreiben</a> --}}
            <a class="nav-link hover-gold Sofia-Pro text-left" href="{{ route('logout') }}"
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

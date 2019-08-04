<nav class="navbar navbar-expand-lg webler-nav">
<div class="webler-nav-1st-div">
{{-- Logo --}}
  <div>
    <a class="navbar-brand" href="{{ url('/') }}"><img class="logo block" src="{{ asset('assets/pictures/logo-webler.png') }}" alt="Logo von dem webler.cafe"></a>
  </div>
{{-- Navbar --}}
  <div class="navbar">
    <ul class="navbar-nav space-around">
      <li class="nav-item">
        <a class="nav-link hover-gold underline-effect Sofia-Pro" href="{{ url('articles') }}">Feed <span class="sr-only">(current)</span></a>
      </li>      
      <li class="nav-item tablet-li">
        <a class="nav-link hover-gold underline-effect Sofia-Pro" href="{{ url('articles') }}">Frontend</a>
      </li>
      <li class="nav-item tablet-li">
        <a class="nav-link hover-gold underline-effect Sofia-Pro" href="{{ url('articles') }}">Backend</a>
      </li>
      <li class="nav-item tablet-li">
        <a class="nav-link hover-gold underline-effect Sofia-Pro" href="{{ url('articles') }}">Design</a>
      </li>      
    </ul>
  </div>
</div>
<div class="webler-nav-2nd-div"> 
{{-- Search --}}
  <div class="container search-container">
    <div class="h-100">
      <form action="{{ url('/articles/search') }}" method="get">
        <div class="searchbar">
          <input class="search_input" type="search" name="search" placeholder="Suche in Hashtags # ...">
          <span class="search_icon hover-gold hover-nounderline">
            <button type="submit" class="dark-backg text-creme noborder"><i class="fas fa-search hover-gold"></i></button>
          </span>
        </div>
      </form>
    </div>
  </div>
{{-- Login, Register / Usermenue --}}
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
        <a id="navbarDropdown" class="nav-link  hover-gold Sofia-Pro" href="{{ url('dashboard') }}">
          {{ Auth::user()->username }} <span class="caret"></span>
        </a>
        <div class="dark-backg text-creme navi-dropdown" aria-labelledby="navbarDropdown">
          <a class="nav-link hover-gold Sofia-Pro text-left" href="{{ url('articles/create') }}" >Artikel schreiben</a>
          <a class="nav-link hover-gold Sofia-Pro text-left" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
              {{ __('Ausloggen') }}
          </a>
          <form id="logout-form" class="nodisplay" action="{{ route('logout') }}" method="POST" >
              @csrf
          </form>
        </div>
      </li>
      @endguest
    </ul>
  </div>
</div>
</nav>

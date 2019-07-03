
 {{-- <nav calss="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#">
                <span class="sr-only"> Toggle navigation </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">{{config('app.name', 'webler.cafe')}}</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar">--}}
            {{-- <ul class="nav navbar-nav">
                <li><a href="/">Startseite</a></li>
                <li><a href="/frontend">Frontend</a></li>
                <li><a href="/backend">Backend</a></li>
                <li><a href="/os">Betriebssysteme</a></li>
                <li><a href="/editors">Editoren</a></li>
                <li><a href="/har dware">Hardware</a></li>
                <li><a href="/challenges">Challenges</a></li>
                <li><a href="/fun">Unterhaltung</a></li>
            </ul> --}}
            {{-- <ul class="nav navbar-nav navbar-right">
                <li><a href="/articles/create">Artikel verfassen</li>
            </ul>
        </div>
    </div>
</nav> --}}
<nav class="navbar navbar-expand-lg navbar-inverse bg-inverse">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
      {{ config('app.name', 'webler.cafe') }}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        {{-- <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li> --}}
        {{-- <li class="nav-item">
          <a class="nav-link" href="#">Shop</a>
        </li> --}}
        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> --}}
        {{-- <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li> --}}
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Suche</button>
      </form>
      <ul class="navbar-nav ml-auto">
      <!-- Authentication Links -->
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
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->username }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/articles/create">Artikel schreiben</a>
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
    <div class="container">
        {{-- <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'webler.cafe') }}
        </a> --}}
        {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button> --}}

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            {{-- <ul class="navbar-nav mr-auto">

            </ul> --}}
            <ul class="nav navbar-nav">
                {{-- <li><a href="/">Startseite</a></li> --}}
                <li class="nav-item dropdown main-nav-li"><a href="frontend/">Frontend</a></li>
                <li class="nav-item dropdown main-nav-li"><a href="backend/">Backend</a></li>
                <li class="nav-item dropdown main-nav-li"><a href="design/">Design</a></li>
                <li class="nav-item dropdown main-nav-li">
                  <a class="nav-link dropdown-toggle padding0" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Weiteres
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/os">Betriebssysteme</a>
                    <a class="dropdown-item" href="/editors">Editoren</a>
                    <a class="dropdown-item" href="/har dware">Hardware</a>
                    <a class="dropdown-item" href="/editors">Editoren</a>
                    <a class="dropdown-item"  href="/fun">Unterhaltung</a><
                    {{-- <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a> --}}
                  </div>
                    {{-- <li><a href="/os">Betriebssysteme</a></li>
                    <li><a href="/editors">Editoren</a></li>
                    <li><a href="/har dware">Hardware</a></li>
                    <li><a href="/challenges">Challenges</a></li> --}}
                </li>
            </ul>
            <!-- Right Side Of Navbar -->
            {{-- <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
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
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul> --}}
        </div>
    </div>
</nav>

{{-- <div class="menueDiv" id="menueId">
    <ul>
        <li class="pointer mainLi bold"><a href="/frontend" class="underline-effect inline-block">FRONTEND</a>
            <ul class="firstUl">
                <li class="pointer bold"><a href="/frontend/design" class="underline-effect inline-block">Design</a>
                    <ul class="secondUl">
                        <li class="pointer light"><a href="/frontend/design/design-tools" class="underline-effect inline-block">Design-tools</a></li>
                        <li class="pointer light"><a href="/frontend/design/graphic-ressources" class="underline-effect inline-block">Graphic Resources</a></li>
                        <li class="pointer light"><a href="/frontend/design/inspiration" class="underline-effect inline-block">Inspiration</a></li>
                    </ul>
                </li>
                <li class="pointer bold"><a href="/frontend/lang" class="underline-effect inline-block">Sprachen</a>
                    <ul class="secondUl">
                        <li class="pointer light"><a href="/frontend/langhtml5" class="underline-effect inline-block">HTML5</a></li>
                        <li class="pointer light"><a href="/frontend/langcss3" class="underline-effect inline-block">CSS3</a></li>
                        <li class="pointer light"><a href="/frontend/langjs" class="underline-effect inline-block">JavaScript</a></li>
                        <li class="pointer light"><a href="/frontend/langts" class="underline-effect inline-block">TypeScript</a></li>
                    </ul>
                </li>
                <li class="pointer bold"><a href="/frontend/frameworks" class="underline-effect inline-block">Frameworks</a>
                    <ul class="secondUl">
                        <li class="pointer light"><a href="/frontend/frameworks/bootstrap" class="underline-effect inline-block">Bootstrap</a></li>
                        <li class="pointer light"><a href="/frontend/frameworks/angular" class="underline-effect inline-block">Angular</a></li>
                        <li class="pointer light"><a href="/frontend/frameworks/ionic" class="underline-effect inline-block">Ionic</a></li>
                        <li class="pointer light"><a href="/frontend/frameworks/vue" class="underline-effect inline-block">Vue</a></li>
                        <li class="pointer light"><a href="/frontend/frameworks/react" class="underline-effect inline-block">React</a></li>
                    </ul>
                </li>
                <li class="pointer bold"><a href="/frontend/marketing" class="underline-effect inline-block">Marketing</a></li>
                <li class="pointer bold"><a href="/frontend/marketing/seo" class="underline-effect inline-block">SEO</a></li>
            </ul>
        </li>
        <li class="pointer mainLi bold"><a href="/backend" class="underline-effect inline-block">BACKEND</a>
        <ul class="firstUl">
                <li class="pointer bold"><a href="/backend/db" class="underline-effect inline-block">Datenbanken</a>
                    <ul class="secondUl">
                        <li class="pointer light"><a href="/backend/db/clients" class="underline-effect inline-block">Clients</a></li>
                        <li class="pointer light"><a href="/backend/db/mysql" class="underline-effect inline-block">MySql</a></li>
                    </ul>
                </li>
                <li class="pointer bold"><a href="/backend/languages" class="underline-effect inline-block">Sprachen</a>
                    <ul class="secondUl">
                        <li class="pointer light"><a href="/backend/languages/php" class="underline-effect inline-block">PHP</a></li>
                        <li class="pointer light"><a href="/backend/languages/java" class="underline-effect inline-block">Java</a></li>
                    </ul>
                </li>
                <li class="pointer bold"><a href="/backend/frameworks" class="underline-effect inline-block">Frameworks</a>
                    <ul class="secondUl">
                        <li class="pointer light"><a href="/backend/frameworks/laravel" class="underline-effect inline-block">Laravel</a></li>
                        <li class="pointer light"><a href="/backend/frameworks/python" class="underline-effect inline-block">Python</a></li>
                        <li class="pointer light"><a href="/backend/frameworks/nodejs" class="underline-effect inline-block">Node.js</a></li>
                    </ul>
                </li>
                <li class="pointer bold"><a href="/backend/cmd" class="underline-effect inline-block">Command-line</a></li>
                <li class="pointer bold"><a href="/backend/git" class="underline-effect inline-block">GIT-Repository</a></li>
                <li class="pointer bold"><a href="/backend/server" class="underline-effect inline-block">Server</a></a>
            </ul>
        </li>
        <li class="pointer mainLi bold"><a href="/os" class="underline-effect inline-block">OPERATING SYSTEMS</a></li>
        <li class="pointer mainLi bold"><a href="/editors" class="underline-effect inline-block">EDITORS</a></li>
        <li class="pointer mainLi bold"><a href="/har dware" class="underline-effect inline-block">HARDWARE</a></li>
        <li class="pointer mainLi bold"><a href="/challenges" class="underline-effect inline-block">CHALLENGES</a></li>
    </ul>
</div> --}}


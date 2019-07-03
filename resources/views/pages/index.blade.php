@extends('layouts.app')

@section('content')
<div class="column">
    <div class="welcome center column">
        <div class="logoDiv space-between">
            <img class="logo" src="assets/pictures/logoWeb.png" alt="Logo von dem webler.cafe">
            <!-- <a href="about.php">About</a> -->
        </div>
         {{-- @yield('inc.navigation') --}}
        <div class="center FroBack">
            <task-list tasks="todos"></task-list>
            <ul class="center column">
                <li class="block"><a href="/design">Design</a></li>
                <li class="block"><a href="/frontend">Frontend</a></li>
                <li class="block"><a href="/backend">Backend</a></li>
                <li class="block"><a href="/fun">Fun</a></li>
            </ul>
        </div>
        <div class="webTalks">
            <span class="VT323">web-talks</span><span class="block CutiveMono fontSize1-3rem">in</span><span class="RugeBoogie">online-café</span>
        </div>
    </div>
    <div class="cinema">
        <img class="block" src="assets/cinemagraphs/cinema1.gif" alt="Cinemagraph von fließendem Kaffee aus der Kaffeemaschine in zwei messing Becher">
    </div>
</div>
@endsection

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>webler.cafe</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Ruge+Boogie" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cutive+Mono" rel="stylesheet">

        <!-- Styles -->
        <link href="css/main.css" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper">
            <header>
            <?php require_once 'partials/menue.php'; ?>
            <div class="relative width100">
                    <nav class="floating-navi row">
                        <ul class="space-between">
                            <li class="pointer"><a  id="menueButtonId">Menu</a></li>
                            <li class="#">
                                <form class="justify-center form-search" action="#" method="get">
                                    <!-- <input class="search"  type="text" name="search" maxlength="120" placeholder="Search" autocomplete="off"> -->
                                    <button class="pointer searchIcon" type="submit">&#8981;</button>

                                </form>
                                <!-- SEARCH ENTITIES: &telrec; &#x02315; &#8981; -->
                            </li>
                            <li class="#"><a href="login.php">Login</a></li>
                            <li class="#"><a href="register.php">Register</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            <main>
                <div class="column">
                    <div class="welcome center column">
                        <div class="logoDiv space-between">
                            <img class="logo" src="assets/pictures/logoWeb.png" alt="Logo von dem webler.cafe">
                            <!-- <a href="about.php">About</a> -->
                        </div>
                        <div class="center FroBack">
                            <ul class="center column">
                                <li class="block"><a href="design.php">Design</a></li>
                                <li class="block"><a href="frontend.php">Frontend</a></li>
                                <li class="block"><a href="backend.php">Backend</a></li>
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
            </main>
        </div>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
                            SCRIPTS
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<?php require_once 'partials/scripts.php';  ?>
    </body>
</html>

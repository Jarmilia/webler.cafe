<?php
  require_once 'auth_frontend.php';
?>
<!DOCTYPE html>
<html lang="de">
  <head>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>webler.cafe</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Ruge+Boogie" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cutive+Mono" rel="stylesheet">
        <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Clicker+Script" rel="stylesheet">-->
        <!-- <link rel="stylesheet" href="css/style.css"> -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">  -->

        <!-- Styles -->
        <link href="css/main.css" rel="stylesheet">
    </head>
  <body>

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

  <!--  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
                          MAIN
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  -->
    <main class="#">
    <h1><span class="headline-one-register">Choose a theme:</span></h1>
      <!-- <button id="backToTopBtn" title="Zum Seitenanfang"></button> -->
      <div class="row space-between">
         <ul class="oddUl">
            <li class="themeFE">Theme</li>
            <li class="themeFE">Theme</li>
            <li class="themeFE">Theme</li>
            <li class="themeFE">Theme</li>
        </ul>
        <ul class="evenUl">
            <li class="themeFE">Theme</li>
            <li class="themeFE">Theme</li>
            <li class="themeFE">Theme</li>
            <li class="themeFE">Theme</li>
        </ul>
        <ul class="oddUl">
            <li class="themeFE">Theme</li>
            <li class="themeFE">Theme</li>
            <li class="themeFE">Theme</li>
            <li class="themeFE">Theme</li>
        </ul>
        <ul class="evenUl">
            <li class="themeFE">Theme</li>
            <li class="themeFE">Theme</li>
            <li class="themeFE">Theme</li>
            <li class="themeFE">Theme</li>
        </ul>

      </div>
</main>
</div>
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
                            SCRIPTS
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<?php require_once 'partials/scripts.php';  ?>
  </body>
</html>

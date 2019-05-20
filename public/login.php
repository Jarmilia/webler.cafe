
<!doctype html>
<html lang="de">
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
 <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
                              HEADER
 - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
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
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
                            MAIN
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  -->
  <main class="justify-center column center">
  <div class="height3"></div>
        <h1><span class="headline-one-register">Login in your account:</span></h1>
        <form method="post">
          <div class="register-name space-between">
            <label for="username"></label>
            <input class="register-input" required="required" id="username" type="text" name="username" placeholder="#" value="* username ">
          </div>
          <div class="register-name space-between">
            <label for="password"></label>
            <input class="register-input" id="password" name="password" type="password" placeholder="* password">
          </div>
          <!-- inline css, wegen Konflikt mit Bootstrap: -->
          <input type="submit" class="submitButton pointer" value="LOGIN">
        </form>
    </div>
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
                            SCRIPTS
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<?php require_once 'partials/scripts.php';  ?>
</div>
  </body>
</html>

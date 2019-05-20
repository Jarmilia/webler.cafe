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
                <div class="relative width100">
                    <nav class="floating-navi row">
                        <ul class="space-between">
                            <li class="active"><a href="menue.php">Menü</a></li>
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
      <!-- <button id="backToTopBtn" title="Zum Seitenanfang"></button> -->

        <div>
          <span class="text1-6rem"> Hallo "username",<br>
          willkommen bei <i>webler.café</i></span>
          <div class="height2"></div>
          <p class="text1-2rem">
            Du kannst in oberem Menü auswählen, was du heute machen möchtest. <br>
            Im <a class="font-black bold" href="profile.php">Profil</a> kannst du dein Profil anpassen. <br>
            <!-- Text für den Admin: -->
           Unter <a class="font-black bold" href="edit_users.php">Benutzerverwaltung</a> kannst du neue Nutzer manuell anlegen, <br>
            oder existierende Benutzerprofile bearbeiten und löschen. <br>
            Unter <a class="font-black bold" href="edit_articles.php">Artikel</a> kannst du die Artikel anschauen und verwalten.
            Du bist der Moderator dieser Webseite. Du kannst unter <a class="font-black bold" href="edit_articles.php">Artikel</a> die Artikel der Seite verwalten.
            </p>
        </div>
        <div class="height3"></div>
    </div>

</main>
</div>
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
                            SCRIPTS
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<?php require_once 'partials/scripts.php';  ?>
  </body>
</html>

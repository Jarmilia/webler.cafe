
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
                            <li><a  id="menueButtonId">Menu</a></li>
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
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
      <main class="justify-center column center">
      <!-- <button id="backToTopBtn" title="Zum Seitenanfang"></button> -->
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
                        REGISTRIER-FORMULAR
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
  <div class="height3"></div>
        <h1><span class="headline-one-register">Register a new account:</span></h1>
        <div class="height2"></div>
        <form id="register-form" method="post">
          <div class="form-block">
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
              RADIO-BUTTONS
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
          <div class="column register-form-radios">
            <div class="height2">
                <input type="radio" class="#" id="customRadio2" name="gender" value="female"> Female
                <label class="radio-label space-between" for="customRadio2"></label>
            </div>
            <div class="height2">
                <input type="radio" class="#" id="customRadio1" name="gender" value="male"> Male
                <label class="radio-label space-between" for="customRadio1"></label>
            </div>
            <div class="height2">
                <input type="radio" class="#" id="customRadio3" name="gender" value="other"> Other
                <label class="radio-label space-between" for="customRadio1"></label>
            </div>
          </div>
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
              EINGABE-FELDER: BENUTZERNAME, E-Mail
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
          <div class="register-name space-between">
            <label for="username"></label>
                <input class="register-input" id="username" type="text" name="username" placeholder="* Username" value="* Username" >
          </div>
          <div class="register-name space-between">
              <label for="register-email">  </label>
                <input id="register-email" class="register-input" type="email" name="register-email" placeholder="* E-Mail:" value="* Email">
          </div>
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
              EINGABE-FELDER: PASSOWORT
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
          <div class="register-name column">
            <label for="password">
                <input class="register-input text-input" name="password" id="password" type="password" placeholder="* Password">
            </label>
            <label for="password-repeat">
                <input  id="password-repeat" class="register-input form-control" name="password-repeat" type="password" placeholder="* Password repeat">
            </label>
          </div>
          <div class="height2"></div>

  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
             AGB's
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  -->
        <div class="register-checkboxes-interessts flex-row margin-top-bottom">
          <label for="agb">
            <input type="checkbox" name="agb" id="agb" > * Terms of Service
          </label>
        </div>
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
            ABSCHICKEN BUTTON
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
          <button type="submit" class="submitButton pointer">REGISTER</button>
        </div>
      </form>
      <ul id="register-ul">
      </ul>
      <div class="height8"></div>

  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
                              SCRIPTS
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<?php require_once 'partials/scripts.php';  ?>
</div>
	</body>
</html>



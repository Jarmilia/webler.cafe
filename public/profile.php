<?php
  require_once 'auth.php';
	require_once '../db/dbConnectionCFM.php';

    $userId = $_SESSION['user_id'];
    $userName = $_SESSION['username'];
    $sql = "SELECT email FROM cfmusers WHERE username = '" . $userName . "'";
    $db = mysqli_query($dbConnect, $sql);
    $email = mysqli_fetch_assoc($db)['email'];	 
   
    if (!empty($_POST))
    {
    // - Escaping & Validierung
      $email            = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
      $password         = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
      $passwordRepeat   = filter_var($_POST['password-repeat'], FILTER_SANITIZE_STRING);

      $errors = [];

      if (!$email)
      {
        $errors[] = 'E-Mail Format falsch';
      }

      if (!empty($password) || !empty($passwordRepeat))
      {
        $password = $password;
        $passwordRepeat = $passwordRepeat;

        if (strlen($password) < 6) 
        {
          $errors[] = 'Das Passwort muss aus mind. 6 Zeichen bestehen.';   
        }

        if ($password !== $passwordRepeat)
        {
          $errors[] = 'Die Passwörter stimmen nicht überein.';
        }
        //Wenn alles ok eingegeben, User in der DB updaten
        if (empty($errors))
        {
          mysqli_query($dbConnect, "UPDATE cfmusers SET email = '" . $email . "', 
                password = '" . sha1($password) . "' WHERE username = '" . $userName . "'") or die(mysqli_error($dbConnect));
        }
      }
      else
      {
        if (empty($errors))
        {
          mysqli_query($dbConnect, "UPDATE cfmusers SET email = '" . $email . "' WHERE username = '" . $userName . "'");
        }
      }
    }    
?>
<!doctype html>
<html lang="de">
  <head>
<?php require_once '../partials/head.php'; ?>
    <title>Profil bearbeiten</title>
  </head>
  <body>
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
                           BACKEND NAVIGATION
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --> 
<?php if (isset($_SESSION['user_id'])): ?>
    <div class="sidebar-black">          
<?php require_once '../partials/sidebar-black.php';  ?>         
    </div>
<?php endif ?> 
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
                                HEADER
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->  
  <header class="header-backend">  
<?php require_once '../partials/header-black.php'; ?>
  </header>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
                           Main
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->  
  	<main class="container">
      <div class="height8"></div>
        <div class="justify-center">
        <div>
        	<h1><span class="headline-one-register">Profil bearbeiten</span></h1>
          <div class="height2"></div>
      <!-- Errors Ausgeben -->
        <?php if (!empty($errors)): ?>
          <?php foreach ($errors as $error): ?>
              <div class="well">
                <p class="alert alert-warning"><?= $error ?></p>
              </div>
          <?php endforeach ?>
        <?php endif ?>          
        	<form method="post">
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
              EINGABE-FELDER: BENUTZERNAME, E-Mail
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --> 
            <div class="register-name space-between"> 
              <label for="username"></label>
                  <input class="register-input" id="username" type="text" name="username" placeholder="* Benutzername:" readonly value="<?= ucfirst($userName ?? '') ?>" >
            </div>        
            <div class="register-name space-between">   
                <label for="email"></label> 
                  <input id="email" class="register-input" type="email" name="email" placeholder="* E-Mail:" value="<?= $email ?>">
            </div>        
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
              EINGABE-FELDER: PASSOWORT
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --> 
              <div class="register-name space-between"> 
                <label for="password">
                    <input class="register-input text-input" name="password" id="password" type="password" placeholder="* Passwort">
                </label>
                <label for="password-repeat">
                    <input  id="password-repeat" class="register-input form-control" name="password-repeat" type="password" placeholder="* Passwort wiederholen">
                </label>
              </div>
              <div class="height2"></div>
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
            ABSCHICKEN BUTTON
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->                                              
              <button type="submit" class="register-submit pointer">Abschicken</button>
        	  </form>
          </div>
        </div>
      <div class="height4"></div>
	</main>
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
                                FOOTER
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<?php require_once '../partials/footer.php';  ?>
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
                            SCRIPTS
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<?php require_once '../partials/scripts.php';  ?>
  </body>
</html>
<?php
  require_once 'auth.php';
	require_once '../db/dbConnectionCFM.php';
// Rechte überprüfen:
    if (!hasPermission('edit_users'))
    {
      header('Location: permissions_denied.php');
    }
    // Escaping, Validierung, Error-Handling
    if (!empty($_POST))
    { 
      $username         = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING)) ?? '';

      $password         = filter_var($_POST['password'], FILTER_SANITIZE_STRING) ?? '';

      $passwordRepeat   = filter_var($_POST['password-repeat'], FILTER_SANITIZE_STRING) ?? '';

      $email            = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ?? '';

      $errors = [];

      if (isset($_POST['gender']))
      {
        $gender = filter_var($_POST['gender'], FILTER_SANITIZE_STRING) ?? '';
      }
      else
      {
        $gender = '';
      }

      if (isset($_POST['gender']))
        {
          if (strlen($username) > 1)
          {
            if ($email) 
            {
              if (strlen($password) > 5)
              {
                if ($password === $passwordRepeat)
                {
                  //Passwörter verschlüsseln:
                    $password = sha1($password);
                   // Registrieren als user
                    $sql = "INSERT INTO 
                                  cfmusers (group_id, username, email, password) 
                                    VALUES 
                                      (3,'" . $username. "', '" . $email . "', '" . $password . "')";

                      if (!mysqli_query($dbConnect, $sql))
                      {
                        die(mysqli_error($dbConnect));
                      }
                }
                else
                {
                  $errors[] = "Passwörter stimmen nicht überein.";              
                }
              }
              else
              {
                $errors[] = "Das Passwort muss mind. 6 Zeichen lang sein.";
              }
            }
            else
            {
              $errors[] = "Email Format ist falsch"; 
            }
          }
          else 
          {
            $errors[] = "Benutzername muss mind. 2 Zeichen haben"; 
          }
        }
        else
        {
          $errors[] = "Bitte wählen Sie ein Geschlecht aus.";
        } 
      }

      $groupsObj = mysqli_query($dbConnect, "SELECT id, role FROM cfmgroups");
      
      $groups = [];
      while ($row = mysqli_fetch_assoc($groupsObj)) 
      {
        $groups[] = $row;
      }
?>
<!doctype html>
<html lang="de">
  <head>
    <title>Cook For Me Neuen Benutzer Anlegen</title>
<?php require_once '../partials/head.php'; ?>
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
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
                                MAIN
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  -->
	<main class="container">
    <div class="height6"></div>
  	<span class="block article-h-one">Neuen Benutzer manuell anlegen</span>
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
    <div class="form-block">
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
              RADIO-BUTTONS
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --> 
    <div class="space-between register-form-radios">   
             <!-- Was asugewählt wurde soll im Formular bleiben -->
      <input type="radio" id="customRadio2" name="gender" value="female" <?php if(!empty($_POST) && $gender === 'female') echo 'checked'?> > Frau
      <label class="radio-label space-between" for="customRadio2"></label>
      <input type="radio" id="customRadio1" name="gender" value="male" <?php if(!empty($_POST) && $gender === 'male') echo 'checked'?> > Herr
       <label class="radio-label space-between" for="customRadio1"></label>            
    </div>
	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
              EINGABE-FELDER: BENUTZERNAME, E-Mail
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --> 
    <div class="register-name space-between"> 
      <label for="username"></label>
          <input class="register-input" id="username" type="text" name="username" placeholder="* Benutzername:" value="<?= $username ?? '' ?>" >
    </div>        
    <div class="register-name space-between">   
        <label for="email">  </label> 
          <input id="email" class="register-input" type="email" name="email" placeholder="* E-Mail:" value="<?= $email ?? '' ?>">
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
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
                  EINGABE-FELDER: ROLLE, CHECKBOX
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --> 
    <div class="register-name space-between">
      <label for="group_id"></label>
      <select class="register-select pointer" name="group_id" id="group_id">
<?php foreach ($groups as $group): ?>
        <option value="<?= $group['id'] ?>"><?= $group['role'] ?></option>
<?php endforeach ?>
      </select>
    </div>
    <div class="form-check">
      <input name="activated" class="form-check-input" type="checkbox" id="activated" checked>
      <label class="form-check-label" for="activated">Aktiviert</label>
    </div>
    <div class="height2"></div>
    <input type="hidden" name="create-user">
		<input type="submit" class="btn btn-dark" style="padding: 0.4rem 0.8rem;" value="Registrieren">
  </div>
	</form>
      <div class="margin-bottom"></div>
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
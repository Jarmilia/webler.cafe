<?php
  require_once '../db/dbConnectionCFM.php';

  $errors = [];

  if(isset($_GET['vkey']))
  {
  	//Verifizierung
  	$vkey = $_GET['vkey'];
  	$sql = "SELECT auth_code, activated FROM cfmusers WHERE activated = 0 AND auth_code = '" . $vkey . "'";
  	$resultObj = mysqli_query($dbConnect, $sql);

  	if (mysqli_num_rows($resultObj))
  	{
  		// Email Validierung
  		$update = mysqli_query($dbConnect, "UPDATE cfmusers SET activated = 1 WHERE auth_code = '" . $vkey . "'");
  		if($update)
  		{
        // weiterleiten zum login
        header('Location: login.php');
  		}
  		else
  		{
  			echo mysqli_error($dbConnect);
  		}
  	} 
  	else
  	{
  		$errors[] = "bereits verifiziert, oder ungültig.";
  	}
  }
  else
  {
  	$errors[] = "Ein Verifizierungslink wurde an die eingegebene E-Mail Adresse geschickt. Bitte klicke drauf um deine Anmeldung abzuschließen.";
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Danke für deine Registrierung bei cook-for.me!</title>
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
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
                             HEADER
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->    
  <header class="header-backend">  
<?php require_once '../partials/header-black.php'; ?>
  </header>
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
                            MAIN
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
  	<main class="container">
  		<div class="height6"></div>
      <!-- Errors Ausgeben -->
      <?php if (!empty($errors)): ?>
        <?php foreach ($errors as $error): ?>
          <div class="well">
            <p class="alert alert-warning"><?= $error ?></p>
          </div>
        <?php endforeach ?>
      <?php endif ?>
        <div class="height6"></div>
    </main>
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
                            FOOTER
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<?php require_once '../partials/footer.php'; ?>
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
                            SCRIPTS
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<?php require_once '../partials/scripts.php';  ?>
</html>
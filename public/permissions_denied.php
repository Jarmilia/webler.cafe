<?php
    require_once 'auth.php';
    require_once '../db/dbConnectionCFM.php';

?>
<!doctype html>
<html lang="en">
  <head>
<?php require_once '../partials/head.php'; ?>
    <title>Keine zureichende Berechtigung!</title>
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
    <div class="height3"></div>
  	<span class="article-h-one">Warnung!</span>
    <div class="height3"></div>
    <!-- Wenn User versucht illegal Seiten zu erreichen -->
  	<span>Du hast nicht die notwendigen Rechte, um diesen Bereich zu betreten.</span>
    <span>Bitte <a href="login.php">logge dich ein</a> oder wende dich an den Admin: admi.cfm@gmail.com</span>
    <div class="height5"></div>
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
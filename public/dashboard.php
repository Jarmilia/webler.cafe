<?php
  require_once 'auth.php';
	require_once  '../db/dbConnectionCFM.php';

  $username =  $_SESSION['username'] ?? '';
?>
<!doctype html>
<html lang="de">
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
                    HEAD
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
  <head>
    <title>Cook For Me Dashboard</title> 
<?php require_once '../partials/head.php'; ?>
  </head>
  <body>
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - -
                             BACKEND NAVIGATION
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - --> 
<?php if (isset($_SESSION['user_id'])): ?>
      <div class="sidebar-black">          
<?php require_once '../partials/sidebar-black.php';  ?>         
      </div>
<?php endif ?> 
        
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
                    HEADER
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
  <header class="header-backend">  
    <?php require_once '../partials/header-black.php'; ?>
  </header>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
                    MAIN
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
  <main class="container">
    <div class="height2"></div>    
    <div>
     <div class="height6"></div>   
        <div>          
          <span class="text1-6rem"> Hallo <?= $username ?>,<br> 
          willkommen bei <i>cook-for.me!</i></span>
          <div class="height2"></div>
          <p class="text1-2rem">
            Du kannst in oberem Menü auswählen, was du heute machen möchtest. <br>
            Du befindest dich jetzt in deinem <a class="font-black bold" href="dashboard.php">Dashboard</a>. <br>
            Im <a class="font-black bold" href="profile.php">Profil</a> kannst du dein Profil anpassen. <br> 
            <!-- Text für den Admin: -->
<?php if (isset($_SESSION['group_id']) && $_SESSION['group_id'] == 1): ?>
            Du bist der Admin dieser Webseite. Unter <a class="font-black bold" href="edit_users.php">Benutzerverwaltung</a> kannst du neue Nutzer manuell anlegen, <br>
            oder existierende Benutzerprofile bearbeiten und löschen. <br>
            Unter <a class="font-black bold" href="edit_articles.php">Artikel</a> kannst du die Artikel anschauen und verwalten.
<?php endif ?>
            <!-- Text für den Moderator: -->
<?php if (isset($_SESSION['group_id']) && $_SESSION['group_id'] == 2): ?>
            Du bist der Moderator dieser Webseite. Du kannst unter <a class="font-black bold" href="edit_articles.php">Artikel</a> die Artikel der Seite verwalten.       
<?php endif ?>
            </p>
        </div>  
        <div class="height3"></div>      
    </div>     
  </main>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - -
                    FOOTER
- - - - - - - - - - - - - - - - - - - - - - - - - -  -->
<?php require_once '../partials/footer.php'; ?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - -
                        SCRIPTS
- - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<?php require_once '../partials/scripts.php';  ?>
  </body>
</html>
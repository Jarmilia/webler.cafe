<?php
  require_once 'auth.php';
  require_once '../db/dbConnectionCFM.php';

  // Rechte überprüfen:
  if (!hasPermission('edit_users'))
  {
    header('Location: permissions_denied.php');
  } 

  // User anlegen
  if (!empty($_POST))
  {
    if (isset($_POST['create-user']))
    {
      $username         = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
      $email            = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
      $password         = sha1(filter_var($_POST['password'], FILTER_SANITIZE_STRING));
      $passwordRepeat   = sha1(filter_var($_POST['password-repeat'], FILTER_SANITIZE_STRING));
      $activated        = (isset($_POST['activated'])) ? 1 : 0;
      $group_id         = filter_var($_POST['group_id'], FILTER_VALIDATE_INT);

      $sql = "INSERT INTO cfmusers (username, 
                                  email, 
                                  password, 
                                  activated, 
                                  group_id) 
                  VALUES  ('" . $username . "', 
                           '" . $email . "', 
                           '" . $password . "', 
                           " . $activated . ", 
                           " . $group_id . ")";
                       
      mysqli_query($dbConnect, $sql) or die(mysqli_error($dbConnect));
    }
  }

  // User löschen
  if (!empty($_GET))
  {
    if (isset($_GET['delete_user_id']))
    {
      $id = filter_var($_GET['delete_user_id'], FILTER_VALIDATE_INT);
      mysqli_query($dbConnect, "DELETE FROM cfmusers WHERE id = " . $id);
    }
  }
  //Nutzer aus der DB holen un in ein Objekt speichern
  $usersObj = mysqli_query($dbConnect, "SELECT 
                                          cfmusers.id, 
                                          cfmusers.group_id, 
                                          cfmusers.email, 
                                          cfmusers.username 
                                              FROM cfmusers");
  // Die Nutzer in ein Array speichern
  $users = [];
  while ($row = mysqli_fetch_assoc($usersObj))
  {
    $users[] = $row;
  }
?>
<!doctype html>
<html lang="de">
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
                    HEAD
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
  <head>
    <title>Cook For Me Benutzerverwaltung</title> 
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
        <div class="height5"></div>
    	<span class="article-h-one">Benutzerverwaltung</span>
      <div class="height2"></div>
      <p><a href="create_user.php" class="btn btn-dark">Neuen Benutzer anlegen</a></p>
      <div class="height2"></div>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Gruppe</th>
            <th>Email</th>
            <th>Benutzername</th>
            <th><i>Aktion</i></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($users as $user): ?>
            <tr>
              <td><?= $user['id'] ?></td>
              <td><?= $user['group_id'] ?></td>
              <td><?= $user['email'] ?></td>
              <td><?= $user['username'] ?></td>
              <td>
                <a href="edit_user.php?user_id=<?= $user['id'] ?>">Bearbeiten</a> | 
                <a href="edit_users.php?delete_user_id=<?= $user['id'] ?>">Löschen</a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <div class="height3"></div>
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
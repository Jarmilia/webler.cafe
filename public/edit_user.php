<?php
    
  require_once 'auth.php';
  require_once '../db/dbConnectionCFM.php';
  // Rechte überprüfen:
  if (!hasPermission('edit_users'))
  {
    header('Location: permissions_denied.php');
  } 
  // User löschen
  if (!empty($_GET))
  {
    if (isset($_GET['delete_user_id']))
    {
      $id = filter_var($_GET['delete_user_id'], FILTER_VALIDATE_INT);
      mysqli_query($dbConnect, "DELETE FROM cfmusers WHERE id = " . $id);
      header('Location: edit_users.php');
    }
  }

  if (!empty($_POST))
  {
    $id = filter_var($_GET['user_id'], FILTER_VALIDATE_INT);
    // Escaping Values 
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $activated = (isset($_POST['activated'])) ? 1 : 0;
    $group_id = filter_var($_POST['group_id'], FILTER_VALIDATE_INT);
    
    // Validierung:
    if (strlen($username) > 1)
    {
      if ($email) 
      {
       // Benutzer Aktualisieren
       $sql = "UPDATE cfmusers 
                  SET username = '" . $username . "', 
                      email = '" . $email . "',
                      activated = " . $activated . ",
                      group_id = " . $group_id . " WHERE id = " . $id;

       $update = mysqli_query($dbConnect, $sql);

          if (!mysqli_query($dbConnect, $sql))
          {
            die(mysqli_error($dbConnect));
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
  //Nutzer aus der DB holen un in ein Objekt speichern
  if (isset($_GET['user_id']))
  {
    $id = filter_var($_GET['user_id'], FILTER_VALIDATE_INT);
    
    if ($id) 
    {
      $sql = "SELECT id, email, 
                    username, 
                    group_id, 
                    activated 
              FROM cfmusers 
              WHERE id = '" . $id . "'";

      $userObj = mysqli_query($dbConnect, $sql);

      $user = mysqli_fetch_assoc($userObj);
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
        <div class="height8"></div>
        <!-- Benutzername aus der Objekt holen -->
    	<span class="article-h-one">Benutzer mit dem Name "<?= ucfirst($user['username'] ?? '') ?>" bearbeiten</span>
      <div class="height3"></div>
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
              FORMULAR:
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --> 
      <form method="post">
        <div class="form-group">
          <label for="username">Benutzername</label>
          <input class="form-control" id="username" type="text" name="username" value="<?= ucfirst($user['username'] ?? '') ?>">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input class="form-control" id="email" type="text" name="email" value="<?= $user['email'] ?? '' ?>">
        </div>
        <div class="form-group">
          <label for="group_id">Rolle</label>
          <select class="custom-select" name="group_id" id="group_id">
        <!-- BENUTZER ROLLEN:  -->
            <?php foreach ($groups as $group): ?>
              <option value="<?= $group['id'] ?>" 
                <?php if ($group['id'] == $user['group_id']) echo 'selected'; ?>><?= ucfirst($group['role']) ?></option>
            <?php endforeach ?>
          </select>
        </div>
        <div class="form-check">
          <!-- CHECKBOX -->
          <input name="activated" class="form-check-input" type="checkbox" id="activated" <?php if (isset($user['activated']) && $user['activated'] == 1) echo 'checked' ?>>
          <label class="form-check-label" for="activated">Aktiviert</label>
        </div>
        <br>
        <input type="submit" class="btn btn-dark" value="Speichern"> |
        <a href="edit_user.php?delete_user_id=<?= $user['id'] ?>">Löschen</a>
      </form>
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
<?php
  require_once 'auth.php';
  require_once '../db/dbConnectionCFM.php';
  // Rechte überprüfen:
  if (!hasPermission('edit_posts'))
  {
    header('Location: permissions_denied.php');
  } 
  //Artikel löschen
  if (!empty($_GET))
  {
    if (isset($_GET['delete_article_id']))
    {
      $id = filter_var($_GET['delete_article_id'], FILTER_VALIDATE_INT);
      var_dump($id);
      mysqli_query($dbConnect, "DELETE FROM cfmarticles WHERE id = " . $id);
      var_dump($id);
    }
  }
  //artikel aus der DB herausholen
  $articlesObj = mysqli_query($dbConnect, "SELECT 
                                            cfmarticles.id, 
                                            cfmarticles.user_id, 
                                            cfmarticles.category_id, 
                                            cfmarticles.title,
                                            cfmarticles.content,
                                            cfmusers.username,
                                            cfmcategories.cat_title
                                            FROM cfmarticles
                                              JOIN cfmusers
                                                ON cfmusers.id = cfmarticles.user_id
                                              JOIN cfmcategories
                                                ON cfmcategories.id = cfmarticles.category_id
                                                  ORDER BY cfmarticles.created_at" );
  $articles = [];
  while ($row = mysqli_fetch_assoc($articlesObj))
  {
    $articles[] = $row;
  }
?>
<!doctype html>
<html lang="de">
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
                    HEAD
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
  <head>
    <title>Cook For Me Artikelverwaltung</title> 
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
  	<span class="article-h-one">Artikelverwaltung</span>
    <div class="height2"></div>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Autor</th>
          <th>Kategorie</th>
          <th>Titel</th>
          <th>Inhalt</th>
          <th>Aktion</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($articles as $article): ?>
          <tr>
            <td><?= $article['id'] ?></td>
            <td><?= $article['username'] ?></td>
            <td><?= $article['cat_title'] ?></td>
            <td><?= $article['title'] ?></td>
            <td><?= $article['content'] ?></td>
            <td>
              <a href="edit_article.php?id=<?= $article['id'] ?>">Bearbeiten</a> | 
              <a href="edit_articles.php?delete_article_id=<?= $article['id'] ?>">Löschen</a>
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
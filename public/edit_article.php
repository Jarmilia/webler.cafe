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
      $deleteId = filter_var($_GET['delete_article_id'], FILTER_VALIDATE_INT);
      mysqli_query($dbConnect, "DELETE FROM cfmarticles WHERE id = " . $deleteId);
    }
  }
  //artikel aus der DB herausholen
  $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
  $articlesObj = mysqli_query($dbConnect, "SELECT
  										cfmarticles.id, 
                                          cfmarticles.user_id, 
                                          cfmarticles.category_id, 
                                          cfmarticles.title,
                                          cfmarticles.content,
                                          cfmarticles.created_at,
                                          cfmusers.username,
                                          cfmcategories.cat_title
                                          FROM cfmarticles
                                              JOIN cfmusers
                                                  ON cfmusers.id = cfmarticles.user_id
                                              JOIN cfmcategories
                                                  ON cfmcategories.id = cfmarticles.category_id
                                                  WHERE cfmarticles.id = " . $id );

  $article = mysqli_fetch_assoc($articlesObj); 
  //Artikel updaten
  if(!empty($_POST))
  {
 	  $articleEdit = filter_var($_POST['articleEdit'], FILTER_SANITIZE_STRING);
      if ($articleEdit)
      {
        mysqli_query($dbConnect, "UPDATE cfmarticles 
                                  SET content = '" . $articleEdit . "' WHERE id = " . $id);
      }
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
  <!-- Artikelüberschrift -->
  	<h2 class="#"><a class="font-grey bold" href="edit_article.php?id=<?= $article['id'] ?>">Artikeltitel: <?= ucfirst($article['title']) ?></a></h2>
    <div class="height3"></div>
    <!-- Artikeltext -->
    <form method="post">
      <textarea name="articleEdit" class="form-control" rows="6"><?= $article['content'] ?></textarea>
      <div class="height2"></div>
        <p class="post-meta">
          Autor: <a href="#"><?= $article['username'] ?? 'unknown' ?></a>, veröffentlicht am: <?= $article['created_at'] ?> in der Kategorie:<a href=""><?= $article['cat_title'] ?? 'uncategorized' ?></a>
        </p>
      <div class="height2"></div>         
      <input type="submit" class="btn btn-dark" value="Speichern">  | 
      <a class="font-grey" href="edit_articles.php?delete_article_id=<?= $article['id'] ?>">Löschen</a>  | 
      <span>Zurück zur <a class="font-grey bold" href="edit_articles.php">Artikelübersicht</a></span>
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
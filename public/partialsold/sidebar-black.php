<!-- das Schwarze Backend-menü -->
<div class="justify-center center"> 
  <ul class="sidebar-black-ul">
<?php if (isset($_SESSION['user_id'])): ?>
  <li class="#">
    <a href="dashboard.php">Dashboard</a><strong> | </strong>   
  </li>
  <li class="#">
    <a href="profile.php">Profil</a>  
  </li>
<?php endif ?> 
<?php if (isset($_SESSION['group_id']) && $_SESSION['group_id'] == 1): ?>
  <li class="#">
   <strong> | </strong>  <a href="edit_users.php">Benutzerverwaltung</a><strong> | </strong> 
  </li> 
  <li class="#">
    <a href="edit_articles.php">Artikel</a>
  </li>
<?php endif ?>
<?php if (isset($_SESSION['group_id']) && $_SESSION['group_id'] == 2): ?>
  <li class="#">
    <strong> | </strong> <a href="edit_articles.php">Artikel</a>
  </li>          
<?php endif ?> 
 </ul>
</div>
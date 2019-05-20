<div class="space-around social-login-search-register ">
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
       SUCHE, LOGIN
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->   
  <div class="register-login-search space-around">
    <form class="justify-center form-search-register" action="php/index.php" method="post">
    <input class="search-register"  type="text" name="search" maxlength="120" placeholder="Suche in Rezepten" autocomplete="off">
    <button class="search-button-register pointer" type="submit">&#128270;</button>
    </form>         
  </div>
  <div class="center">
    <!-- User angemeldet -->
    <?php if (!isset($_SESSION['user_id'])): ?>
      <a class="login block font-grey underline-effect-register" href="login.php">EINLOGGEN</a>
      <a class="login block font-grey underline-effect-register" href="register.php">REGISTRIEREN</a>
    <?php endif ?>
    <!-- User abgemeldet -->
    <?php if (isset($_SESSION['user_id'])): ?>
    <a class="login font-grey underline-effect-register" href="logout.php">ABMELDEN <i class="fas fa-power-off"></i></a>
    <?php endif ?>
  </div>
</div>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
          NAVIGATION CONTAINER BIS ZU DER BILDSCHIRMGRÖßE: 1280px
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<div class="mobile-header-container">      
  <div id="menue-button-id" class="menue-button pointer font-grey block"><i class="fas fa-bars"></i> Menü</div>                       
  <nav id="mobile-nav">            
    <ul class="column block center navi-container-ul mobile-ul">
      <li class="pointer"><a class="active" href="index.php">STARTSEITE</a></li>  
      <li class="recipes-li pointer space-between"><a href="rezepte.php">REZEPTE</a>
        <ul class="recipes-ul block space-around">
            <li><a href="#">Vorspeisen</a></li>
            <li><a href="#">Suppen</a></li>
            <li><a href="#">Gemüse</a></li>
            <li class="salads-li"><a href="salate.php">Salate</a>
              <ul class="salads-ul block">
                <li><a href="haehnchen_salat.php">Hähnchensalat</a></li>
                <li><a href="#">Gemischter Salat</a></li>
                <li><a href="#">Nudelsalat</a></li>
                <li><a href="#">Cous-cous-salat</a></li>
              </ul>
            </li>
            <li><a href="#">Fisch und Meer</a></li>
            <li><a href="#">Fleisch</a></li> 
          </ul>
          <ul class="recipes-ul block space-around">                 
            <li><a href="#">Beilagen</a></li>
            <li><a href="#">Pasta und Pizza</a></li>
            <li><a href="#">Süßes</a></li>  
            <li><a href="#">Weltküche</a></li>               
            <li><a href="#">Getränke</a></li>
        </ul>
      </li>
      <li class="pointer"><a href="blog.php">BLOG</a></li>
      <li class="pointer"><a href="deko.php">DEKO</a>
    </ul>              
  </nav>
</div>
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
                  NAVIGATION CONTAINER AB DER BILDSCHIRMGRÖßE: 1280px
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --> 
  <div class="desktop-header-register space-between">  
    <img src="../assets/img/logo.svg" class="logo-img" alt="logo-img der Website cook-for.me"> 
    <nav class="desktop-nav-register">            
      <ul class="space-between center navi-container-ul-register">
        <li class="pointer"><a href="index.php"  class="underline-effect-register inline-block">STARTSEITE</a></li>   
        <li class="pointer recipes-li-register"><a href="rezepte.php" class="underline-effect-register inline-block">REZEPTE</a> 
          <ul> 
            <li class="recipes-ul-container-register space-between">
              <ul class="recipes-ul-register inline-block column">           
                <li><a href="#" class="inline-block underline-effect-register">Vorspeisen</a></li>
                <li><a href="#" class="inline-block underline-effect-register">Suppen</a></li>
                <li><a href="#" class="inline-block underline-effect-register">Gemüse</a></li>
                <li class="salads-li-register"><a href="salate.php">Salate</a>  
                    <ul class="salads-ul-register column">
                      <li><a href="haehnchen_salat.php" class="inline-block underline-effect-register">Hähnchensalat</a></li>
                      <li><a href="#" class="inline-block underline-effect-register">Gemischter Salat</a></li>
                      <li><a href="#" class="inline-block underline-effect-register">Nudelsalat</a></li>
                      <li><a href="#" class="inline-block underline-effect-register">Cous-cous-salat</a></li>
                    </ul>                      
                </li>                      
              </ul>
              <ul class="recipes-ul-desktop inline-block column">
                <li><a href="#" class="inline-block underline-effect-register">Fisch und Meer</a></li>
                <li><a href="#" class="inline-block underline-effect-register">Fleisch</a></li>                    
                <li><a href="#" class="inline-block underline-effect-register">Beilagen</a></li>
                <li><a href="#" class="inline-block underline-effect-register">Pasta und Pizza</a></li>
              </ul>
              <ul class="recipes-ul-desktop inline-block column">
                <li><a href="#" class="inline-block underline-effect-register">Süßes</a></li>  
                <li><a href="#" class="inline-block underline-effect-register">Weltküche</a></li>               
                <li><a href="#" class="inline-block underline-effect-register">Getränke</a></li> 
              </ul>                                
            </li>
          </ul>
        </li>
        <li class="pointer"><a href="blog.php" class="underline-effect-register">BLOG</a></li>
        <li class="pointer"><a href="deko.php" class="underline-effect-register">DEKO</a>
      </ul>              
    </nav>
  </div>    
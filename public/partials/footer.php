<footer>
  <div class="footer">
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
            SOZIAL MEDIA ICONS
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
    <div class="footer_div footer_social_login footer_div-max-width">
      <div class="footer_social flex-column">
        <span class="heading-footer">Folge uns:</span>
        <a href="#" class="facebook"><i class="fab fa-facebook-square font-white"></i> Facebook fan werden </a>
        <a href="#" class="instagram"><i class="fab fa-instagram font-white"></i> Über Instagram verfolgen </a>
        <a href="#" class="pinterest"> <i class="fab fa-pinterest font-white"></i> Bei Pinterest Inspiration holen</a>
        <a href="#" class="twitter"><i class="fab fa-twitter-square font-white"></i> Unsere neuesten tweets </a>
        <a href="#" class="youtube"><i class="fab fa-youtube font-white"></i> Bei youtube videos anschauen </a>
      </div>
    </div>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
            DIE LETZTEN REZEPTE
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
    <div class="footer_div footer_recipes footer_div-max-width">
      <h2>Die neuesten Rezepte..</h2>
      <div class="first-recipe_footer">
        <p><span class="recipe">Carrot cake:</span>Weit hinten, hinter den Wortbergen, fern der Länder Vokalien und Konsonantien leben die Blindtexte.<span class="continue_footer"><a class="font-white" href="#carrotcake">zum Rezept..</a></span></p>
      </div>
      <div class="second-recipe_footer">
        <p><span class="recipe">Grill-spiese:</span>Ich bin so glücklich, mein Bester,  so ganz in dem Gefühle von ruhigem Dasein versunken, daß meine Kunst darunter leidet.<span class="continue_footer"><a class="font-white" href="#grillspiese">zum Rezept..</a></span></p>
      </div>
    </div>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
            KONTAKTDATEN, LOGIN
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
    <div class="footer_div footer_contact footer_div-max-width"> 
      <span class="heading-footer"> Kontaktdaten:</span> 
      <p class="address-footer display">Cook-for.me Community, GmbH<br>Neukreut 8<br>84036 Kumhausen</p>
      <p class="phone-footer display-block">+49 157 50 78 34 59<br>+49 8743 251 454 636
      </p>
      <p class="mail-footer display"><a class="display font-white" href="
        mailto:mail@massagen-neukreut.de?Subject=Hello%20World">info@cook-for.me</a></p>
      <div class="footer_login">
        <div>
    <!-- User abgemeldet -->
  <?php if (!isset($_SESSION['username'])): ?>
      <a class="font-white block justify-center" href="login.php">EINLOGGEN</a>
      <a class="font-white block justify-center" href="register.php">REGISTRIEREN</a>
  <?php endif ?>
        <!-- User angemeldet -->
  <?php if (isset($_SESSION['username'])): ?>
      <a class="font-white block justify-center" href="logout.php">ABMELDEN <i class="fas fa-power-off"></i></a>
  <?php endif ?>
      </div>
    </div>
  </div>  
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
              DATENSCHUTZ, IMPRESSUM, AGB'S
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --> 
    <div class="footer_ida footer_div">
      <a href="#">Datenschutz</a>
      <a href="#">Impressum</a>
      <a href="#">AGB´s</a>           
    </div>
  </div>     
</footer>
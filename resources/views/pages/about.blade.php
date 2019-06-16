@extends('layouts.app')

@section('content')
      <!-- <button id="backToTopBtn" title="Zum Seitenanfang"></button> -->

        <div>
          <span class="text1-6rem"> Hallo "username",<br>
          willkommen bei <i>webler.café</i></span>
          <div class="height2"></div>
          <p class="text1-2rem">
            Du kannst in oberem Menü auswählen, was du heute machen möchtest. <br>
            Im <a class="font-black bold" href="profile.php">Profil</a> kannst du dein Profil anpassen. <br>
            <!-- Text für den Admin: -->
           Unter <a class="font-black bold" href="edit_users.php">Benutzerverwaltung</a> kannst du neue Nutzer manuell anlegen, <br>
            oder existierende Benutzerprofile bearbeiten und löschen. <br>
            Unter <a class="font-black bold" href="edit_articles.php">Artikel</a> kannst du die Artikel anschauen und verwalten.
            Du bist der Moderator dieser Webseite. Du kannst unter <a class="font-black bold" href="edit_articles.php">Artikel</a> die Artikel der Seite verwalten.
            </p>
        </div>
        <div class="height3"></div>
    </div>
@endsection

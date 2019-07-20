@extends('layouts.app')

 <div class="cinema">
        <img class="block" src="assets/cinemagraphs/cinema1.gif" alt="Cinemagraph von fließendem Kaffee aus der Kaffeemaschine in zwei messing Becher">
      </div> 
@section('content')

<div class="column">
  <div class="welcome center column">
    <div class="introduce">
       <h2 class="h2-middle"><span class="computer-font fontSize1-5rem split-text">Hol dir eine Tasse Kaffee und diskutiere mit anderen über neueste Erkenntnisse, Bugs und Trends, bleib up to date, und erhole dich bei Fachhumor.</span></h2>
     {{-- <p>Aus den Erfahrungen in unterschiedlichen online Diskussionsforen, Informationswebseiten, und Chat Anwendungen, entstand die Idee der Web Applikation, die in einer angenehmen Atmosphäre die “Webler” aus allen Ecken zusammenführt: die Idee der <span class="computer-font fontSize1-5rem">webler.café</span>.</p>
      <h3>Wie funktioniert webler.cafe</h3>
      <p>Du bist eingeladen bei einer Tasse Kaffee mit anderen über neueste Erkenntnisse, Bugs und Trends zu diskutieren, dein Wissen mit aktuellen Artikeln up to date zu halten, oder sich bei Fachhumor erholen und positiv auf die Arbeit einzustellen.<br>
       Auf der Startseite ist die Geschichte des Internets kurz zusammengefasst. In der Navigation gibt es unter dem Menüpunkt Feed eine Übersicht letzter Beiträge und Artikel. Diese werden von anerkannten Kanälen - großen Informationeswebseiten und offiziellen Entwickler-Blogs von bekannten frameworks und Libraries. Darüber hinaus werden Videos von ausgewählten Youtubern aus dem youtube.com, oder dev.tube verlinkt. Nach der Registrierung kannst su das Feed personalisieren und an deine Interessen und Bedürfnisse anpassen.<br>
       Links in dem Sideboard ist übersicht der meistgenutzter Hashtags dargestellt. In vier thematischen Hauptbereichen: Clientseitig, Serverseitig, Design und Website Management findet der Nutzer die erste Orientierung und Möglichkeit tiefer in jeweiliges Thema einzutauchen. 

Die Benutzer können Freundschaften schließen, und lokale oder thematische Teams erstellen. Um die Verbindungen in der Community zu stärken, werden einmal im Monat lokale Treffs in Cafeterias, Co-Working Cafés und anderen Creative Workspaces organisiert. Die Organisation der “Treffs” kann von den Moderatoren jeweiliger Gruppen übernommen werden. 
Nach der Registrierung wird der Nutzer durch das Onboarding geführt, wo er sein Profil anlegt. Er kann sein Profilfoto hochladen, ein Avatar auswählen, oder sein Bitmoji verbinden, und sein Wohnort, Arbeitsplatz, Alter und Kontaktdaten eingeben. Gleichzeitig wird er über die App geführt und erhält kurze Einleitung in die Funktionen. Alle Angaben sind freiwillig und Onboarding kann übersprungen werden.
Das Profil wird bei jedem erstellten Beitrag oder Kommentar verlinkt, damit man immer genau verfolgen kann, “wer da spricht”. In Profil selbst wird wieder eine tabellarische Übersicht der erstellten Beiträge automatisch generiert. 
</p> --}}
      <div class="arrow-down">
        <svg id="arrow" data-name="arrowDown" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 220.21 448"><defs><style>.cls-1{fill:#cbbbb8;}</style></defs><title>long-arrow-alt-down-solid creme</title><path class="cls-1" d="M150.11,313.94V12a12,12,0,0,0-12-12h-56a12,12,0,0,0-12,12V313.94H24.05c-21.38,0-32.09,25.85-17,41L93.14,441a24,24,0,0,0,33.94,0l86.06-86.06c15.12-15.12,4.41-41-17-41Z"/></svg>
      </div>
    </div>
  </div>
</div>
	<!-- GSAP Bibliothek-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script><!-- eigenes JS -->	
<script src="..js/main.js"></script>
@endsection

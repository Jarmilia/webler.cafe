document.addEventListener('DOMContentLoaded', function(){

    ///////////////////////////////////////////////////////
   ////////////// TOGGLE NAVI ////////////////////////////
  ///////////////////////////////////////////////////////

  //variable definieren, dann nachfragen ob sie im Dokument ist:
  var MenueButton = document.getElementById("menueButtonId");
  console.log('MenueButton = ' + MenueButton);
  if (MenueButton !== null){
      //mobile Navigation selektieren
      var menue = document.getElementById("menueId");
      MenueButton.addEventListener("click", function(){
      //if = einklappen, else = ausklappen
      console.log("MenueButton clicked");
          if(menue.style.maxWidth === "100%"){
              menue.style.maxWidth = "0";
              menue.style.maxHeight = '0';
              menue.style.padding = '0';
              MenueButton.innerHTML = "Menu";
              console.log(MenueButton);
          } else{
              menue.style.maxWidth = "100%";
              menue.style.maxHeight = '50rem';
              menue.style.padding = '1rem';
              menue.style.margin = '0 0 0 -2rem';
              MenueButton.innerHTML = "Close";
              console.log('menue');
          }
      })
  }
    ///////////////////////////////////////////////////////
   ////////////// BACK TO TOP BUTTON /////////////////////
  ///////////////////////////////////////////////////////

  var bttButton = document.getElementById("backToTopBtn");
  console.log("bttButton = " + bttButton);
  if (bttButton !== null){
      //dem Fenster Eventlistener Scroll hinzufügen
      window.addEventListener('scroll', scrollFunction);
      console.log(scrollFunction);
      //beim klick auf das Button am Anfang der Seite scrollen
      bttButton.addEventListener('click', function(){
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
          console.log();
      });
      //Beim runterscrollen erscheint das Button
      function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
              bttButton.style.display = "block";
          } else {
              bttButton.style.display = "none";
          }
      }
  }
})

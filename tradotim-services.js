document.addEventListener('DOMContentLoaded', function(event) {
    const rengasKuva = document.getElementById("rengaskuva");
    const apuvalineKuva = document.getElementById("apuvalinekuva");
    const flexelKuva = document.getElementById("flexelkuva");
    const rengasOverlay = document.getElementById("rengasoverlay");

    rengasKuva.addEventListener("mouseover", function() {
        rengasOverlay.style.display = "flex";
        rengasKuva.style.zIndex = "150";
    });
    rengasKuva.addEventListener("mouseout", function() {
        rengasOverlay.style.display = "none";
        rengasKuva.style.zIndex = "1";
    });

    apuvalineKuva.addEventListener("mouseover", function(){
        rengasKuva.getElementsByTagName("IMG")[0].src= window.location.origin + window.location.pathname + "images/palvelut/apuvalineet_web_1.png";
        rengasOverlay.style.display = "flex";
        rengasKuva.style.zIndex = "150";
        rengasOverlay.getElementsByTagName("SPAN")[0].innerHTML = "Laaja valikoima apuvälineiden tarvikkeita ja varaosia";
    });
    apuvalineKuva.addEventListener("mouseout", function(){
        rengasKuva.getElementsByTagName("IMG")[0].src= window.location.origin + window.location.pathname + "images/palvelut/renkaat_web_1.png";
        rengasOverlay.style.display = "none";
        rengasKuva.style.zIndex = "1";
        rengasOverlay.getElementsByTagName("SPAN")[0].innerHTML = rengasteksti;
    });

    flexelKuva.addEventListener("mouseover", function(){
        rengasKuva.getElementsByTagName("IMG")[0].src= window.location.origin + window.location.pathname + "images/palvelut/flexel_web_1.png";
        rengasOverlay.style.display = "flex";
        rengasKuva.style.zIndex = "150";
        rengasOverlay.getElementsByTagName("SPAN")[0].innerHTML = "Sastamalassa valmistetut Flexel -umpikumirenkaat ja pyörät ovat markkinoiden varmin ratkaisu korvaamaan pienlaitteiden ilmakumipyörät.";
    });
    flexelKuva.addEventListener("mouseout", function(){
        rengasKuva.getElementsByTagName("IMG")[0].src= window.location.origin + window.location.pathname + "images/palvelut/renkaat_web_1.png";
        rengasOverlay.style.display = "none";
        rengasKuva.style.zIndex = "1";
        rengasOverlay.getElementsByTagName("SPAN")[0].innerHTML = rengasteksti;
    });


  })
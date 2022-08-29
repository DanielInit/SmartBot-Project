//header("Access-Control-Allow-origin:*")


function GET()
{
    $.get( "http://www.randomnumberapi.com/api/v1.0/random?min=100&max=1000&count=1", function( data ) { // le /distance ici
        console.log(data);
        $("#distanceV").text(data) // à l'emplacement de l'id distanceV
      });
}

$(document).ready(function() {
    //GET();
    setInterval(GET,5000)
  }); // ready 

  var val = 0;

// fonction de la LED ON
function BoutonON()
{
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET","on", true);
    xhttp.send();
}
// fonction de la LED OFF
function BoutonOFF()
{
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET","off", true);
    xhttp.send();
};
// fonction avancement du robot
function BoutonUp()
{
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET","avancer", true);
    xhttp.send();
}
// fonction de la LED clignotement
function Boutonblink()
{
    var xhttp = new XMLHttpRequest
    xhttp.open("GET","blink", true);
    xhttp.send();
}
function BoutonDown() // fonction reculer pour le robot
{
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET","reculer", true);
    xhttp.send();
}
function BoutonRight() // fonction tourner du robot
{
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET","droite", true);
    xhttp.send();
}
function BoutonLeft() // fonction tourner a gauche
{
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET","gauche", true);
    xhttp.send();
}



/*$(document).ready(function(){
    $("#validerV").click(function(){
        var valeur = $("#v itesseC").val();
        $.post("delayLed",{
            valeurDelayLed: valeur
        });
    });
});*/
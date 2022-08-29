<?php 

include 'cobdd.php';


header("Access-Control-Allow-origin:*");

//var_dump($_SERVER['HTTP_X_REQUESTED_WITH']);
$date = date('d/m/Y');
echo $date;
// echo $date;
//var_dump($_POST["distance"]); 
//$distance = $_POST["distance"]; // variable de distance
//echo $distance;
if(!empty($_POST["action"]))
{
    var_dump($_POST["action"]);
    $a = $_POST["action"];
    $data=$bdd->prepare("INSERT INTO `actionled`(`date`,`Action`) VALUES ('$date','$a')");
    $data->execute();
}
elseif (empty($_POST["action"])) {
    echo "Aucune donnée de Led  n'est présente";
}
// faire plutot un cmdtype dans ma bddd, remplir la case avec un droite,gauche,reculer,avancer, et ensuite faire un count ( ou compter ) 
if(!empty($_POST["mouvement"]))
{
    echo var_dump($_POST["mouvement"]);
    $b = $_POST["mouvement"];
    //echo $b;
    $request=$bdd->prepare("INSERT INTO `moveled`(`date`,`TypeMove`) VALUES ('$date','$b')");
    $request->execute();
}
elseif (empty($_POST["mouvement"])){
    echo "AUcune donnée de mouvement n'est présente";
}

if(!empty($_POST["distance"]))
{
    //var_dump($_POST["distance"]);
    $distance= $_POST["distance"];
    echo $distance."presente dans distance";
    $datadistance=$bdd->prepare("INSERT INTO `telemetrie`(`date`,`distance`) VALUES ('$date','$distance')");
    $datadistance->execute();
}
elseif (empty($_POST["distance"])) {
    echo "Aucune donnée de Led  n'est présente";
}


?>
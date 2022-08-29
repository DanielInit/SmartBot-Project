
<?php

include 'cobdd.php';

$dataN=$bdd->prepare("SELECT * FROM led");
$dataN->execute();
//while($values=$dataN->fetch(PDO::FETCH_ASSOC))
//{
    //var_dump( $values);
$ledstateval=$bdd->prepare("SELECT * FROM ledstate");
$reponse->execute();
//var_dump($ledstateval);
}    

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">kiuh 
    <link rel="stylesheet" href="tableaucss.css">
    <link rel="icon" type="image/x-icon" href="image/favicon.ico">
</head>
<body>
<table class="table-style">



<thead>

    <tr>

        <th>Date</th>

        <th>nbreLedOn</th>

        <th>nbreLedOff</th>

        <th>nbreLedBlink</th>


    </tr>

</thead>


<tbody>
<?php 
while($values=$dataN->fetch(PDO::FETCH_ASSOC))
{
    echo "<tr>";

    echo "<td>" . $values['date'] . " </td>";

    echo "<td>" . $values['nbreLedOn'] . "</td>";

    echo "<td>" . $values['nbreLedOff'] ."</td>";

    echo "<td>" . $values['nbreLedBlink'] . "</td>";


    echo "</tr>";
}

while($reponse=ledtstateval->fetch(PDO::FETCH_ASSOC))
{
    echo "<tr>";

    echo "<td>" . $reponse['date'] . " </td>";

    echo "<td>" . $reponse['TurnOn'] . "</td>";

    echo "<td>" . $reponse['TurnOff'] ."</td>";

    echo "<td>" . $reponse['Blink'] . "</td>";

    echo "<td>" . $reponse['blinktype'] . "</td>";

    echo "</tr>";
}





     

    

    ?>
</tbody>



</table>
<div class="wrapper">
    <div class="sidebar">
        <h2>résultats</h2>
        <ul>
            <li><a href="#"><i class="fas fa-home"></i>Smartbot</a></li>
            <li><a href="#"><i class="fas fa-user"></i>Le groupe MDV</a></li>
            <li><a href="#"><i class="fas fa-address-card"></i>Qui sommes nous ?</a></li>
            <li><a href="#"><i class="fas fa-project-diagram"></i>Bilan</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>Contact</a></li>
            
        </ul> 
</body>
</html>



<?php

include "php/header.php";
include "php/navbar.php";

if (!empty($_GET)) {
    $error = $_GET["error"];
    echo $error;
}

?>

<div id="click">
    <div class=new_afspraak2>
     
        <div class="new_afspraak">
            
            <form action="uitkomst.php" method="POST">
                <h1>Nieuwe Agenda Item</h1>

                <br>
                <label class=vragen for="titel" >Titel:
                    <input type="text" name="titel"> <br>
                </label>
                <br>
                <label class=vragen for="afspraak">Omschrijving van de afspraak:
                    <input type="text" name="afspraak" id="omschrijving"> <br>
                </label>
                <br>
                <label class=vragen for="locatie">Locatie:
                    <input type="text" name="locatie" id="locatie1"> <br>
                </label>
                <br>
                <label class=vragen for="date">Datum van afspraak:
                    <input type="date" name="date" id="datum"> <br> 
                </label>
                <br>
                <label class=vragen for="time"> Begintijd:
                    <input type="time" name="time-begin" id="time-begin">  &nbsp; Eindtijd:<input type="time" name="time-eind" id="time-eind"><br>
                </label>
                <br>
                <input class=vragen id="help" type="submit" value="Maak Item Aan">
                <br>

            </form>
    
        </div>
    </div>
</div>
<div class="container_box">

<?php 

$dag = date('d');
$week = date('w');
$maand = date('m');
$jaar= date('Y');

$timestamp = mktime(0,0,0,$maand,1,$jaar);

$dag1= date("w", $timestamp);
$dagenInMaand = date("t", $timestamp);
$dagenInWeek = date("w", $timestamp);
$cel = 0;

echo "<table>";

echo $dag . "-" . $maand . "-" . $jaar ;
echo "<br>";

for($i=1; $i <= 24; $i++){
    echo '<tr><td onclick="show()">' . $i . ':00' . '</td></tr>';
    $cel++;
}

echo "</table>";

?>
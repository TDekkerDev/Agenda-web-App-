<?php include "php/header.php"; ?>
<?php include "php/navbar.php"; ?>
<?php 

if (!empty($_GET)) {
    $error = $_GET["error"];
    echo $error;
}

?>
<script defer src="javascript/index.js"></script>
<div id="balk">
            <li class="dagen">maandag</li>
            <li class="dagen">dinsdag</li>
            <li class="dagen">woensdag</li>
            <li class="dagen">donderdag</li>
            <li class="dagen">vrijdag</li>
            <li class="dagen">zaterdag</li>
            <li class="dagen">zondag</li>
</div>

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
<?php

    $maand = 11;
    $jaar=2021;

    $timestamp = mktime(0,0,0,$maand,1,$jaar);

    $dag1= date("w", $timestamp);
    $dagenInMaand = date("t", $timestamp);

    $cel = 0;

    echo"<table>";
    echo"<tr><th>ZO</th><th>MA</th><th>DI</th><th>W</th><th>DO</th><th>VR</th><th>ZA</th>";

    echo"<tr>";

    for($i=0; $i< $dag1; $i++){
        echo"<td> x </td>";
        $cel++;
    }

    for($i=1; $i <= $dagenInMaand; $i++){
        echo "<td> $i </td>";
        $cel++;
        if($cel ==7){
            echo "</tr><tr>";
            $cel=0;
        }
    }

    echo"</table>";
?>


<main>
    
    
    <div id="agenda">
        <div class="box1 box3"onclick="show()"></div>
        <div class="box1 box3"onclick="show()"></div>
        <div class="box1 box3"onclick="show()"></div>
        <div class="box1" onclick="show()"></div>
        <div class="box1" onclick="show()"></div>
        <div class="box1"onclick="show()"></div>
        <div class="box1"onclick="show()"></div>
        <div class="box1"onclick="show()"></div>
        <div class="box1"onclick="show()"></div>
        <div class="box1"onclick="show()"></div>
        <div class="box1"onclick="show()"></div>
        <div class="box1"onclick="show()"></div>
        <div class="box1"onclick="show()"></div>
        <div class="box1"onclick="show()"></div>
        <div class="box1"onclick="show()"></div>
        <div class="box1"onclick="show()"></div>
        <div class="box1"onclick="show()"></div>
        <div class="box1"onclick="show()"></div>
        <div class="box1"onclick="show()"></div>
        <div class="box1"onclick="show()"></div>
        <div class="box1"onclick="show()"></div>
        <div class="box1"onclick="show()"></div>
        <div class="box1"onclick="show()"></div>
        <div class="box1"onclick="show()"></div>
        <div class="box1"onclick="show()"></div>
        <div class="box1"onclick="show()"></div>
        <div class="box1"onclick="show()"></div>
        <div class="box1"onclick="show()"></div>
        <div class="box1"onclick="show()"></div>
        <div class="box1"onclick="show()"></div>
        <div class="box1"onclick="show()"></div>
        <div class="box1"onclick="show()"></div>
        <div class="box1"onclick="show()"></div>
        <div class="box1"onclick="show()"></div>
        <div class="box1 box3"></div>
        


        
        
    </div>
</main>

<script>
function show(){
    
    document.getElementById("click").style.display = "block";
    
}
</script>
<?php 
include "php/footer.php"; ?>
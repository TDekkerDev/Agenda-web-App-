<?php

$titel = $_POST["titel"];
$afspraak = $_POST["afspraak"];
$locatie = $_POST["locatie"];
$date = $_POST["date"];
$begintijd =$_POST["time-begin"];
$eindtijd = $_POST["time-eind"];


$where = "";
$error=0;

if(empty($titel)){
    $error=1;
    
    $where= "titel &nbsp;";
}

if(empty($afspraak)){
    $error=1;
    $where = $where . "afspraak &nbsp;";
}


if(empty($locatie)){
    $error=1;
    
    $where = $where ."locatie &nbsp;";
}


if(empty($date)){
    $error=1;
    $where = $where . "date &nbsp;";
}

if(empty($begintijd)){
    $error=1;
    $where = $where . "begintijd &nbsp;";
}

if(empty($eindtijd)){
    $error=1;
    $where = $where . "eindtijd &nbsp;";
}


if($error==0){
    echo $titel;
    echo "<br>";
    echo $afspraak;
    echo "<br>";
    echo $locatie;
    echo "<br>";
    echo $date;
    echo "<br>";
    echo $begintijd;
    echo "<br>";
    echo $eindtijd;
}else{
    echo"er is een fout melding met $where ";
}
?>
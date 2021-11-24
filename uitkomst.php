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
    
    $where= "titel";
}

if(empty($afspraak)){
    $error=1;
    $where = "afspraak";
}


if(empty($locatie)){
    $error=1;
    
    $where = "locatie";
}


if(empty($date)){
    $error=1;
    $where = "date";
}

if(empty($begintijd)){
    $error=1;
    $where = "begintijd";
}

if(empty($eindtijd)){
    $error=1;
    $where = "eindtijd";
}


if($error==0)
?>
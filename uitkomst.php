<?php

$titel = $_POST["titel"];
$afspraak = $_POST["afspraak"];
$locatie = $_POST["locatie"];
$date = $_POST["date"];
$begintijd =$_POST["time-begin"];
$eindtijd = $_POST["time-eind"];



$error=0;
if(empty($title)){
    $error=1;
}

if ($error ==0){
    echo $title;
    
}

?>
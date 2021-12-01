<?php include "2/niethierin.php"; ?>
<?php
include "php/header.php";
include "php/navbar.php";
include "2/niethierin.php";



$titel = $_POST["titel"];
$afspraak = $_POST["afspraak"];
$locatie = $_POST["locatie"];
$date = $_POST["date"];
$begintijd =$_POST["time-begin"];
$eindtijd = $_POST["time-eind"];


$where = "";
$error=0;
$timestamp= strtotime($date);




if(empty($titel)){
    
    header('Location:formulier.php?error=U moet Titel invoeren');
}

if(empty($afspraak)){
    
    header('Location:formulier.php?error=U moet de omschijving van de afspraak invoeren');
}


if(empty($locatie)){
    
    header('Location:formulier.php?error=U moet locatie invoeren');
}


if(empty($date)){
    
    header('Location:formulier.php?error=U moet de datum invoeren');
}elseif(time()>$timestamp){
    header('Location:formulier.php?error=U moet een datum kiezen die nog niet is geweest');

}

if(empty($begintijd)){
    
    header('Location:formulier.php?error=U moet de begintijd invoeren');
}

if(empty($eindtijd)){
    
    header('Location:formulier.php?error=U moet de eindtijd invoeren');
 

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
}





include "php/footer.php";

?>

<?php include "php/databasesend.php"; ?>
<?php include "2/niethierin.php"; ?>
<?php
include "php/header.php";
include "php/navbar.php";



$titel = $_POST["titel"];
$afspraak = $_POST["afspraak"];
$locatie = $_POST["locatie"];
$date = $_POST["date"];
$begintijd =$_POST["time-begin"];
$eindtijd = $_POST["time-eind"];


$where = "";
$error=0;
$timestamp= strtotime($date);


  
function save($titel,$afspraak,$locatie,$date,$begintijd,$eindtijd){

    $file_path ="data/saved_item.json";
    if (file_exists($file_path)){
        $saved_items = file_get_contents($file_path);
        $saved_items = json_decode($saved_items,true);
    }else{
        $saved_items = [];

    }

    $new_item = [
        "title" => $titel,
        "afspraak" => $afspraak,
        "locatie" => $locatie,
        "datum" => $date,
        "begintijd" => $begintijd,
        "eindtijd" => $eindtijd
    ];
    $saved_items[]= $new_item;
    $datums = [];
    foreach($saved_items as $item){
        $datums[] = $item["datum"] . $item["begintijd"];
    }
    array_multisort($datums,$saved_items);
    
    $saved_items_json = json_encode($saved_items);
    
    
    file_put_contents($file_path,$saved_items_json);
    if ($new_item == $saved_items){
        echo 'wacht';
    }else {
        echo " nu neit meer";
    }
    

    foreach($saved_items as $item){
     
        echo   "<br>".$item["title"]  . "<br>". $item["afspraak"]  . "<br>". $item["locatie"] . "<br>" . $item["datum"] . "<br>" . $item["begintijd"]  . "<br>". $item["eindtijd"] . "<br>";
        

    }
   
  
    return $saved_items;
    
    
}







if(empty($titel)){
    
    header('Location:index.php?error=U moet Titel invoeren');
}

if(empty($afspraak)){
    
    header('Location:index.php?error=U moet de omschijving van de afspraak invoeren');
}


if(empty($locatie)){
    
    header('Location:index.php?error=U moet locatie invoeren');
}


if(empty($date)){
    
    header('Location:index.php?error=U moet de datum invoeren');
}elseif(time()>$timestamp){
    header('Location:index.php?error=U moet een datum kiezen die nog niet is geweest');

}

if(empty($begintijd)){
    
    header('Location:index.php?error=U moet de begintijd invoeren');
}

if(empty($eindtijd)){
    
    header('Location:index.php?error=U moet de eindtijd invoeren');
 

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
    echo "<br>";
    echo"U eerder gemaakt afspraken<br>";
    save($titel,$afspraak,$locatie,$date,$begintijd,$eindtijd);
}





include "php/footer.php";

?>

<?php include "php/databasesend.php"; ?>
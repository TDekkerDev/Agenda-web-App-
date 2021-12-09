
<?php
include "php/header.php";
include "php/navbar.php";
?>

<?php






$titel=$_POST["titel"];
$onderwerp =$_POST["afspraak"];
$locatie = $_POST["locatie"];
$date = $_POST["date"];
$begintijd =$_POST["time-begin"];
$eindtijd = $_POST["time-eind"];

$timestamp= strtotime($date);




function newafspraak($titel,$onderwerp,$locatie,$date,$begintijd,$eindtijd){

    
    $new_item = [
        "title" => $titel,
        "afspraak" => $onderwerp,
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
    
    overlapend($saved_items,$new_item);
    save($new_item);
}

  
function save($new_item){

    $file_path ="data/saved_item.json";
    if (file_exists($file_path)){
        $saved_items = file_get_contents($file_path);
        $saved_items = json_decode($saved_items,true);
    }else{
        $saved_items = [];

    }
    $saved_items[] = $new_item;
    


    $saved_items_json = json_encode($saved_items);
    file_put_contents($file_path,$saved_items_json);

    

    
    foreach($saved_items as $item){
     
        echo   "<br>".$item["title"]  . "<br>". $item["afspraak"]  . "<br>". $item["locatie"] . "<br>" . $item["datum"] . "<br>" . $item["begintijd"]  . "<br>". $item["eindtijd"] . "<br>";
        

    }
    
    
    return $saved_items;
    
    
}

function overlappendtijd($new_item,$saved_items){
    if($new_item["begintijd"] >= $saved_items["begintijd"]&& $new_item["begintijd"] <= $saved_items["eindtijd"]
    || $new_item["eindtijd"] >= $saved_items["begintijd"] && $new_item["eindtijd"] <= $saved_items["eindtijd"]){
        echo"Dit kan niet";
    }
}


function overlapend($saved_items,$new_item){
$overlappend= false;
    foreach($saved_items as $item){
        if($new_item["datum"]==[$item["datum"]]){
            $overlappend = overlappendtijd($new_item,$saved_items);
            if($overlappend){
                break;
            }
            
            
        }
        
    }   
    if(!$overlappend) save($new_item);
}




if(empty($titel)){
    
    header('Location:index.php?error=U moet Titel invoeren');
}

if(empty($onderwerp)){
    
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


display();

function display(){
    $titel = $_POST["titel"];
    $onderwerp = $_POST["afspraak"];
    $locatie = $_POST["locatie"];
    $date = $_POST["date"];
    $begintijd =$_POST["time-begin"];
    $eindtijd = $_POST["time-eind"];
    
    
    
    
    echo $titel;
    echo "<br>";
    echo $onderwerp;
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
    
    newafspraak($titel,$onderwerp,$locatie,$date,$begintijd,$eindtijd);
    
    
    
};





include "php/footer.php";

?>

<?php include "php/databasesend.php"; ?> 
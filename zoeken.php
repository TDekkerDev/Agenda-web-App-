<?php include "php/header.php"; ?>
<?php include "php/navbar.php"; ?>
<?php
$zoeken_naam = $_POST["zoeken"];
$zoeken_term = $_POST["zoekenkeuzen"];


function save($saved_item){
    

    $file_path ="data/saved_item.json";
    if (file_exists($file_path)){
        $saved_items = file_get_contents($file_path);
        $saved_items = json_decode($saved_items,true);
    }else{
        $saved_items = [];

    }

    $saved_items_json = json_encode($saved_items);
    file_put_contents($file_path,$saved_items_json);

    

    
    foreach($saved_items as $item){
     
        echo   "<br>".$item["title"]  . "<br>". $item["afspraak"]  . "<br>". $item["locatie"] . "<br>" . $item["datum"] . "<br>" . $item["begintijd"]  . "<br>". $item["eindtijd"] . "<br>";
        

    }
    
    
    return $saved_items;
    
    
}

echo "u zocht voor: $zoeken_naam";
echo "<br>";
echo "met de egenschaep: $zoeken_term";
echo "<br>";

    $array_column = array_column($saved_items, 'title');
    
    $name_ding = array_search($zoeken_naam, $array_column);
    
    echo $array[$name_ding]['title'];
    echo "<br>";
print_r(save());

?>
<?php include "php/footer.php";?>
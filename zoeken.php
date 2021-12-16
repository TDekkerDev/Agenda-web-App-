<?php include "php/header.php"; ?>
<?php include "php/navbar.php"; ?>
<?php
$zoeken_naam = $_POST["zoeken"];
$zoeken_term = $_POST["zoekenkeuzen"];
$saved_items=getcontent();
function getcontent(){ 
    $file_path ="data/saved_item.json";
        if (file_exists($file_path)){
            $saved_items = file_get_contents($file_path);
            $saved_items = json_decode($saved_items,true);
        }else{
            $saved_items = [];

    }
    return $saved_items;
    
}

echo "u zocht voor: $zoeken_naam";
echo "<br>";
echo "met de egenschaep: $zoeken_term";
echo "<br>";

    $saved_items = array_column($saved_items, 'title');
    
    $name_ding = array_search($zoeken_naam, $saved_items);
    
    echo $saved_items[$name_ding];
    echo "<br>";
//print_r(getcontent());

?>
<?php include "php/footer.php";?>
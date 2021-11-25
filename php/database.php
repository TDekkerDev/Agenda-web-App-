<?php
$mysqli = new mysqli("localhost","root","","agenda");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
$titel = $_POST["titel"];
$afspraak = $_POST["afspraak"];
$locatie = $_POST["locatie"];
$date = $_POST["date"];
$begintijd =$_POST["time-begin"];
$eindtijd = $_POST["time-eind"];
// Perform query
if ($mysqli->query("INSERT INTO afspraken VALUES ('$titel', '$afspraak', '$locatie' , '$date', '$begintijd', '$eindtijd')") === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $mysqli->error;
  }
$mysqli -> close();


?> 
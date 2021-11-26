<?php
$mysqli = new mysqli("localhost","root","","agenda");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
$sql = "SELECT `titel`, `afspraak`, `locatie`, `date`, `time-begin`, `time-eind` FROM afspraken";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["titel"]. "</td><td>" . $row["afspraak"] . "</td><td>" . $row["afspraak"] . "</td><td>" . $row["date"] . "</td><td>" . $row["time-begin"] . "</td><td>" . $row["time-eind"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$mysqli->close();
?>

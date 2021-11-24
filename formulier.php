<?php 
include "php/header.php"; ?>
<form action="uitkomst.php" method="POST">
    <h1>Nieuwe Agenda Item</h1>

    <label for="titel">Titel:
        <input type="text" name="titel"> <br>
    </label>
    
    <label for="afspraak">Omschrijving van de afspraak:
        <input type="text" name="afspraak" id="omschrijving"> <br>
    </label>

    <label for="locatie">Locatie:
        <input type="text" name="locatie" id="locatie1">
    </label>

    <label for="date">Datum van afspraak:
        <input type="date" name="date" id="datum">
    </label>
    







</form>



<?php 
include "php/footer.php"; ?>
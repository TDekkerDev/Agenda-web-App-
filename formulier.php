<?php include "php/header.php"; ?>
<?php include "php/navbar.php"; ?>
<div class=new_afspraak2>
<div class="new_afspraak">
    <form action="uitkomst.php" method="POST">
        <h1>Nieuwe Agenda Item</h1>

        <br>
        <label class=vragen for="titel" >Titel:
            <input type="text" name="titel"> <br>
        </label>
        <br>
        <label class=vragen for="afspraak">Omschrijving van de afspraak:
            <input type="text" name="afspraak" id="omschrijving"> <br>
        </label>
        <br>
        <label class=vragen for="locatie">Locatie:
            <input type="text" name="locatie" id="locatie1"> <br>
        </label>
        <br>
        <label class=vragen for="date">Datum van afspraak:
            <input type="date" name="date" id="datum"> <br> 
        </label>
        <br>
        <label class=vragen for="time"> Begintijd:
            <input type="time" name="time-begin" id="time-begin">  &nbsp; Eindtijd:<input type="time" name="time-eind" id="time-eind"><br>
        </label>
        <br>
        <input class=vragen id="help" type="submit" value="Maak Item Aan">
        <br>

    </form>
</div>
</div>



<?php 
include "php/footer.php"; ?>
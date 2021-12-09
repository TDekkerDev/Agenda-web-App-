<header>
        <img class="logo" src="media/logo4.png" alt="logo">
        <div id="container">
        <form action="hello.php" method="POST">
            <input id="zoeken"type="text" name="zoeken">
            <select id="zoekenkeuzen" name="zoekenkeuzen">
            <option value="titel">titel</option>
            <option value="datum">datum</option>
            <option value="locatie">locatie</option>
            <input id=submitzoek type="submit" value="zoeken...">
            </select>
            </form>
        </div>

        <img onclick="searchbar()" src="media/zoeken.png" alt="zoeken" id="zoekenopen">


            <br>
        <ul class="nav">
            <li class="navi"><a href="index.php">agenda</a></li>
            <li class="navi"><a href="afspraken.php">Afspraken</a></li>
            <li class="navi"><a href="admin.php">Admin</a></li>
        </ul>
        <a class="button" href="#"><button>Contact</button></a>
    </header>
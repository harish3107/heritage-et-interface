<?php

include 'Comparable.php';
include 'ISport.php';
include 'Club.php';
include 'Sport.php';
include 'SportBallon.php';
include 'SportRelais.php';
include 'data.php';

$dbh = new PDO('mysql:host=127.0.0.1:8889;dbname=gestionclub','root','root');
foreach ($dbh->query( 'SELECT * from club') as $row){
    print_r($row);
}


// liste des clubs
foreach ($club as $kClub => $vClub ) {
    echo '<a href="result.php?idClub=' . $vClub->getIdClub() . '">' . $vClub->getNomClub() . '</a><br>';
}

// liste des sport d'un club

    if (isset($_GET["idClub"])) {
        echo "<br>CLUB" . $club[$_GET["idClub"]]->getNomClub() . "<br>";
        foreach ($club[$_GET["idClub"]]->getLesSports() as $kSport => $vSport)
        {
            echo $vSport->getNomSport() . "<br>";
        }
    }

echo "<form method='post' name='formIdClub' action='result.php'>

    <label for='club-select''>CLUB:</label>
    <select name='idClub' id='club-select'>
        <option value=''>--Choisir un club--</option>
";
    foreach($club as $kFormCLub => $vFormClub)
    {
        echo "<option value='".$vFormClub->getIdClub()."'>".$vFormClub->getNomClub()."</option>";
    }

    echo "</select>

        <button type='submit'>ENVOIEEE !</button>

    </form>
";









<?php

include 'Comparable.php';
include 'ISport.php';
include 'Club.php';
include 'Sport.php';
include 'SportBallon.php';
include 'SportRelais.php';
include 'data.php';

// liste des sport d'un club



if (isset($_GET["idCub"]) || isset($_POST["idClub"]) ) {
    // recuperation ID en GET
    if (isset($_GET["idClub"])) {
        $idClub = $_GET["idClub"];
    } else {
        $idClub = $_POST["idClub"];
    }
    {
        echo "<br>CLUB" . $club[$_POST["idClub"]]->getNomClub() . "<br>";
        foreach ($club[$_POST["idClub"]]->getLesSports() as $kSport => $vSport) {
            echo $vSport->getNomSport() . "<br>";
        }
    }
}
    else {
            echo "<br>CLUB" . $club[$_GET["idClub"]]->getNomClub() . "<br>";
            foreach ($club[$_GET["idClub"]]->getLesSports() as $kSport => $vSport)
            {
                echo $vSport->getNomSport() . "<br>";
            }
        }


        echo "<br> <a href='index.php'> RETOUR</a>";


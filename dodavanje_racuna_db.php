<?php

require_once "db.php";

$stanje = mysqli_real_escape_string($conn,$_POST['stanje']);
$jmbg = intval($_POST['jmbg']);

$query = mysqli_query($conn,"INSERT INTO racun (vlasnik_jmbg,stanje) VALUES ('$jmbg','$stanje');");

header("Location: pregled_racuna.php?jmbg=$jmbg");
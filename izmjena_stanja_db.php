<?php

require_once "db.php";

$stanje = mysqli_real_escape_string($conn,$_POST['stanje']);
$jmbg = intval($_POST['jmbg']);
$racunId = intval($_POST['racunId']);

$query = mysqli_query($conn,"UPDATE racun SET stanje='$stanje' WHERE vlasnik_jmbg = '$jmbg' AND id='$racunId';");

header("Location: pregled_racuna.php?jmbg=$jmbg");
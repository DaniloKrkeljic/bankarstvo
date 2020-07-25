<?php

require_once "db.php";

$racunId = intval($_GET['racunId']);
$jmbg = intval($_GET['jmbg']);

$query = mysqli_query($conn,"DELETE FROM racun WHERE id='$racunId';");

header("Location: pregled_racuna.php?jmbg=$jmbg");
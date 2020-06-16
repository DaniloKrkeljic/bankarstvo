<?php

require_once "db.php";

$jmbg = intval($_GET['jmbg']);

$query = mysqli_query($conn, "SELECT * FROM racun WHERE racun.vlasnik_jmbg = $jmbg;");
$rezultat = mysqli_fetch_assoc($query)['stanje'];
echo $rezultat;
?>


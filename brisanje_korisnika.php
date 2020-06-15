<?php

require_once "db.php";

$jmbg = $_GET['jmbg'];

$query = mysqli_query($conn, "DELETE FROM vlasnik WHERE jmbg=$jmbg;");

header('Location: index.php');
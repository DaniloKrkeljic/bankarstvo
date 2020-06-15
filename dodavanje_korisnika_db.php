<?php

require_once "db.php";

$ime = mysqli_real_escape_string($conn,$_POST['ime']);
$prezime = mysqli_real_escape_string($conn,$_POST['prezime']);
$jmbg = mysqli_real_escape_string($conn,$_POST['jmbg']);
$adresa = mysqli_real_escape_string($conn,$_POST['adresa']);

if($ime == '' || $prezime == '' || $jmbg == '' || $adresa == ''){
  die(header('Location: dodavanje_korisnika.php?error=1'));
} else {
  $query=mysqli_query($conn,"INSERT INTO vlasnik(jmbg,ime,prezime,adresa) VALUES 
    ($jmbg,'$ime','$prezime','$adresa');");
  header('Location: index.php');
}
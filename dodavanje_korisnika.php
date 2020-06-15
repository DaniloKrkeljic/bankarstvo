<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dodavanje korisnika</title>
</head>
<body>
  <?php
    if (isset($_GET['error'])){
      $err = $_GET['error'];
      switch($err){
        case 1:
          echo "Polja ne smiju biti prazna!";
        default:
        break;
      }
    }

    if(isset($_GET['jmbg'])){
      require_once "db.php";
      $jmbg = intval($_GET['jmbg']);
      if($query = mysqli_query($conn,"SELECT * FROM vlasnik WHERE jmbg='$jmbg'")){}
      else echo $conn->error;
      $red = mysqli_fetch_assoc($query);
      ?>
      <form action="dodavanje_korisnika_db.php" method="POST">
        <label for="ime">Ime: </label>
        <input type="text" name="ime" id="ime" value="<?php echo $red['ime'];?>">
        <label for="prezime">Prezime: </label>
        <input type="text" name="prezime" id="prezime" value="<?php echo $red['prezime'];?>">
        <label for="jmbg">JMBG: </label>
        <input type="text" name="jmbg" id="jmbg" value="<?php echo $red['jmbg'];?>">
        <label for="adresa">Adresa: </label>
        <input type="text" name="adresa" id="adresa" value="<?php echo $red['adresa'];?>">
        <input type="submit" value="Izmijeni">
      </form>
    <?php } else {
    ?>
      <form action="dodavanje_korisnika_db.php" method="POST">
        <label for="ime">Ime: </label>
        <input type="text" name="ime" id="ime">
        <label for="prezime">Prezime: </label>
        <input type="text" name="prezime" id="prezime">
        <label for="jmbg">JMBG: </label>
        <input type="text" name="jmbg" id="jmbg">
        <label for="adresa">Adresa: </label>
        <input type="text" name="adresa" id="adresa">
        <input type="submit" value="Dodaj">
      </form>
    <?php } ?>
</body>
</html>
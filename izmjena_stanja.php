<?php

require_once "db.php";



if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $jmbg = intval($_POST['jmbg']);
  ?>
  <form action="dodavanje_racuna_db.php" method="POST">
    <input type="text" name="stanje">
    <input type="hidden" name="jmbg" value="<?php echo $jmbg;?>">
    <input type="submit" value="Dodaj racun">
  </form>
<?php } else if ($_SERVER['REQUEST_METHOD'] == 'GET'){
  $jmbg = intval($_GET['jmbg']);
  $racunId= intval($_GET['racunId']);
  $query = mysqli_query($conn, "SELECT * FROM racun WHERE racun.vlasnik_jmbg = $jmbg;");
  $rezultat = mysqli_fetch_assoc($query)['stanje'];

?>
<form action="izmjena_stanja_db.php" method="POST">
  <input type="text" name="stanje" value="<?php echo $rezultat?>">
  <input type="hidden" name="jmbg" value ="<?php echo $jmbg; ?>">
  <input type="hidden" name="racunId" value="<?php echo $racunId;?>">
  <input type="submit" value="Promijeni stanje">
</form>
<?php }?>


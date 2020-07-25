<?php

require_once "db.php";
$jmbg = intval($_GET['jmbg']);


$query = mysqli_query($conn, "SELECT vlasnik.ime, vlasnik.prezime, racun.stanje, racun.id FROM vlasnik,racun WHERE racun.vlasnik_jmbg = $jmbg AND vlasnik.jmbg=$jmbg;");

?>
<table>
  <tr>
    <th>Broj racuna</th>
    <th>Stanje na racunu</th>
  </tr>
<?php
while($rezultat = mysqli_fetch_assoc($query)){
  ?>
  <tr id="podaci">
    <td><?php echo $rezultat['id'];?></td>
    <td id="stanje"><?php echo $rezultat['stanje'];?></td>
    <td><a href="izmjena_stanja.php?jmbg=<?php echo $jmbg;?>&&racunId=<?php echo $rezultat['id'];?>" id="izmjena_stanja">Izmjena stanja</a></td>
    <td><a href="ukloni_racun.php?jmbg=<?php echo $jmbg;?>&&racunId=<?php echo $rezultat['id'];?>" class ="brisanje">Ukloni racun</a></td>
  </tr>
<?php } ?>
</table>
<br>
<form action="izmjena_stanja.php" method="POST">
  <input type="hidden" name="jmbg" value="<?php echo $jmbg;?>">
  <input type="submit" value="Dodaj racun">
</form>
<br>
<h3><a href="index.php">Pocetna</a><h3>

<script type="text/javascript">
  let brisanje = document.getElementsByClassName('brisanje');
  for (let i=0;i<brisanje.length;i++){
    brisanje[i].addEventListener('click',(e) => {
      confirm("Da li ste sigurni da zelite da obrisete racun?")?alert("Racun obrisan."):e.preventDefault();
    });
  }
</script>
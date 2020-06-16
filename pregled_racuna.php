<?php

require_once "db.php";
$jmbg = intval($_GET['jmbg']);


$query = mysqli_query($conn, "SELECT vlasnik.ime, vlasnik.prezime, racun.stanje FROM vlasnik,racun WHERE racun.vlasnik_jmbg = $jmbg AND vlasnik.jmbg=$jmbg;");

?>
<table>
  <tr>
    <th>Ime</th>
    <th>Prezime</th>
    <th>Stanje na racunu</th>
  </th>
<?php
if($rezultat = mysqli_fetch_assoc($query)){
  ?>
  <tr id="podaci">
    <td><?php echo $rezultat['ime'];?></td>
    <td><?php echo $rezultat['prezime'];?></td>
    <td id="stanje"><?php echo $rezultat['stanje'];?></td>
    <!-- <td><a href="izmjena_stanja.php?jmbg=<?php echo $jmbg;?>" id="izmjena_stanja">Izmjena stanja</a></td> -->
    <td><button value="izmjena_stanja" id="izmjena_stanja">Izmjena stanja</button></td>
  </tr>
</table>

<script type="text/javascript">
  document.getElementById('izmjena_stanja').addEventListener('click',(e) =>{
    let stanje = document.getElementById('stanje');
    let novo_dugme = document.createElement("a");
    novo_dugme.href = "izmjena_stanja.php";
    
  });
</script>

<?php } else {
  echo "Korisnik nema racun.";
}?>
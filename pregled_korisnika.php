<?php
require_once "db.php";

$query = mysqli_query($conn, "SELECT * FROM vlasnik");

while($red = mysqli_fetch_assoc($query)){
  ?>
  <tr>
    <td><?php echo $red['ime'];?></td>
    <td><?php echo $red['prezime'];?></td>
    <td><?php echo $red['adresa'];?></td>
    <td><a href="dodavanje_korisnika.php?jmbg=<?php echo $red['jmbg'];?>">Izmjena korisnika</a></td>
    <td><a href="brisanje_korisnika.php?jmbg=<?php echo $red['jmbg'];?>" id="brisanje">Ukloni korisnika</a></td>
  </tr>
<?php }?>
<head>
  <title>Pregled korisnika</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Pregled korisnika</h1>

  <table>
    <thead><h3>Korisnici</h3></thead>
    <tr>
      <th>Ime</th>
      <th>Prezime</th>
      <th>Adresa</th>
    </tr>
    <?php include "pregled_korisnika.php";?>
  </table>
  <hr>
  <h3><a href="dodavanje_korisnika.php">Dodaj korisnika</a></h3>

  <script type="text/javascript">
    let brisanje = document.getElementsByClassName('brisanje');
    for (let i=0;i<brisanje.length;i++){
      brisanje[i].addEventListener("click",(e) => {
        confirm("Da li ste sigurni da zelite da uklonite korisnika?")?alert("Korisnik obrisan."):e.preventDefault();
      });
    }
  </script>
</body>
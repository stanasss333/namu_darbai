<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bankas</title>
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
<?php include __DIR__ . '/menu.php' ?>
<table>
    <tr>
    <th>Vardas</th>
    <th>Pavarde</th>
    <th>Saskaitos Nr.</th>
    <th>Asmens kodas</th>
    <th>Suma</th>
    </tr>
    <?php foreach ($saskaitos as $saskaita) :?>
    <tr>
    <td><?=$saskaita['Vardas']?></td>
    <td><?=$saskaita['Pavarde']?></td>
    <td><?=$saskaita['SaskaitosNr.']?></td>
    <td><?=$saskaita['AsmensKodas']?></td>
    <td><?=$saskaita['Suma']?></td>
    <td><a href="?action=pridetilesu&id=<?= $saskaita['SaskaitosNr.'] ?>">Pridėti</a></td>
    <td><a href="?action=nuskaiciuotilesas&id=<?= $saskaita['SaskaitosNr.'] ?>">Išimti</a></td>
    <form action="?action=delete&id=<?= $saskaita['SaskaitosNr.'] ?>" method="post">
    <button type="submit">Istrinti saskaita</button>
    </form>
    </tr>
   <?php endforeach ?>
   </table>
    
</body>
</html>
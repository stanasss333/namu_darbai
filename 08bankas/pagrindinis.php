<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bankas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</head>
<style>
 table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #000000;
  text-align: center;
  padding: 8px;
}
tr:nth-child(odd) {
  background-color: #cc6699;
  border: 1px solid #000000;
}

tr:nth-child(even) {
  background-color: #999966;
  border: 1px solid #000000;
} 
</style>
<body>
<?php include __DIR__ . '/menu.php' ?>
<?php include __DIR__ . '/msg.php' ?>
<!-- https://tailwindcss.com/ -->
<div class="row">
<div class="col-2"></div>
<div class="col-11">
<table class="table">
    <tr class="row">
      <th class="col-2"></th>
      <th class="col-1">Vardas</th>
      <th class="col-1">Pavarde</th>
      <th class="col-2">Saskaitos Nr.</th>
      <th class="col-2">Asmens kodas</th>
      <th class="col-1">Suma</th>
      <th class="col-3">Valdymas</th>
    </tr>
    <?php
        usort($saskaitos, function($a, $b) {
            return $b['Suma'] <=> $a['Suma'];
        })
    ?>
    <?php foreach ($saskaitos as $saskaita) :?>
    <tr  class="row">
    
      <td class="col-2"></td>
      <td class="col-1"><?=$saskaita['Vardas']?></td>
      <td class="col-1"><?=$saskaita['Pavarde']?></td>
      <td class="col-2"><?=$saskaita['SaskaitosNr.']?></td>
      <td class="col-2"><?=$saskaita['AsmensKodas']?></td>
      <td class="col-1"><?=$saskaita['Suma']?></td>
      <td class="col-1"><a class="btn btn-success" href="?action=pridetilesu&id=<?= $saskaita['SaskaitosNr.'] ?>">Pridėti</a></td>
      <td class="col-1"><a class="btn btn-primary"  href="?action=nuskaiciuotilesas&id=<?= $saskaita['SaskaitosNr.'] ?>">Išimti</a></td>
      <td class="col-1">
        <form action="?action=delete&id=<?= $saskaita['SaskaitosNr.'] ?>" method="post">
          <button class="btn btn-danger" type="submit">Istrinti saskaita</button>
        </form>
      </td>
    </tr>
   <?php endforeach ?>
   </table>
   </div>
   </div>
</body>
</html>
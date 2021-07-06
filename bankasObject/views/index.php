<?php require DIR.'views/top.php' ?>
<?php require DIR.'views/menu.php' ?>
<?php include DIR.'views/msg.php' ?>

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
        });
    ?>
    <?php foreach ($saskaitos as $saskaita) :?>
    <tr  class="row">
      <td class="col-2"></td>
      <td class="col-1"><?=$saskaita['Vardas']?></td>
      <td class="col-1"><?=$saskaita['Pavarde']?></td>
      <td class="col-2"><?=$saskaita['SaskaitosNr.']?></td>
      <td class="col-2"><?=$saskaita['AsmensKodas']?></td>
      <td class="col-1"><?=number_format((float)$saskaita['Suma'], 2, '.','') ?></td>
      <td class="col-1"><a class="btn btn-success" href="<?= URL ?>pridetilesu/<?= $saskaita['SaskaitosNr.'] ?>">Pridėti</a></td>
      <td class="col-1"><a class="btn btn-primary"  href="<?= URL ?>nuskaiciuotilesas/<?= $saskaita['SaskaitosNr.'] ?>">Išimti</a></td>
      <td class="col-1">
        <form action="<?= URL ?>delete/<?= $saskaita['SaskaitosNr.'] ?>" method="post">
          <button class="btn btn-danger" type="submit">Istrinti saskaita</button>
        </form>
      </td>
    </tr>
   <?php endforeach ?>
   </table>
   </div>
   </div>
   <?php require DIR.'views/bottom.php' ?>
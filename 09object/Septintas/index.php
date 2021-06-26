<?php
require __DIR__.'/Grybas.php';
require __DIR__.'/Krepsys.php';


$krepsys = new Krepsys;
$kiekis = 0;
do {
    $grybas = new Grybas;
    if($grybas->valgomas && !$grybas->sukirmijes) {
        $kiekis += $grybas->svoris;
    } else {
        echo 'Nevalgomas ir sukirmijes';
        echo '<br>';
    }
    echo 'Pririnkta: '. $kiekis;
    echo '<br>';

} while ($krepsys->pririnkta() > $kiekis);
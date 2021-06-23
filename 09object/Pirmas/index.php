<?php
require __DIR__.'/Kibiras1.php';
$kibiras2 = new Kibiras1;
var_dump($kibiras2);
echo '<br>';
$kibiras2->prideti1Akmeni();
var_dump($kibiras2);
echo '<br>';
$kibiras2->pridetiDaugAkmenu(10);
var_dump($kibiras2);
$kibiras2->kiekPririnktaAkmenu();
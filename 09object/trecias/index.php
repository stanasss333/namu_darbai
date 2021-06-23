<?php

require __DIR__.'/Kibiras2.php';

$kibiras1 = new Kibiras2;
$kibiras2 = new Kibiras2;
$kibiras3 = new Kibiras2;
$kibiras1->prideti1Akmeni();
$kibiras2->prideti1Akmeni();
$kibiras3->prideti1Akmeni();
var_dump($kibiras1);
echo '<br>';
var_dump($kibiras2);
echo '<br>';
var_dump($kibiras3);
echo '<br>';
$kibiras1->pridetiDaugAkmenu(5);
$kibiras2->pridetiDaugAkmenu(6);
$kibiras3->pridetiDaugAkmenu(7);
var_dump($kibiras1);
echo '<br>';
var_dump($kibiras2);
echo '<br>';
var_dump($kibiras3);
echo '<br>';
_d($kibiras2::getAkmenuKiekisVisuoseKibiruose());

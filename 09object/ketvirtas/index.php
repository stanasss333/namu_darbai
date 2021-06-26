<?php
require __DIR__.'/Kibiras3.php';
require __DIR__.'/KibirasNePo1.php';

$kibiras = new KibirasNePo1;
$kibiras->prideti1Akmeni();
var_dump($kibiras);
echo '<br>';
$kibiras->pridetiDaugAkmenu(10);
var_dump($kibiras);
echo '<br>';
_d($kibiras->kiekPririnktaAkmenu());
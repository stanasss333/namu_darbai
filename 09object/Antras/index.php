<?php
require __DIR__.'/Pinigine.php';

$pinigine = new Pinigine;
var_dump($pinigine);
echo '<br>';
$pinigine->ideti(1);
var_dump($pinigine);
echo '<br>';
$pinigine->ideti(1000000);
var_dump($pinigine);
echo '<br>';
$pinigine->skaiciuoti();
//var_dump($pinigine);
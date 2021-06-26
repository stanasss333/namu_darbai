<?php
require __DIR__.'/Stikline.php';
$stikline1 = new Stikline(200);
$stikline2 = new Stikline(150);
$stikline3 = new Stikline(100);

$stikline1->ipilti(200);
var_dump($stikline1);
echo '<br>';
$stikline2->ipilti($stikline1->ispilti(200));
var_dump($stikline1);
echo '<br>';
var_dump($stikline2);
echo '<br>';
$stikline3->ipilti($stikline2->ispilti(150));
var_dump($stikline2);
echo '<br>';
var_dump($stikline3);
<?php


$hour = 20;

echo $hour."<br>";


$newHour = "0".$hour;
echo $newHour."<br>";
$goodHour = substr($newHour, -2);

echo $goodHour. ":". $goodHour;
// echo 1`{$goodHour} :  {$goodHour`;

<?php

echo 'Pirmas uzdavinys';
echo '<br>';

$masyvas = [];

foreach ($masyvas as $ind => $value) {
        //count($masyvas) = 30;
        //$ind = rand(0, 29);
        //$value = rand(5, 25); 
        array_push($masyvas, rand(5, 25));
        echo "$ind => $value".'<br>';
}
$masyvas = [];

for ($i=0; $i <= 30; $i++) { 
    array_push($masyvas, rand(5, 25));
    echo $masyvas[$i] .' ';
}
echo '<br>';
echo '<br>';

echo 'Antras uzdavinys';
echo '<br>';

$masyvas = [];

for ($i=0; $i <= 30; $i++) { 
    array_push($masyvas, rand(5, 25));
    echo $masyvas[$i] .' ';
}
echo '<br>';
echo '<br>';

echo 'A dalis';
echo '<br>';
$count = 0;
foreach ($masyvas as $skaicius) {
    if($skaicius > 10) {
        $count++;
    }
}
echo 'Skaiciu didesniu nei 10 yra: '. $count;
echo '<br>';
echo '<br>';

echo 'B dalis';
echo '<br>';
$max = 0;
foreach ($masyvas as $index => $value) {
    if($value > $max) {
         $max = $value;
    }
}
echo 'Didziausias skaicius yra: '."$index => $value".'<br>';
echo '<br>';
echo '<br>';

echo 'C dalis';
echo '<br>';
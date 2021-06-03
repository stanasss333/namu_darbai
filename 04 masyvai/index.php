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

for ($i=0; $i < 30; $i++) { 
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

foreach ($masyvas as $index => $value) {
    if($index % 2 == 0) {
         //$value++;
         $value = array_sum($masyvas);
    }
}
echo 'Poriniu indeksu suma: '. $value;
echo '<br>';
echo '<br>';

echo 'D dalis';
echo '<br>';
$naujasMasyvas = [];

for ($i=0; $i < 30; $i++) { 
    array_push($naujasMasyvas, ($masyvas[$i] - $i));
    echo $naujasMasyvas[$i] .' ';
}
echo '<br>';
echo '<br>';

echo 'E dalis';
echo '<br>';
$masyvas1 = [];
$skaiciai = '';
for ($i=0; $i < 10; $i++) { 
    array_push($masyvas1, rand(5, 25));
    echo $masyvas1[$i] .' ';
}
$skaiciai = implode(' ', array_merge($masyvas, $masyvas1));
echo $skaiciai;
echo '<br>';
echo '<br>';

echo 'F dalis';
echo '<br>';
$lyginiai = [];
$nelyginiai = [];
$skaiciai1 = explode(' ', $skaiciai);
for ($i=0; $i < count($skaiciai1); $i++) { 
    if($skaiciai1[$i] % 2 == 0) {
        array_push($lyginiai, $skaiciai1[$i]);
    }
    if($skaiciai1[$i] % 2 !== 0) {
        array_push($nelyginiai, $skaiciai1[$i]);
    }
}
echo 'Lyginiai';
echo '<br>';
for ($i=0; $i < count($lyginiai); $i++) { 
    echo  $lyginiai[$i].' ';
}
echo '<br>';
echo 'Nelyginiai';
echo '<br>';
for ($i=0; $i < count($nelyginiai); $i++) { 
    echo  $nelyginiai[$i].' ';
}
echo '<br>';
echo '<br>';

echo 'G dalis';
echo '<br>';

foreach ($masyvas as $index => $value) {
    if($index % 2 == 0) {
        if($masyvas[$i] > 15) {
            $masyvas[$i] = 0;
        }
    }
}
echo $masyvas[$i] .' ';
echo '<br>';
echo '<br>';

echo 'H dalis';
echo '<br>';
foreach ($masyvas as $index => $value) {
        if($masyvas[$i] > 10) {
            $index = array_search(min($masyvas), $masyvas);
        }
    
}
echo "$index => $value".'<br>';
echo '<br>';
echo '<br>';

echo 'I dalis';
echo '<br>';
foreach ($masyvas as $index => $value) {
    if($index % 2 == 0) {
            unset($masyvas[$i]);
            //$masyvas = array_values($masyvas);
            
    }
    $masyvas = array_values($masyvas);
    //echo "$index => $value".'<br>';
}
//$masyvas = array_values($masyvas);
print_r($masyvas);
echo '<br>';
echo '<br>';

echo 'Trecias uzdavinys';
echo '<br>';

$masyvas2 = [];
for ($i=0; $i < 200; $i++) { 
    $masyvas2[$i] = chr(rand(65, 68));
}
$raides = implode(' ', $masyvas2);
echo $raides;
echo '<br>';
echo 'A raidziu yra: ' . substr_count($raides, 'A') . '<br>'. 'B raidziu yra: ' . substr_count($raides, 'B') .'<br>';
echo 'C raidziu yra: ' . substr_count($raides, 'C') . '<br>'. 'D raidziu yra: ' . substr_count($raides, 'D') .'<br>';
echo '<br>';
echo '<br>';

echo 'Ketvirtas uzdavinys';
echo '<br>';
$masyvas2 = [];
for ($i=0; $i < 200; $i++) { 
    $masyvas2[$i] = chr(rand(65, 68));
}
sort($masyvas2);
foreach ($masyvas2 as $raide) {
    echo $raide;
}
echo '<br>';
echo '<br>';

echo 'Penktas uzdavinys';
echo '<br>';
$raides1 = [];
$raides2 = [];
$raides3 = [];
for ($i = 0; $i < 200; $i++) {
    $raides1[$i] = chr(rand(65, 68));
    $raides2[$i] = chr(rand(65, 68));
    $raides3[$i] = chr(rand(65, 68));
}
$visos = $raides1;
for ($i=0; $i < 200; $i++) { 
    $visos[$i] .= $raides2[$i] . $raides3[$i];
    echo $visos[$i] .' ';
}
echo '<br>';
$poViena = 0;
for ($i=0; $i < count($visos); $i++) { 
    $count = 0;
    for ($j=0; $j < count($visos); $j++) { 
        if($visos[$i] === $visos[$j]) {
            $count++;
        }
    }
    if($count == 1){
        $poViena++;
    }
}
$unikalios = array_unique($visos);
echo 'Variantu yra: '. count($unikalios). ' ';
echo '<br>';
echo 'Po viena yra: '. $poViena;
echo '<br>';
echo '<br>';

echo 'Sestas uzdavinys';
echo '<br>';
$array1 = [];
$array2 = [];
for ($i=0; $i < 100; $i++) { 
    $array1[$i] = rand(100, 999);
    $array2[$i] = rand(100, 999);
}
$unikalios1 = array_unique($array1);
$unikalios2 = array_unique($array2);
print_r($unikalios1);
echo '<br>';
echo '<br>';
print_r($unikalios2);
echo '<br>';
echo '<br>';

echo 'Septintas uzdavinys';
echo '<br>';
$naujasPirmo = $unikalios1;
print_r($naujasPirmo);
echo '<br>';
echo '<br>';

echo 'Astuntas uzdavinys';
echo '<br>';
$array1 = [];
$array2 = [];
for ($i=0; $i < 100; $i++) { 
    $array1[$i] = rand(100, 999);
    $array2[$i] = rand(100, 999);
}
$newArray = array_merge($array1, $array2);
print_r($newArray);
echo '<br>';
echo '<br>';

echo 'Devintas uzdavinys';
echo '<br>';
$array1 = [];
$array2 = [];
$array3 = [];
for ($i=0; $i < 100; $i++) { 
    $array1[$i] = rand(100, 999);
    $array2[$i] = rand(100, 999);
}

foreach ($array3 as $index => $value) {
    $index = $array1[$i];
    $value = $array2[$i];
}
print_r($array3);
echo '<br>';
for ($i=0; $i < 100; $i++) { 
    $array3[$array1[$i]] = $array2[$i];
}
print_r($array3);
echo '<br>';
echo '<br>';

echo 'Desimtas uzdavinys';
echo '<br>';
$array5 = [];
for ($i=0; $i < 10; $i++) { 
    if($i < 2) {
        $array5[$i] = rand(5, 25);
    } else {
        $array5[$i] = $array5[$i - 1] + $array5[$i - 2];
    }
    echo $array5[$i].' ';
}


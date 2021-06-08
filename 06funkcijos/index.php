<?php
echo '<br>';
echo '<br>';

echo 'Pirmas uzdavinys';
echo '<br>';
function vardas($par) {
    return '<h1>'. $par .'</h1>';
}
echo vardas('Jonas');
echo '<br>';
echo '<br>';

echo 'Antras uzdavinys';
echo '<br>';
function vardas1($par1, $par2) {
    return '<h'. $par2 .'>'. $par1 .'</h'. $par2 .'>';
}
echo vardas1('Jonas', rand(1, 6));
echo '<br>';
echo '<br>';

echo 'Trecias uzdavinys';
echo '<br>';
$string = md5(time());
echo 'Stringas yra: ' . $string;

function skaiciai($par) {
    $z = '<h1>' . $par . '</h1>';
    return $z;
}
$string = preg_replace('/\d+/', '', $string);
echo skaiciai($string);
echo '<br>';
echo '<br>';

echo 'Ketvirtas uzdavinys';
echo '<br>';

$skaicius = 10;

function kiekis($sk) {
    $kiekis = 0;
    $daliklis = 2;
    if (gettype($sk) != "integer") {
        return 'Tik sveiki skaiciai';
    }
    echo $sk;
    echo '<br>';
    while ($daliklis < $sk && $daliklis !== $sk) {
        if ($sk % $daliklis === 0) {
            echo "Daliklis : $daliklis.<br>";
            $kiekis++;
        }
        $daliklis++;
    }
    return 'Kiekis yra: '. $kiekis;
}
echo kiekis($skaicius);
echo '<br>';
echo '<br>';

echo 'Penktas uzdavinys';
echo '<br>';
$masyvas = [];
foreach (range(1, 100) as $key => $_) {
    $masyvas[$key] = rand(33, 77);
}
print_r($masyvas);
echo '<br>';
usort($masyvas, function($a, $b) {
    return kiekis($b) <=> kiekis($a);
});
print_r($masyvas);
echo '<br>';
echo '<br>';

echo 'Sestas uzdavinys';
echo '<br>';
$masyvas1 =[];
foreach (range(1, 100) as $key => $_) {
    $masyvas1[$key] = rand(333, 777);
}

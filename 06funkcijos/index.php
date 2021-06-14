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

function skaiciai(string|array $par) : string{
    if(is_array($par)) {
        $par = $par[0];
    }
    $z = '<h1 style=\"display:inline;\">' . $par . '</h1>';
    return $z;
}
$out = preg_replace_callback('/\d+/', 'skaiciai', $string);
echo $out;
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
foreach (range(1, 10) as $key => $_) {
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
//destytojo sprendimas
echo 'Penktas uzdavinys';
echo '<br>';
function divisor(int $digit) : int
{
    if ($digit === 0 || $digit === 1) {
        return 1;
    }
    if ($digit === 2) {
        return 0;
    }
    $divisors = range(2, $digit - 1);
    $divCounter = 0;
    foreach ($divisors as $div) {
        if ($digit % $div === 0) {
            $divCounter++;
        }
    }
    return $divCounter;
}

$mas100 = [];

foreach (range(1, 100) as $_) {
    $mas100[] = rand(33, 77);
}

usort($mas100, function($a, $b) {
    static $cache = [];

    if (!isset($cache[$a])) {
        $cache[$a] = divisor($a);
    }
    if (!isset($cache[$b])) {
        $cache[$b] = divisor($b);
    }
    return $cache[$b] <=> $cache[$a];
});

print_r($mas100);
echo '<br>';
echo '<br>';

echo 'Sestas uzdavinys';
echo '<br>';
$masyvas1 =[];
foreach (range(1, 10) as $key => $value) {
    $masyvas1[$key] = rand(333, 777);
}

function isprime($sk) {
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
}
foreach ($masyvas1 as $sk) {
    echo isprime($sk). ' ';
}
echo '<br>';
echo '<br>';

echo 'Septintas uzdavinys';
echo '<br>';
function genarray($count)
{   
    $counter = rand(10, 20);
    foreach (range(1, $counter - 1) as $num) {
        $mas[] = rand(0, 10);
    }
    $mas[] = 0;
    if ($count > 0) {
        $mas[$counter - 1] = genarray(--$count);
    }
    return $mas;
}
$arr = genarray(5);
print_r($arr);
echo '<br>';
echo '<br>';

echo 'Astuntas uzdavinys';
echo '<br>';
function sumRecursiveArray($mas)
{
    static $sum = 0;
    foreach ($mas as $value) {
        if (!is_array($value)) {
            $sum += $value;
        } else {
            sumRecursiveArray($value);
        }
    }
    return $sum;
}

print_r(sumRecursiveArray($arr));
echo '<br>';
echo '<br>';

echo 'Devintas uzdavinys';
echo '<br>';
$masyvas = [];
    foreach(range(1, 3) as $_) {
        $masyvas [] = rand(1, 33);
    }
    
    while (isPrime($masyvas[(count($masyvas) - 1)]) > 0 || 
           isPrime($masyvas[(count($masyvas) - 2)]) > 0 || 
           isPrime($masyvas[(count($masyvas) - 3)]) > 0) {
        $masyvas[] = rand(1, 33);
    }

    print_r($masyvas);
echo '<br>';
echo '<br>';

echo 'Desimtas uzdavinys';
echo '<br>';

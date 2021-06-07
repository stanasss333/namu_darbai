<?php
echo '<br>';
echo '<br>';

echo 'Pirmas uzdavinys';
echo '<br>';
$masyvas =[];
foreach (range(1, 10) as $keyBig => $_) {
    foreach (range(1, 5) as $keySmall => $_) {
        $masyvas[$keyBig][$keySmall] = rand(5, 25);
    }
}
print_r($masyvas);
echo '<br>';
echo '<br>';

echo 'Antras uzdavinys';
echo '<br>';
echo 'A dalis';
echo '<br>';
$masyvas =[];
$count = 0;
foreach (range(1, 10) as $keyBig => $_) {
    foreach (range(1, 5) as $keySmall => $_) {
        $masyvas[$keyBig][$keySmall] = rand(5, 25);
        if($masyvas[$keyBig][$keySmall] > 10) {
            $count++;
        }
    }
}
echo $count;
echo '<br>';
echo '<br>';
echo 'B dalis';
echo '<br>';
$max = 0;
foreach ($masyvas as $keyBig => $value) {
    foreach ($masyvas[$keyBig] as $keySmall => $value) {
        if($value > $max) {
            $max = $value;
        }
    }
}
echo $max ;
echo '<br>';
echo '<br>';
echo 'C dalis';
echo '<br>';

$suma = array_fill(0, 5, 0);
foreach ($masyvas as $key => $value) {
    foreach ($masyvas[$key] as $key => $value) {
        $suma[$key] += $value;
    }
}
print_r($suma);
echo '<br>';
echo '<br>';
echo 'D dalis';
echo '<br>';
foreach ($masyvas as &$value) {
    array_push($value, rand(5, 25));
    array_push($value, rand(5, 25));
}
unset($value);
print_r($masyvas);
echo '<br>';
echo '<br>';
echo 'E dalis';
echo '<br>';
$suma1 = array_fill(0, 10, 0);
foreach ($masyvas as $key => $value) {
    foreach ($masyvas[$key] as $value) {
        $suma1[$key] += $value;
    }
}
print_r($suma1);
echo '<br>';
echo '<br>';

echo 'Trecias uzdavinys';
echo '<br>';
$masyvas1 = [];
$abc = range('A', 'Z');
foreach (range(1, 10) as $keyBig => $_) {
    foreach (range(1, rand(2, 20)) as $keySmall => $_) {
        $masyvas1[$keyBig][$keySmall] = $abc[rand(0, 25)];
    }
}
sort($masyvas1);
print_r($masyvas1);
echo '<br>';
echo '<br>';

echo 'Ketvirtas uzdavinys';
echo '<br>';
usort($masyvas1, function($a, $b) {
    $ak = (int) in_array('K', $a);
    $bk = (int) in_array('K', $b);

    if ($ak + $bk == 1) {
    return $bk <=> $ak;
    }
    return count($a) <=> count($b);
});
print_r($masyvas1);
echo '<br>';
echo '<br>';

echo 'Penktas uzdavinys';
echo '<br>';
$masyvas2 = array_fill(0, 30, '');
    foreach ($masyvas2 as $key => $value1) {
        $masyvas2[$key] = ['user_id' => rand(1, 1000000), 'place_in_row' => rand(0, 100)];
    }
print_r($masyvas2);

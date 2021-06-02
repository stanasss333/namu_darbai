<style>
p {
    /* overflow-wrap: break-word; */
    word-break: break-all;
    display: inline-block;
}
</style>

<?php

echo '<br>';
echo '<br>';

echo 'Pirmas uzdavinys';
echo '<br>';
echo 'A dalis';
echo '<br>';

for ($i = 0; $i < 400; $i++) { 
    echo '<p>*</p>';
}
//$string = str_repeat('<p>*</p>', 400);
//echo $string;

echo '<br>';

//echo "<p>$string</p>";
echo 'B dalis';
echo '<br>';
$string1 = '<p>*</p>';
$simbolis = '';
for ($i = 0; $i < 8; $i++) {
    $count = 0;
    while ($count < 50) {
        $simbolis .= '*';
        $count++;
    }
    $simbolis .= '<br>';
}
echo "<p>$simbolis</p>";

echo '<br>';
echo '<br>';

echo 'Antras uzdavinys';
echo '<br>';


$count = 0;
for($i = 1; $i < 300; $i++) { 
    $skaicius = rand(0, 300);
    $color = '#000000'; 
    if($skaicius > 150) {
        $count++;
    }
    if($skaicius > 275) {
        $color = '#FF0000';
    }
    echo "<p style='color: $color'>$skaicius</p>";
}
echo '<br>';
echo $count;
echo '<br>';

echo '<br>';
echo '<br>';

echo 'Trecias uzdavinys';
echo '<br>';

$max = rand(3000, 4000);
echo $max;
echo '<br>';
$sk_str = '';
for ($i=1; $i <= $max; $i++) { 
    if($i % 77 == 0 ) {
        $sk_str .= strval($i) .','; 
    }
    if ($max - $i == 77) {
        $sk_str .= strval($i);
        break;
    }

}
echo $sk_str;

echo '<br>';
echo '<br>';

echo 'Ketvirtas uzdavinys';
echo '<br>';

$string = '';
for ($i=0; $i < 100; $i++) { 
    $count = 0;
    while($count < 100) { 
        $string .='*';
        $count++;
    }
    $string .= '<br>';
}
echo"<div style='color:green; line-height: 7px; font-size: 14px;'>$string</div>";

echo '<br>';
echo '<br>';

echo 'Penktas uzdavinys';
echo '<br>';
$plotis = 100;
for ($j = 0; $j < $plotis; $j++) {
    for ($i = 0; $i < $plotis; $i++) {
        if ($i === $plotis - $j - 1 || $j === $i) {
            echo "<span style='line-height: 3px; font-size: 16px; color: red;'>*</span>";
        } else {
            echo "<span style='line-height: 3px; font-size: 14px; color: green;'>*</span>";
        }
    }
    echo "<span style='font-size: 1px;'><br></span>";
}
echo '<br>';
echo '<br>';

echo 'Sestas uzdavinys';
echo '<br>';

echo 'A dalis';
echo '<br>';
$metimas = '';
while ($metimas !== 'H') {
    $metimas = rand(0, 1) === 0 ? 'H' : 'S';
    echo $metimas . ' ';
}
echo '<br>';
echo 'B dalis';
echo '<br>';

$metimas = '';
$herboCount = 0;
while ($herboCount !== 3) {
    $metimas = rand(0, 1) === 0 ? 'H' : 'S';
    $herboCount = $metimas === 'H' ? ++$herboCount : $herboCount;
    echo $metimas . ' ';
}
echo '<br>';
echo 'C dalis';
echo '<br>';
$metimas = '';
$herboCount = 0;
while ($herboCount !== 3) {
    $metimas = rand(0, 1) === 0 ? 'H' : 'S';
    $herboCount = $metimas === 'H' ? ++$herboCount : 0;
    echo $metimas . ' ';
}

echo '<br>';
echo '<br>';

echo 'Septintas uzdavinys';
echo '<br>';

$visiPetroTaskai = 0;
$visiKazioTaskai = 0;
$rezultatas = '';
$laimetojas = '';
while ($visiPetroTaskai < 222 && $visiKazioTaskai < 222)  {
    $petroTaskai = rand(10, 20);
    $kazioTaskai = rand(5, 25);
    $visiPetroTaskai += $petroTaskai;
    $visiKazioTaskai += $kazioTaskai;
    echo 'Petras: ' .$petroTaskai .'Kazys: ' .$kazioTaskai.'<br>';
    if($petroTaskai > $kazioTaskai) {
        $laimetojas = 'Petras';   
    } else {
        $laimetojas = $petroTaskai < $kazioTaskai ? 'Kazys' : 'Lygiosios';
    }
    if($laimetojas !== 'Lygiosios') {
        echo 'Laimetojas: ' .$laimetojas .'<br>';
    } else {
        echo 'Lygiosios<br>';
    }
    if($visiPetroTaskai >= 222 || $visiKazioTaskai >= 222) {
        if($visiPetroTaskai > $visiKazioTaskai) {
            $laimetojas = 'Petras';
        } else {
            $laimetojas = $visiPetroTaskai < $visiKazioTaskai ? 'Kazys' : 'Lygiosios';
        }
        if($laimetojas !== 'Lygiosios') {
            echo 'Laimetojas: ' .$laimetojas .'<br>';
        } else {
            echo 'Lygiosios<br>';
        }
    }
    
}

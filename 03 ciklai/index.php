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






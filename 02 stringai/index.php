<?php

echo 'Pirmas uzdavinys';
echo '<br>';

$vardas = 'Petras';
$pavarde = 'Petraitis';

if(strlen($vardas) < strlen($pavarde)) {
    echo $vardas;
} elseif (strlen($pavarde) < strlen($vardas)) {
    echo $pavarde;
}

echo '<br>';
echo '<br>';

echo 'Antras uzdavinys';
echo '<br>';

$vardas1 = 'Antanas';
$pavarde1 = 'Antanaitis';

echo strtoupper($vardas1);
echo '<br>';
echo strtolower($pavarde1);
echo '<br>';

echo '<br>';
echo '<br>';

echo 'Trecias uzdavinys';
echo '<br>';

$vardas2 = 'Jonas';
$pavarde2 = 'Jonaitis';
$inicialai = substr($vardas2, 0, 1) .'.'. substr($pavarde2, 0, 1);
echo $inicialai;
echo '<br>';

echo '<br>';
echo '<br>';

echo 'Ketvirtas uzdavinys';
echo '<br>';

$vardas3 = 'Jonas';
$pavarde3 = 'Jonaitis';
$naujasString = substr($vardas3, 2, 5) . substr($pavarde3, 5, 8);
echo $naujasString;

echo '<br>';
echo '<br>';

echo 'Penktas uzdavinys';
echo '<br>';

$string = 'An American in Paris';
echo str_replace('a', '*', strtolower($string));
echo '<br>';

echo '<br>';
echo '<br>';

echo 'Sestas uzdavinys';
echo '<br>';

$string1 = 'An American in Paris';
echo substr_count(strtolower($string1), 'a');
echo '<br>';

echo '<br>';
echo '<br>';

echo 'Septintas uzdavinys';
echo '<br>';

$string2 = 'An American in Paris';
$balses = array('a', 'e', 'i', 'y', 'o', 'u', 'A', 'E', 'I', 'Y', 'O', 'U');
echo str_replace($balses, '', $string2);
echo '<br>';
$string3 = "Breakfast at Tiffany's";
echo str_replace($balses, '', $string3);
echo '<br>';
$string4 = '2001: A Space Odyssey';
echo str_replace($balses, '', $string4);
echo '<br>';
$string5 = "It's a Wonderful Life";
echo str_replace($balses, '', $string5);

echo '<br>';
echo '<br>';

echo 'Astuntas uzdavinys';
echo '<br>';

$epizodas = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
preg_match_all('!\d+!', $epizodas, $epizodoNumeris);
echo 'Epizodo numeris: ' . $epizodoNumeris[0][0];
echo '<br>';

echo '<br>';
echo '<br>';

echo 'Devintas uzdavinys';
echo '<br>';

$string6 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$words = explode(' ', $string6);
$arrayLength = count($words);
$count = 0;
for ($i = 0; $i < $arrayLength; $i++) { 
    echo $words[$i];
    echo '<br>';

    if(strlen($words[$i]) <= 5) {
        $count++;
      
    }
}
echo $count;
echo '<br>';
echo '<br>';
$string7 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
$words1 = explode(' ', $string7);
$arrayLength1 = count($words1);
$count1 = 0;
for ($i = 0; $i < $arrayLength1; $i++) { 
    echo $words1[$i];
    echo '<br>';

    if(strlen($words1[$i]) <= 5) {
        $count1++;
      
    }
}
echo $count1;

echo '<br>';
echo '<br>';

echo 'Desimtas uzdavinys';
echo '<br>';

$lotynuAbecele = 'abcdefghijklmnopqrstuvwxyz';

echo substr(str_shuffle($lotynuAbecele), 0, 3);

echo '<br>';
echo '<br>';

echo 'Vienuoliktas uzdavinys';
echo '<br>';

$string8 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood"; 
$string9 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
// $words2 = array_merge(explode(' ', $string8), explode(' ', $string9)); 
$words2 = explode(' ', $string8." ".$string9); 
$words2Length = 10;
shuffle($words2);

//print_r( array_slice( $words2, 0, 10)  );

$result = "";
for ($i = 0; $i < $words2Length; $i++) { 
    //   echo '<br>';
      $result.= $words2[   rand(0,  count($words2)-1)    ]." ";
        // echo $words2[   rand(0,  count($words2)-1)    ];
      

      
}
//echo $result."<br>";

$wordsUnique10 = array_slice( $words2, 0, 10);
$result = "";
for ($i=0; $i < count($wordsUnique10) ; $i++) { 
    $result.= $wordsUnique10[$i]." ";
}
echo $result;

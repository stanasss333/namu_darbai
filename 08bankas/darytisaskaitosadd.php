<?php
 $vardas =['Jonas', 'Petras', 'Antanas'];
 $pavarde =['Jonaitis', 'Petraitis', 'Antanaitis'];
 $year = rand(0, 99);
 $newYear = '0'.$year;
 $goodYear = substr($newYear, -2);

 $month = rand(1, 12);
 $newMonth = '0'.$month;
 $goodMonth = substr($newMonth, -2);
 
 if($month % 2 == 0 || $month == 9 || $month == 11){
     if($month == 2) {
        $day == rand(1, 28);
     }
    $day = rand(1, 30);
 } 
 if($month % 2 !== 0 || $month == 8 || $month == 10 || $month == 12) {
    $day = rand(1, 31);
 }
 $newDay = '0'.$day;
 $goodDay = substr($newDay, -2);
    

 
$saskaita =['Vardas' => $vardas[rand(0, count($vardas)-1)], 'Pavarde' => $pavarde[rand(0, count($pavarde)-1)], 'SaskaitosNr.' => 'LT'. rand(100000000000000000, 999999999999999999), 'AsmensKodas' => '3'. $goodYear. $goodMonth. $goodDay. rand(1000, 9999), 'Suma' => 0];
$saskaitos[] = $saskaita;
file_put_contents(__DIR__.'/saskaitos.json', json_encode($saskaitos));
setMessage('Nauja saskaita sukurta');
redirect();
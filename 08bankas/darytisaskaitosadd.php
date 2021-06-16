<?php
 $vardas =['Jonas', 'Petras', 'Antanas'];
 $pavarde =['Jonaitis', 'Petraitis', 'Antanaitis'];
$saskaita =['Vardas' => $vardas[rand(0, count($vardas)-1)], 'Pavarde' => $pavarde[rand(0, count($pavarde)-1)], 'SaskaitosNr.' => 'LT'. rand(10000000, 99999999), 'AsmensKodas' => rand(100000, 900000), 'Suma' => 0];
$saskaitos[] = $saskaita;
file_put_contents(__DIR__.'/saskaitos.json', json_encode($saskaitos));
redirect();
<?php

$darbuotojai = [
    ['name' => 'Maryte', 'pass' => md5('123')],
    ['name' => 'Vladas', 'pass' => md5('124')],
    ['name' => 'Erikas', 'pass' => md5('125')],
];

file_put_contents(__DIR__.'/darbuotojai.json', json_encode($darbuotojai));
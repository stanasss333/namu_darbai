<?php
$id = $_GET['SaskaitosNr.'] ?? 0;
foreach ($saskaitos as $index => $saskaita) {
    if ($saskaita['SaskaitosNr.'] == $id) {
        unset($saskaitos[$index]);
        file_put_contents(__DIR__.'/saskaitos.json', json_encode($saskaitos));
        redirect();
    }
}
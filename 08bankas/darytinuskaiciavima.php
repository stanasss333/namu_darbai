<?php
$id = $_GET['Saskaitos Nr.'] ?? 0;
foreach ($saskaitos as &$saskaita) {
    if ($saskaita['SaskaitosNr.'] == $id) {
        $saskaita['Suma'] -= (int) $_POST['Suma'];
        file_put_contents(__DIR__.'/saskaitos.json', json_encode($saskaitos));
        redirect();
    }
}
<?php

$id = $_GET['id'] ?? 0;
foreach ($saskaitos as &$saskaita) {
    if ($saskaita['SaskaitosNr.'] == $id) {
        $saskaita['Suma'] += (int) $_POST['suma'];
        file_put_contents(__DIR__.'/saskaitos.json', json_encode($saskaitos));
        setMessage($_POST['suma'].' Pinigai pridėti');
        redirect();
    }
}
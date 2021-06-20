<?php
$id = $_GET['id'] ?? 0;
foreach ($saskaitos as &$saskaita) {
    if ($saskaita['SaskaitosNr.'] == $id) {
        if ($saskaita['Suma'] < (int) $_POST['suma']) {
            setMessage('Tiek lesu nėra.');
            redirectToAction('nuskaiciuotilesas', $id);
        }
        $saskaita['Suma'] -= (int) $_POST['suma'];
        file_put_contents(__DIR__.'/saskaitos.json', json_encode($saskaitos));
        redirect();
    }
}
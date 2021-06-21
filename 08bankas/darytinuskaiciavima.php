<?php
$id = $_GET['id'] ?? 0;
foreach ($saskaitos as &$saskaita) {
    if ($saskaita['SaskaitosNr.'] == $id) {
        if ($saskaita['Suma'] < (float) $_POST['suma']) {
            setMessage('Tiek lesu nėra.');
            redirectToAction('nuskaiciuotilesas', $id);
        }
        if( (float) $_POST['suma'] < 0) {
            setMessage('Pinigai neigiami negali buti');
            redirectToAction('nuskaiciuotilesas', $id);
        }
        $saskaita['Suma'] -= (float) $_POST['suma'];
        file_put_contents(__DIR__.'/saskaitos.json', json_encode($saskaitos));
        setMessage($_POST['suma'] .'Pinigai isimti');
        redirect();
    }
}
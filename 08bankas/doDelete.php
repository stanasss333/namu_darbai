<?php
$id = $_GET['id'] ?? 0;
foreach ($saskaitos as $index => $saskaita) {
    if ($saskaita['SaskaitosNr.'] == $id) {
        if($saskaita['Suma'] == 0) {
            unset($saskaitos[$index]);
            setMessage('Saskaita istrinta');
        } elseif ($saskaita['Suma'] > 0) {
            setMessage('Saskaitoje dar yra lesu');
        }
        
        file_put_contents(__DIR__.'/saskaitos.json', json_encode($saskaitos));
        redirect();
    }
}
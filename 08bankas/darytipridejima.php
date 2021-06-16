<?php
// echo"atejau";

$id = $_GET['id'] ?? 0;
// echo $id;
// echo $_GET['id'];
// print_r( $_GET);
// die;
foreach ($saskaitos as &$saskaita) {
    if ($saskaita['SaskaitosNr.'] == $id) {
        echo "dfs";
        $saskaita['Suma'] += (int) $_POST['suma'];
        file_put_contents(__DIR__.'/saskaitos.json', json_encode($saskaitos));
        redirect();
    }
}
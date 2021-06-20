<?php
session_start();
function redirect() {
    header('Location: http://localhost/namu_darbai/08bankas/');
    die;
}
function redirectToAction($action, $id = 0) 
{
    if ($id) {
        header('Location: http://localhost/namu_darbai/08bankas/?action='.$action.'&id='.$id);
    }
    else {
        header('Location: http://localhost/namu_darbai/08bankas/?action='.$action);
    }
    die;
}
function getMessage()
{
    if (!isset($_SESSION['msg'])) {
        return false;
    }
    $msg = $_SESSION['msg'];
    unset($_SESSION['msg']);
    return $msg;
}
function setMessage(string $msg)
{
    $_SESSION['msg'] = $msg;
}

// box ['id' => 25, 'amount' => 258]

if (!file_exists(__DIR__.'/saskaitos.json')) {
    file_put_contents(__DIR__.'/saskaitos.json', json_encode([]));
}
$saskaitos = json_decode( file_get_contents(__DIR__.'/saskaitos.json'), 1);
//

//Routerio Prosenelis

// 1. Agurku deziu saraso atvaizdavimas GET
if (!isset($_GET['action']) && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/pagrindinis.php';
}

// 2. Pridejimo atvaizdavimas GET
elseif ($_GET['action'] == 'pridetilesu' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/pridetilesu.php';
}

// 3. Pridejimo vykdymas POST
elseif ($_GET['action'] == 'pridetilesu' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/darytipridejima.php';
}

// 4. Isemimo atvaizdavimas GET
elseif ($_GET['action'] == 'nuskaiciuotilesas' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/nuskaiciuotilesas.php';
}

// 5. Isemimo vykdymas POST
elseif ($_GET['action'] == 'nuskaiciuotilesas' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/darytinuskaiciavima.php';
}

// 6. Naujos dezes pridejimo atvaizdavimas GET
elseif ($_GET['action'] == 'prideti-saskaita' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/pridetiSaskaita.php';
}

// 7. Naujos dezes pridejimo vykdymas POST
elseif ($_GET['action'] == 'prideti-saskaita' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/darytisaskaitosadd.php';
}

// 8. Dezes trynimo vykdymas POST
elseif ($_GET['action'] == 'delete' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/doDelete.php';
}
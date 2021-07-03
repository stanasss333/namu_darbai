<?php

class App implements Planas {

    public static function start()
    {
        ob_start();
        self::router();
        ob_end_flush();
    }

    public static function view($file, $data = [])
    {
        extract($data);
        require DIR.'views/'.$file.'.php';
    }
    function redirect() {
        header('Location: http://localhost/namu_darbai/bankasObject/');
        die;
    }
    function redirectToAction($action, $id = 0) 
    {
        if ($id) {
            header('Location: http://localhost/namu_darbai/bankasObject/?action='.$action.'&id='.$id);
        }
        else {
            header('Location: http://localhost/namu_darbai/bankasObject/?action='.$action);
        }
        die;
    }

    private static function router()
    {
        $uri = str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']);
        $uri = explode('/', $uri);

        if ($uri[0] == 'testas' && isset($uri[1])) {
            return (new SaskaitosController)->saskaituTest($uri[1]);
        }
        if ($uri[0] === '' && count($uri) === 1) {
            return (new SaskaitosController)->index();
        }
        if ($uri[0] == 'testas' && isset($uri[1])) {
            return (new LoginController)->loginTest($uri[1]);
        }
        if ($uri[0] === '' && count($uri) === 1) {
            return (new LoginController)->login();
        }
        // 1. Agurku deziu saraso atvaizdavimas GET
        if (!isset($_GET['action']) && $_SERVER['REQUEST_METHOD'] == 'GET') {
            require DIR.'pagrindinis.php';
        }

        // 2. Pridejimo atvaizdavimas GET
        elseif ($_GET['action'] == 'pridetilesu' && $_SERVER['REQUEST_METHOD'] == 'GET') {
            require DIR.'pridetilesu.php';
        }

        // 3. Pridejimo vykdymas POST
        elseif ($_GET['action'] == 'pridetilesu' && $_SERVER['REQUEST_METHOD'] == 'POST') {
            require DIR.'darytipridejima.php';
        }

        // 4. Isemimo atvaizdavimas GET
        elseif ($_GET['action'] == 'nuskaiciuotilesas' && $_SERVER['REQUEST_METHOD'] == 'GET') {
            require DIR.'nuskaiciuotilesas.php';
        }

        // 5. Isemimo vykdymas POST
        elseif ($_GET['action'] == 'nuskaiciuotilesas' && $_SERVER['REQUEST_METHOD'] == 'POST') {
            require DIR.'darytinuskaiciavima.php';
        }

        // 6. Naujos dezes pridejimo atvaizdavimas GET
        elseif ($_GET['action'] == 'prideti-saskaita' && $_SERVER['REQUEST_METHOD'] == 'GET') {
            require DIR.'pridetiSaskaita.php';
        }

        // 7. Naujos dezes pridejimo vykdymas POST
        elseif ($_GET['action'] == 'prideti-saskaita' && $_SERVER['REQUEST_METHOD'] == 'POST') {
            require DIR.'darytisaskaitosadd.php';
        }

        // 8. Dezes trynimo vykdymas POST
        elseif ($_GET['action'] == 'delete' && $_SERVER['REQUEST_METHOD'] == 'POST') {
            require DIR.'doDelete.php';
        }
       
        self::view('404');
        http_response_code(404);
        
    }
}
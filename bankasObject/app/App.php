<?php

namespace Bankas;

class App {

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

    public static function redirect($path = '') 
    {
        header('Location: '.URL.$path);
        die;
    }

    private static function router()
    {
        //$uri = str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']);
        $uri = $_SERVER['REQUEST_URI'];
        $uri = explode('/', $uri);
        array_shift($uri);

        

        // 1. Agurku deziu saraso atvaizdavimas GET
        //if (!isset($_GET['action']) && $_SERVER['REQUEST_METHOD'] == 'GET') {
          //  self::view('pagrindinis');
        //}
        // 6. Naujos dezes pridejimo atvaizdavimas GET
        if ('prideti-saskaita' == $uri[0]) {
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                
                //return (new SaskaitosController)->create();
            }
            else {
                // 7. Naujos dezes pridejimo vykdymas POST
                return (new SaskaitosController)->save();
            }
        }

        // 2. Pridejimo atvaizdavimas GET 
        if ('pridetilesu' == $uri[0] && isset($uri[1])) {
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                return (new SaskaitosController)->add($uri[1]);
            }
            else {
                // 3. Pridejimo vykdymas POST
                return (new SaskaitosController)->doAdd($uri[1]);
            }
        }

        // 4. Isemimo atvaizdavimas GET
        
        if ('nuskaiciuotilesas' == $uri[0] && isset($uri[1])) {
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                return (new SaskaitosController)->remove($uri[1]);
            }
            else {
                // 5. Isemimo vykdymas POST
                return (new SaskaitosController)->doRemove($uri[1]);
            }
        }

        // 8. Dezes trynimo vykdymas POST
        if ('delete' == $uri[0] && isset($uri[1]) && 'POST' == $_SERVER['REQUEST_METHOD']) {
            return (new SaskaitosController)->delete($uri[1]);
        }

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
       
        self::view('404');
        http_response_code(404);
        
    }
}
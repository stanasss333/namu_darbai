<?php

class SaskaitosController {


    public function saskaituTest($wahatToSay)
    {
        $labas = 'Hello, little One';
        return App::view('test', compact('wahatToSay', 'labas'));
    }

    public function index()
    {
        return App::view('pagrindinis');
    }


}
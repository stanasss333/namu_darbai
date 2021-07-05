<?php
namespace Login;
use Plan2\Planas2;

class LoginController implements Planas2{

    public function loginTest($kaSakai) {
        $labas = 'Cia tu?';
        return App::view('testLg', compact('kaSakai', 'labas'));
    }

    public function login() {
        return App::view('login');
    }
}
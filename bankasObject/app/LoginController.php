<?php
namespace Login;

class LoginController {

    public function loginTest($kaSakai) {
        $labas = 'Cia tu?';
        return App::view('testLg', compact('kaSakai', 'labas'));
    }

    public function login() {
        return App::view('login');
    }
}
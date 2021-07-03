<?php

namespace Plan;

interface Planas {
    function start();
    function view($file, $data);
    function router();
    function saskaituTest($wahatToSay);
    function index();
    function loginTest($kaSakai);
    function login();
}
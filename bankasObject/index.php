<?php
define('ENTER', true);
require __DIR__ .'/Planas.php';
require __DIR__ . '/bootstrap.php';

// Controllers
require DIR.'app/SaskaitosController.php';
require DIR.'app/LoginController.php';

// App
require DIR.'app/App.php';

App::start();
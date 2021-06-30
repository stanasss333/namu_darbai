<?php
define('ENTER', true);
require __DIR__ . '/bootstrap.php';

// Controllers
require DIR.'app/SaskaitosController.php';

// App
require DIR.'app/App.php';

App::start();
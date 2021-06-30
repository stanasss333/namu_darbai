<?php
defined('ENTER') || die;
session_start();
define('DIR', __DIR__.'/');
define('URL', 'http://localhost/namu_darbai/bankasObject/');
define('INSTALL_DIR', '/namu_darbai/bankasObject/');

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
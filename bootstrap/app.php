<?php

//require_once MEMOIR_PATH . '/system/initial/Autoload.php';
//
//$app = require_once MEMOIR_PATH . '/config/app.php';
//
//require_once MEMOIR_PATH . '/routes/route.php';

$url = $_SERVER['REQUEST_URI'];
if ($url === '/') {
    $url = 'index';
}
require_once MEMOIR_PATH . '/resources/views/' . "$url" . '.sword.php';

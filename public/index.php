<?php

//
// Get the URI path
//
$path = parse_url($_SERVER['REQUEST_URI'])['path'];
$scriptName = dirname($_SERVER['SCRIPT_NAME']);
$scriptName = dirname($scriptName);
$len = strlen($scriptName);
if ($len > 0 && $scriptName !== '/') {
    $path = substr($path, $len);
}

require_once __DIR__ . '/../controller.php';

header("HTTP/1.0 404 Not Found");
echo '404 Not Found';
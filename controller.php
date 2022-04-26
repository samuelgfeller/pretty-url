<?php
/**
 * Routing and Dispatching
 * @var string $path part of the link after domain name
 */

if ($path === '/') {
    require __DIR__ . '/templates/home.html.php';
    exit;
}
if ($path === '/user') {
    require __DIR__ . '/templates/user.html.php';
    exit;
}
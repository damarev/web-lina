<?php

require_once "inc/_functions.php";

if (isDev()) {
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
}

$route = getRouteFromPath(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

if (array_key_exists($route, $routes)) {
    include 'inc/_header.php';
    include "pages/{$route}.php";
    include 'inc/_footer.php';
    exit;
}

// dd(array_key_exists($route, $proyectos));

if (array_key_exists($route, $proyectos)) {
    include 'inc/_header.php';
    include "pages/proyectos/{$route}.php";
    include 'inc/_footer.php';
    exit;
}

header("HTTP/1.0 404 Not Found");
echo '404 Not Found';

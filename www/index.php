<?php

require_once "inc/_functions.php";

$route = getRouteFromPath(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

if(!array_key_exists($route, $routes)) {
    header("HTTP/1.0 404 Not Found");
    echo '404 Not Found';
    die();
}

include 'inc/_header.php';
include "pages/{$route}.php";
include 'inc/_footer.php';

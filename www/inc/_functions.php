<?php

$routes = [
	'home' => 'Home',
	'about' => 'About',
	'proyectos' => 'Proyectos',
	'exposiciones' => 'Exposiciones',
	'ferias-y-festivales' => 'Ferias y Festivales',
	'menciones' => 'Menciones y reconocimientos',
	'publicaciones' => 'Publicaciones',
	// 'talleres' => 'Talleres',
	'contacto' => 'Contacto',
];

$proyectos = [
	"el-telart" => ["El Telart", "/img/p/el-telart-lina-avila.jpg"],
	"amar-en-tiempo-perdido" => ["Amar en tiempo perdido", "/img/p/amar-tiempo-perdido-lina-avila.jpg"],
	"una-balada-melancolica" => ["Balada melancólica", "/img/p/balada-melancolica-lina-avila.jpg"],
	"5cm-s" => ["5cm/s", "/img/p/5cm-s-lina-avila.jpg"],
	"los-4-elementos" => ["Los 4 elementos", "/img/p/cuatro-elementos-lina-avila.jpg"],
	"difficult-loves" => ["Difficult loves", "/img/p/difficult-loves-lina-avila.jpg"],
	"cartas-desde-america" => ["Cartas desde América", "/img/p/cartas-desde-america-lina-avila.jpg"],
	"entrelineas" => ["Entre líneas", "/img/p/entrelineas-lina-avila.jpg"],
	"antifemina" => ["Antifémina", "/img/p/antifemina-lina-avila.jpg"],

	// "a-lo-lejos-huele-a-mar" => ["A lo lejos huele a mar", "a-lo-lejos-huele-a-mar-lina-avila.jpg"],
	// "abrazar" => ["Abraza", "abrazar_lina_avila.jpg"],
	// "balada-otono" => ["Balada de otoño", "balada-otono-lina-avila.jpg"],
	// "casa" => ["Casa", "casa_lina_avila.jpg"],
];


function getRouteFromPath($path)
{
    $path = ltrim($path, '/');
    if($path == '') return 'home';
    return $path;
}

function route($slug)
{
	if($slug == 'home') return '/';
    return "/{$slug}";
}

function is_current_page($slug)
{
	global $route;
    return $route === $slug;
}

function get_page_title()
{
	global $route, $routes;
    return $routes[$route] . ' - Lina Ávila';
}

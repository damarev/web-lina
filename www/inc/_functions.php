<?php

$routes = [
	'home' => ['Home'],
	'about' => ['About'],
	'proyectos' => ['Proyectos'],
	'exposiciones' => ['Exposiciones'],
	'ferias-y-festivales' => ['Ferias y Festivales'],
	'menciones' => ['Menciones'],
	'reconocimientos' => ['Reconocimientos'],
	'publicaciones' => ['Publicaciones'],
	'talleres' => ['Talleres'],
	'contacto' => ['Contacto'],
];

$proyectos = [
	"amar-en-tiempo-perdido" => ["Amar en tiempo perdido", "/img/proyectos/amar-tiempo-perdido-lina-avila.jpg"],
	"remiendo" => ["Remiendo", "/img/proyectos/el-telart-lina-avila.jpg"],
	"el-hilo-de-la-memoria" => ["El hilo de la memoria", "/img/proyectos/hilo-de-memoria.jpg"],
	"una-balada-melancolica" => ["Una balada melancólica", "/img/proyectos/balada-melancolica-lina-avila.jpg"],
	"5-cm-s" => ["5cm/s", "/img/proyectos/5cm-s-lina-avila.jpg"],
	"en-conflicto" => ["En conflicto", "/img/proyectos/en-conflicto-lina-avila.jpg"],
	"los-cuatro-elementos" => ["Los cuatro elementos", "/img/proyectos/cuatro-elementos-lina-avila.jpg"],
	"difficult-loves" => ["Difficult loves", "/img/proyectos/difficult-loves-lina-avila.jpg"],
	"entre-lineas" => ["Entre líneas", "/img/proyectos/entrelineas-lina-avila.jpg"],
	"antifemina" => ["Antifémina", "/img/proyectos/antifemina-lina-avila.jpg"],
	"postcard" => ["Postcard", "/img/proyectos/casa_lina_avila.jpg"],
	"a-lo-lejos-huele-a-mar" => ["A lo lejos huele a mar", "/img/proyectos/a-lo-lejos-huele-a-mar-lina-avila.jpg"],
	// "cartas-desde-america" => ["Cartas desde América", "/img/proyectos/cartas-desde-america-lina-avila.jpg"],
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
	global $route, $routes, $proyectos;
	if(isset($routes[$route])) {
		return $routes[$route][0] . ' - Lina Ávila';
	}
	if(isset($proyectos[$route])) {
		return $proyectos[$route][0] . ' - Lina Ávila';
	}
	return '';
}

function dd($var)
{
	echo "<pre>";
	var_dump($var);
	echo "</pre>";
	die;
}

function svg($name, $class = '')
{
	$content = file_get_contents(__DIR__ . "/../img/icon/{$name}.svg");
	$svg = str_replace('{class}', $class, $content);
	return $svg;
}

function buffer($path, $data = [])
{
	extract($data);
	ob_start();
	include($path);
	$content = ob_get_contents(); # $content now contains anything that has been output already
	ob_end_clean();
	return $content;
}

function navProyects($current)
{
	global $proyectos;

	$keys     = array_keys($proyectos);
    $position = array_search($current, $keys);

	$prevIndex = $position - 1;
	$nextIndex = $position + 1;

	if($prevIndex < 0) {
		$prevIndex = count($keys) - 1;
	}

	if($nextIndex >= count($keys)) {
		$nextIndex = 0;
	}

	$data = [
		'prevUrl' => route($keys[$prevIndex]),
		'nextUrl' => route($keys[$nextIndex]),
	];

	$content = buffer(__DIR__ . "/./_nav-proyects.php", $data);
	return $content;
}

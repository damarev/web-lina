<?php

$menuItems = [
	'index' => 'Home',
	'about' => 'About',
	'proyectos' => 'Proyectos',
	'exposiciones' => 'Exposiciones',
	'festivales' => 'Ferias y Festivales',
	'menciones' => 'Menciones y reconocimientos',
	'publicaciones' => 'Publicaciones',
	// 'talleres' => 'Talleres',
	'contacto' => 'Contacto',
];

$proyectos = [
	"5cm-s" => ["5cm/s", "5cm-s-lina-avila.jpg"],
	"a-lo-lejos-huele-a-mar" => ["A lo lejos huele a mar", "a-lo-lejos-huele-a-mar-lina-avila.jpg"],
	"abrazar" => ["Abraza", "abrazar_lina_avila.jpg"],
	"amar-tiempo-perdido" => ["Amar tiempo perdido", "amar-tiempo-perdido-lina-avila.jpg"],
	"antifemina" => ["Antifémina", "antifemina-lina-avila.jpg"],
	"balada-melancolica" => ["Balada Melancólica", "balada-melancolica-lina-avila.jpg"],
	"balada-otono" => ["Balada de otoño", "balada-otono-lina-avila.jpg"],
	"cartas-desde-america" => ["Cartas desde América", "cartas-desde-america-lina-avila.jpg"],
	"casa" => ["Casa", "casa_lina_avila.jpg"],
	"cuatro-elementos" => ["Cuatro elementos", "cuatro-elementos-lina-avila.jpg"],
	"difficult-loves" => ["Difficult loves", "difficult-loves-lina-avila.jpg"],
	"el-telart" => ["El Telart", "el-telart-lina-avila.jpg"],
	"entrelineas" => ["Entre líneas", "entrelineas-lina-avila.jpg"],
];


$page = pathinfo($_SERVER['SCRIPT_FILENAME'], PATHINFO_FILENAME);

function route($slug)
{
    return "{$slug}.php";
}

function is_current($slug)
{
	global $page;
    return $page == $slug;
}

function render_is_current($slug)
{
    echo is_current($slug) ? 'selected' : '';
}

function getPageTitle()
{
	global $page, $menuItems;
    return $menuItems[$page];
}

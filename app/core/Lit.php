<?php


require_once VENDORPATH.'/twig/twig/lib/Twig/Autoloader.php';

spl_autoload_register(function ($class_name) {
        include APPLICATIONPATH.'/controller/' . $class_name . '.php';
});

$_SERVER['REQUEST_URI_PATH'] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', $_SERVER['REQUEST_URI_PATH']);
$controller  = ucfirst($segments[1]);
$method  = $segments[2];
$arguments  = array_slice($segments, 3);



$obj = new $controller();
$obj->$method($arguments);

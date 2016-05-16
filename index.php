<?php 

spl_autoload_register(function ($class_name) {
        include 'app/controller/' . $class_name . '.php';
});

$_SERVER['REQUEST_URI_PATH'] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', $_SERVER['REQUEST_URI_PATH']);
$controller  = $segments[1];
$method  = $segments[2];


$obj = new Home();
$obj->$method();

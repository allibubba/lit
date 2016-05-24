<?php
//require_once VENDORPATH.'/twig/twig/lib/Twig/Autoloader.php';
require VENDORPATH."autoload.php";


$_SERVER['REQUEST_URI_PATH'] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', $_SERVER['REQUEST_URI_PATH']);
$controller  = BASENAME.ucfirst($segments[1]);
$method  = $segments[2];
$arguments  = array_slice($segments, 3);


// use Lit;
$obj = new $controller();
$obj->$method($arguments);

if(DEBUG){
    echo "<pre>"; 
    var_dump( get_class_methods($obj));
    var_dump(get_declared_classes()); 
    echo "</pre>";
};

<?php

require VENDORPATH."autoload.php";
use \Module\Uri;

$router = new \Lit\Router();
require APPPATH."routes.php";


$base = new \Lit\Base();
$verb = $base->data['method'];
$controller = $base->data['controller'];
$dispatcher = new \Lit\Dispatcher($router);
$dispatcher->handle(new \Lit\Request($verb, $controller));

if(DEBUG){
    echo "<pre>"; 
    var_dump(get_declared_classes()); 
    echo "</pre>";
    echo phpInfo();
};

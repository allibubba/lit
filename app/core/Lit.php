<?php

require VENDORPATH."autoload.php";

$base = new \Lit\Base();
$controller  = BASENAME.ucfirst($base->segment(1));
$method  = $base->segment(2);
// TODO: move controller instantiation inside base
$obj = new $controller();
$obj->$method();

if(DEBUG){
    echo "<pre>"; 
    var_dump( get_class_methods($obj));
    var_dump(get_declared_classes()); 
    echo "</pre>";
};

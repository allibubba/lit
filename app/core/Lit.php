<?php

require VENDORPATH."autoload.php";
$base = new \Lit\Base();
if(DEBUG){
    echo "<pre>"; 
    var_dump( get_class_methods($obj));
    var_dump(get_declared_classes()); 
    echo "</pre>";
};

<?php

require VENDORPATH."autoload.php";
$base = new \Lit\Base();
if(DEBUG){
    echo "<pre>"; 
    var_dump(get_declared_classes()); 
    echo "</pre>";
    echo phpInfo();
};

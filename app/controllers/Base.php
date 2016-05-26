<?php
namespace Lit;

class Base
{

    use \Helper\View;
    use \Helper\Request;

    function __construct()
    {
        $controller  = BASENAME.ucfirst($this->segment(1));
        $method = $this->segment(2);
        (new $controller)->$method();
    }

}

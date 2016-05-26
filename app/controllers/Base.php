<?php
namespace Lit;

class Base
{

    use \Helper\View;
    use \Helper\Request;

    function __construct()
    {
        if(DEBUG){echo '<script>console.info("Class: '.__class__.'\nFile: '.__FILE__.'");</script>';}
        $this->load_controller();
    }

    /**
    *    @return void
    */
    protected function load_controller()
    {
        $controller  = BASENAME.ucfirst($this->segment(1));
        $method_name = $this->segment(2);

        $this->obj = new $controller;

            if(method_exists($this->obj , $method_name))
            {
                $this->obj->$method_name();
            }else{
                throw new Exception('method not defined');
            }
    }

}

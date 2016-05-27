<?php
namespace Lit;

class Base
{

    use \Helper\View;
    use \Helper\Request;

    function __construct()
    {
        if(DEBUG){echo '<script>console.info("Class: '.__class__.'\nFile: '.__FILE__.'");</script>';}
        $this->initialize();
    }

    /**
    *    @return void
    */
    private function initialize()
    {
        $this->controller  = BASENAME.ucfirst($this->segment(1));
        $this->method_name = $this->segment(2);
        if(class_exists($this->controller))
        {
            $this->instantiate_controller();
        }
    }

    /**
    *    @return void
    */
    private function instantiate_controller()
    {
        $this->obj = new $this->controller;
        if(method_exists($this->obj , $this->method_name))
        {
            $method_name = $this->method_name;
            $this->obj->$method_name();
        }elseif(method_exists($this->obj, 'index')){
            $this->obj->index();
        }else{
            $class_name = get_class($this->obj);
            throw new \Exception("Undefined method: $method_name called from: $class_name");
        }
    }


}

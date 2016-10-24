<?php
namespace Lit;

class Base
{

    use \Module\Uri;

    public $data;

    function __construct()
    {
        //if(DEBUG){echo '<script>console.info("Class: '.__class__.'\nFile: '.__FILE__.'");</script>';}
        $this->data['method']     = $this->getMethod();
        $this->data['controller'] = $this->getController();
        $this->data['action']     = $this->getAction();
    }

    /**
    *    return http verb 
    *    @return string
    */
    private function getMethod()
    {
        $available = array('GET', 'POST');
        $verb = strtoupper($_SERVER['REQUEST_METHOD']);
        if(in_array($verb, $available))
        {
            return $verb;
        }
    }

    /**
    *    return first uri segment as controller 
    *    @return string
    */
    private function getController()
    {
        return strtolower($this->segment(1));
    }

    /**
    *    return second uri segment 
    *    @return string
    */
    private function getAction()
    {
        return $this->segment(2);
    }
}

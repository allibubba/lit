<?php
namespace Module;
trait View
{
     /**
     *    Returns file contents
     *
     *    @package helper
     *    @param string
     *    @return string
      */
    function loadView($file=null, $data=null)
    {
        if($file ==null){throw new Exception('No file passed to view');}

        \Twig_Autoloader::register();
        $loader = new \Twig_Loader_Filesystem('../templates');
        $twig = new \Twig_Environment($loader);
        return $twig->render($file, $data);
    }
}

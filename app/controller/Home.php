<?php

class Home extends Base
{
    function index()
    {
        echo file_exists('app/view/home/index.php');
        $view = file_get_contents('app/view/home/index.php');
        var_dump($view);
        echo "loading index view";
        exit;
    }

}

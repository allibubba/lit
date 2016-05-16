<?php

class Home extends Base
{
    function __construct()
    {
        echo '<script>console.log("Class: '.__class__.'\nFile: '.__FILE__.'");</script>';
    }
    
    function index()
    {
        echo $this->load_view('home/index.php');
    }

}

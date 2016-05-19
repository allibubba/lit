<?php

class Home extends Base
{
    function __construct()
    {
        echo '<script>console.log("Class: '.__class__.'\nFile: '.__FILE__.'");</script>';
    }

    function index( $segment_var = null )
    {
        $data['alpha'] = "Alpha";
        $data['beta'] = "Beta";

        echo $this->load_view('home/index.html', $data);
        //echo $twig->render('index.html', array('the' => 'variables', 'go' => 'here'));
    }

}

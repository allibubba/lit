<?php

class Home extends Base
{
    function __construct()
    {
        echo '<script>console.info("Class: '.__class__.'\nFile: '.__FILE__.'");</script>';
    }

    function index( $segment_var = null )
    {
        $data['alpha'] = "I am Alpha";
        $data['beta'] = "we are Beta";
        echo $this->load_view('home/index.html', $data);
    }

}

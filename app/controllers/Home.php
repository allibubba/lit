<?php
namespace Lit;

class Home extends Base
{
    function __construct()
    {
    }

    function index( $segment_var = null )
    {
        $data['alpha'] = "I am Alpha";
        $data['beta'] = "we are Beta";
        echo $this->load_view('home/index.html', $data);
    }
}

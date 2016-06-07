<?php
namespace App;

class Home extends \Lit\App
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
    function input()
    {
        header('Content-Type: application/json');
        $data['success'] = true;
        $data['message'] = "successfull request to /date as Home::input()";
        echo json_encode($data);
    }
}

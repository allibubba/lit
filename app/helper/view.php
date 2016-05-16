<?php

trait View
{
    function load_view($file=null)
    {
        if($file ==null){throw new Exception('No file passed to view');}
        return file_get_contents("app/view/$file");
    }
}

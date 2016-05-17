<?php

trait View
{
     /**
     *    Returns file contents
     *
     *    @package helper
     *    @param string
     *    @return string
     */
    function load_view($file=null)
    {
        if($file ==null){throw new Exception('No file passed to view');}
        return file_get_contents("app/view/$file");
    }
}

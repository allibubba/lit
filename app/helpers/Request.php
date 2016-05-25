<?php
namespace Helper;
trait Request
{
     /**
     *    Returns array of uri segments
     *
     *    @package helper
     *    @return array
      */
    function segment($index=null)
    {
        if($_SERVER['REQUEST_URI']==null){throw new Exception('No Requeset URI Path set');}
        $request_uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $sections_array = explode('/',$request_uri_path);
        return ($index) ? $sections_array[$index] : $sections_array;
    }

}

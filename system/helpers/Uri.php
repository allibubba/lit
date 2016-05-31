<?php
namespace Helper;
trait Uri
{
     /**
     *    Returns array of uri segments
     *
     *    @package helper
     *    @return mixed
      */
    function segment($index=null)
    {
        if($_SERVER['REQUEST_URI']==null){throw new Exception('No Requeset URI Path set');}
        $request_uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $sections_array = explode('/',$request_uri_path);
        if(array_key_exists($index, $sections_array) && $index)
        {
            return $sections_array[$index];
        }else{
            return $sections_array;
        }
    }

}

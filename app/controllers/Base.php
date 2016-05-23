<?php
namespace Lit;

class Base
{

    use \Helper\View;

    function __construct()
    {
        echo __class__ . " has been loaded";
    }

}

<?php
namespace Lit;

class Dispatcher
{
    private $router;



    function __construct(Router $router)
    {
        $this->router = $router;
    }
    function handle(Request $request) {
        $handler = $this->router->match($request);
        if (!$handler) {
            echo "Could not find your resource!\n";
                return;
        }
        $handler();
    }
}

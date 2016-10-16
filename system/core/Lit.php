<?php

/*
* ------------------------------------------------------
*  set Constants
* ------------------------------------------------------
*/

define('APPPATH', $app_directory.DIRECTORY_SEPARATOR);
define('SYSPATH', $system_directory.DIRECTORY_SEPARATOR);
define('VENDORPATH', $vendor_directory.DIRECTORY_SEPARATOR);
define('VIEWPATH', $view_directory.DIRECTORY_SEPARATOR);
define('BASENAME', 'Lit\\');
define('DEBUG', $debug);
define('DB_DEBUG', $db_debug);

/*
* --------------------------------------------------------------------
* Enable PHP debugging
* --------------------------------------------------------------------
 */
if(DEBUG){
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}
/*
* --------------------------------------------------------------------
* Use Lit
* --------------------------------------------------------------------
*/

require VENDORPATH."autoload.php";
use \Module\Uri;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$router = new \Lit\Router();
require APPPATH."routes.php";
require SYSPATH."db/config.php";

$isDevMode = DB_DEBUG;
$config = Setup::createAnnotationMetadataConfiguration(array(APPPATH."/models"), $isDevMode);

$entityManager = EntityManager::create($dbparams, $config);


if(ISSET($_SERVER['REQUEST_METHOD'])):
$base = new \Lit\Base();
$verb = $base->data['method'];
$controller = $base->data['controller'];
$dispatcher = new \Lit\Dispatcher($router);
$dispatcher->handle(new \Lit\Request($verb, $controller));
endif;

if(DEBUG){
    echo "<pre>"; 
    var_dump(get_declared_classes()); 
    echo "</pre>";
    echo phpInfo();
};

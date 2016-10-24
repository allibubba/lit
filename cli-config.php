<?php
// cli-config.php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";
// print_r(__DIR__."app/config/yaml");
// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;

$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/app/config/yaml"), $isDevMode);

// // database configuration parameters
$conn = array(
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/db.sqlite',
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);

$entityManager->getConnection()
              ->getDatabasePlatform()
              ->registerDoctrineTypeMapping('enum', 'string');

$helperSet = new \Symfony\Component\Console\Helper\HelperSet([
                'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($entityManager->getConnection()),
                'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($entityManager)
              ]);

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);

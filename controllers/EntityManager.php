<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "../vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = "\\..\\models\\Proxies";
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "\\..\\models\\Entities"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
$conn = array(
    'dbname' => 'criminels',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost:3308',
    'driver' => 'pdo_mysql',
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);

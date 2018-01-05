<?php
/**
 * Created by PhpStorm.
 * User: nicolas.aube95
 * Date: 05/12/2017
 * Time: 10:54
 */
require 'vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/Entity"), $isDevMode);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'host' => 'localhost',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'test',
);


// obtaining the entity manager
$entityManager = EntityManager::create($dbParams, $config);
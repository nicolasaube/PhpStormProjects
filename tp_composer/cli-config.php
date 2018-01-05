<?php
/**
 * Created by PhpStorm.
 * User: nicolas.aube95
 * Date: 05/12/2017
 * Time: 11:20
 */

require_once "bootstrap.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
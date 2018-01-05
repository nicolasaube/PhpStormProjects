<?php
/**
 * Created by PhpStorm.
 * User: nicolas.aube95
 * Date: 05/12/2017
 * Time: 12:50
 */

require 'bootstrap.php';
require 'Entity/User.php';

$users = $entityManager->getRepository('User')->findAll();

/*
$entityManager->getRepository('User')
    ->createQueryBuilder('u');
    ->where('u.firstName')
*/

$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader); /*, array(
    'cache' => './cache',
));*/

echo $twig->render('users.html.twig', ['users' => $users]);
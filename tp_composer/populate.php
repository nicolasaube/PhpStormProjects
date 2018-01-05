<?php
/**
 * Created by PhpStorm.
 * User: nicolas.aube95
 * Date: 05/12/2017
 * Time: 12:28
 */

require 'bootstrap.php';
require 'Entity/User.php';

$faker = Faker\Factory::create();

for ($i=0;$i<100;$i++) {
    $u = new User;
    $u->setLogin($faker->word);
    $u->setFirstName($faker->firstName);
    $u->setLastName($faker->lastName);
    $u->setPassword($faker->password());
    $u->setEmail($faker->email);

    dump($u);

    $entityManager->persist($u);
    $entityManager->flush();

    dump($u);
}

//save to db
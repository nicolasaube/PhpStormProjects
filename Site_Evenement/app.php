<?php
/**
 * Created by PhpStorm.
 * User: nicolas.aube95
 * Date: 21/11/2017
 * Time: 11:28
 */

use Illuminate\Database\Capsule\Manager as CapsuleManager;

require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();
$app["debug"]=true;

$app->register(
    new \JG\Silex\Provider\CapsuleServiceProvider(),
    [
        'capsule.connections' => [
            'default' => [
                'driver'    => 'mysql',
                'host'      => 'localhost:8889',
                //'port'      => 8889,
                'database'  => 'projetWeb',
                'username'  => 'root',
                'password'  => 'root',
                'charset'   => 'utf8',
                'collation' => 'utf8_unicode_ci',
                'prefix'    => '',
                'strict'    => false,
                'engine'    => null,
            ]
        ]
    ]
);

$app->get('/user/{id}', function($id) use ($app)
{
    $user = CapsuleManager::table('utilisateur')->where('id', $id)->get();
    return json_encode($user);

});
$app->get('/users', function() use ($app)
{

    $users = CapsuleManager::table('utilisateur')->get(['nom','prenom']);
    return json_encode($users);

});
$app->put('/user/{id}', function($id) use ($app)
{
    $edit = CapsuleManager::table('utilisateur')->where('id', $id)->get();
    return json_encode($edit);

});
$app->post('/users', function() use ($app)
{
    $create = CapsuleManager::table('utilisateur')->get();

    // Rest of your code...

});
$app->delete('/user/{id}', function($id) use ($app)
{
    $delete = CapsuleManager::table('utilisateur')->where('id', $id)->delete();

    // Rest of your code...
});

$app->run();
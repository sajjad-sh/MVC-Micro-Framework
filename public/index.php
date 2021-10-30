<?php

// OLD Way for class autoload
// spl_autoload_register(function ($class_name) {
//     require_once "../core/$class_name.php";
// });

//error_reporting(0);

require_once __DIR__ . "/../vendor/autoload.php";

use app\core\Application;

use app\controllers\HomeController;
use app\controllers\AuthController;

$app = new Application(dirname(__DIR__)); # Change 1

$app->router->get('/', function() {
    return "Hello World";
}); // only callback

//$app->router->get('/about', 'about')->name('about'); TODO: [1]

$app->router->get('/home', [HomeController::class, 'home']); // controller callback

$app->router->get('/login', [AuthController::class, 'showLogin']);
$app->router->post('/auth/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'showRegister']);
$app->router->post('/auth/register', [AuthController::class, 'register']);

$app->run();
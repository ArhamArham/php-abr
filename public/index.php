<?php


use app\controllers\AuthController;
use app\controllers\HomeController;
use app\controllers\SiteController;
use app\core\Application;

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Application(dirname(__DIR__));

$app->router->get('/', [HomeController::class, 'index']);
$app->router->get('/contact', [SiteController::class, 'index']);
$app->router->post('/contact', [SiteController::class, 'store']);
$app->router->get('/login', [AuthController::class, 'showLoginForm']);
$app->router->get('/register', [AuthController::class, 'showRegisterForm']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->post('/register', [AuthController::class, 'register']);
$app->run();

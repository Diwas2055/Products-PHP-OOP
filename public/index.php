<?php

use app\controllers\ProductController;
use app\Router;

require_once __DIR__ . '/../vendor/autoload.php';

$database = new \app\Database();
$router = new Router($database);


// PHP >= 8.0.0
// $app->router->get('/about', [AboutController::class, 'index']); // from this

// PHP <=8.1.0
// $app->router->get('/about', [new AboutController(), 'index']); // to this 

$router->get('/', [new ProductController(), 'index']);
$router->get('/products', [new ProductController(), 'index']);
$router->get('/products/index', [new ProductController(), 'index']);
$router->get('/products/create', [new ProductController(), 'create']);
$router->post('/products/create', [new ProductController(), 'create']);
$router->get('/products/update', [new ProductController(), 'update']);
$router->post('/products/update', [new ProductController(), 'update']);
$router->post('/products/delete', [new ProductController(), 'delete']);

$router->resolve();

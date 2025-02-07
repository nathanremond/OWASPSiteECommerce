<?php

require_once '../src/Controllers/Router.php';
require_once '../src/Controllers/productController.php';

use App\Controllers\ProductController;

$router = new Router();

// Définir les routes
$router->get('/', [ProductController::class, 'index']);


// Exécuter la route
$router->dispatch($_SERVER['REQUEST_URI']);
<?php

// Composer dependencies
require __DIR__.'/..vendor/autoload.php';

// Altorouter is a composer dependency for router
$router = new AltoRouter();

// Basepath with BASE_URI is determined in .htaccess
$router->setBasePath($_SERVER['BASE_URI']);

// Routes
$router->map('GET', '/', 'MainController::home');
$router->map('GET', '/detail', 'MainController::detail');

$match = $router->match();

if ($match!==false) {
    echo 'Page non trouvée';
}

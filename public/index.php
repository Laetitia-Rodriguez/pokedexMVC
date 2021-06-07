<?php

// Composer dependencies
require __DIR__.'/../vendor/autoload.php';

// Controllers
require __DIR__.'/../app/Controllers/MainController.php';


// Altorouter is a composer dependency for router
$router = new AltoRouter();

// Basepath
$router->setBasePath($_SERVER['BASE_URI']);

// Routes
$router->map(
    'GET', 
    '/', 
    ["controller" => "MainController",
    "method" => "home"],
    'main-home'
);
$router->map(
    'GET', 
    '/detail/[i:id]', 
    ["controller" => "MainController",
    "method" => "detail"],
    'main-detail'
);
$router->map(
    'GET', 
    '/liste', 
    ["controller" => "MainController",
    "method" => "list"],
    'main-list'
);
$router->map(
    'GET', 
    '/types', 
    ["controller" => "MainController",
    "method" => "types"],
    'main-types'
);

$match = $router->match();

if ($match) {
    $methodToCall = $match ["target"]["method"];
    $controllerToCall = 'Pokedex\Controllers\\' . $match ["target"]["controller"];
    $controller = new $controllerToCall($router);
    $controller->$methodToCall ( $match['params'] );
}

else {
    exit("404");
}

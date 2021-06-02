<?php

// Composer dependencies
require __DIR__.'/../vendor/autoload.php';

// Controllers
require __DIR__.'/../app/Controllers/MainController.php';


// Altorouter is a composer dependency for router
$router = new AltoRouter();

// Basepath with BASE_URI is determined in .htaccess
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

$match = $router->match();

if ($match) {
    $methodToCall = $match ["target"]["method"];
    $controllerToCall = $match ["target"]["controller"];
    $controller = new $controllerToCall($router);
    $controller->$methodToCall ( $match['params'] );
}

else {
    exit("404");
}

<?php

// Composer dependencies
require __DIR__.'/../vendor/autoload.php';

$baseURL = $_SERVER['BASE_URI'];


// Controllers
require __DIR__.'/../app/Controllers/MainController.php';



// Altorouter is a composer dependency for router
$router = new AltoRouter();

// Basepath
$router->setBasePath($_SERVER['BASE_URI']);

// Routes

// Template for the homepage with the entire pokemon's list
$router->map(
    'GET', 
    '/', 
    ["controller" => "MainController",
    "method" => "home"],
    'main-home'
);

// Template for a single pokemon
$router->map(
    'GET', 
    '/detail/[i:numero]', 
    ["controller" => "MainController",
    "method" => "detail"],
    'main-detail'
);

// Template for a page with the types list
$router->map(
    'GET', 
    '/types', 
    ["controller" => "MainController",
    "method" => "types"],
    'main-types'
);

// Template for a filtered list by type
// We get it when we choose a type on precedent template
$router->map(
    'GET', 
    '/type/[i:id]', 
    ["controller" => "MainController",
    "method" => "type"],
    'main-type'
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

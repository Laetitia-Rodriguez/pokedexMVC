<?php 

namespace Pokedex\Controllers;

use Pokedex\Models\Detail;

class MainController {

    // function to show the homepage
    public function home() {
        $pokemons = Detail::findAll();
        $this->show('home', ['pokemons' => $pokemons]);
    }

    //function to show details pages
    public function detail() {
        $this->show('detail');
    }

    //function to show the list page
    public function list() {
        $this->show('list');
    }

    //function to show the types page
    public function types() {
        $this->show('types');
    }

    // function to show the views
    private function show($viewName, $viewVars=[]) {
        // Fixed part of the URL
        // BASE_URI is determined in .htaccess
        // We can use $baseUrl in all the views
        $baseUrl = $_SERVER['BASE_URI'];
        // templates header and footer and page which is in parameter
        include(__DIR__.'/../views/inc/header.tpl.php');
        include(__DIR__.'/../views/' . $viewName . '.tpl.php');
        include(__DIR__.'/../views/inc/footer.tpl.php');
    }
}

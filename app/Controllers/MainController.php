<?php 

namespace Pokedex\Controllers;

use Pokedex\Models\Detail;
use Pokedex\Models\Type;

class MainController {

    // function to show the homepage
    public function home() {
        $pokemons = Detail::findAll();
        $this->show('home', ['pokemons' => $pokemons]);
    }

    //function to show details pages
    public function detail($pokemon) {
        $pokemon = Detail::find($pokemon);
        $types = Detail::getType($pokemon);
        $this->show('detail', ['pokemon' => $pokemon, 'types' => $types]);
    }

    //function to show the types page
    public function types() {
        $types = Type::findAllType();
        $this->show('types', ['types' => $types]);
    }

    //function to show a particular type page
    public function type($types) {
        $pokemons = Type::findAllByType($types);
        $this->show('type', ['pokemons' => $pokemons]);
    }

    /*
    //function to show the list page
    public function list() {
        $this->show('list');
    } */


    // function to show the views
    private function show($viewName, $viewVars=[]) {
        // Fixed part of the URL
        // BASE_URI is determined in .htaccess
        // We can now use $baseUrl in all the views
        $baseUrl = $_SERVER['BASE_URI'];
        // templates header and footer and page which is in parameter
        include(__DIR__.'/../views/inc/header.tpl.php');
        include(__DIR__.'/../views/' . $viewName . '.tpl.php');
        include(__DIR__.'/../views/inc/footer.tpl.php');
    }
}

<?php 

class MainController {

    // function to show the homepage
    public function home() {
        $this->show('home');
    }

    //function to show details pages
    public function detail() {
        $this->show('detail');
    }

    // function to show the views
    private function show($viewName, $viewVars=[]) {
        // templates header and footer and page which is in parameter
        // include(__DIR__.'/../views/header.tpl.php');
        include(__DIR__.'/../views/' . $viewName . '.tpl.php');
        // include(__DIR__.'/../views/footer.tpl.php');
    }
}

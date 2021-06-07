<?php

class CoreModel {
   
    static $dsn = 'mysql:dbname=Pokedex;host=localhost;charset=utf8';
    static $user= 'explorateur';
    static $password = "Ereul9Aeng";

    /*
    ** Method to connect at the BDD via PDO
    */
    function getPDO () {

        static $dsn = 'mysql:dbname=Pokedex;host=localhost;charset=utf8';
        static $user= 'explorateur';
        static $password = "Ereul9Aeng";

        // Errmode warning warns about the SQL errors
        $pdo = new PDO ($dsn, $user, $password, [PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING]);

        return $pdo;
    }
}
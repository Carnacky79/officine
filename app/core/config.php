<?php

    if($_SERVER['SERVER_NAME'] == 'localhost'){
        /** Database configuration */
        define('DBNAME', 'test');
        define('DBHOST', 'localhost');
        define('DBUSER', 'root');
        define('DBPASS', 'password');
        define('DBDRIVER', '');

        define('ROOT', 'http://localhost/officine/public');
    }else{
        /** Database configuration */
        define('DBNAME', 'test');
        define('DBHOST', 'localhost');
        define('DBUSER', 'root');
        define('DBPASS', 'password');
        define('DBDRIVER', '');

        define('ROOT', 'http://localhost/officine/public');
    }

    define('CSS', ROOT.'/assets/css');
    define('IMG', ROOT.'/assets/images');
    define('JS', ROOT.'/assets/js');

    define('APP_NAME', "My MVC website");
    define('APP_DESCRIPTION', "best website of the planet");

    // true means show errors
    define('DEBUG', true);

    // site details
    define('ADDRESS', "Corso Arnaldo Lucci, 61<br>80142 Napoli");
    define('CELL', "3292626152");
    define('TEL', "08119090638");

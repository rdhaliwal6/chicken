<?php
//Rajpreet Dhaliwal
//01/15/2020
///328/chicken/index
///

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload file
require("vendor/autoload.php");

//Instantiate F3
$f3 = Base::instance();

//define a default route
$f3->route('GET /', function (){
    echo '<h1>Hello, World!</h1>';
}
);

//Run F3
$f3->run();
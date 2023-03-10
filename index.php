<?php
//controller

//turn off error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);
//start session
//session_start();
//require autoload file
require_once('vendor/autoload.php');

//Instantiate F3 base class
$f3 = Base::instance();

//define initial route
$f3->route('GET /', function ($f3) {

    $f3->set('username', 'jshmo');
    $f3->set('password', 'Password01');
    $f3->set('title', 'Working With Templates');
    //instantiate a view
    $view = new Template();
    echo $view->render("views/info.html");
});

//define info route
$f3->route('GET /info', function () {
    //instantiate a view
    $view = new Template();
    echo $view->render("views/info.html");
});
<?php 

$path = $_SERVER['REQUEST_URI'];
if (strpos($path, '?')) $path = stristr($path, "?", TRUE);
include_once("controller/Controller.php");
    $controller = new Controller();
    $controller->invoke($path);




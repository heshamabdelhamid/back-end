<?php

namespace App;

require_once 'vendor/autoload.php';

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // retun "/home/hi/id/2"
$path = trim($path, '/'); // remove '/' from the beginning and end of a string return "home/hi/id/2"
list($controller, $action, $params) = explode('/', $path, 3);
$params = explode('/', $params);

var_dump($controller, $action,);
echo '<br>';
var_dump($params);
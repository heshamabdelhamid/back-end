<?php

//                  variable scope

/** 
    * global scope
    * functional scope
    * class scope 
    * closure scope 
    * file scope 
**/ 

 //  GLOBAL super scope 

//  $_POST;
//  $_GET;
//  $_REQUEST;
//  $_SERVER;
//  $_FILES;
//  $_SESSION;
//  $_COOKIE;
//  $_ENV;
// $GLOBALS;

$a =5;
/** 
function getA()
{    
    global $a;
    
    echo $a;
}

print_r($_SERVER);
*/

$segments = $_SERVER['SERVER_SOFTWARE'];

$version = explode(' ',$segments)[3];

var_dump($version);

if ($version < '8.0.13') {
    echo '';
}
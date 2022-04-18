<?php

//cookie he is array $_COOKIE['KEY] = VALUE

/**  FUNCTION SETCOOKIE 
    string $name,
    $value = "",
    $expires_or_options = 0,
    $path = "",
    $domain = "",
    $secure = false,
    $httponly = false
*/

// هذد العلامة ('/') في عنصر (الباس ) تعني ان الكوكي تعمل في الموقع بالكامل 

setcookie('NEW_COOKIE', 'hello', time() + (3600), '/','localhost', FALSE, FALSE);

$_COOKIE['NEW_COOKIE'] = 'new_cookie';


var_dump($_COOKIE);
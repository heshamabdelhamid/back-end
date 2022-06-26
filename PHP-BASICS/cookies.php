What are cookies? How to create cookies in PHP?
A cookie is a small record that the server installs on the client’s computer. 
They store data about a user on the browser. 
It is used to identify a user and is embedded on the user’s computer when they request a particular page. 
Each time a similar PC asks for a page with a program, it will send the cookie as well.

After verifying the user’s identity in encrypted form, cookies maintain the session id generated at the back end. 
It must reside in the browser of the machine. 
You can store only string values not object because you cannot access any object across the website or web apps.

By default, cookies are URL particular. 
For example, Gmail cookies are not supported by Yahoo and vice versa. Cookies are temporary and transitory by default. 
Per site 20 cookies can be created in a single website or web app. 
50 bytes is the initial size of the cookie and 4096 bytes is the maximum size of the cookie.

In PHP, we can create cookies using the setcookie() function:

setcookie(name, value, expire, path, domain, secure, httponly);

Here name is mandatory and the remaining parameters are optional.

Example:
setcookie(“instrument_selected”, “guitar”)

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
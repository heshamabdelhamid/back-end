
What is a session in PHP?
A session in PHP is a way to store information to be used across multiple pages of an entire website. 
The information is not stored on the user’s computer, unlike cookies.
In a temporary directory on the server, a file will be created by the session where registered session variables and their values are stored. 
This information will be available to all pages on the site during that visit.

When you work with an application, you open it, do some modifications, and then you close it. 
This is much like a Session. 
The computer knows who you are. It knows when the application is started and ended by you.

But on the internet, the webserver does not know who you are or what you do, because the HTTP address doesn’t maintain a state. 
This problem is solved using session variables by storing user information to be used across multiple pages (e.g. username, favorite color, etc).

By default, session variables will last until the user closes the browser.

So Session variables hold single user information and are available to all pages in one application
<?php
$path = dirname( realpath(__FILE__)) . DIRECTORY_SEPARATOR . 'SESSIONS';   
session_get_cookie_params();
session_set_cookie_params(0);
session_start();

$_SESSION['id'] = session_create_id();
$_SESSION['user_name'] = 'hesham';

session_regenerate_id(true);
session_save_path();    
session_write_close();

session_name('hesham');
// var_dump($_SESSION);

$encodesession = session_encode();

session_decode($encodesession);

session_unset();

session_destroy();

var_dump($encodesession);
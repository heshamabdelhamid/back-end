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
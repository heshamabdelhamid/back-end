<?php

session_start();

$_SESSION['id'] = session_create_id();
$_SESSION['user_name'] = 'hesham';

$encodesession = session_encode();

session_decode($encodesession);

session_unset();

session_destroy();

var_dump($encodesession);
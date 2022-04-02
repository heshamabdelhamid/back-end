<?php

require_once 'User.php';
require_once 'Dad.php';
require_once 'Child.php';
require_once 'Child2.php';


// $user = new User;

// // $user->name2 = 'hesham';
// // var_dump(User::$user_name);
// var_dump($user);
// var_dump(User::setUserName());        //used this is method static only  
// var_dump($user->setUserName());       //used this is method non-static or static


/* -------------------inheritance-----------  */

$child = new Child;
$child2 = new Child2;

// var_dump($child instanceof Child);   // TRUE
// var_dump($child instanceof Dad);     // TRUE

var_dump($child->getName());
var_dump($child->getHair());
var_dump($child->getColor());
var_dump($child->getEye());

var_dump($child2->getName());
var_dump($child2->getHair());
var_dump($child2->getColor());
var_dump($child2->getEye());
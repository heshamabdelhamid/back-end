<?php
// literal character
// الحروف كما هي مع مراعاة حالة الحرف

$pattern = '/hi/';
$string = 'hi every one';
preg_match($pattern,$string);  // this function return first match only return true or int(0)

$pattern = '/man/';
$string = 'the man every one and man hi for all manday ';
preg_match_all($pattern, $string, $match); // this function return all match in the string
var_dump($match);




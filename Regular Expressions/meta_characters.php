<?php

// the wild card meat character  -- .

$pattern = '/h.t/';
$string = 'Hot, hoT hit hot hat heet heat';

// preg_match_all($pattern, $string, $match);

// var_dump($match); // return hot hat hit


// character sets -- []
// حرف واحد من الحروف الموجودة داخل اقواس المجموعة

$pattern = '/fl[oa4#\]]t/';
$string = 'float flat flot fl4t  fl#t fl]t';

// preg_match_all($pattern, $string, $found);
// var_dump($found);

// character Ranges -- [A-Z][a-z][0-9]
// مدي الحروف الموجوة داخل اقواس المجموعة من أ الي ي

// $pattern = '/9[0-9][0-9]9/';
// $string = ' 0322 9769 9876 9819 ';

$pattern = '/m[a-z-A-Z]n/';
$string = 'man mAn meGn Men ';

// preg_match_all($pattern, $string, $match);
// var_dump($match);


// NEGATION MET CARACTER - NEGATIVE CHARACTER SET -- ^
// جميع الحروف بستثناء الحروف الموجودة بعد هذه العلامة 


$pattern = '/m[^as]n/';
$string = 'man mAn mgn Men ';

preg_match_all($pattern, $string, $match);
var_dump($match);
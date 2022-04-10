<?php

// the wild card meat character  .

$pattern = '/h.t/';
$string = 'Hot, hoT hit hot hat heet heat';

preg_match_all($pattern, $string, $match);

 var_dump($match); // return hot hat hit


// character sets

$pattern = '/fl[oa4#\]]t/';
$string = 'float flat flot fl4t  fl#t fl]t';

preg_match_all($pattern, $string, $found);
var_dump($found);
<?php

function convert($n)
{

    //Convert To Aarray
    $arrayOfString = str_split($n);

    // Convert To Elements
    $array = array_map("intval", $arrayOfString);

    // Create Empty Array
    $empty = [];

    foreach ($arrayOfString as $str) :
        // array_push($empty, intval($str));
        array_unshift($empty, intval($str));
    endforeach;

    // Reverce To Array
    // $array = array_reverse($array);

    return $empty;
}

echo '<pre>';
var_dump(convert(1234));
echo '<?pre>';

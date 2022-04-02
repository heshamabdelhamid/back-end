<?php

//function remove_duplicate_words($words): string
//{
//    $wordlist = explode(" ", $words);
//
//    $uniqueOnly = array_unique($wordlist);
//
//    $final = implode(' ', $uniqueOnly);
//
//    return $final;
//
//}

function remove_duplicate_words($words): string{

    return implode(" ", array_unique(explode(" ", $words)));
}



echo remove_duplicate_words("hello first code in hello php code");
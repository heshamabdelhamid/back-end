<?php
// php viesion 8.2

/**
 * LOGIC 
 * ALPHA       => abcdefghijklmnopqrstuvwxyz 
 * GIVENLETTER => ...defgi
 */

function find_missing_letter_in($givenLetters)
{
    $alpha = implode('', range("a", "z"));

    // Get Start Position
    $start = strpos($alpha, $givenLetters[0]);

    for ($i=0; $i < strlen($givenLetters); $i++) {
        
        // echo $alpha[$start + $i] . "<br>"; // loop in alpha 
        // echo $givenLetters[$i] . "<br>"; // loop in given letters 
        
        if ( $givenLetters[$i] !== $alpha[$start + $i] ) {
            
            return $alpha[$start + $i];
        }
    }
    return $start;
}

echo find_missing_letter_in("define");

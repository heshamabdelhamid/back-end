<?php

//declare(strict_types = 1);
//                                              data type 

// integer 
// string 
// float 
// boolean 
// array 
// null
//resources
//opject

// integer (int)  المتغير من هذا النوع هو دائم يكون رقم صحيح 

$int = 5;

// string المتغير من هذا النوع يتكون من الاحرف و الارقام و العلامات 

$string = "hello world this the php code number 1 !@#$";

// float هذا المتغير يكون عبارة عن رقم عشري 

$float = 0.15;

// boolean هذا المتغير يكون عبارة عن قيمة ( true or false )

$bool = TRUE;

// Array ($key => $value)  

$users = [
    // kye => value 
    0 => [
        'username' => 'hesham',
        'age' => 23,
        'exp' => [
            0 =>'php',
            1 =>'js'
        ],
    ],

    1 => [
        'username' => 'ahmed',
        'age' => 29,
        'exp' => [
            0 =>'php',
            1 =>'js',
            'html'
        ],
    ],

    2 =>[
        'username' => 'mohamed',
        'age' => 25,
        'exp' => [
            0 =>'php',
            1 =>'js'
        ],
    ]
];

// add element in array

$users[] = [
    'username' => 'khalid',
    'age' => 25,
    'exp' => [
        'php',
        'js',
    ]
];

var_dump($users[1]['exp'][2]);


//  more concept about type... (type hinting) (type juggling/casting) (type coercion)


//look on 2 line in this file  declare(strict_types = 1); this code must be first file

//type hinting -- with type hinting must be use this function declare(strict_types = 1);

function returnText(string $text)
{
    return $text;
}

//return type
function returnString($text): string
{
    return $text;
}

$text = (int) '22hesham'; // this is type casting  or type juggling

$text = (string) 22; // this is type casting or type juggling
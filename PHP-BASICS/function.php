<?php
declare(strict_types = 1);

/*
    function FunctionName($parameter = key)   function declaration, function defining  اعلان 
    {
        echo $parameter;
    }
*/

// FunctionName(argument = value); function calling, function invoking  استدعاء


function Text($text = null) // function declaration, function defining  اعلان
{
    echo $text;
}

Text('HELLO PHP'); // function calling, function invoking  استدعاء 

//closure anonymous function 
// هي فنكشن مجهولة ليس لها اسم واضح يتم استدعائها عن طريق متغير ويتم التعامل مع هذا المتغير كفنكشن 

$textfun = function(){
    echo 'PHP';
}; 

$textfun();


$textfun = function($text = NULL){
    echo '<br>' . $text;

}; 

$textfun('Hello_PHP');

// return statement in function
// الريترن بترجع القيمة من غير امر الطباعه 

function PrintText($text)
{
    return $text;
}

echo PrintText('php text');

$users = [
    [
        "username" => 'Hesham',
        "age" => 23,
        "exp" => [
            'php',
            'js'
        ],
    ],

    [
        "username" => 'ahmed',
        "age" => 29,
        "exp" => [
            'php',
            'js'
        ],
    ],

    [
        "username" => 'mido',
        "age" => 25,
        "exp" => [
            'php',
            'js'
        ],
    ],
];

var_dump($users[0]['exp']);

//                            Array function  https://www.php.net/manual/en/ref.array.php
array_keys($users);

array_key_exists('hesham',$users[0]);

array_key_first($users[0]);

array_key_last($users[0]);

array_merge();

in_array('hesham',$users[0]);

is_array($user);
//  - Finds whether the type of variable is arrayed
is_float($user);
//  - Finds whether the type of  variable is floated
is_int($user);
//  - Find whether the type of variable is integer
is_string($user);
//  - Find whether the type of  variable is string
is_object($user);
//  - Finds whether a variable is an object



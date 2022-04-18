<?php


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
        "username" => 'mohamed',
        "age" => 25,
        "exp" => [
            'php',
            'js'
        ],
    ],
];

$userWithOutHesham = array_filter($users, function ($user) {
    if ($user['username'] !== 'Hesham') {
        return $user;
    }
});

//ternary operator
//$retVal = (CONDITION) ? TRUE CASE : FALSE CASE ;

$userWithOutHesham = array_filter($users, function ($user) {
    return ($user['username'] !== 'Hesham' ? $user : null);
});

$userWithOutHesham = array_filter($users, fn($user) => ($user['username'] !== 'Hesham') ? $user : null);

// $fun1 = fn($users) => ($user['username'] !== 'Hesham') ? $user : null ;

var_dump($userWithOutHesham);

/*
    if (condition) {
        code...
    }
*/

$status = 200;

if ($status == 200) {
    echo 'ok';
} elseif ($status == 404) {
    echo 'hello';
} elseif ($status == 505) {
    echo 'welcome';
} else {
    echo 'notfound';
}

//                              switch condition

/*
    switch ($variable) {
        case 'value':
            # code...
            break;
        
        default:
            # code...
            break;
    }
*/

echo match ($status) {
    200 => "ok",
    404 => "not found",
    505 => "error server",
    default => "hello",
};

/*
 * switch ($status) {
    case 200:
        echo "ok";
        break;
    case 404:
        echo "hello";
        break;
    case 505:
        echo "welcome";
        break;
    default:
        echo "not found";
        break;
}
 * */

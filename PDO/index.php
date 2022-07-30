<?php

// establish a connection in your database 
// select your database 
// execute any number of statement 
// close your connection

//$DSN => data source name = 'mysql://hostname=localhost;dbname=pdo_database'
////////////////////////////////////////////

$conniction = null;

try {
    $conniction = new PDO(
        'mysql://hostname=localhost;dbname=pdo_database', //DNS
        'root', //username
        '', //password
        [
            // PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMSE UTF8'
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    );
} catch (\PDOException $ex) {

    $ex->getMessage();
    // or echo 'your message';
}

// what is the diffrences between exec and quary 

// 1 - exec  executes an SQL statement in a single function call,
// returning the number of rows affected by the statement.
//(تستخدم دائما مع جمل الاضافة والتعديل والحذف لانها لا ترجع ناتج انما ترجع عدد الصفوف التي تم العمل عليها)
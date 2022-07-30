<?php

$db = new PDO(
    'mysql://hostname=localhost;dbname=Store-DB',
    'root',
    '',
    [
        // PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMSE UTF8', give error 
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
);


try {
    echo $db->exec('SELECT * FOM app_users');
} catch (\PDOException $ex) {
    echo $ex->getMessage();
}
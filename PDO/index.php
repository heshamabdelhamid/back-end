<?php

// establish a connictions in your database
//select your database
//execute any number a statemant
// close your conniction

//$DSN data source name
////////////////////////////////////////////

$conniction = null;

try {
    $conniction = new PDO('mysql://hostname=localhost;dbname=pdo_database', 'root', '', array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMSE UTF8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
} catch (\PDOException $e) {
}
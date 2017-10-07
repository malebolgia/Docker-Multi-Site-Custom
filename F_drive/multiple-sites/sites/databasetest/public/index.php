<?php

var_dump(function_exists('mysql_connect'));

$db = new PDO(
    'mysql:host=database;port=3306;dbname=aarontest;charset=UTF8;',
    'root',
    'yourrootpassword',
    [
        PDO::ATTR_PERSISTENT=>true
    ]
);
var_dump($db->query('SHOW TABLES')->fetchAll());
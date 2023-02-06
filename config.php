<?php
session_start();

$HOST = 'localhost';
$USER = 'root';
$PASSWORD = 'Kanayo10.10';
$DB = 'phpblog';

$conn = mysqli_connect($HOST, $USER, $PASSWORD, $DB);

if(!$conn){
    
     die('Failed to connect to database' . mysqli_connect_error());
}

define('ROOT_PATH', realpath(dirname(__FILE__)));
define('BASE_URL', 'http://localhost:8080');
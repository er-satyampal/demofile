<?php

$host = 'localhost';
$db = '';
$username = 'root';
$password = '';
$charset = 'utf8mb4';


$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try{
    $connnection = PDO($dsn, $suername,$password);
}catch(PDOException $e){
    echo "Error:".$e->getMessage();
}
?>
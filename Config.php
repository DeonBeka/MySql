<?php

$host = 'localhost';
$user = 'root';
$pass = '';

try{
    $conn = new PDO("mysql:host=$host;", $user, $pass);
    $sql = "create database db";
    $conn ->exec($sql);
    
    echo "db is ready";

}catch(Exeption $e){
    echo "Not Connected";
}



?>
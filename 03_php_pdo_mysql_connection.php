<?php


$hostName = "localhost";
$userName = "root";
$DBName = "my_folder"; 
$psswrd = "";


$dsn = "mysql:host=$hostName; dbname=$DBName;charset=UTF8";
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
      $pdo = new PDO($dsn, $userName, $psswrd, $options);

    if($pdo){
        echo "Connected to the $DBName  successfully!!!";

    }
} catch (PDOException $e){
    echo $e->getMessage();

}
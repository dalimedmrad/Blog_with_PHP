<?php
 $dsn = "mysql:host=localhost;dbname=techbarik";

// $host = 'remotemysql.com';
// $db = 'pJ6dAPDr7T';
// $user = 'pJ6dAPDr7T';
// $pass = 'yKon1Rosui';
// $charset = 'utf8';

// $dsn = "mysql:host=$host;dbname=$db;charset=$charset";


try{
    $pdo = new PDO($dsn,'root','');
}catch(PDOException $e){
    echo $e->getMessage();
}




?>
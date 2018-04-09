<?php
$host = "127.0.0.1";
$dbname = "mycontacts";
$user = "root";
$passwd = "";
$charset = "utf8";
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        
$db = new PDO($dsn,$user,$passwd,$opt);
?>
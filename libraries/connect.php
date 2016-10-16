<?php
function connect_db(){
    $dns = "mysql:host=".DB_HOST.";dbname=".DB_NAME."";
    $username =DB_USER ;
    $password =DB_PASSWORD;
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION); //Tuy chon bao loi
    $db = new PDO($dns, $username, $password, $options);
    return $db;
}

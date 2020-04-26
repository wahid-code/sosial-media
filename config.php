<?php

$db_host = "dbpesbuk.ce24vrrjxque.ap-southeast-1.rds.amazonaws.com";
$db_user = "admin";
$db_pass = "wahid123";
$db_name = "dbpesbuk";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}

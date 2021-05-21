<?php

$db_host = "localhost";
$db_user = "u4840961_ngopi_admin";
$db_pass = "m4sl4k0n3clp";
$db_name = "u4840961_ngopi_dhisit";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}
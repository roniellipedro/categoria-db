<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "db_categoria";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}

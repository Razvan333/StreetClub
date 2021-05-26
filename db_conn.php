<?php

$sName = "localhost";
//$uName = "root";
//$password = "";
$uName = "streetclub";
$password = "streetclub321";
$db_name = "streetclub";
$charset = "utf8mb4";

try {
    $dsn = 'mysql:host=' . $sName . ';dbname=' . $db_name;
    $conn = new PDO($dsn, $uName, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed : " . $e->getMessage();
}

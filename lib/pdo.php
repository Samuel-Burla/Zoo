<?php
require_once __DIR__ . "/config.php";

try {
    $pdo = new PDO('mysql:host=' . _DB_HOST_ . ';dbname=' . _DB_NAME_, _DB_USER_, _DB_PASSWORD_);
} catch (PDOException $e) {
    echo "Error :" . $e->getMessage();
}


$query = $pdo-> prepare("SELECT * FROM service");
$query -> execute();

$services = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump($services);

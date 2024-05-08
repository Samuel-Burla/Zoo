<?php
require_once __DIR__."../../../lib/pdo.php";
require_once __DIR__."../../../lib/config.php";

function getServices(PDO $pdo) : array
{
    $query = $pdo-> prepare("SELECT * FROM service");
    $query -> execute();
    
    $services = $query->fetchAll(PDO::FETCH_ASSOC);
    return $services;
}

function getUsers(PDO $pdo) : array
{
    $sql = "SELECT * FROM user JOIN role ON user.role_id=role.role_id";
    $query = $pdo-> prepare($sql);
    $query -> execute();
    
    $users = $query->fetchAll(PDO::FETCH_ASSOC);
    return $users;
}

function getHabitats(PDO $pdo) : array
{
    $query = $pdo-> prepare("SELECT * FROM habitat");
    $query -> execute();
    
    $habitats = $query->fetchAll(PDO::FETCH_ASSOC);
    return $habitats;
}

function getHabitat(PDO $pdo, int $habitatId) : array
{
    $query = $pdo->prepare("SELECT * FROM habitat WHERE habitat_id=:id");
    $query->bindValue(":id", $habitatId, PDO::PARAM_INT);
    $query -> execute();
    
    $habitat = $query->fetch(PDO::FETCH_ASSOC);
    return $habitat;
}

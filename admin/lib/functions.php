<?php
require_once __DIR__ . "../../../lib/pdo.php";
require_once __DIR__ . "../../../lib/config.php";

function getServices(PDO $pdo): array
{
    $query = $pdo->prepare("SELECT * FROM service");
    $query->execute();

    $services = $query->fetchAll(PDO::FETCH_ASSOC);
    return $services;
}

function getService(PDO $pdo, int $service_id): array
{
    $query = $pdo->prepare("SELECT * FROM service WHERE service_id=:service_id");
    $query->bindValue(":service_id", $service_id, PDO::PARAM_INT);
    $query->execute();

    $service = $query->fetch(PDO::FETCH_ASSOC);
    return $service;
}

function setService(PDO $pdo, string $serviceName, string $serviceDescription)
{
    $sql = "INSERT INTO service (name, description) VALUES (:serviceName, :serviceDescription)";
    $query = $pdo->prepare($sql);
    $query->bindValue(":serviceName", $serviceName, PDO::PARAM_STR);
    $query->bindValue(":serviceDescription", $serviceDescription, PDO::PARAM_STR);
    $query->execute();
}

function updateService(PDO $pdo, string $serviceName, string $serviceDescription, int $service_id)
{
    $sql = "UPDATE service SET name=:serviceName, description=:serviceDescription WHERE service_id=:service_id";
    $query = $pdo->prepare($sql);
    $query->bindValue(":serviceName", $serviceName, PDO::PARAM_STR);
    $query->bindValue(":serviceDescription", $serviceDescription, PDO::PARAM_STR);
    $query->bindValue(":service_id", $service_id, PDO::PARAM_INT);
    $query->execute();
}

function deleteService(PDO $pdo, int $service_id)
{
    $sql = "DELETE FROM service WHERE service_id=:service_id";
    $query = $pdo->prepare($sql);
    $query->bindValue(":service_id", $service_id, PDO::PARAM_INT);
    $query->execute();
}

function getHabitats(PDO $pdo): array
{
    $query = $pdo->prepare("SELECT * FROM habitat");
    $query->execute();

    $habitats = $query->fetchAll(PDO::FETCH_ASSOC);
    return $habitats;
}

function getHabitat(PDO $pdo, int $habitatId): array
{
    $query = $pdo->prepare("SELECT * FROM habitat WHERE habitat_id=:id");
    $query->bindValue(":id", $habitatId, PDO::PARAM_INT);
    $query->execute();

    $habitat = $query->fetch(PDO::FETCH_ASSOC);
    return $habitat;
}

function getUsers(PDO $pdo): array
{
    $sql = "SELECT * FROM user JOIN role ON user.role_id=role.role_id";
    $query = $pdo->prepare($sql);
    $query->execute();

    $users = $query->fetchAll(PDO::FETCH_ASSOC);
    return $users;
}



function getAnimals(PDO $pdo): array
{
    $query = $pdo->prepare("SELECT * FROM animal");
    $query->execute();

    $animals = $query->fetchAll(PDO::FETCH_ASSOC);
    return $animals;
}

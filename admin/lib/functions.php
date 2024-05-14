<?php
require_once __DIR__ . "../../../lib/pdo.php";
require_once __DIR__ . "../../../lib/config.php";



/* ============= Services =========== */
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

function addService(PDO $pdo, string $serviceName, string $serviceDescription)
{
    $sql = "INSERT INTO service (service_name, description) VALUES (:serviceName, :serviceDescription)";
    $query = $pdo->prepare($sql);
    $query->bindValue(":serviceName", $serviceName, PDO::PARAM_STR);
    $query->bindValue(":serviceDescription", $serviceDescription, PDO::PARAM_STR);
    $query->execute();
}

function updateService(PDO $pdo, string $serviceName, string $serviceDescription, int $service_id)
{
    $sql = "UPDATE service SET service_name=:serviceName, description=:serviceDescription WHERE service_id=:service_id";
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

/* ============= Habitats =========== */
function getHabitats(PDO $pdo): array
{
    $query = $pdo->prepare("SELECT * FROM habitat");
    $query->execute();

    $habitats = $query->fetchAll(PDO::FETCH_ASSOC);
    return $habitats;
}

function getHabitat(PDO $pdo, int $habitat_id): array
{
    $query = $pdo->prepare("SELECT * FROM habitat WHERE habitat_id=:habitat_id");
    $query->bindValue(":habitat_id", $habitat_id, PDO::PARAM_INT);
    $query->execute();

    $habitat = $query->fetch(PDO::FETCH_ASSOC);
    return $habitat;
}

function addHabitat(PDO $pdo, string $habitat_name, string $description)
{
    $sql = "INSERT INTO habitat (habitat_name, description) VALUES (:habitat_name, :description)";
    $query = $pdo->prepare($sql);
    $query->bindValue(":habitat_name", $habitat_name, PDO::PARAM_STR);
    $query->bindValue(":description", $description, PDO::PARAM_STR);
    $query->execute();
}

function updateHabitat(PDO $pdo, string $habitat_name, string $description, int $habitat_id)
{
    $sql = "UPDATE habitat SET habitat_name=:habitat_name, description=:description WHERE habitat_id=:habitat_id";
    $query = $pdo->prepare($sql);
    $query->bindValue(":habitat_name", $habitat_name, PDO::PARAM_STR);
    $query->bindValue(":description", $description, PDO::PARAM_STR);
    $query->bindValue(":habitat_id", $habitat_id, PDO::PARAM_INT);
    $query->execute();
}

function deleteHabitat(PDO $pdo, int $habitat_id)
{
    $sql = "DELETE FROM habitat WHERE habitat_id=:habitat_id";
    $query = $pdo->prepare($sql);
    $query->bindValue(":habitat_id", $habitat_id, PDO::PARAM_INT);
    $query->execute();
}


/* ============= Animals =========== */
function getAnimals(PDO $pdo): array
{
    $query = $pdo->prepare("SELECT * FROM animal JOIN class ON animal.class_id=class.class_id JOIN habitat ON animal.habitat_id=habitat.habitat_id");
    $query->execute();

    $animals = $query->fetchAll(PDO::FETCH_ASSOC);
    return $animals;
}

function addImage(PDO $pdo, $image_data, INT $habitat_id)
{
    $sql = "INSERT INTO image (image_data, habitat_id) VALUES (:image_data, :habitat_id)";
    $query = $pdo->prepare($sql);
    $query->bindValue(":image_data", $image_data);
    $query->bindValue(":habitat_id", $habitat_id, PDO::PARAM_INT);
    $query->execute();
}
// function getImages(PDO $pdo, INT $image_id, INT $habitat_id) : array
// {
//     $sql = "SELECT * image WHERE image_id=:image_id, habitat_id=:habitat_id)";
//     $query = $pdo->prepare($sql);
//     $query->bindValue(":image_data", $image_id);
//     $query->bindValue(":habitat_id", $habitat_id, PDO::PARAM_INT);
//     $query->execute();

//     $images = $query->fetchAll(PDO::FETCH_ASSOC);

//     return $images;
// }

function getImages(PDO $pdo, INT $image_id): array
{
    $sql = "SELECT * FROM image WHERE image_id=:image_id";
    $query = $pdo->prepare($sql);
    $query->bindValue(":image_id", $image_id, PDO::PARAM_INT);
    // if($habitat_id){

    //     $query->bindValue(":habitat_id", $habitat_id, PDO::PARAM_INT);
    // }
    $query->execute();

    $images = $query->fetchAll(PDO::FETCH_ASSOC);

    return $images;
}

/* ============= User =========== */
function getUsers(PDO $pdo): array
{
    $sql = "SELECT * FROM user JOIN role ON user.role_id=role.role_id";
    $query = $pdo->prepare($sql);
    $query->execute();

    $users = $query->fetchAll(PDO::FETCH_ASSOC);
    return $users;
}

function getUser(PDO $pdo, string $username): array
{
    $query = $pdo->prepare("SELECT * FROM user WHERE username=:username");
    $query->bindValue(":username", $username, PDO::PARAM_STR);
    $query->execute();

    $user = $query->fetch(PDO::FETCH_ASSOC);
    return $user;
}

function addUser(PDO $pdo, string $first_name, string $last_name, string $username, string $password, int $role_id)
{
    $sql = "INSERT INTO user (first_name, last_name, username, password, role_id) VALUES (:first_name, :last_name, :username, :password, :role_id)";
    $query = $pdo->prepare($sql);

    $passwordHashed = password_hash($password, PASSWORD_BCRYPT);

    $query->bindValue(":first_name", $first_name, PDO::PARAM_STR);
    $query->bindValue(":last_name", $last_name, PDO::PARAM_STR);
    $query->bindValue(":username", $username, PDO::PARAM_STR);
    $query->bindValue(":password", $passwordHashed, PDO::PARAM_STR);
    $query->bindValue(":role_id", $role_id, PDO::PARAM_INT);
    $query->execute();
}

function updateUser(PDO $pdo, string $first_name, string $last_name, string $username, int $role_id)
{
    $sql = "UPDATE user SET first_name=:first_name, last_name=:last_name, role_id=:role_id WHERE username=:username";
    $query = $pdo->prepare($sql);
    $query->bindValue(":first_name", $first_name, PDO::PARAM_STR);
    $query->bindValue(":last_name", $last_name, PDO::PARAM_STR);
    $query->bindValue(":username", $username, PDO::PARAM_STR);
    $query->bindValue(":role_id", $role_id, PDO::PARAM_INT);
    $query->execute();
}

function deleteUser(PDO $pdo, string $username)
{
    $sql = "DELETE FROM user WHERE username=:username";
    $query = $pdo->prepare($sql);
    $query->bindValue(":username", $username, PDO::PARAM_STR);
    $query->execute();
}

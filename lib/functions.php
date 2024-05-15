<?php
require_once __DIR__."/pdo.php";


function getServices(PDO $pdo) : array
{
    $query = $pdo-> prepare("SELECT * FROM service");
    $query -> execute();
    
    $services = $query->fetchAll(PDO::FETCH_ASSOC);
    return $services;
}

function getOpeningTime(PDO $pdo) : array
{
    $query = $pdo-> prepare("SELECT * FROM opening_time");
    $query -> execute();
    
    $opening_time = $query->fetch(PDO::FETCH_ASSOC);
    return $opening_time;
}

function getHabitats(PDO $pdo) : array
{
    $query = $pdo-> prepare("SELECT * FROM habitat");
    $query -> execute();
    
    $habitats = $query->fetchAll(PDO::FETCH_ASSOC);
    return $habitats;
}

function getHabitat(PDO $pdo, int|null $habitatId) : array|bool
{
    $query = $pdo->prepare("SELECT * FROM habitat WHERE habitat_id=:id");
    $query->bindValue(":id", $habitatId, PDO::PARAM_INT);
    $query -> execute();
    
    $habitat = $query->fetch(PDO::FETCH_ASSOC);
    return $habitat;
}

function getUser(PDO $pdo, string|null $username) : array|bool
{
    $sql = "SELECT * FROM user JOIN role ON user.role_id=role.role_id WHERE user.username=:username";
    $query = $pdo-> prepare($sql);
    $query->bindValue("username", $username);
    $query -> execute();
    
    $user = $query->fetch(PDO::FETCH_ASSOC);
    return $user;
}

function getAnimals(PDO $pdo, int $habitat_id) : array
{
    $sql = "SELECT * FROM animal WHERE habitat_id=:habitat_id";
    $query = $pdo-> prepare($sql);
    $query->bindValue(":habitat_id", $habitat_id);
    $query -> execute();
    
    $animals = $query->fetchAll(PDO::FETCH_ASSOC);
    return $animals;
}

function getAnimal(PDO $pdo, int $animal_id) : array
{
    $sql = "SELECT * FROM animal WHERE animal_id=:animal_id";
    $query = $pdo-> prepare($sql);
    $query->bindValue(":animal_id", $animal_id, PDO::PARAM_INT);
    $query -> execute();
    
    $animal = $query->fetch(PDO::FETCH_ASSOC);
    return $animal;
}
function getImages(PDO $pdo, INT $image_id) : array
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
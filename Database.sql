
/* ========== DATABASE ========== */ 
DROP DATABASE IF EXISTS Zoo;
CREATE DATABASE IF NOT EXISTS Zoo;


USE Zoo;

CREATE TABLE IF NOT EXISTS `role`(
    role_id INT NOT NULL AUTO_INCREMENT,
    label VARCHAR(50) NOT NULL,
    PRIMARY KEY(role_id)
);

/* ========== TABLES ========== */ 
CREATE TABLE IF NOT EXISTS user (
    username VARCHAR(50) NOT NULL, 
    password VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    role_id INT NOT NULL,
    PRIMARY KEY (username),
    FOREIGN KEY (role_id) REFERENCES role(role_id)
);


CREATE TABLE IF NOT EXISTS `service`(
    service_id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    description TEXT(1000) NOT NULL,
    PRIMARY KEY(service_id)
);

CREATE TABLE IF NOT EXISTS `image`(
    image_id INT NOT NULL AUTO_INCREMENT,
    image_data BLOB,
    habitat_id INT,
    PRIMARY KEY(image_id)
);

CREATE TABLE IF NOT EXISTS `habitat`(
    habitat_id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    description TEXT(1000) NOT NULL,
    habitat_comment VARCHAR(255),
    image_id INT,
    PRIMARY KEY(habitat_id)
);

CREATE TABLE IF NOT EXISTS `race`(
    race_id INT AUTO_INCREMENT NOT NULL,
    label VARCHAR(50),
    PRIMARY KEY (race_id)
);

CREATE TABLE IF NOT EXISTS `animal`(
    animal_id INT NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(50) NOT NULL,
    animal_condition VARCHAR(50) NOT NULL,
    veterinary_opinion_id INT,
    habitat_id INT,
    race_id INT,
    PRIMARY KEY(animal_id),
    FOREIGN KEY(habitat_id) REFERENCES habitat(habitat_id),
    FOREIGN KEY(race_id) REFERENCES race(race_id)
);

CREATE TABLE IF NOT EXISTS `veterinary_opinion`(
    veterinary_opinion_id INT NOT NULL AUTO_INCREMENT,
    date DATE NOT NULL,
    detail VARCHAR(255) NOT NULL,
    username VARCHAR(50),
    animal_id INT,
    PRIMARY KEY(veterinary_opinion_id),
    FOREIGN KEY(username) REFERENCES user(username),
    FOREIGN KEY(animal_id) REFERENCES animal(animal_id)
);

CREATE TABLE IF NOT EXISTS `opinion`(
    opinion_id INT NOT NULL AUTO_INCREMENT,
    pseudo VARCHAR(50),
    comment VARCHAR(255),
    isVisible BIT NOT NULL DEFAULT 0,
    PRIMARY KEY(opinion_id)
);

/* ========== ALTER TABLES ========== */ 
ALTER TABLE image
ADD FOREIGN KEY(habitat_id) REFERENCES habitat(habitat_id);

ALTER TABLE habitat
ADD FOREIGN KEY(image_id) REFERENCES image(image_id);

ALTER TABLE animal
ADD FOREIGN KEY(veterinary_opinion_id) REFERENCES veterinary_opinion(veterinary_opinion_id);

/* ========== ALTER TABLES ========== */ 

INSERT INTO service (name, description)
VALUES 
("Petit tours en train", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat reprehenderit asperiores rerum dolorem facilis ipsam mollitia amet minima, fugit labore reiciendis sit? Illum quas ut molestiae labore , optio officia error.Illum quas ut molestiae labore , optio officia errorLorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat reprehenderit asperiores rerum dolorem facilis ipsam mollitia amet minima, fugit labore reiciendis sit? Illum quas ut molestiae labore , optio officia error.Illum quas ut molestiae labore , optio officia error"),
("Visite guidée", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat reprehenderit asperiores rerum dolorem facilis ipsam mollitia amet minima, fugit labore reiciendis sit? Illum quas ut molestiae labore , optio officia error.Illum quas ut molestiae labore , optio officia errorLorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat reprehenderit asperiores rerum dolorem facilis ipsam mollitia amet minima, fugit labore reiciendis sit? Illum quas ut molestiae labore , optio officia error.Illum quas ut molestiae labore , optio officia error"),
("restaurants", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat reprehenderit asperiores rerum dolorem facilis ipsam mollitia amet minima, fugit labore reiciendis sit? Illum quas ut molestiae labore , optio officia error.Illum quas ut molestiae labore , optio officia errorLorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat reprehenderit asperiores rerum dolorem facilis ipsam mollitia amet minima, fugit labore reiciendis sit? Illum quas ut molestiae labore , optio officia error.Illum quas ut molestiae labore , optio officia error"),
("Dormir au Zoo", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat reprehenderit asperiores rerum dolorem facilis ipsam mollitia amet minima, fugit labore reiciendis sit? Illum quas ut molestiae labore , optio officia error.Illum quas ut molestiae labore , optio officia errorLorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat reprehenderit asperiores rerum dolorem facilis ipsam mollitia amet minima, fugit labore reiciendis sit? Illum quas ut molestiae labore , optio officia error.Illum quas ut molestiae labore , optio officia error");

INSERT INTO habitat (name, description)
VALUES 
("Desert", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat reprehenderit asperiores rerum dolorem facilis ipsam mollitia amet minima, fugit labore reiciendis sit? Illum quas ut molestiae labore , optio officia error.Illum quas ut molestiae labore , optio officia errorLorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat reprehenderit asperiores rerum dolorem facilis ipsam mollitia amet minima, fugit labore reiciendis sit? Illum quas ut molestiae labore , optio officia error.Illum quas ut molestiae labore , optio officia error"),
("Forêt tropicale", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat reprehenderit asperiores rerum dolorem facilis ipsam mollitia amet minima, fugit labore reiciendis sit? Illum quas ut molestiae labore , optio officia error.Illum quas ut molestiae labore , optio officia errorLorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat reprehenderit asperiores rerum dolorem facilis ipsam mollitia amet minima, fugit labore reiciendis sit? Illum quas ut molestiae labore , optio officia error.Illum quas ut molestiae labore , optio officia error"),
("Savane", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat reprehenderit asperiores rerum dolorem facilis ipsam mollitia amet minima, fugit labore reiciendis sit? Illum quas ut molestiae labore , optio officia error.Illum quas ut molestiae labore , optio officia errorLorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat reprehenderit asperiores rerum dolorem facilis ipsam mollitia amet minima, fugit labore reiciendis sit? Illum quas ut molestiae labore , optio officia error.Illum quas ut molestiae labore , optio officia error"),
("Zone polaire", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat reprehenderit asperiores rerum dolorem facilis ipsam mollitia amet minima, fugit labore reiciendis sit? Illum quas ut molestiae labore , optio officia error.Illum quas ut molestiae labore , optio officia errorLorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat reprehenderit asperiores rerum dolorem facilis ipsam mollitia amet minima, fugit labore reiciendis sit? Illum quas ut molestiae labore , optio officia error.Illum quas ut molestiae labore , optio officia error"),
("Milieu marin", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat reprehenderit asperiores rerum dolorem facilis ipsam mollitia amet minima, fugit labore reiciendis sit? Illum quas ut molestiae labore , optio officia error.Illum quas ut molestiae labore , optio officia errorLorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat reprehenderit asperiores rerum dolorem facilis ipsam mollitia amet minima, fugit labore reiciendis sit? Illum quas ut molestiae labore , optio officia error.Illum quas ut molestiae labore , optio officia error"),
("Montagne", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat reprehenderit asperiores rerum dolorem facilis ipsam mollitia amet minima, fugit labore reiciendis sit? Illum quas ut molestiae labore , optio officia error.Illum quas ut molestiae labore , optio officia errorLorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat reprehenderit asperiores rerum dolorem facilis ipsam mollitia amet minima, fugit labore reiciendis sit? Illum quas ut molestiae labore , optio officia error.Illum quas ut molestiae labore , optio officia error");

INSERT INTO animal (first_name, animal_condition)
VALUES 
("Shark", "Bon état"),
("Croco", "très bon état"),
("zebre", "moyen"),
("elephant", "mauvais etat"),
("oiseau", "plus ou moins état");
CREATE DATABASE lovebarista;

USE lovebarista;

CREATE TABLE utilisateur (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    mdp VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE capsules (
    id INT PRIMARY KEY AUTO_INCREMENT,
    image VARCHAR(255),
    nom VARCHAR(255),
    description VARCHAR(255),
    prix DECIMAL(8, 2),
    stock INT
);

CREATE TABLE grain (
    id INT PRIMARY KEY AUTO_INCREMENT,
    image VARCHAR(255),
    nom VARCHAR(255),
    description VARCHAR(255),
    prix DECIMAL(8, 2),
    stock INT
);

CREATE TABLE machine (
    id INT NOT NULL AUTO_INCREMENT,
    image VARCHAR(255) NOT NULL,
    nom VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    prix VARCHAR(255) NOT NULL,
    stock INT NOT NULL,
    PRIMARY KEY (id)
);



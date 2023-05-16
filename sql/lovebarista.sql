DROP DATABASE IF EXISTS lovebarista;
CREATE DATABASE lovebarista;

USE lovebarista;


CREATE TABLE IF NOT EXISTS utilisateur (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    mdp VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE if NOT EXISTS categories(
     id INT PRIMARY KEY ,
     nom VARCHAR(255) NOT NULL UNIQUE
);


CREATE TABLE IF NOT EXISTS produits (
    image VARCHAR(255),
    nom VARCHAR(255),
    description VARCHAR(255),
    prix DECIMAL(8, 2),
    stock INT,
    categories_id INT,
    FOREIGN KEY(categories_id) REFERENCES categories(id)
);
INSERT INTO categories VALUES (0,"Grain");
INSERT INTO categories VALUES (1,"Machine");
INSERT INTO categories VALUES (2,"Capsule");

INSERT INTO produits VALUES('../img/bresil.png', 'Brésil ahumas', '1kg', 6.90, 50,0);
INSERT INTO produits VALUES('../img/mexique.png', 'Mexique grains', '1kg', 17.95, 50,0);
INSERT INTO produits VALUES('../img/kawa.png', 'Kawa coffee', '1kg', 35.65, 50,0);
INSERT INTO produits VALUES('../img/fazen.png', 'Brésil Fazenda Arema', '1kg', 32.00, 50,0);
INSERT INTO produits VALUES('../img/bio.png', 'Colombie Grain Bio', '1kg', 24.47, 50,0);

INSERT INTO produits VALUES('../img/gustoMini.png', 'Dolce Gusto Mini', 'Blanc', 37.99, 30,1);
INSERT INTO produits VALUES('../img/krups.png', 'Krups XN304T', 'Noir', 154.00, 30,1);
INSERT INTO produits VALUES('../img/bosch.png', 'Bosch Tassimo', 'Noir', 65.39, 30,1);
INSERT INTO produits VALUES('../img/vertuo.png', 'Nespresso Vertuo', 'Noir', 79.00, 30,1);
INSERT INTO produits VALUES('../img/inissia.png', 'Nespresso Inissia', 'Blanc', 112.99, 30,1);

INSERT INTO produits VALUES('../img/espresso.png','or 20 capsules','Espresso Delizioso', 5.61 , 100, 2);
INSERT INTO produits VALUES('../img/forza.png', 'or 20 capsules', 'Espresso Forza', 6.29, 100,2);
INSERT INTO produits VALUES('../img/royal.png', 'Café Royal 18 capsules', 'Espresso', 5.39, 100,2);
INSERT INTO produits VALUES('../img/livanto.png', 'Nespresso 50 capsules', 'Livanto intensité', 24.60, 100,2);
INSERT INTO produits VALUES('../img/starbucks.png', 'Starbucks 10 capsules', 'Espresso', 4.04, 100,2);


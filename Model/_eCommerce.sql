DROP DATABASE ECollections ;

-- Création de la base de données
CREATE DATABASE IF NOT EXISTS ECollections;

-- Sélection de la base de données
USE ECollections;


-- Création de la table Role
CREATE TABLE IF NOT EXISTS Role (
    id INT AUTO_INCREMENT PRIMARY KEY,
    label VARCHAR(50) NOT NULL UNIQUE
);


-- Création de la table User
CREATE TABLE IF NOT EXISTS User (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    address TEXT,
    password VARCHAR(255) NOT NULL,
    role_id INT,
    FOREIGN KEY (role_id) REFERENCES Role(id)
);


-- Création de la table Collections
CREATE TABLE IF NOT EXISTS Collections (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    image_url TEXT,
    old_price FLOAT,
    new_price FLOAT,
    description TEXT,
    note INT CHECK(note BETWEEN 1 AND 5)
);

-- Création de la table Flags
CREATE TABLE IF NOT EXISTS Flags (
    id INT AUTO_INCREMENT PRIMARY KEY,
    label VARCHAR(50) NOT NULL UNIQUE
);

-- Création de la table collection_flag pour la relation many-to-many
CREATE TABLE IF NOT EXISTS collection_flag (
    id_collection INT,
    id_flag INT,
    FOREIGN KEY (id_collection) REFERENCES Collections(id),
    FOREIGN KEY (id_flag) REFERENCES Flags(id),
    PRIMARY KEY (id_collection, id_flag)
);

-- Création de la table Categorie
CREATE TABLE IF NOT EXISTS Categorie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL UNIQUE
);

-- Création de la table Sous-categorie
CREATE TABLE IF NOT EXISTS Sous_categorie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    categorie_id INT,
    name VARCHAR(255) NOT NULL,
    FOREIGN KEY (categorie_id) REFERENCES Categorie(id)
);

-- Création de la table Panier
CREATE TABLE IF NOT EXISTS Panier (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    slug VARCHAR(255) NOT NULL UNIQUE,
    FOREIGN KEY (user_id) REFERENCES User(id)
);

-- Création de la table Panier_Item
CREATE TABLE IF NOT EXISTS Panier_Item (
    panier_id INT,
    collection_id INT,
    quantity INT NOT NULL,
    PRIMARY KEY (panier_id, collection_id),
    FOREIGN KEY (panier_id) REFERENCES Panier(id),
    FOREIGN KEY (collection_id) REFERENCES Collections(id)
);

-- Création de la table Commande
CREATE TABLE IF NOT EXISTS Commande (
    id INT AUTO_INCREMENT PRIMARY KEY,
    slug VARCHAR(255) NOT NULL UNIQUE,
    id_panier INT,
    totalPrice FLOAT NOT NULL,
    is_paid BOOLEAN DEFAULT FALSE,
    modePaiement VARCHAR(255),
    FOREIGN KEY (id_panier) REFERENCES Panier(id)
);


-- Création de la table Event
CREATE TABLE IF NOT EXISTS Event (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    description TEXT,
    datetime DATETIME NOT NULL
);


INSERT INTO Role (label)
VALUES ('Admin'), ('Client');


INSERT INTO User (nom, email, address, password, role_id)
VALUES ('Dupont', 'dupont@example.com', 'Rue du Commerce, Paris', 'hashed_password', 1);





INSERT INTO Collections (nom, image_url, old_price, new_price, description, note)
VALUES ('Collection Printemps 2024', 'http://example.com/image.jpg', 100.00, 80.00, 'Description de la collection printemps.', 4);


INSERT INTO Flags (label)
VALUES ('Flag1'), ('Flag2'), ('Flag3');


INSERT INTO Categorie (name)
VALUES ('Vetements Homme'), ('Vetements Femme');


INSERT INTO Sous_categorie (categorie_id, name)
VALUES (1, 'Haut de forme homme'), (2, 'Robes femmes');



INSERT INTO Panier (user_id, slug)
VALUES (1, 'panier_12345');


INSERT INTO Panier_Item (panier_id, collection_id, quantity)
VALUES (1, 1, 2); -- Supposant que la collection avec id 1 existe déjà


INSERT INTO Commande (slug, id_panier, totalPrice, is_paid, modePaiement)
VALUES ('cmd_67890', 1, 200.00, TRUE, 'Carte Credit');


INSERT INTO Event (nom, description, datetime)
VALUES ('Vente Privée', 'Une vente privée exceptionnelle!', NOW() + INTERVAL 1 HOUR);

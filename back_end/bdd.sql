-- Création de la Base de données
CREATE DATABASE Le12emeShop;
USE Le12emeShop;

-- Table Equipe 
CREATE TABLE Equipe (
    id_equipe INT PRIMARY KEY AUTO_INCREMENT,
    nom_equipe VARCHAR(50) NOT NULL,
    pays VARCHAR(50) NOT NULL,
    logo_url VARCHAR(255)
) ENGINE=InnoDB;

-- Table Livraison 
CREATE TABLE Livraison (
    id_livraison INT PRIMARY KEY AUTO_INCREMENT,
    date_envoie DATE NOT NULL,
    numero_suivie VARCHAR(100) UNIQUE,
    date_reception DATE,
    transporteur VARCHAR(100) NOT NULL
) ENGINE=InnoDB;

-- Table Client 
CREATE TABLE Client (
    id_client INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(100) NOT NULL UNIQUE,
    mot_de_passe VARCHAR(255) NOT NULL,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    adresse VARCHAR(255),
    code_postal VARCHAR(10),
    ville VARCHAR(100),
    date_inscription TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Table Maillot 
CREATE TABLE Maillot (
    id_produit INT PRIMARY KEY AUTO_INCREMENT,
    id_equipe INT,
    nom VARCHAR(100) NOT NULL,
    prix DECIMAL(10,2) NOT NULL,
    taille VARCHAR(10) NOT NULL,
    nom_sur_le_maillot VARCHAR(100),
    numero_sur_le_maillot INT,
    nbr_stock INT NOT NULL,
    description TEXT,
    FOREIGN KEY (id_equipe) REFERENCES Equipe(id_equipe)
) ENGINE=InnoDB;

-- Table Commande (dépend de Client et Livraison)
CREATE TABLE Commande (
    id_commande INT PRIMARY KEY AUTO_INCREMENT,
    id_client INT NOT NULL,
    id_livraison INT NOT NULL,
    status_commande VARCHAR(50) NOT NULL,
    total_commande DECIMAL(10,2) NOT NULL,
    mode_paiement VARCHAR(50),
    FOREIGN KEY (id_client) REFERENCES Client(id_client),
    FOREIGN KEY (id_livraison) REFERENCES Livraison(id_livraison)
) ENGINE=InnoDB;

-- Table Paiement (dépend de Commande)
CREATE TABLE Paiement (
    id_paiement INT PRIMARY KEY AUTO_INCREMENT,
    id_commande INT NOT NULL,
    date_paiement DATE NOT NULL,
    montant DECIMAL(10,2) NOT NULL,
    moyen_paiement VARCHAR(50) NOT NULL,
    status_paiement VARCHAR(50) NOT NULL,
    FOREIGN KEY (id_commande) REFERENCES Commande(id_commande)
) ENGINE=InnoDB;

-- Table Details_commande (dépend de Commande et Maillot)
CREATE TABLE Details_commande (
    id_details INT PRIMARY KEY AUTO_INCREMENT,
    id_commande INT NOT NULL,
    id_produit INT NOT NULL,
    quantite INT NOT NULL,
    prix_unitaire DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (id_commande) REFERENCES Commande(id_commande),
    FOREIGN KEY (id_produit) REFERENCES Maillot(id_produit)
) ENGINE=InnoDB;

-- Table Personnalisation (dépend de Maillot)
CREATE TABLE Personnalisation (
    id_personnalisation INT PRIMARY KEY AUTO_INCREMENT,
    id_produit INT NOT NULL,
    nom_personnaliser VARCHAR(100),
    numero_personnaliser INT,
    FOREIGN KEY (id_produit) REFERENCES Maillot(id_produit)
) ENGINE=InnoDB;

/* --  Afficher les personnalisations sur les maillots
SELECT m.nom AS maillot, p.nom_personnaliser, p.numero_personnaliser
FROM Maillot m
JOIN Personnalisation p ON m.id_produit = p.id_produit;

-- Afficher toute les commandes d'un client
SELECT c.nom, c.prenom, co.id_commande, co.status_commande, co.total_commande
FROM Client c 
JOIN Commande co ON c.id_client = co.id_client;

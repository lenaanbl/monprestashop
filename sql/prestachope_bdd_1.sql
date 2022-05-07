SET NAMES utf8mb4;



DROP DATABASE IF EXISTS prestachope_bdd_1;

CREATE DATABASE prestachope_bdd_1;
USE prestachope_bdd_1;

CREATE TABLE clients (

  id_client int AUTO_INCREMENT NOT NULL,
  pseudo VARCHAR (64) NOT NULL,
  nom VARCHAR (64) NOT NULL,
  prenom VARCHAR (64) NOT NULL,
  picture TEXT (64) NOT NULL,
  mail VARCHAR (150) NOT NULL,
  montant FLOAT NOT NULL,
  password VARCHAR (64) NOT NULL,
  admin TINYINT (1) NOT NULL,
  ban TINYINT (1) NOT NULL,
  CONSTRAINT client_primary_key PRIMARY KEY (id_client)
)ENGINE=InnoDB;

CREATE TABLE categories(
        id_categorie Int  Auto_increment  NOT NULL ,
        nom         VARCHAR(50) NOT NULL
	,CONSTRAINT categorie_primary_key PRIMARY KEY (id_categorie)
)ENGINE=InnoDB;

CREATE TABLE recette(
        id_recette int AUTO_INCREMENT NOT NULL,
        nom_recette VARCHAR(64) NOT NULL,
        descriptif TEXT(255) NOT NULL,
        picture VARCHAR(64) NOT NULL,
        id_categorie int NOT NULL,
CONSTRAINT recette_primary_key PRIMARY KEY (id_recette),
CONSTRAINT recette_categorie_foreign_key FOREIGN KEY (id_categorie) REFERENCES categories(id_categorie)
)ENGINE=InnoDB;

CREATE TABLE voyage(
        id_voyage int AUTO_INCREMENT NOT NULL,
        nom_voyage VARCHAR(64) NOT NULL,
        descriptif TEXT(255) NOT NULL,
        picture VARCHAR(64) NOT NULL,
        prix FLOAT NOT NULL,
        id_categorie int NOT NULL,
CONSTRAINT voyage_primary_key PRIMARY KEY (id_voyage),
CONSTRAINT voyage_categorie_foreign_key FOREIGN KEY (id_categorie) REFERENCES categories(id_categorie)
)ENGINE=InnoDB;

CREATE TABLE logement(
        id_logement int AUTO_INCREMENT NOT NULL,
        nom_logement VARCHAR(64) NOT NULL,
        descriptif TEXT(255) NOT NULL,
        picture VARCHAR(64) NOT NULL,
        prix FLOAT NOT NULL,
        id_categorie int NOT NULL,
CONSTRAINT logement_primary_key PRIMARY KEY (id_logement),
CONSTRAINT logement_categorie_foreign_key FOREIGN KEY (id_categorie) REFERENCES categories(id_categorie)
)ENGINE=InnoDB;

DROP TABLE IF EXISTS produits;
CREATE TABLE produits (

  id_produit int AUTO_INCREMENT NOT NULL,
  nom VARCHAR (64) NOT NULL,
  description VARCHAR (64) NOT NULL,
  quantite int NOT NULL,
  prix FLOAT NOT NULL,
  picture TEXT NOT NULL,
  id_categorie int NOT NULL,
CONSTRAINT produit_primary_key PRIMARY KEY (id_produit),
CONSTRAINT produit_categorie_foreign_key FOREIGN KEY (id_categorie) REFERENCES categories(id_categorie)
)ENGINE=InnoDB;

CREATE TABLE commandes(
        id_commande   Int  Auto_increment  NOT NULL ,
        nb_produits    Int NOT NULL ,
        montant      Float NOT NULL ,
        date_commande DATETIME NOT NULL ,
        id_client     Int NOT NULL
	,CONSTRAINT commande_primary_key PRIMARY KEY (id_commande)

	,CONSTRAINT commande_clients_foreign_key FOREIGN KEY (id_client) REFERENCES clients(id_client)
)ENGINE=InnoDB;

CREATE TABLE messages(
        id_message Int  Auto_increment  NOT NULL ,
        message Text NOT NULL ,
        date DATETIME,
        sujet VARCHAR (64),
	CONSTRAINT message_primary_key PRIMARY KEY (id_message)
)ENGINE=InnoDB;

CREATE TABLE boutique(
        id_boutique Int  Auto_increment  NOT NULL ,
        tresorie     Float NOT NULL,
        nb_commandes   Int NOT NULL
	,CONSTRAINT Entreprise_PK PRIMARY KEY (id_boutique)
)ENGINE=InnoDB;

INSERT INTO `categories` (`id_categorie`, `nom`) VALUES
(1, 'cuisine'),
(2, 'voyage'),
(3, 'logement'),
(4, 'produits');

INSERT INTO `recette` (`id_recette`, `nom_recette`, `descriptif`, `picture`, `id_categorie`) VALUES ('1', 'Crêpes', '2 oeufs, 2 cuillères à soupe de farine, lait ou eau, sucre vanillé', 'crepe.jpg', '1');

INSERT INTO `voyage` (`id_voyage`, `nom_voyage`, `descriptif`, `picture`, `prix`, `id_categorie`) VALUES ('1', 'Corse - Saint Florent', '2 semaines dans un camping très calme proche de la petite plage de saint florent', 'corse.jpg', '750', '2');

INSERT INTO `logement` (`id_logement`, `nom_logement`, `descriptif`, `picture`, `prix`, `id_categorie`) VALUES ('1', 'Montpellier - 40m²', 'Proche du centre et de tout les petits commerces, plage à 20 minutes', 'montpellier.jpg', '390', '3');

INSERT INTO `clients` (`id_client`, `pseudo`, `nom`, `prenom`, `picture`, `mail`, `montant`, `password`, `admin`, `ban`) VALUES
(1, 'admin', 'admin', 'admin', 'assets/images/images_profil/admin.jpg', 'admin@gmail.com', 1000, 'admin', 1, 0),
(2, 'test123', 'test', 'test', 'assets/images/images_profil/test123_profil.jpg','testtest@gmail.com', 456.21, 'test123', 0, 0);


INSERT INTO `messages` (`id_message`, `message`, `date`, `sujet`) VALUES
(1, 'la leffe est en effet seche, nous avons soif après', '2021-05-05 10:58:45', 'la biere heineken'),
(2, 'la bière nouvelle est très innovante', '2021-05-05 11:40:37', 'bière nouvelle'),
(3, 'la guinness est très bonne', '2021-05-06 15:23:39', 'GUINNESS'),
(4, 'c bien bon', '2021-05-07 20:23:53', 'desperados classique'),
(5, 'sympa mais meilleure aves du citron vert', '2021-05-15 19:26:30', 'biere coréenne');

INSERT INTO `produits` (`id_produit`, `nom`, `description`, `quantite`, `prix`, `picture`, `id_categorie`) VALUES
(1, 'heineken', 'biere simple', 8, 5.98, 'assets/images/images_produit/heineken.jpg', 1),
(2, 'Bière Coréenne', 'plutot douce elle ravive les papilles', 4, 6.98, 'assets/images/images_produit/Korean_bier.jpg', 1),
(5, 'biere nouvelle', '1.5L la bouteille, plus sucrée a boire très fraiche', 3, 5.36, 'assets/images/images_produit/heineken.jpg', 1),
(6, 'korean', 'biere assez sèche', 2, 2.3, 'assets/images/images_produit/Korean_bier.jpg', 1),
(10, 'bière corona', 'biere spéciale pandémie', 10, 8, 'assets/images/images_produit/corona_biere.jpg', 1),
(11, '1664', 'bière classique, la bienvenue pour un apéro', 6, 6.35, 'assets/images/images_produit/1664.jpg', 1),
(12, 'guiness', 'attention à n\'en boire qu\'une seule !', 2, 4.3, 'assets/images/images_produit/guinness.jpg', 1),
(13, 'Leffe', 'un peu sèche, plus forte brune que blonde', 6, 5.8, 'assets/images/images_produit/leffe.jpg', 1);

-- Table client
CREATE TABLE user (
  id INT PRIMARY KEY AUTO_INCREMENT UNIQUE,
  nom VARCHAR(50) NOT NULL,
  prenom VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL,
  codePostal VARCHAR(5) NOT NULL,
  adresse VARCHAR(100) NOT NULL,
  telephone VARCHAR(20) NOT NULL
  password VARCHAR(16) NOT NULL,
  role VARCHAR(10) NOT NULL
);
-- Table intervention
CREATE TABLE intervention (
  id INT PRIMARY KEY AUTO_INCREMENT,
  date_debut DATETIME NOT NULL,
  date_fin DATETIME,
  status VARCHAR(50) NOT NULL,
  description VARCHAR(200) NOT NULL,
  materiel_id INT NOT NULL,
  technicien_id INT NOT NULL,
  FOREIGN KEY (materiel_id) REFERENCES materiel(id),
  FOREIGN KEY (technicien_id) REFERENCES technicien(id)
);

-- Table matériel
CREATE TABLE materiel (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nom VARCHAR(50) NOT NULL,
  description VARCHAR(100) NOT NULL,
  client_id INT NOT NULL,
  categorie VARCHAR(50) NOT NULL,
  FOREIGN KEY (client_id) REFERENCES client(id)
);

-- Table technicien
CREATE TABLE technicien (
  id INT PRIMARY KEY AUTO_INCREMENT UNIQUE,
  nom VARCHAR(50) NOT NULL,
  prenom VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL,
  codePostal VARCHAR(5) NOT NULL,
  adresse VARCHAR(100) NOT NULL,
  telephone VARCHAR(20) NOT NULL
  password VARCHAR(16) NOT NULL,
  role VARCHAR(10) NOT NULL
);


ALTER TABLE client
ADD password VARCHAR(16) NOT NULL;
ALTER TABLE client
ADD role VARCHAR(10) NOT NULL;

ALTER TABLE technicien
ADD password VARCHAR(16) NOT NULL;
ALTER TABLE technicien
ADD role VARCHAR(10) NOT NULL;

ALTER TABLE client
ADD CONSTRAINT UNIQUE (id,email);
ALTER TABLE technicien
ADD CONSTRAINT UNIQUE (id,email);

-- Ajouter un client
INSERT INTO client (nom, adresse, telephone) VALUES ('John Doe', '123 rue des fleurs', '01 23 45 67 89');

-- Ajouter un matériel
INSERT INTO materiel (nom, description, client_id) VALUES ('Ordinateur portable', 'Asus Zenbook UX425EA', 1);

-- Ajouter un technicien
INSERT INTO technicien (nom, adresse, telephone) VALUES ('Jane Smith', '456 rue des arbres', '01 23 45 67 89');

-- Ajouter une intervention
INSERT INTO intervention (date_debut, date_fin, description, materiel_id, technicien_id) VALUES ('2023-05-15 09:00:00', '2023-05-15 10:00:00', 'Réparation écran', 1, 1);



-- Lister tous les clients
SELECT * FROM client;

-- Lister tous les matériels d'un client donné (par exemple le client avec l'id 1)
SELECT * FROM materiel WHERE client_id = 1;

-- Lister toutes les interventions
SELECT * FROM intervention;

-- Lister toutes les interventions d'un matériel donné (par exemple le matériel avec l'id 1)
SELECT * FROM intervention WHERE materiel_id = 1;



-- Mettre à jour l'adresse d'un client (par exemple le client avec l'id 1)
UPDATE client SET adresse = '456 rue des arbres' WHERE id = 1;

-- Mettre à jour la description d'un matériel (par exemple le matériel avec l'id 1)
UPDATE materiel SET description = 'Asus Zenbook UX425EA, 16 Go de RAM, 512 Go de SSD' WHERE id = 1;

-- Mettre à jour la description et le technicien d'une intervention (par exemple l'intervention avec l'id 1)
UPDATE intervention SET description = 'Réparation écran et changement batterie', technicien_id = 2 WHERE id = 1;

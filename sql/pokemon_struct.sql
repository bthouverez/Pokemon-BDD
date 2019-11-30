-- Pokemon Database
-- Base de données des pokemon de la première version
-- Utilisée à des fins pédagogiques

-- Bastien Thouverez

DROP TABLE IF EXISTS detient_pokemons, est_type, evolue_en;
DROP TABLE IF EXISTS attaques, types, pokemons, dresseurs;

-- Structure de la table pokemons
-- Table de base
CREATE TABLE pokemons (
	id SERIAL NOT NULL,
	nom varchar(10) NOT NULL,
	PRIMARY KEY(id)
);

-- Table evolue_en
-- Un pokémon peut évoluer en un autre pokémon à un certain niveau
-- lvl = -1 -> nécessite une pierre pour évoluer
-- lvl = -2 -> nécessite un échange pour évoluer
CREATE TABLE evolue_en (
	pokemon_base_id int NOT NULL,
	pokemon_evol_id int NOT NULL,
	niveau int NOT NULL,
	FOREIGN KEY(pokemon_base_id) REFERENCES pokemons(id),
	FOREIGN KEY(pokemon_evol_id) REFERENCES pokemons(id)
);

-- Structure de la table type
-- Table des types, pour les pokemons et les attaques
CREATE TABLE types (
	id SERIAL NOT NULL,
	libelle varchar(10) NOT NULL,
	PRIMARY KEY(id)
);

-- Structure de la table est_type
-- Fait le lien entre un pokemon et un type
CREATE TABLE est_type (
	pokemon_id int NOT NULL,
	type_id int NOT NULL,
	FOREIGN KEY(pokemon_id) REFERENCES pokemons(id),
	FOREIGN KEY(type_id) REFERENCES types(id)
);
	
-- Structure de la table dresseurs
CREATE TABLE dresseurs (
	id SERIAL NOT NULL,
	nom varchar(25) NOT NULL,
	PRIMARY KEY(id)
);


-- Table détientPokémon
-- Un dresseur détient au maximum 6 pokémons
CREATE TABLE detient_pokemons (
	dresseur_id int NOT NULL, 
	pokemon_id int NOT NULL,  
	niveau int NOT NULL,
	FOREIGN KEY(dresseur_id) REFERENCES dresseurs(id),
	FOREIGN KEY(pokemon_id) REFERENCES pokemons(id)
);

-- Structure de la table attaque
-- Attaques des pokémons
CREATE TABLE attaques (
	id SERIAL NOT NULL,
	libelle varchar(50) NOT NULL,
	type_id int NOT NULL,
	pp int NOT NULL,
	puissance int NULL,
	precision int NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY(type_id) REFERENCES types(id)
);

-- Attaques
-- https://www.pokemontrash.com/rouge-bleu-jaune/liste-attaques.php



-- Gestion de la carte du monde
-- Tous les élements de la carte sont regroupés dans une table afin qu'ils aient un id unique
-- Les élements de la map sont: des villes, des sites et des routes
-- Les routes ont l'id de leur numéro
-- CREATE TABLE mapElement (
-- 	'id_elem' SERIAL NOT NULL PRIMARY KEY
-- );
-- 
-- CREATE TABLE ville (
-- 	'id_ville' int NOT NULL, -- FK mapElement(id_elem)
-- 	'nom_ville' varchar(25) 
-- );
-- 
-- CREATE TABLE site (
-- 	'id_site' int NOT NULL, -- FK mapElement(id_elem)
-- 	'nom_site' varchar(25)
-- );
-- 
-- CREATE TABLE route (
-- 	'id_route' int NOT NULL, -- FK mapElement(id_elem)
-- 	'type_route' varchar(20) NOT NULL -- maritime ou terrestre
-- );
-- 
-- -- id_elem peut représenter une route ou un site:
-- --   Une route relie deux elements de la carte
-- --   Un site a une entrée et une sortie qui sont des éléments de map
-- CREATE TABLE liensMap (
-- 	'id_elem' int NOT NULL, -- FK route(id_route)
-- 	'id_elem_in' int NOT NULL, -- FK mapElement(id_elem)
-- 	'id_elem_out' int NOT NULL -- FK mapElement(id_elem)
-- );

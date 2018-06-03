-- Pokemon Database
-- Base de données des pokemon de la première version
-- Utilisée à des fins pédagogiques

-- Bastien Thouverez

DROP TABLE IF EXISTS pokemon, dresseur, detientPokemon, type, estType, evolueEn;

-- Structure de la table pokemon
-- Table de base
CREATE TABLE pokemon (
	id_pok SERIAL NOT NULL,
	nom_pok varchar(10) NOT NULL,
	PRIMARY KEY(id_pok)
);

-- Table evolution
-- Un pokémon peut évoluer en un autre pokémon à un certain niveau
CREATE TABLE evolueEn (
	id_pok_base int NOT NULL,
	id_pok_evol int NOT NULL,
	lvl_evol_pok int NOT NULL,
	FOREIGN KEY(id_pok_base) REFERENCES pokemon(id_pok),
	FOREIGN KEY(id_pok_evol) REFERENCES pokemon(id_pok)
);

CREATE TABLE estType (
	id_pok int NOT NULL,
	type_pok varchar(25) NOT NULL,
	FOREIGN KEY(id_pok) REFERENCES pokemon(id_pok)
);
	
-- Structure de la table dresseur
CREATE TABLE dresseur (
	id_dress SERIAL NOT NULL,
	nom_dress varchar(25) NOT NULL,
	PRIMARY KEY(id_dress)
);


-- Table détientPokémon
-- Un dresseur détient au maximum 6 pokémons
-- arenes https://www.pokebip.com/page__jeuxvideo__rbvj__champions_arene.html
-- ligue https://www.pokebip.com/page__jeuxvideo__rbvj__conseil4.html
CREATE TABLE detientPokemon (
	id_dress int NOT NULL, 
	id_pok int NOT NULL,  
	lvl_pok int NOT NULL,
	FOREIGN KEY(id_dress) REFERENCES dresseur(id_dress),
	FOREIGN KEY(id_pok) REFERENCES pokemon(id_pok)
);





--
-- DATA
--

-- http://www.g33kmania.com/liste-pokemon-generation-1/


INSERT INTO pokemon (id_pok, nom_pok) VALUES
(  1, 'Bulbizarre'),
(  2, 'Herbizarre'),
(  3, 'Florizarre'),
(  4, 'Salameche'),
(  5, 'Reptincel'),
(  6, 'Dracaufeu'),
(  7, 'Carapuce'),
(  8, 'Carabaffe'),
(  9, 'Tortank'),
( 10, 'Chenipan'),
( 11, 'Chrysacier'),
( 12, 'Papilusion'),
( 13, 'Aspicot'),
( 14, 'Coconfort'),
( 15, 'Dardargnan'),
( 16, 'Roucool'),
( 17, 'Roucoups'),
( 18, 'Roucarnage'),
( 19, 'Rattata'),
( 20, 'Rattatac'),
( 21, 'Piafabec'),
( 22, 'Rapasdepic'),
( 23, 'Abo'),
( 24, 'Arbok'),
( 25, 'Pikachu'),
( 26, 'Raichu'),
( 27, 'Sabelette'),
( 28, 'Sablaireau'),
-- ( 29, 'Nidoran♀'),
( 29, 'NidoranF'),
( 30, 'Nidorina'),
( 31, 'Nidoqueen'),
-- ( 32, 'Nidoran♂'),
( 32, 'NidoranM'),
( 33, 'Nidorino'),
( 34, 'Nidoking'),
( 35, 'Melofee'),
( 36, 'Melodelfe'),
( 37, 'Goupix'),
( 38, 'Feunard'),
( 39, 'Rondoudou'),
( 40, 'Grodoudou'),
( 41, 'Nosferapti'),
( 42, 'Nosferalto'),
( 43, 'Mystherbe'),
( 44, 'Ortide'),
( 45, 'Rafflesia'),
( 46, 'Paras'),
( 47, 'Parasect'),
( 48, 'Mimitoss'),
( 49, 'Aeromite'),
( 50, 'Taupiqueur'),
( 51, 'Triopikeur'),
( 52, 'Miaouss'),
( 53, 'Persian'),
( 54, 'Psykokwak'),
( 55, 'Akwakwak'),
( 56, 'Ferosinge'),
( 57, 'Colossinge'),
( 58, 'Caninos'),
( 59, 'Arcanin'),
( 60, 'Ptitard'),
( 61, 'Tetarte'),
( 62, 'Tartard'),
( 63, 'Abra'),
( 64, 'Kadabra'),
( 65, 'Alakazam'),
( 66, 'Machoc'),
( 67, 'Machopeur'),
( 68, 'Mackogneur'),
( 69, 'Chetiflor'),
( 70, 'Boustiflor'),
( 71, 'Empiflor'),
( 72, 'Tentacool'),
( 73, 'Tentacruel'),
( 74, 'Racaillou'),
( 75, 'Gravalanch'),
( 76, 'Grolem'),
( 77, 'Ponyta'),
( 78, 'Galopa'),
( 79, 'Ramoloss'),
( 80, 'Flagadoss'),
( 81, 'Magneti'),
( 82, 'Magneton'),
( 83, 'Canarticho'),
( 84, 'Doduo'),
( 85, 'Dodrio'),
( 86, 'Otaria'),
( 87, 'Lamantine'),
( 88, 'Tadmorv'),
( 89, 'Grotadmorv'),
( 90, 'Kokiyas'),
( 91, 'Crustabri'),
( 92, 'Fantominus'),
( 93, 'Spectrum'),
( 94, 'Ectoplasma'),
( 95, 'Onix'),
( 96, 'Soporifik'),
( 97, 'Hypnomade'),
( 98, 'Krabby'),
( 99, 'Krabboss'),
(100, 'Voltorbe'),
(101, 'Electrode'),
(102, 'Noeunoeuf'),
(103, 'Noadkoko'),
(104, 'Osselait'),
(105, 'Ossatueur'),
(106, 'Kicklee'),
(107, 'Tygnon'),
(108, 'Excelangue'),
(109, 'Smogo'),
(110, 'Smogogo'),
(111, 'Rhinocorne'),
(112, 'Rhinoferos'),
(113, 'Leveinard'),
(114, 'Saquedeneu'),
(115, 'Kangourex'),
(116, 'Hypotrempe'),
(117, 'Hypocean'),
(118, 'Poissirene'),
(119, 'Poissoroy'),
(120, 'Stari'),
(121, 'Staross'),
(122, 'M.Mime'),
(123, 'Insecateur'),
(124, 'Lippoutou'),
(125, 'Elektek'),
(126, 'Magmar'),
(127, 'Scarabrute'),
(128, 'Tauros'),
(129, 'Magicarpe'),
(130, 'Leviator'),
(131, 'Lokhlass'),
(132, 'Metamorph'),
(133, 'Evoli'),
(134, 'Aquali'),
(135, 'Voltali'),
(136, 'Pyroli'),
(137, 'Porygon'),
(138, 'Amonita'),
(139, 'Amonistar'),
(140, 'Kabuto'),
(141, 'Kabutops'),
(142, 'Ptera'),
(143, 'Ronflex'),
(144, 'Artikodin'),
(145, 'Electhor'),
(146, 'Sulfura'),
(147, 'Minidraco'),
(148, 'Draco'),
(149, 'Dracolosse'),
(150, 'Mewtwo'),
(151, 'Mew');

INSERT INTO estType (id_pok, type_pok) VALUES
	(  1, 'Plante'),
	(  1, 'Poison'),
	(  2, 'Plante'),
	(  2, 'Poison'),
	(  3, 'Plante'),
	(  3, 'Poison'),
	(  4, 'Feu'),
	(  5, 'Feu'),
	(  6, 'Feu'),
	(  6, 'Vol'),
	(  7, 'Eau'),
	(  8, 'Eau'),
	(  9, 'Eau'),
	( 10, 'Insecte'),
	( 11, 'Insecte'),
	( 12, 'Insecte'),
	( 12, 'Vol'),
	( 13, 'Insecte'),
	( 13, 'Poison'),
	( 14, 'Insecte'),
	( 14, 'Poison'),
	( 15, 'Insecte'),
	( 15, 'Poison'),
	( 16, 'Normal'),
	( 16, 'Vol'),
	( 17, 'Normal'),
	( 17, 'Vol'),
	( 18, 'Normal'),
	( 18, 'Vol'),
	( 19, 'Normal'),
	( 20, 'Normal'),
	( 21, 'Normal'),
	( 21, 'Vol'),
	( 22, 'Normal'),
	( 22, 'Vol'),
	( 23, 'Poison'),
	( 24, 'Poison'),
	( 25, 'Electrique'),
	( 26, 'Electrique'),
	( 27, 'Sol'),
	( 28, 'Sol'),
	( 29, 'Poison'),
	( 30, 'Poison'),
	( 31, 'Poison'),
	( 31, 'Sol'),
	( 32, 'Poison'),
	( 33, 'Poison'),
	( 34, 'Poison'),
	( 34, 'Sol'),
	( 35, 'Normal'),
	( 36, 'Normal'),
	( 37, 'Feu'),
	( 38, 'Feu'),
	( 39, 'Normal'),
	( 40, 'Normal'),
	( 41, 'Poison'),
	( 41, 'Vol'),
	( 42, 'Poison'),
	( 42, 'Vol'),
	( 43, 'Plante'),
	( 43, 'Poison'),
	( 44, 'Plante'),
	( 44, 'Poison'),
	( 45, 'Plante'),
	( 45, 'Poison'),
	( 46, 'Insecte'),
	( 46, 'Plante'),
	( 47, 'Insecte'),
	( 47, 'Plante'),
	( 48, 'Insecte'),
	( 48, 'Poison'),
	( 49, 'Insecte'),
	( 49, 'Poison'),
	( 50, 'Sol'),
	( 51, 'Sol'),
	( 52, 'Normal'),
	( 53, 'Normal'),
	( 54, 'Eau'),
	( 55, 'Eau'),
	( 56, 'Combat'),
	( 57, 'Combat'),
	( 58, 'Feu'),
	( 59, 'Feu'),
	( 60, 'Eau'),
	( 61, 'Eau'),
	( 62, 'Eau'),
	( 62, 'Combat'),
	( 63, 'Psy'),
	( 64, 'Psy'),
	( 65, 'Psy'),
	( 66, 'Combat'),
	( 67, 'Combat'),
	( 68, 'Combat'),
	( 69, 'Plante'),
	( 69, 'Poison'),
	( 70, 'Plante'),
	( 70, 'Poison'),
	( 71, 'Plante'),
	( 71, 'Poison'),
	( 72, 'Eau'),
	( 72, 'Poison'),
	( 73, 'Eau'),
	( 73, 'Poison'),
	( 74, 'Roche'),
	( 74, 'Sol'),
	( 75, 'Roche'),
	( 75, 'Sol'),
	( 76, 'Roche'),
	( 76, 'Sol'),
	( 77, 'Feu'),
	( 78, 'Feu'),
	( 79, 'Eau'),
	( 79, 'Psy'),
	( 80, 'Eau'),
	( 80, 'Psy'),
	( 81, 'Electrique'),
	( 82, 'Electrique'),
	( 83, 'Normal'),
	( 83, 'Vol'),
	( 84, 'Normal'),
	( 84, 'Vol'),
	( 85, 'Normal'),
	( 85, 'Vol'),
	( 86, 'Eau'),
	( 87, 'Eau'),
	( 87, 'Glace'),
	( 88, 'Poison'),
	( 89, 'Poison'),
	( 90, 'Eau'),
	( 91, 'Eau'),
	( 91, 'Glace'),
	( 92, 'Spectre'),
	( 92, 'Poison'),
	( 93, 'Spectre'),
	( 93, 'Poison'),
	( 94, 'Spectre'),
	( 94, 'Poison'),
	( 95, 'Roche'),
	( 95, 'Sol'),
	( 96, 'Psy'),
	( 97, 'Psy'),
	( 98, 'Eau'),
	( 99, 'Eau'),
	(100, 'Electrique'),
	(101, 'Electrique'),
	(102, 'Plante'),
	(102, 'Psy'),
	(103, 'Plante'),
	(103, 'Psy'),
	(104, 'Sol'),
	(105, 'Sol'),
	(106, 'Combat'),
	(107, 'Combat'),
	(108, 'Normal'),
	(109, 'Poison'),
	(110, 'Poison'),
	(111, 'Sol'),
	(111, 'Roche'),
	(112, 'Sol'),
	(112, 'Roche'),
	(113, 'Normal'),
	(114, 'Plante'),
	(115, 'Normal'),
	(116, 'Eau'),
	(117, 'Eau'),
	(118, 'Eau'),
	(119, 'Eau'),
	(120, 'Eau'),
	(121, 'Eau'),
	(121, 'Psy'),
	(122, 'Psy'),
	(123, 'Insecte'),
	(123, 'Vol'),
	(124, 'Glace'),
	(124, 'Psy'),
	(125, 'Electrique'),
	(126, 'Feu'),
	(127, 'Insecte'),
	(128, 'Normal'),
	(129, 'Eau'),
	(130, 'Eau'),
	(130, 'Vol'),
	(131, 'Eau'),
	(131, 'Glace'),
	(132, 'Normal'),
	(133, 'Normal'),
	(134, 'Eau'),
	(135, 'Electrique'),
	(136, 'Feu'),
	(137, 'Normal'),
	(138, 'Roche'),
	(138, 'Eau'),
	(139, 'Roche'),
	(139, 'Eau'),
	(140, 'Roche'),
	(140, 'Eau'),
	(141, 'Roche'),
	(141, 'Eau'),
	(142, 'Roche'),
	(142, 'Vol'),
	(143, 'Normal'),
	(144, 'Glace'),
	(144, 'Vol'),
	(145, 'Electrique'),
	(145, 'Vol'),
	(146, 'Feu'),
	(146, 'Vol'),
	(147, 'Dragon'),
	(148, 'Dragon'),
	(149, 'Dragon'),
	(149, 'Vol'),
	(150, 'Psy'),
	(151, 'Psy');


INSERT INTO dresseur (nom_dress) VALUES 
	('Pierre'),
	('Ondine'),
	('Major Bob'),
	('Erika'),
	('Koga'),
	('Morgane'),
	('Auguste'),
	('Giovanni'),
	('Olga'),
	('Aldo'),
	('Agatha'),
	('Peter');

INSERT INTO detientPokemon (id_dress, id_pok, lvl_pok) VALUES
	(1, 74, 9),
	(1, 95, 11);






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

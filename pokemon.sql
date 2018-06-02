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

-- Table type
CREATE TABLE type (
	id_type SERIAL NOT NULL,
	nom_type varchar(25) NOT NULL,
	PRIMARY KEY(id_type)
);

CREATE TABLE estType (
	id_pok int NOT NULL,
	id_type int NOT NULL,
	FOREIGN KEY(id_pok) REFERENCES pokemon(id_pok),
	FOREIGN KEY(id_pok) REFERENCES type(id_type)
);
	
-- Structure de la table dresseur
CREATE TABLE dresseur (
	id_dress SERIAL NOT NULL,
	nom_dress varchar(25) NOT NULL,
	PRIMARY KEY(id_dress)
);


---- Table détientPokémon
---- Un dresseur détient au maximum 6 pokémons
---- arenes https://www.pokebip.com/page__jeuxvideo__rbvj__champions_arene.html
---- ligue https://www.pokebip.com/page__jeuxvideo__rbvj__conseil4.html
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
(001, 'Bulbizarre'),
(002, 'Herbizarre'),
(003, 'Florizarre'),
(004, 'Salameche'),
(005, 'Reptincel'),
(006, 'Dracaufeu'),
(007, 'Carapuce'),
(008, 'Carabaffe'),
(009, 'Tortank'),
(010, 'Chenipan'),
(011, 'Chrysacier'),
(012, 'Papilusion'),
(013, 'Aspicot'),
(014, 'Coconfort'),
(015, 'Dardargnan'),
(016, 'Roucool'),
(017, 'Roucoups'),
(018, 'Roucarnage'),
(019, 'Rattata'),
(020, 'Rattatac'),
(021, 'Piafabec'),
(022, 'Rapasdepic'),
(023, 'Abo'),
(024, 'Arbok'),
(025, 'Pikachu'),
(026, 'Raichu'),
(027, 'Sabelette'),
(028, 'Sablaireau'),
--(029, 'Nidoran♀'),
(029, 'NidoranF'),
(030, 'Nidorina'),
(031, 'Nidoqueen'),
--(032, 'Nidoran♂'),
(032, 'NidoranM'),
(033, 'Nidorino'),
(034, 'Nidoking'),
(035, 'Melofee'),
(036, 'Melodelfe'),
(037, 'Goupix'),
(038, 'Feunard'),
(039, 'Rondoudou'),
(040, 'Grodoudou'),
(041, 'Nosferapti'),
(042, 'Nosferalto'),
(043, 'Mystherbe'),
(044, 'Ortide'),
(045, 'Rafflesia'),
(046, 'Paras'),
(047, 'Parasect'),
(048, 'Mimitoss'),
(049, 'Aeromite'),
(050, 'Taupiqueur'),
(051, 'Triopikeur'),
(052, 'Miaouss'),
(053, 'Persian'),
(054, 'Psykokwak'),
(055, 'Akwakwak'),
(056, 'Ferosinge'),
(057, 'Colossinge'),
(058, 'Caninos'),
(059, 'Arcanin'),
(060, 'Ptitard'),
(061, 'Tetarte'),
(062, 'Tartard'),
(063, 'Abra'),
(064, 'Kadabra'),
(065, 'Alakazam'),
(066, 'Machoc'),
(067, 'Machopeur'),
(068, 'Mackogneur'),
(069, 'Chetiflor'),
(070, 'Boustiflor'),
(071, 'Empiflor'),
(072, 'Tentacool'),
(073, 'Tentacruel'),
(074, 'Racaillou'),
(075, 'Gravalanch'),
(076, 'Grolem'),
(077, 'Ponyta'),
(078, 'Galopa'),
(079, 'Ramoloss'),
(080, 'Flagadoss'),
(081, 'Magneti'),
(082, 'Magneton'),
(083, 'Canarticho'),
(084, 'Doduo'),
(085, 'Dodrio'),
(086, 'Otaria'),
(087, 'Lamantine'),
(088, 'Tadmorv'),
(089, 'Grotadmorv'),
(090, 'Kokiyas'),
(091, 'Crustabri'),
(092, 'Fantominus'),
(093, 'Spectrum'),
(094, 'Ectoplasma'),
(095, 'Onix'),
(096, 'Soporifik'),
(097, 'Hypnomade'),
(098, 'Krabby'),
(099, 'Krabboss'),
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

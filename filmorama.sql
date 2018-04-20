-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 20 avr. 2018 à 09:39
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `filmorama`
--

-- --------------------------------------------------------

--
-- Structure de la table `annees_sortie`
--

CREATE TABLE `annees_sortie` (
  `id` int(3) DEFAULT NULL,
  `annee` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `annees_sortie`
--

INSERT INTO `annees_sortie` (`id`, `annee`) VALUES
(1, 1895),
(2, 1896),
(3, 1897),
(4, 1898),
(5, 1899),
(6, 1900),
(7, 1901),
(8, 1902),
(9, 1903),
(10, 1904),
(11, 1905),
(12, 1906),
(13, 1907),
(14, 1908),
(15, 1909),
(16, 1910),
(17, 1911),
(18, 1912),
(19, 1913),
(20, 1914),
(21, 1915),
(22, 1916),
(23, 1917),
(24, 1918),
(25, 1919),
(26, 1920),
(27, 1921),
(28, 1922),
(29, 1923),
(30, 1924),
(31, 1925),
(32, 1926),
(33, 1927),
(34, 1928),
(35, 1929),
(36, 1930),
(37, 1931),
(38, 1932),
(39, 1933),
(40, 1934),
(41, 1935),
(42, 1936),
(43, 1937),
(44, 1938),
(45, 1939),
(46, 1940),
(47, 1941),
(48, 1942),
(49, 1943),
(50, 1944),
(51, 1945),
(52, 1946),
(53, 1947),
(54, 1948),
(55, 1949),
(56, 1950),
(57, 1951),
(58, 1952),
(59, 1953),
(60, 1954),
(61, 1955),
(62, 1956),
(63, 1957),
(64, 1958),
(65, 1959),
(66, 1960),
(67, 1961),
(68, 1962),
(69, 1963),
(70, 1964),
(71, 1965),
(72, 1966),
(73, 1967),
(74, 1968),
(75, 1969),
(76, 1970),
(77, 1971),
(78, 1972),
(79, 1973),
(80, 1974),
(81, 1975),
(82, 1976),
(83, 1977),
(84, 1978),
(85, 1979),
(86, 1980),
(87, 1981),
(88, 1982),
(89, 1983),
(90, 1984),
(91, 1985),
(92, 1986),
(93, 1987),
(94, 1988),
(95, 1989),
(96, 1990),
(97, 1991),
(98, 1992),
(99, 1993),
(100, 1994),
(101, 1995),
(102, 1996),
(103, 1997),
(104, 1998),
(105, 1999),
(106, 2000),
(107, 2001),
(108, 2002),
(109, 2003),
(110, 2004),
(111, 2005),
(112, 2006),
(113, 2007),
(114, 2008),
(115, 2009),
(116, 2010),
(117, 2011),
(118, 2012),
(119, 2013),
(120, 2014),
(121, 2015),
(122, 2016),
(123, 2017),
(124, 2018),
(125, 2019),
(126, 2020),
(127, 2021),
(128, 2022),
(129, 2023),
(130, 2024);

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

CREATE TABLE `films` (
  `id` int(2) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `description` varchar(970) DEFAULT NULL,
  `annee_id` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`id`, `titre`, `description`, `annee_id`) VALUES
(1, 'Taxi 5', 'Sylvain Marot, super flic parisien et pilote d’exception, est muté contre son gré à la Police Municipale de Marseille. L’ex-commissaire Gibert, devenu Maire de la ville et au plus bas dans les sondages, va alors lui confier la mission de stopper le redoutable « Gang des Italiens », qui écume des bijouteries à l’aide de puissantes Ferrari. Mais pour y parvenir, Marot n’aura pas d’autre choix que de collaborer avec le petit-neveu du célèbre Daniel, Eddy Maklouf, le pire chauffeur VTC de Marseille, mais le seul à pouvoir récupérer le légendaire TAXI blanc.', 124),
(2, 'Forrest Gump', 'Quelques décennies d\'histoire américaine, des années 1940 à la fin du XXème siècle, à travers le regard et l\'étrange odyssée d\'un homme simple et pur, Forrest Gump.', 100),
(3, 'Django Unchained ', 'Dans le sud des États-Unis, deux ans avant la guerre de Sécession, le Dr King Schultz, un chasseur de primes allemand, fait l’acquisition de Django, un esclave qui peut l’aider à traquer les frères Brittle, les meurtriers qu’il recherche. Schultz promet à Django de lui rendre sa liberté lorsqu’il aura capturé les Brittle – morts ou vifs. Alors que les deux hommes pistent les dangereux criminels, Django n’oublie pas que son seul but est de retrouver Broomhilda, sa femme, dont il fut séparé à cause du commerce des esclaves…Lorsque Django et Schultz arrivent dans l’immense plantation du puissant Calvin Candie, ils éveillent les soupçons de Stephen, un esclave qui sert Candie et a toute sa confiance. Le moindre de leurs mouvements est désormais épié par une dangereuse organisation de plus en plus proche… Si Django et Schultz veulent espérer s’enfuir avec Broomhilda, ils vont devoir choisir entre l’indépendance et la solidarité, entre le sacrifice et la survie…', 119),
(4, 'Pulp Fiction', 'L\'odyssée sanglante et burlesque de petits malfrats dans la jungle de Hollywood à travers trois histoires qui s\'entremêlent.', 100),
(5, 'Interstellar', 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.', 120),
(6, 'Le dîner de cons', 'Tous les mercredis, Pierre Brochant et ses amis organisent un dîner où chacun doit amener un con. Celui qui a trouvé le plus spectaculaire est declaré vainqueur. Ce soir, Brochant exulte, il est sur d\'avoir trouvé la perle rare, un con de classe mondiale: Francois Pignon, comptable au ministère des Finances et passionné de modèles réduits en allumettes. Ce qu\'il ignore c\'est que Pignon est passe maître dans l\'art de déclencher des catastrophes.', 104),
(7, 'Les tontons flingueurs', 'Propriétaire d\'une petite usine de tracteurs, Fernand Naudin mène une vie tranquille et sans histoire quand un télégramme l\'appelle à Paris. Il arrive à temps pour recueillir le dernier soupir d\'un ami de jeunesse, Louis dit « le Mexicain », qui lui confie ses affaires louches en même temps que la garde de sa fille Patricia. Et les ennuis commencent...', 69),
(8, 'Matrix', 'Programmeur anonyme dans un service administratif le jour, Thomas Anderson devient Neo la nuit venue. Sous ce pseudonyme, il est l\'un des pirates les plus recherchés du cyber-espace. A cheval entre deux mondes, Neo est assailli par d\'étranges songes et des messages cryptés provenant d\'un certain Morpheus. Celui-ci l\'exhorte à aller au-delà des apparences et à trouver la réponse à la question qui hante constamment ses pensées : qu\'est-ce que la Matrice ? Nul ne le sait, et aucun homme n\'est encore parvenu à en percer les defenses. Mais Morpheus est persuadé que Neo est l\'Elu, le libérateur mythique de l\'humanité annoncé selon la prophétie. Ensemble, ils se lancent dans une lutte sans retour contre la Matrice et ses terribles agents...', 105),
(9, 'Terminator 2 : Le jugement dernier', 'En 2029, après leur échec pour éliminer Sarah Connor, les robots de Skynet programment un nouveau Terminator, le T-1000, pour retourner dans le passé et éliminer son fils John Connor, futur leader de la résistance humaine. Ce dernier programme un autre cyborg, le T-800, et l\'envoie également en 1995, pour le protéger. Une seule question déterminera le sort de l\'humanité : laquelle des deux machines trouvera John la première ?', 97),
(10, 'La liste de Schindler', 'Evocation des années de guerre d\'Oskar Schindler, industriel autrichien rentré à Cracovie en 1939 avec les troupes allemandes. Il va, tout au long de la guerre, protéger des juifs en les faisant travailler dans sa fabrique.', 100),
(11, 'Le Château Ambulant', 'La jeune Sophie, âgée de 18 ans, travaille sans relâche dans la boutique de chapelier que tenait son père avant de mourir. Lors de l\'une de ses rares sorties en ville, elle fait la connaissance de Hauru le Magicien. Celui-ci est extrêmement séduisant, mais n\'a pas beaucoup de caractère... Se méprenant sur leur relation, une sorcière jette un épouvantable sort sur Sophie et la transforme en vieille femme de 90 ans. Accablée, Sophie s\'enfuit et erre dans les terres désolées. Par hasard, elle pénètre dans le Château Ambulant de Hauru et, cachant sa véritable identité, s\'y fait engager comme femme de ménage. Cette  vieille dame  aussi mystérieuse que dynamique va bientôt redonner une nouvelle vie à l\'ancienne demeure. Plus énergique que jamais, Sophie accomplit des miracles. Quel fabuleux destin l\'attend ? Et si son histoire avec Hauru n\'en était qu\'à son véritable commencement ?', 107),
(12, 'De Rouille et d\'Os', 'Ali se retrouve avec Sam, 5 ans, sur les bras. C’est son fils, il le connaît à peine. Sans domicile, sans argent et sans amis, Ali trouve refuge chez sa sœur à Antibes. Là-bas, c’est tout de suite mieux, elle les héberge dans le garage de son pavillon, elle s’occupe du petit et il fait beau. A la suite d’une bagarre dans une boîte de nuit, son destin croise celui de Stéphanie. Il la ramène chez elle et lui laisse son téléphone. Il est pauvre, elle est belle et pleine d’assurance. C’est une princesse. Tout les oppose. Stéphanie est dresseuse d’orques au Marineland. Il faudra que le spectacle tourne au drame pour qu’un coup de téléphone dans la nuit les réunisse à nouveau. Quand Ali la retrouve, la princesse est tassée dans un fauteuil roulant : elle a perdu ses jambes et pas mal d’illusions. Il va l’aider simplement, sans compassion, sans pitié. Elle va revivre.', 118),
(13, 'Le Seigneur des Anneaux : la Communauté de l\'Anneau', 'Dans ce chapitre de la trilogie, le jeune et timide Hobbit, Frodon Sacquet, hérite d\'un anneau. Bien loin d\'être une simple babiole, il s\'agit de l\'Anneau Unique, un instrument de pouvoir absolu qui permettrait à Sauron, le Seigneur des ténèbres, de régner sur la Terre du Milieu et de réduire en esclavage ses peuples. À moins que Frodon, aidé d\'une Compagnie constituée de Hobbits, d\'Hommes, d\'un Magicien, d\'un Nain, et d\'un Elfe, ne parvienne à emporter l\'Anneau à travers la Terre du Milieu jusqu\'à la Crevasse du Destin, lieu où il a été forgé, et à le détruire pour toujours. Un tel périple signifie s\'aventurer très loin en Mordor, les terres du Seigneur des ténèbres, où est rassemblée son armée d\'Orques maléfiques... La Compagnie doit non seulement combattre les forces extérieures du mal mais aussi les dissensions internes et l\'influence corruptrice qu\'exerce l\'Anneau lui-même. L\'issue de l\'histoire à venir est intimement liée au sort de la Compagnie.', 107),
(14, 'La Ligne Verte', ' Paul Edgecomb, pensionnaire centenaire d\'une maison de retraite, est hanté par ses souvenirs. Gardien-chef du pénitencier de Cold Mountain en 1935, il était chargé de veiller au bon déroulement des exécutions capitales en s’efforçant d\'adoucir les derniers moments des condamnés. Parmi eux se trouvait un colosse du nom de John Coffey, accusé du viol et du meurtre de deux fillettes. Intrigué par cet homme candide et timide aux dons magiques, Edgecomb va tisser avec lui des liens très forts.', 106),
(15, 'Gran Torino', ' Walt Kowalski est un ancien de la guerre de Corée, un homme inflexible, amer et pétri de préjugés surannés. Après des années de travail à la chaîne, il vit replié sur lui-même, occupant ses journées à bricoler, traînasser et siroter des bières. Avant de mourir, sa femme exprima le voeu qu\'il aille à confesse, mais Walt n\'a rien à avouer, ni personne à qui parler. Hormis sa chienne Daisy, il ne fait confiance qu\'à son M-1, toujours propre, toujours prêt à l\'usage...', 115),
(16, 'Dead Man', 'Dans la deuxième moitié du XIXe siècle, Bill Blake, jeune comptable en route pour le confins de l\'Ouest américain, entreprend un voyage initiatique où il devient malgré lui un hors-la-loi traqué. Blessé, il est recueilli par Nobody, un Amérindien lettré rejeté des siens, qui l\'identifie d\'emblée à son homonyme défunt, le poète anglais William Blake, et décide de sauver son âme.', 102),
(17, 'Heavenly Creatures', 'L\'amitié irrépressible et passionnée de deux jeunes filles, que rien ne pourra altérer. Pas même leur entourage, inquiet de leur relation qui les coupe du monde...', 102),
(18, 'Chungkin Express', 'L\'histoire de deux flics laches par leur petite amie. Le matricule 223 qui se promet de tomber amoureux de la premiere femme qui entrera dans un bar a Chungking House ou il noie son chagrin. Le matricule 663, qui chaque soir passe au Midnight Express, un fast-food du quartier de Lan Kwai Fong, acheter a la jolie Faye une Chef Salad qu\'il destine a sa belle, une hotesse de l\'air.', 100),
(19, 'Sunrise: A Song of Two Humans', 'Un pêcheur s\'éprend d\'une citadine aux allures de vamp. Sous l\'influence de celle-ci, il décide de noyer son épouse, mais change d\'avis une fois sur la barque. Effrayée, la femme fuit en ville. Elle est bientôt rejointe par son mari, désireux de se faire pardonner.', 34),
(20, 'Le Roi Et l\'Oiseau', 'Le Roi Charles V et Trois font Huit et Huit font Seize règne en tyran sur le royaume de Takicardie. Seul un Oiseau, enjoué et bavard, qui a construit son nid en haut du gigantesque palais, tout près des appartements secrets de Sa Majesté, ose le narguer. Le Roi est amoureux d’une charmante et modeste Bergère qu’il veut épouser sous la contrainte. Mais celle-ci aime un petit Ramoneur. Tous deux s’enfuient pour échapper au Roi...', 86);

-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

CREATE TABLE `fonction` (
  `id` int(11) NOT NULL,
  `fonction` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fonction`
--

INSERT INTO `fonction` (`id`, `fonction`) VALUES
(1, 'realisateur'),
(2, 'acteur');

-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

CREATE TABLE `genres` (
  `id` int(2) NOT NULL,
  `genre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `genres`
--

INSERT INTO `genres` (`id`, `genre`) VALUES
(1, 'Action'),
(2, 'Animation'),
(3, 'Aventure'),
(4, 'Biographique'),
(5, 'Catastrophe'),
(6, 'Comédie'),
(7, 'Comédie Dramatique'),
(8, 'Comédie Musicale'),
(9, 'Comédie Policière'),
(10, 'Comédie Romantique'),
(11, 'Court Métrage'),
(12, 'Dessin Animé'),
(13, 'Documentaire'),
(14, 'Drame'),
(15, 'Drame Psychologique'),
(16, 'Epouvante'),
(17, 'Espionnage'),
(18, 'Fantastique'),
(19, 'Film Musical'),
(20, 'Guerre'),
(21, 'Historique'),
(22, 'Horreur'),
(23, 'Karaté'),
(24, 'Manga'),
(25, 'Mélodrame'),
(26, 'Muet'),
(27, 'Par Parties'),
(28, 'Péplum'),
(29, 'Policier'),
(30, 'Politique'),
(31, 'Programme'),
(32, 'Romance'),
(33, 'Science Fiction'),
(34, 'Sérial'),
(35, 'Spectacle'),
(36, 'Téléfilm'),
(37, 'Théâtre'),
(38, 'Thriller'),
(39, 'Western');

-- --------------------------------------------------------

--
-- Structure de la table `liaison_film_genre`
--

CREATE TABLE `liaison_film_genre` (
  `id` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `id_genre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `liaison_film_genre`
--

INSERT INTO `liaison_film_genre` (`id`, `id_film`, `id_genre`) VALUES
(1, 1, 1),
(2, 1, 6),
(3, 1, 29),
(4, 2, 7),
(5, 2, 32),
(6, 3, 1),
(7, 3, 39),
(8, 4, 29),
(9, 4, 38),
(10, 5, 14),
(11, 6, 6),
(12, 7, 6),
(13, 7, 29),
(14, 8, 1),
(15, 8, 33),
(16, 9, 1),
(17, 9, 33),
(18, 10, 14),
(19, 10, 20),
(20, 10, 21),
(21, 11, 2),
(22, 11, 18),
(23, 11, 32),
(24, 12, 14),
(25, 13, 1),
(26, 13, 3),
(27, 13, 18),
(28, 14, 14),
(29, 14, 18),
(30, 14, 29),
(31, 15, 14),
(32, 15, 38),
(33, 16, 14),
(34, 16, 18),
(35, 16, 39),
(36, 17, 4),
(37, 17, 14),
(38, 18, 14),
(39, 18, 32),
(40, 19, 14),
(41, 19, 26),
(42, 19, 32),
(43, 20, 2),
(44, 20, 14),
(45, 20, 32);

-- --------------------------------------------------------

--
-- Structure de la table `liaison_film_personne_fonction`
--

CREATE TABLE `liaison_film_personne_fonction` (
  `id` int(11) NOT NULL,
  `id_film` int(255) NOT NULL,
  `id_personne` int(255) NOT NULL,
  `id_fonction` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `liaison_film_personne_fonction`
--

INSERT INTO `liaison_film_personne_fonction` (`id`, `id_film`, `id_personne`, `id_fonction`) VALUES
(1, 1, 19, 1),
(2, 1, 19, 2),
(3, 2, 22, 2),
(4, 1, 20, 2),
(5, 1, 21, 2),
(6, 2, 1, 1),
(7, 2, 23, 2),
(8, 2, 24, 2),
(9, 3, 3, 1),
(10, 3, 25, 2),
(11, 3, 26, 2),
(12, 3, 27, 2),
(13, 4, 3, 1),
(14, 4, 28, 2),
(15, 4, 29, 2),
(16, 4, 30, 2),
(17, 5, 4, 1),
(18, 5, 31, 2),
(19, 5, 32, 2),
(20, 5, 33, 2),
(21, 6, 5, 1),
(22, 6, 34, 2),
(23, 6, 35, 2),
(24, 6, 36, 2),
(25, 7, 6, 1),
(26, 7, 37, 2),
(27, 7, 38, 2),
(28, 7, 39, 2),
(29, 8, 2, 1),
(30, 8, 7, 1),
(31, 8, 40, 2),
(32, 8, 41, 2),
(33, 8, 42, 2),
(34, 9, 8, 1),
(35, 9, 43, 2),
(36, 9, 44, 2),
(37, 9, 45, 2),
(38, 10, 9, 1),
(39, 10, 46, 2),
(40, 10, 47, 2),
(41, 10, 48, 2),
(42, 11, 10, 1),
(43, 11, 49, 2),
(44, 11, 50, 2),
(45, 11, 51, 2),
(46, 12, 11, 1),
(47, 12, 52, 2),
(48, 12, 53, 2),
(49, 12, 54, 2),
(50, 13, 12, 1),
(51, 13, 55, 2),
(52, 13, 56, 2),
(53, 13, 57, 2),
(54, 14, 13, 1),
(55, 14, 22, 2),
(56, 14, 58, 2),
(57, 14, 59, 2),
(58, 15, 14, 1),
(59, 15, 14, 2),
(60, 15, 61, 2),
(61, 15, 62, 2),
(62, 16, 15, 1),
(63, 16, 63, 2),
(64, 16, 64, 2),
(65, 16, 65, 2),
(66, 17, 12, 1),
(67, 17, 66, 2),
(68, 17, 67, 2),
(69, 17, 68, 2),
(70, 18, 16, 1),
(71, 18, 69, 2),
(72, 18, 70, 2),
(73, 18, 71, 2),
(74, 19, 17, 1),
(75, 19, 72, 2),
(76, 19, 73, 2),
(77, 19, 74, 2),
(78, 20, 18, 1),
(79, 20, 75, 2),
(80, 20, 76, 2),
(81, 20, 60, 2);

-- --------------------------------------------------------

--
-- Structure de la table `personnes`
--

CREATE TABLE `personnes` (
  `id` int(2) NOT NULL,
  `nom_personne` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personnes`
--

INSERT INTO `personnes` (`id`, `nom_personne`) VALUES
(1, 'Robert Zemeckis'),
(2, 'Lilly Wachowski'),
(3, 'Quentin Tarantino'),
(4, 'Christopher Nolan'),
(5, 'Francis Veber'),
(6, 'Georges Lautner'),
(7, 'Lana Wachowski'),
(8, 'James Cameron'),
(9, 'Steven Spielberg'),
(10, 'Hayao Miyazaki'),
(11, 'Jacques Audiard'),
(12, 'Peter Jackson'),
(13, 'Frank Darabont'),
(14, 'Clint Eastwood'),
(15, 'Jim Jarmusch'),
(16, 'Wong Kar Wai'),
(17, 'Friedrich Wilhelm Murnau'),
(18, 'Paul Grimaud'),
(19, 'Franck Gastambide'),
(20, 'Malik Bentalha'),
(21, 'Bernard Farcy'),
(22, 'Tom Hanks'),
(23, 'Gary Sinise'),
(24, 'Robin Wright'),
(25, 'Jamie Foxx'),
(26, 'Christoph Waltz'),
(27, 'Leonardo DiCaprio'),
(28, 'John Travolta'),
(29, 'Samuel Lee Jackson'),
(30, 'Uma Thurman'),
(31, 'Matthew McConaughey'),
(32, 'Anne Hathaway'),
(33, 'Michael Caine'),
(34, 'Thierry Lhermitte'),
(35, 'Jacques Villeret'),
(36, 'Francis Huster'),
(37, 'Lino Ventura'),
(38, 'Bernard Blier'),
(39, 'Francis Blanche'),
(40, 'Keanu Reeves'),
(41, 'Laurence Fishburne'),
(42, 'Carrie-Anne Moss'),
(43, 'Arnold Schwartzenegger'),
(44, 'Linda Hamilton'),
(45, 'Edward Furlong'),
(46, 'Liam Neeson'),
(47, 'Ben Kingsley'),
(48, 'Ralph Fiennes'),
(49, 'Chieko Baisho'),
(50, 'Takuya Kimura'),
(51, 'Akihiro Miwa'),
(52, 'Marion Cotillard'),
(53, 'Mathias Schoenaertz'),
(54, 'Armand Verdure'),
(55, 'Elijah Wood '),
(56, 'Sean Astin'),
(57, 'Ian McKellen'),
(58, 'Michael Clarke Duncan'),
(59, 'David Morse'),
(60, 'Jean Martin'),
(61, 'Bee Vang'),
(62, 'Anhey Her'),
(63, 'Johnny Depp '),
(64, 'Gary Farmer'),
(65, 'Lance Henriksen'),
(66, 'Kate Winslet'),
(67, 'Melanie Lynskey'),
(68, 'Sarah Peirse'),
(69, 'Brigitte Lin Ching-hsia'),
(70, 'Tony Leung'),
(71, 'Faye Wong'),
(72, 'George O\'Brian'),
(73, 'Janet Gaynor'),
(74, 'Margaret Livingstone'),
(75, 'Pascal Mazzotti'),
(76, 'Agnès Viala');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fonction`
--
ALTER TABLE `fonction`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `liaison_film_genre`
--
ALTER TABLE `liaison_film_genre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `liaison_film_personne_fonction`
--
ALTER TABLE `liaison_film_personne_fonction`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personnes`
--
ALTER TABLE `personnes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `fonction`
--
ALTER TABLE `fonction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `liaison_film_genre`
--
ALTER TABLE `liaison_film_genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `liaison_film_personne_fonction`
--
ALTER TABLE `liaison_film_personne_fonction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT pour la table `personnes`
--
ALTER TABLE `personnes`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

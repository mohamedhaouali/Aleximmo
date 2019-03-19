-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 19 mars 2019 à 08:34
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `alex`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `description`, `path`) VALUES
(33, 'TERRAIN OMNI-SPORT CENTRE DE FORMATION DE LA STEG D’EL KHLIDIA', 'Le gazon artificiel, un produit très tendance\r\n\r\nLe gazon synthétique est une excellente alternative aux pelouses naturelles. C\'est la combine de l\'aspect et du confort du gazon naturel sans les contraintes d\'entretien. Plus besoin de tondre ou d\'arroser votre pelouse, elle sera parfaite tout au long de l\'année. Aménagez votre espace vert et profitez des moindres recoins de votre appartement, ou de votre maison. Le Gazon synthétique vous donne la possibilité de profiter de chaque métre carré de votre habitation.\r\n\r\nLe gazon artificiel ou pelouse synthétique est vendu en rouleaux ou en tapis, c\'est un produit à la mode auprès des citadins qui s’en donnent à cœur joie pour aménager aussi bien leur intérieur que leur extérieur. Jardins, terrasses, balcons, patios, terrain et salles de jeux, espaces piscine sont autant d’applications concrètes. Les fabricants proposent toute une gamme de produits avec des hauteurs d’herbes artificielles différentes. Conçu à partir de polypropylène, polyéthylène, polyamide, mono filament ou d’un mélange polypropylène-polyéthylène, le gazon artificiel résiste très bien aux UV et au chlore. Il est bluffant tant par son aspect et que par son toucher qui semblent identiques au gazon naturel. Simple à installer, recyclable, durable, le gazon artificiel se décline aujourd’hui en différents tons, vert, bleu océan, blanc ou noir…\r\n\r\n \r\n\r\nLe gazon artificiel : des terrains de sports aux jardins, terrasses et balcons des consommateurs\r\n\r\nLes Européens découvrent le gazon artificiel (ou gazon synthétique) pour la première fois, lors des Jeux Olympiques de Montréal en 1976. Produit alors à partir de fibres de nylon ou en polyamide haute densité, il est destiné aux terrains sportifs. Aujourd’hui, ce gazon est fabriqué sans lestage avec des brins profilés haute résilience qui lui confèrent une durée de vie supérieure. La conception sans caoutchouc rend l’installation, l’entretien et le recyclage plus faciles.', '10257684-623202064434519-4904045810113028591-n.jpg'),
(34, 'COPA', 'Il s\'agit d\'un gazon fibrillé, offrant de bonnes caractéristiques de résilience, et un prix d\'entrée trés attractif. Sa couleur vert clair est trés agréable. Garantit 7 ans.', 'ut3-moy.jpg'),
(35, 'Drop', 'Le Drop est notre gazon de football le plus prestigieux. Il est extrêmement résilient et durable. Certifié Fifa * et Fifa **, il est incontestablement un des meilleurs produits disponible sur le marché.', 'multi-sport31.jpg'),
(36, 'Comment installer votre gazon :', 'La pose du gazon artificiel : c’est simple et rapide !\r\n\r\nLa pose de votre gazon ne requiert pas de travaux lourds. Calculez la surface à recouvrir et passez commande. Si vous assurez la découpe vous-même, utilisez un couteau affûté avec une pointe recourbée et découpez sur l’arrière en faisant pénétrer la lame entre les boucles de fil du gazon.\r\n\r\n \r\n\r\nLa pose de gazon artificiel sur sol dur et sur sol meuble. \r\n\r\nLa pose sur sol dur :\r\n\r\nVous assurez une pose de gazon artificiel sur sol dur bitume, béton, plancher, terrasse). Le support doit être propre, lisse et sec. Enlevez les feuilles mortes, les saletés. Les trous, fissures et crevasses doivent être rebouchés.\r\n\r\nVotre support est prêt, l’installation peut commencer. Sur des petites surfaces, il vous suffit de dérouler votre rouleau de gazon synthétique en plaçant sur les côtés un objet lourd (parasol, pots de fleur par exemple). Sur une surface de 20 m2, il vous faudra prévoir un collage avec une colle à deux composants.\r\n\r\nLa pose sur sol meuble :\r\n\r\nLa pose de gazon synthétique sur sol meuble (terre, herbe…) nécessite l’arrachage de toute végétation. Vous pouvez enlever 10 cm de la couche supérieure du terrain que vous remplacerez par du sable concassé ou du sable argileux pour aplanir et stabiliser la surface de nouveau. Le support doit être régulier et stable.\r\n\r\nNous disposons d’une équipe professionnelle pour la pose de votre gazon, n’hésitez pas à demander notre interventions si vous n’avez pas la « main verte ».', 'ut-.jpg'),
(37, 'Terrain Multisport :', 'Selon votre terrain, la nature du sport que vous voulez pratiquer, nous avons plusieurs gammes de gazon artificiel à vous proposer. Le LSR répond à plusieurs spécifications à la fois. Il s\'agit d\'un gazon trés robuste, qui s\'apréte à plusieurs types de sports (Volley, Tennis, Football, basket ......). Les terrains omnisport sont spécialement prisés dans les écoles, maisons de jeunes ...........', 'multi-sport37.jpg'),
(38, 'jardin', 'Une fois posée, votre pelouse artificielle ne nécessite aucun entretien particulier. Vous pouvez la brosser avec une brosse à poils durs, une fois par mois environ, afin de redresser votre gazon et lui donner un aspect neuf. S’il y a trop de poussière sur votre gazon, arrosez le un coup, il reprendra son éclat d’origine.', 'jardin.jpg'),
(39, 'PRÉPARATION DE LA SURFACE MEUBLE', 'Préparer un sol meuble, c’est réaliser plusieurs opérations afin d’obtenir une surface parfaitement compacte, apte à servir de support à votre gazon artificiel. Votre support devra être nivelé afin d\'obtenir un terrain aux formes douces.', 'azurio-pose-gazon-synthetique-explications-schema-1.jpg'),
(40, 'Désherber et nettoyer le sol', 'Votre terrain doit être soigneusement nettoyé et efficacement désherbé. \r\nChoisissez un bon désherbant et prévoyez plusieurs passages (trois, de préférence) en laissant s’écouler une semaine entre chaque traitement. Enlevez les pierres gênantes et tout ce qui pourrait provoquer des bosses disgracieuses (mottes, racines, débris, etc...).', 'desherber-nettoyer-gazon-synthetique-min-1.jpg'),
(41, 'COMBATTRE ET EMPÊCHER LE TASSEMENT DU GAZON SYNTHÉTIQUE', 'Avec le temps, les nombreux passages, les objets et les meubles longuement posés sur le sol, les fibres auront tendance à se tasser. Un gazon court résiste mieux au tassement, c’est pourquoi nous vous conseillons ce choix pour les espaces réduits et sur les lieux de passage à forte fréquentation. Que les brins soient courts ou longs, vous avez à tout moment la possibilité de redonner à votre pelouse un coup de jouvence en la brossant à l’aide d’un balai de chantier à poils durs, ou en utilisant un ingénieux outil inventé pour cet usage : la redresseuse de fibres électrique ou thermique. \r\nGénéralement, réaliser cette opération une fois par an suffit pour un gazon de qualité.', '78A BlfYack Dual Pack LJ Toner.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `batiment`
--

DROP TABLE IF EXISTS `batiment`;
CREATE TABLE IF NOT EXISTS `batiment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `electricite`
--

DROP TABLE IF EXISTS `electricite`;
CREATE TABLE IF NOT EXISTS `electricite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reference`
--

DROP TABLE IF EXISTS `reference`;
CREATE TABLE IF NOT EXISTS `reference` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `reference`
--

INSERT INTO `reference` (`id`, `titre`, `path`) VALUES
(6, 'TERRAIN OMNI-SPORT CENTRALE DE LA STEG RADES', 'image5.jpeg'),
(7, 'TERRAIN OMNI-SPORT CENTRALE DE LA STEG RADES', 'image6.jpeg'),
(8, 'TERRAIN OMNI-SPORT CENTRALE DE LA STEG RADES', 'image7.jpeg'),
(9, 'TERRAIN OMNI-SPORT CENTRE DE FORMATION DE LA STEG D’EL KHLIDIA', 'image8.jpeg'),
(10, 'TERRAIN OMNI-SPORT CENTRE DE FORMATION DE LA STEG D’EL KHLIDIA', 'image9.jpeg'),
(11, 'nos matrieaux', 'image13.jpeg'),
(12, 'nos matrieaux', 'image12.jpeg'),
(13, 'nos matrieaux', 'image19.jpeg'),
(14, 'erretr', 'HP 17A Black Original LaserJet Toner Cartridge.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

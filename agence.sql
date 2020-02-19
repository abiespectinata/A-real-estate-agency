-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  lun. 17 fév. 2020 à 12:07
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `agence`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sujet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `prenom`, `sujet`, `email`, `message`, `date`) VALUES
(1, 'Lefebvre', 'Juliette', 'Test de l\'envoi de mail', 'juliettel.78@hotmail.fr', 'Test de la page de contact', '2020-02-13 13:02:14'),
(2, 'Lefebvre', 'Juliette', 'Test de l\'envoi de mail', 'juliettel.78@hotmail.fr', 'Test de la page de contact', '2020-02-13 13:04:32'),
(3, 'Lefebvre', 'Juliette', 'Test de l\'envoi de mail', 'juliettel.78@hotmail.fr', 'Test de la page de contact', '2020-02-13 13:05:11'),
(4, 'Lefebvre', 'Juliette', 'Test de l\'envoi de mail', 'juliettel.78@hotmail.fr', 'Test de la page de contact', '2020-02-13 13:05:27');

-- --------------------------------------------------------

--
-- Structure de la table `homes`
--

CREATE TABLE `homes` (
  `id` int(11) NOT NULL,
  `type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rooms` int(11) NOT NULL,
  `surface` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pictures` json DEFAULT NULL,
  `active` smallint(6) NOT NULL,
  `furnished` tinyint(1) NOT NULL,
  `createdat` datetime NOT NULL,
  `updatedat` datetime NOT NULL,
  `bedrooms` int(11) DEFAULT NULL,
  `bathrooms` int(11) DEFAULT NULL,
  `viewcounter` int(11) NOT NULL,
  `googlemap` longtext COLLATE utf8mb4_unicode_ci,
  `currentuser_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `homes`
--

INSERT INTO `homes` (`id`, `type`, `service`, `rooms`, `surface`, `price`, `adress`, `description`, `title`, `pictures`, `active`, `furnished`, `createdat`, `updatedat`, `bedrooms`, `bathrooms`, `viewcounter`, `googlemap`, `currentuser_id`) VALUES
(3, 'appartement', 'location', 2, 52, 580, '148 route des Romains, 67200 Strasbourg', 'A LOUER F2 Strasbourg Koenigshoffen 52.49m²: refait à neuf !\r\n\r\nVous êtes à la recherche d\'un F2 situé route des Romains à\r\n\r\nKoenigshoffen ? L\'Immobilière Zimmermann vous propose ce\r\n\r\nbeau 2 pièces dans un immeuble bien entretenu ! Il dispose\r\n\r\nd\'une belle salle de bain avec baignoire, d\'un séjour\r\n\r\nlumineux avec parquet et d\'une cuisine équipée !\r\n\r\nProche de la Gare\r\n\r\nTél: ou\r\n\r\nHONORAIRES: visite, constitution du dossier, rédaction du\r\n\r\nbail: 283.53 euros - État des lieux d\'entrée: 157.47 euros.', 'Location Appartement 52m² Strasbourg', '[\"92163-1.jpg\", \"143453-2.jpg\", \"221073-3.jpg\", \"939463-4.jpg\", \"692533-5.jpg\", \"557053-6.jpg\"]', 1, 1, '2020-02-08 13:52:36', '2020-02-08 13:52:36', NULL, NULL, 43, NULL, NULL),
(4, 'maison', 'location', 5, 129, 1470, '20 rue des capucins, 67200 Strasbourg', 'RARE à Strasbourg ! Très belle maison des années 1930 totalement rénovée avec goût, située dans la partie calme de Koenigshoffen, à proximité du canal de la Bruche. Maison mitoyenne d\'un côté, de 129 m² habitables. Elle se compose au premier niveau d\'un spacieux hall d\'entrée, grande cuisine équipée semi-ouverte, salon/séjour lumineux, 1 chambre de 14 m², cellier attenant, 1 WC suspendu séparé avec lave-mains et belle salle d\'eau avec douche à l\'italienne. Au 2ème niveau: espace mezzanine, 1 bureau (ou chambre d\'enfant) de 8 m² au sol, 2 grandes chambres (15 m² chacune dont une avec dressing), salle de bains avec douche à l\'italienne, vasque et WC. Jardinet et espace terrasse. Cave complète avec buanderie. Chaudière gaz à condensation neuve. Garage double en longueur. Écoles, commerces et transports en commun à proximité immédiate. Disponible. Loyer 1435 euros + 35 euros de charges (contrat d\'entretien chaudière et TOM). Honoraires agence 1435 euros TTC (visites, étude de dossier et rédaction de bail, état des lieux entrant). Dépôt de garantie 1 mois de loyer HC.', 'Location Maison / Villa 129m² Strasbourg', '[\"45804-1.jpg\", \"27174-2.jpg\", \"763054-3.jpg\", \"806754-4.jpg\"]', 3, 0, '2020-02-08 13:55:30', '2020-02-08 13:55:30', NULL, NULL, 0, NULL, 3),
(5, 'appartement', 'achat', 5, 154, 750000, '7 rue du Séminaire, 67540 Ostwald', 'Immoclic votre intermédiaire au forfait de 2500 euros fixe, vous propose aux pieds de la cathédrale, au sein d\'un immeuble classé du 14ème siècle, un superbe appartement traversant au 2ème étage avec ascenseur. Ce bien entièrement rénové avec beaucoup de cachet se compose: d\'une entrée avec vestiaire, d\'un espace à vivre de 70m² avec cuisine ouverte (avec extraction), de trois chambres, une salle d\'eau (vasque, douche, WC), une salle de bains (meuble double vasque, baignoire, WC).\r\n\r\nIl saura ravir les amoureux de l\'ancien souaitant être au coeur du centre tout en étant au calme.\r\n\r\nLe bien se complète d\'une cave en sous-sol.\r\n\r\nA voir sans attendre.\r\n\r\nMandat N° 62328. Honoraires à la charge du vendeur. Dans une copropriété de 26 lots. Quote-part moyenne du budget prévisionnel 5 760 euros/an. Aucune procédure n\'est en cours.', 'Vente de prestige Appartement 154m² Ostwald', '[\"607465-1.jpg\", \"702415-2.jpg\", \"958145-3.jpg\", \"714085-4.jpg\", \"97045-5.jpg\"]', 1, 0, '2020-02-08 13:58:01', '2020-02-08 13:58:01', NULL, NULL, 1, NULL, NULL),
(6, 'appartement', 'achat', 4, 85, 160500, '20 rue de Lorraine', 'Situé à la Meinau, rue de Lorraine, non loin des transports en commun et des commerces, au 3ème étage sans ascenseur, un charmant appartement 4/5 pièces traversant de 85 m² carrez.\r\n\r\nL\'appartement se compose d\'une entrée servant un beau salon - salle à manger donnant accès au balcon, une cuisine ouverte, meublée et équipée donnant accès à la loggia, trois chambres, une salle de bains entièrement rénovée avec douche et WC.\r\n\r\nUn garage et une cave complètent ce bien.\r\n\r\nAppartement rénové récemment avec une belle luminosité et donnant sur un parc arboré collectif.\r\n\r\nDPE en cours.\r\n\r\nBien soumis au statut de la copropriété, nombre de lots principaux: 30\r\n\r\nBilan prévisionnel de charges: 3300 € par an, soit 825 € par trimestre (eau chaude et chauffage collectif au gaz inclus).\r\n\r\nPrix: 150.000 € nets vendeurs + 7 % honoraires TTC à la charge de l\'acquéreur, soit 160.500 € FAI.', 'Vente Appartement 85m² Strasbourg', '[\"315416-1.jpg\", \"325536-2.jpg\", \"250756-3.jpg\", \"489226-4.jpg\", \"969136-5.jpg\"]', 1, 0, '2020-02-08 16:33:36', '2020-02-08 16:33:36', 1, 1, 3, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2637.703146250762!2d7.746775116046064!3d48.61552527926442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c87417ac7a75%3A0x866b74cdd8b167bc!2s20%20Rue%20de%20Lorraine%2C%2067800%20Bischheim!5e0!3m2!1sfr!2sfr!4v1581506310043!5m2!1sfr!2sfr', NULL),
(7, 'maison', 'achat', 6, 163, 1155000, '70 rue de la Renaissance, 67000 Strasbourg', 'On vous propose cette très belle demeure d\'une surface de 188 m² au sol (162.65 carrez) sur un terrain de 8,24 ares. Idéalement située à la Robertsau dans un cadre verdoyant et calme sans vis à vis.\r\n\r\nElle est composée au rez-de-chaussée d\'une entrée avec rangements, un bureau (possibilité chambre supplémentaire), un WC séparé, un très grand séjour-salle à manger de 48m² donnant sur une terrasse, une cuisine haut de gamme complètement aménagée et équipée. À l\'étage 3 chambres avec dressing et une grande salle de bains de plus de 20m².\r\n\r\nVous y trouverez également un grand sous-sol avec un atelier, une cave à vin, la chaudière ainsi que des combles aménageables.\r\n\r\nEt à l\'extérieur, un jardin, un bassin, un potager et des dépendances pour le rangement ainsi que de nombreux emplacement pour véhicules.(terrain piscinable)\r\n\r\nCette demeure bénéficie de prestations haut de gamme. Climatisation, pompe à chaleur avec chauffage au sol, cheminée, double vitrage..\r\n\r\nRare à la vente. N\'hésitez pas à nous contacter.', 'Vente de prestige Maison / Villa 163m² Strasbourg', '[\"336237-1.jpg\", \"921267-2.jpg\", \"329937-3.jpg\", \"986207-4.jpg\", \"704977-5.jpg\", \"965117-6.jpg\", \"667007-7.jpg\", \"515677-8.jpg\", \"762757-9.jpg\"]', 3, 0, '2020-02-08 16:37:36', '2020-02-08 16:37:36', 3, 2, 1, NULL, 5),
(8, 'appartement', 'location', 3, 60, 680, '17 rue de Wolfisheim, 67200 Strasbourg', 'Appartement 3 pièces Strasbourg Montagne verte. D\'une superficie de 60 m² ce très bel appartement saura vous séduire par sa fonctionnalité et sa luminosité. La cuisine est équipée (plaques, four, hotte, lave-vaisselle) et offre de nombreux rangements avec un petit débarras adjacent. Ce bien se compose d\'une belle pièce de vie et de 2 chambres. La salle de bain est équipée d\'une baignoire d\'angle et d\'un lavabo. WC séparés. Chauffage individuel au gaz. Parking commun devant l\'immeuble. Une cave complète ce bien. Proche toutes commodités (commerces, bus, gare, CREPS). Libre de suite. Prix: 620 euros Hors charges + 60 euros de charges (eau froide + la taxe d\'ordures ménagères + entretien des parties communes).', 'Location Appartement 60m² Strasbourg', '[\"101488-1.jpg\", \"626118-2.jpg\", \"935038-3.jpg\"]', 3, 1, '2020-02-08 16:39:51', '2020-02-08 16:39:51', NULL, NULL, 0, NULL, 3),
(9, 'appartement', 'location', 2, 41, 715, '37 rue Jacques Kable, 67000 Strasbourg', 'Situé rue Jacques Kablé, à proximité du Lycée Kléber et de la Place de Bordeaux, agréable 2 pièces meublé de 41 m² avec balcon, au 4ème étage avec ascenseur d\'une copropriété sécurisée très bien tenue.\r\n\r\nL\'appartement comporte une entrée, un lumineux séjour avec balcon orienté Sud, une cuisine ouverte avec kitchenette équipée et meublée, une chambre, une salle-de-bain avec douche et WC séparés.\r\n\r\nL\'appartement est en très bon état général, il est idéalement situé à deux pas de la place de Bordeaux, du tram et des accès aux autoroutes.\r\n\r\nChauffage électrique\r\n\r\n- Loyer mensuel hors charges: 680 €\r\n\r\n- Provision mensuelle de charges: 35 € (incluant l\'eau froide / régularisation annuelle)\r\n\r\n- Dépôt de garantie: 1 360 €\r\n\r\n- Honoraires à la charge du locataire: 533 € (comprenant l\'état des lieux d\'entrée)\r\n\r\n- DPE E/B.', 'Location Appartement 41m² Strasbourg', '[\"224969-1.jpg\", \"702229-2.jpg\", \"348649-3.jpg\", \"805589-4.jpg\"]', 2, 1, '2020-02-08 16:42:33', '2020-02-08 16:42:33', NULL, NULL, 5, NULL, NULL),
(10, 'appartement', 'location', 4, 84, 957, '36 allée Reuss, 61000 Strasbourg', 'SANS HONORAIRES. Bel appartement moderne, de standing, fonctionnel et lumineux avec sa cuisine ouverte aménagée, ses larges baies vitrées et sa grande terrasse La résidence est située en bordure de la réserve naturelle du Neuhof, allée Reuss. Celle-ci est construite dans le respect d\'une charte de qualité environnementale et des exigences en matière de règlementation thermique. Elle s\'intègre parfaitement bien dans un quartier en plein renouvellement. Sans honoraires. À visiter sans attendre.', 'Location Appartement 84m² Strasbourg', '[\"5861610-1.jpg\", \"7367610-2.jpg\", \"2469710-3.jpg\", \"1128710-4.jpg\", \"5944710-5.jpg\"]', 1, 0, '2020-02-17 10:09:22', '2020-02-17 10:09:22', 3, 1, 3, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1320.7186297424748!2d7.769492658339809!3d48.5440152948145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c966e21efedb%3A0x52869ea324a04de3!2s36%20All%C3%A9e%20Reuss%2C%2067100%20Strasbourg!5e0!3m2!1sfr!2sfr!4v1581933930354!5m2!1sfr!2sfr', NULL),
(11, 'appartement', 'location', 3, 77, 740, '133 route des Romains,', 'A LOUER F3 Strasbourg Koenigshoffen 77.16m²: Idéal couple ! Vous êtes à la recherche d\'un F3 situé route des Romains à Koenigshoffen ? L\'Immobilière Zimmermann vous propose ce bel appartement composé d\'une cuisine équipée, de deux chambres donnant sur la cour intérieur, d\'une belle salle de bain et d\'un grand séjour avec placard ! DPE VIERGE Tél: ou HONORAIRES: visite, constitution du dossier, rédaction du bail: 353.52 euros - État des lieux d\'entrée: 231.48 euros.', 'Location Appartement 77m² Strasbourg', '[\"3015911-1.jpg\", \"296811-2.jpg\", \"6549411-3.jpg\", \"862511-4.jpg\", \"5647611-5.jpg\"]', 2, 0, '2020-02-17 11:03:38', '2020-02-17 11:03:38', 2, 1, 0, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2639.666632691253!2d7.702994915889815!3d48.57793342836629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796b62bce970bad%3A0xdc7c4f87a98f04e8!2s133%20Route%20des%20Romains%2C%2067200%20Strasbourg!5e0!3m2!1sfr!2sfr!4v1581937320429!5m2!1sfr!2sfr', NULL),
(12, 'appartement', 'location', 2, 44, 1150, '2 rue de l\'ancienne digue, 67100 Strasbourg', 'COURS DES HARAS - QUARTIER FINKWILLER - EXCEPTIONNEL.\r\n\r\nDans copropriété de haut standing bénéficiant d\'une situation idéale et d\'un environnement riche encommerces, restaurants et établissements scolaires\r\n\r\nF2 neuf de 45 m² entièrement meublé et équipé comprenant: four, hotte, plaques vitro, réfrigérateur, lave-vaisselle, lave-linge, cafetière Nespresso, vaisselle, télévision, chambre avec placard et penderie, lit 160X200, salon avec canapé et 2 fauteuils, table basse, salle de bains avec douche à l\'italienne.\r\n\r\nNombreux rangements.\r\n\r\nTerrasse de 11 m² orientée plein sud avec stores motorisés.\r\n\r\nChauffage (géométrie) et eau individuels.\r\n\r\nDomotique. Volets électriques.\r\n\r\nLocal à vélos.\r\n\r\nBeaux espaces verts.\r\n\r\nAccès privilégié à la salle de sport, restaurant et balnéothérapie pour les résidents de la copropriété.\r\n\r\nDPE: B\r\n\r\nLoyer: 1100 EUR Charges mensuelles: 150 EUR (toutes consommations et entretien des communs sauf électricité) avecrégularisation annuelle\r\n\r\nHonoraires: 1100 EUR à la charge du locataire dont 135 EUR état des lieux.\r\n\r\nDisponible de suite', 'Location Appartement 45m² Strasbourg', '[\"9806112-1.jpg\", \"9511612-2.jpg\", \"9134012-3.jpg\", \"9188712-4.jpg\", \"2255912-5.jpg\", \"1721212-6.jpg\", \"8041912-7.jpg\"]', 1, 0, '2020-02-17 11:24:23', '2020-02-17 11:24:23', 1, 1, 0, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1320.1165770654493!2d7.777656958301144!3d48.56708306974791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c9181fd256d3%3A0xb10d0d36713f07d!2s2%20Rue%20de%20l&#39;Ancienne%20Digue%2C%2067100%20Strasbourg!5e0!3m2!1sfr!2sfr!4v1581938548103!5m2!1sfr!2sfr', NULL),
(13, 'maison', 'location', 5, 129, 1470, '8 rue Gallien, 67200 Strasbourg', 'RARE à Strasbourg ! Très belle maison des années 1930 totalement rénovée avec goût, située dans la partie calme de Koenigshoffen, à proximité du canal de la Bruche. Maison mitoyenne d\'un côté, de 129 m² habitables. Elle se compose au premier niveau d\'un spacieux hall d\'entrée, grande cuisine équipée semi-ouverte, salon/séjour lumineux, 1 chambre de 14 m², cellier attenant, 1 WC suspendu séparé avec lave-mains et belle salle d\'eau avec douche à l\'italienne. Au 2ème niveau: espace mezzanine, 1 bureau (ou chambre d\'enfant) de 8 m² au sol, 2 grandes chambres (15 m² chacune dont une avec dressing), salle de bains avec douche à l\'italienne, vasque et WC. Jardinet et espace terrasse. Cave complète avec buanderie. Chaudière gaz à condensation neuve. Garage double en longueur. Écoles, commerces et transports en commun à proximité immédiate. Disponible. Loyer 1435 euros + 35 euros de charges (contrat d\'entretien chaudière et TOM). Honoraires agence 1435 euros TTC (visites, étude de dossier et rédaction de bail, état des lieux entrant). Dépôt de garantie 1 mois de loyer HC.', 'Location Maison / Villa 129m² Strasbourg', '[\"7431813-1.jpg\", \"3229213-2.jpg\", \"1914313-3.jpg\", \"2403213-4.jpg\", \"2172113-5.jpg\", \"8418013-6.jpg\", \"4454413-7.jpg\", \"2243413-8.jpg\", \"7195813-9.jpg\", \"6154713-10.jpg\", \"517213-11.jpg\", \"5042313-12.jpg\", \"6305613-13.jpg\", \"283313-14.jpg\", \"9421313-15.jpg\", \"3604013-16.jpg\"]', 1, 0, '2020-02-17 11:30:21', '2020-02-17 11:30:21', 3, 2, 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2639.549592404827!2d7.700124915889891!3d48.580174828209174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796b62c85b859a5%3A0xcc914e0978dc269b!2s8%20Rue%20Gallien%2C%2067200%20Strasbourg!5e0!3m2!1sfr!2sfr!4v1581938894159!5m2!1sfr!2sfr', NULL),
(14, 'maison', 'location', 5, 140, 1650, '5 Rue de Rimbach, 67100 Strasbourg', 'Strasbourg NEUDORF, Rue du Maquis, au calme dans un cadre de verdure, Superbe Maison de 140m² composé au premier niveau d\'une entrée, une cuisine séparée équipée, un salon-séjour, une chambre et une salle d\'eau avec WC.; au second niveau, un dégagement, une salle de bains avec WC. Séparé et 3 chambres.. Un sous-sol avec une buanderie, un atelier, et 2 pièces de stockage.. Un jardin, un grenier, deux garages et plusieurs places de parking dans la cour.. Loyer: 1600,00 euros; charges: 50,00 euros (provision avec régularisation annuelle) dépôt de garantie: 1600,00 euros; Frais d\'agence: 1377,00 euros dont 225,00 euros pour l\'état des lieux d\'entrée Loyer mensuel 1600 euros - Charges locatives 50 euros (Régularisation annuelle) - Honoraire TTC à la charge du locataire 225 euros.', 'Location Maison / Villa 140m² Strasbourg', '[\"4547314-1.jpg\"]', 2, 0, '2020-02-17 11:32:26', '2020-02-17 11:32:26', 4, 2, 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2640.577477272668!2d7.782075366899944!3d48.56048750009171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c93eebb46c29%3A0xd69edadc0537e8e0!2s5%20Rue%20de%20Rimbach%2C%2067100%20Strasbourg!5e0!3m2!1sfr!2sfr!4v1581939129383!5m2!1sfr!2sfr', NULL),
(15, 'maison', 'location', 4, 117, 2650, '3 Rue Charles Andler, 67200 Strasbourg', 'Exceptionnelle maison avec jardin sur 2 niveaux entièrement neuve et meublée avec des prestations hauts gamme situé à l\'Orangerie d\'une superficie de 117 m². La maison se compose d\'un magnifique salon-séjour donnant sur un jardin privatif avec terrasse, d\'une cuisine séparée meublée et équipée (plaques, hotte, four, réfrigérateur, congélateur et lave-vaisselle), de trois chambres dont une à l\'étage, de deux salles de bains avec douche, 2 WC dont un séparés, Volets électriques dans l\'ensemble de la maison. Présence d\'une cave. Nous agissons dans le cadre d\'une délégation de mandat. Honoraire agence d\'un montant de 1528.93EUR (1176.10EUR comprenant, Honoraire de Visite, constitution du dossier et rédaction du bail + 342.93EUR correspondant aux frais d\'état des lieux.) Dépôt de garantie correspondant à 2 termes de loyers soit 5.000EURTTC.', 'Location Maison / Villa 117,61m² Strasbourg', '[\"3864215-1.jpg\", \"5581715-2.jpg\", \"6043315-3.jpg\", \"2849815-4.jpg\", \"3379415-5.jpg\", \"9909215-6.jpg\", \"6120715-7.jpg\", \"8037815-8.jpg\", \"7200215-9.jpg\", \"4367115-10.jpg\", \"4810115-11.jpg\", \"798415-12.jpg\", \"273515-13.jpg\", \"1235115-14.jpg\", \"3633215-15.jpg\"]', 1, 1, '2020-02-17 11:37:38', '2020-02-17 11:37:38', 3, 1, 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1320.268054030772!2d7.708060058301111!3d48.56127996995139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c9e0a46ac0f9%3A0x5d0e208206638441!2s3%20Rue%20Charles%20Andler%2C%2067200%20Strasbourg!5e0!3m2!1sfr!2sfr!4v1581939436112!5m2!1sfr!2sfr', NULL),
(16, 'appartement', 'location', 2, 53, 925, '3 Chemin du Doernelbruck, 67000 Strasbourg', 'Chemin du Doernelbruck. Dans résidence de standing, beau 2 pièces de 53,30 m² situé au 1er étage avec ascenseur comprenant: une entrée avec placard, un séjour avec accès terrasse d\'env. 14 m², une cuisine équipée, une chambre, une salle d\'eau et un WC séparé.\r\n\r\nChauffage et production d\'eau chaude collectifs par pompe à chaleur.\r\n\r\nEn annexe: un garage et une cave.', 'Location Appartement 53,3m² Strasbourg', '[\"3428316-1.jpg\", \"8463816-2.jpg\", \"8417416-3.jpg\", \"3590016-4.jpg\"]', 2, 0, '2020-02-17 11:41:57', '2020-02-17 11:41:57', 1, 1, 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2638.3084527363158!2d7.772601515890528!3d48.60393872654258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c88e60a91007%3A0xe3ea18ef5662c50c!2s3%20Chemin%20du%20Doernelbruck%2C%2067000%20Strasbourg!5e0!3m2!1sfr!2sfr!4v1581939601400!5m2!1sfr!2sfr', NULL),
(17, 'appartement', 'location', 2, 53, 701, '3 Rue des Harpistes, 67100 Strasbourg', 'Port du Rhin, Rue de Vitry-Le-François, à deux pas du tram et de la nouvelle clinique Rhéna, au 9ème et dernier étage avec ascenseur, appartement 2 pièces NEUF de 53m² composé d\'un salon, d\'une terrasse, cuisine équipée, une chambre et une salle de bains avec WC et une place de parking. Chauffage collectif en gaz et eau chaude inclus dans les charges.. LOI PINEL. Loyer: 621,00 euros; charges; 80,00 euros (provision avec régularisation annuelle); Dépôt de garantie: 621,00 euros Frais d\'agence: 646,64 euros dont 125,00 euros pour l\'état des lieux d\'entrée. Loyer mensuel 621 euros - Charges locatives 80 euros (Régularisation annuelle) - Honoraire TTC à la charge du locataire 646.64 euros dont 125 euros d\'honoraires d\'état des lieux.', 'Location Appartement 53m² Strasbourg', '[\"1591317-1.jpg\", \"6237817-2.jpg\", \"2565417-3.jpg\", \"3464217-4.jpg\", \"1737517-5.jpg\"]', 2, 0, '2020-02-17 11:45:49', '2020-02-17 11:45:49', 1, 1, 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2640.8829931005716!2d7.768968215889249!3d48.55463472999973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c96b84985b61%3A0x5255ae82482be28d!2s3%20Rue%20des%20Harpistes%2C%2067100%20Strasbourg!5e0!3m2!1sfr!2sfr!4v1581939825784!5m2!1sfr!2sfr', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20200217081011', '2020-02-17 08:10:16'),
('20200217081420', '2020-02-17 08:14:23'),
('20200217081502', '2020-02-17 08:15:05');

-- --------------------------------------------------------

--
-- Structure de la table `profils`
--

CREATE TABLE `profils` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contract` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int(11) DEFAULT NULL,
  `numberresidents` int(11) NOT NULL,
  `animals` tinyint(1) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `situation` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guarantor` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `profils`
--

INSERT INTO `profils` (`id`, `user_id`, `job`, `contract`, `salary`, `numberresidents`, `animals`, `age`, `situation`, `guarantor`) VALUES
(1, 3, 'Profession libérale', 'CDI', 1700, 2, 0, 26, 'Concubinage', 0),
(2, 5, 'Sans profession', 'Sans emploi', NULL, 1, 1, 30, 'Célibataire', 0),
(3, 6, 'Salarié non titulaire de la fonction publique', 'Sans emploi', 1300, 3, 0, 21, 'Célibataire', 0);

-- --------------------------------------------------------

--
-- Structure de la table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `home_id` int(11) NOT NULL,
  `job` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contract` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int(11) DEFAULT NULL,
  `numberresidents` int(11) NOT NULL,
  `animals` tinyint(1) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `situation` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guarantor` tinyint(1) DEFAULT NULL,
  `createdat` datetime NOT NULL,
  `requeststatus` int(11) NOT NULL,
  `acceptedat` datetime DEFAULT NULL,
  `refusedat` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `requests`
--

INSERT INTO `requests` (`id`, `user_id`, `home_id`, `job`, `contract`, `salary`, `numberresidents`, `animals`, `age`, `situation`, `guarantor`, `createdat`, `requeststatus`, `acceptedat`, `refusedat`) VALUES
(4, 5, 7, 'Sans profession', 'Sans emploi', NULL, 1, 1, 30, 'Célibataire', 0, '2020-02-11 10:45:57', 1, NULL, '2020-02-12 15:04:19'),
(5, 6, 7, 'Fonctionnaire hospitalier', 'Sans emploi', 1300, 3, 0, 21, 'Célibataire', 0, '2020-02-11 13:00:18', 1, '2020-02-12 15:04:24', NULL),
(6, 3, 4, 'Agriculteur', 'CDI', 1500, 2, 0, 26, 'Marié(e)', 1, '2020-02-12 08:12:59', 1, NULL, '2020-02-12 15:05:50'),
(8, 3, 8, 'Profession libérale', 'CDI', 1700, 2, 0, 26, 'Concubinage', 0, '2020-02-12 15:16:22', 1, NULL, '2020-02-12 15:17:18'),
(9, 3, 6, 'Profession libérale', 'CDI', 1700, 2, 0, 26, 'Concubinage', 0, '2020-02-14 08:42:18', 1, NULL, '2020-02-14 15:23:17');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` smallint(6) NOT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agree_terms` tinyint(1) NOT NULL,
  `createdat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `roles`, `password`, `phone`, `active`, `firstname`, `lastname`, `token`, `agree_terms`, `createdat`) VALUES
(3, 'juliettel.78@hotmail.fr', '[]', '$argon2i$v=19$m=65536,t=4,p=1$UDJrR1pDbHhhOFRTbE40Rg$ktVxcwNXo7jLJN49N0ZcbKdUspu6eOIEmvppbcHE42g', '0123456789', 0, 'Juliette', 'Lefebvre', '9d8be5ce51a1de16cd5a03385ec00a4c', 1, '2020-02-09 00:00:00'),
(4, 'admin@test.com', '[\"ROLE_ADMIN\"]', '$argon2i$v=19$m=65536,t=4,p=1$cUhWL04wN0N1WGlDR3NEaA$9TffRBtjncvEdRRroKWr657ih3t+h/TfYr0bSMZBbnY', '0123456789', 0, 'Juliette', 'Lefebvre', '4142bcf46eea32905fe941b667defaf0', 1, '2020-02-11 00:00:00'),
(5, 'marcb@test.com', '[]', '$argon2i$v=19$m=65536,t=4,p=1$ajVZZ24uQnBseXozdkQucw$GZAlNqGt/BTmTzfBqibts5DvxxDxp2+aoLgYjRveXv8', '0123456789', 0, 'Marc', 'Boyon', '557ab74e646ca900994f4d3e94b6c1ce', 1, '2020-02-12 00:00:00'),
(6, 'alexandres@test.com', '[]', '$argon2i$v=19$m=65536,t=4,p=1$ZVhOcVJZSTk2bGFqdzRhRA$PEOtZsTpwt3mWoIpkFDvObyqCWetLU28aLw1ae2AGBY', '0154789632', 0, 'Alexandre', 'Schaffhauser', '947f8a51e7375f7729e5a841226d5e07', 1, '2020-02-16 00:00:00'),
(7, 'gillesm@test.com', '[]', '$argon2i$v=19$m=65536,t=4,p=1$dEIxS3FueHBZaWdnZmlqcg$NBP8tILRuiT6XoUTpXCZrzhA2vpyvBFKY6P34jAh79o', '0987456321', 0, 'Gilles', 'Marchand', 'f45b1d22f06170477762428c85935c66', 1, '2020-02-17 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `users_homes`
--

CREATE TABLE `users_homes` (
  `users_id` int(11) NOT NULL,
  `homes_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users_homes`
--

INSERT INTO `users_homes` (`users_id`, `homes_id`) VALUES
(4, 5),
(4, 7),
(4, 8),
(5, 7),
(5, 8),
(6, 5),
(6, 6),
(6, 7);

-- --------------------------------------------------------

--
-- Structure de la table `view_stats`
--

CREATE TABLE `view_stats` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `home_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `view_stats`
--

INSERT INTO `view_stats` (`id`, `date`, `home_id`) VALUES
(6, '2019-12-27 00:00:00', 3),
(8, '2019-12-13 00:00:00', 3),
(9, '2020-01-03 00:00:00', 7),
(10, '2020-01-03 00:00:00', 3),
(11, '2020-01-03 00:00:00', 3),
(12, '2020-01-03 00:00:00', 3),
(13, '2020-01-03 00:00:00', 3),
(14, '2020-01-03 15:44:05', 3),
(15, '2020-01-04 15:45:51', 3),
(16, '2020-01-12 15:46:05', 3),
(17, '2020-01-13 15:46:08', 3),
(18, '2020-01-13 15:46:32', 3),
(19, '2020-01-23 15:46:46', 3),
(20, '2020-01-24 15:51:54', 3),
(21, '2020-02-01 15:51:57', 3),
(22, '2020-02-02 08:31:54', 3),
(23, '2020-02-05 08:32:20', 3),
(24, '2020-02-07 08:35:50', 3),
(25, '2020-02-11 08:36:04', 3),
(26, '2020-02-11 08:42:07', 6),
(27, '2020-02-14 08:42:19', 6),
(28, '2020-02-14 09:07:57', 3),
(29, '2020-02-14 09:08:36', 3),
(30, '2020-02-14 09:11:19', 3),
(31, '2020-02-14 09:11:29', 3),
(32, '2020-02-14 09:12:01', 3),
(33, '2020-02-14 09:12:32', 3),
(34, '2020-02-14 09:13:55', 3),
(35, '2020-02-14 09:38:11', 9),
(36, '2020-02-14 09:38:22', 9),
(37, '2020-02-14 09:41:46', 9),
(38, '2020-02-14 09:42:27', 9),
(39, '2020-02-14 09:42:36', 9),
(40, '2020-02-14 09:44:02', 3),
(41, '2020-02-14 09:45:50', 3),
(42, '2020-02-14 09:46:20', 3),
(43, '2020-02-14 09:46:28', 3),
(44, '2020-02-14 09:46:47', 3),
(45, '2020-02-14 09:46:55', 3),
(46, '2020-02-14 09:47:18', 3),
(47, '2020-02-14 09:48:32', 3),
(48, '2020-02-14 09:48:40', 3),
(49, '2020-02-14 09:48:47', 3),
(50, '2020-02-14 09:49:05', 3),
(51, '2020-02-14 09:49:48', 3),
(52, '2020-02-14 09:50:00', 3),
(53, '2020-02-14 09:50:04', 3),
(54, '2020-02-14 09:50:56', 3),
(55, '2020-02-14 09:51:22', 3),
(56, '2020-02-14 09:51:45', 3),
(57, '2020-02-14 09:52:28', 3),
(58, '2020-02-17 08:45:38', 5),
(59, '2020-02-17 10:15:48', 10),
(60, '2020-02-17 10:16:40', 10),
(61, '2020-02-17 10:16:43', 10),
(62, '2020-02-17 11:30:22', 13),
(63, '2020-02-17 11:32:27', 14),
(64, '2020-02-17 11:37:39', 15),
(65, '2020-02-17 11:41:58', 16),
(66, '2020-02-17 11:45:50', 17);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_9DACCBD35994EE78` (`currentuser_id`);

--
-- Index pour la table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_75831F5EA76ED395` (`user_id`);

--
-- Index pour la table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7B85D651A76ED395` (`user_id`),
  ADD KEY `IDX_7B85D65128CDC89C` (`home_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1483A5E9E7927C74` (`email`);

--
-- Index pour la table `users_homes`
--
ALTER TABLE `users_homes`
  ADD PRIMARY KEY (`users_id`,`homes_id`),
  ADD KEY `IDX_7ADB6F9A67B3B43D` (`users_id`),
  ADD KEY `IDX_7ADB6F9A1EE0AF82` (`homes_id`);

--
-- Index pour la table `view_stats`
--
ALTER TABLE `view_stats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3564C0B928CDC89C` (`home_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `view_stats`
--
ALTER TABLE `view_stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `homes`
--
ALTER TABLE `homes`
  ADD CONSTRAINT `FK_9DACCBD35994EE78` FOREIGN KEY (`currentuser_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `profils`
--
ALTER TABLE `profils`
  ADD CONSTRAINT `FK_75831F5EA76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `FK_7B85D65128CDC89C` FOREIGN KEY (`home_id`) REFERENCES `homes` (`id`),
  ADD CONSTRAINT `FK_7B85D651A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `users_homes`
--
ALTER TABLE `users_homes`
  ADD CONSTRAINT `FK_7ADB6F9A1EE0AF82` FOREIGN KEY (`homes_id`) REFERENCES `homes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_7ADB6F9A67B3B43D` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `view_stats`
--
ALTER TABLE `view_stats`
  ADD CONSTRAINT `FK_3564C0B928CDC89C` FOREIGN KEY (`home_id`) REFERENCES `homes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

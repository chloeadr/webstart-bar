-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 19 mars 2021 à 10:49
-- Version du serveur :  8.0.22
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `webstart_bar`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Hot drinks'),
(2, 'Soft drinks'),
(3, 'Beers'),
(4, 'Cocktails'),
(7, 'Mocktails');

-- --------------------------------------------------------

--
-- Structure de la table `drink`
--

CREATE TABLE `drink` (
  `id` int NOT NULL,
  `name` varchar(45) NOT NULL,
  `picture` varchar(45) NOT NULL,
  `bg` varchar(45) NOT NULL,
  `price` float NOT NULL,
  `alcohol_level` float DEFAULT NULL,
  `category_id` int NOT NULL,
  `description` text NOT NULL,
  `composition` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `drink`
--

INSERT INTO `drink` (`id`, `name`, `picture`, `bg`, `price`, `alcohol_level`, `category_id`, `description`, `composition`) VALUES
(1, 'Coca-Cola', 'coke.png', 'cokeBG.png', 2, NULL, 2, 'A carbonated soft drink flavoured with coca leaves, cola nuts, and caramel.', ''),
(2, 'Screwdriver', 'screwdriver.png', 'screwdriverBG.png', 6, 30, 4, 'A screwdriver is a popular alcoholic highball drink made with orange juice and vodka. While the basic drink is simply the two ingredients, there are many variations. Many of the variations have different names in different parts of the world.', 'vodka, orange juice'),
(3, 'Milkshake', 'milkshake.png', 'milkshakeBG.png', 5, NULL, 2, 'Invent your own milkshake, with one or two ice cream flavours of your choice from our list of over 20! ', 'vanilla ice cream base, whipped cream (ask your waiter on the composition of our ice cream flavours!)'),
(4, 'Smoothie', 'smoothie.png', 'smoothieBG.png', 5, NULL, 2, 'Try our smoothie of the day, blended by our baristas with fresh fruits and love!', 'ask your waiter for today\'s fruits!'),
(5, 'Coffee', 'coffee.png', 'coffeeBG.png', 3, NULL, 1, 'In need of a pick-me-up? Our baristas have plenty of delicious, homebrewed coffee for you!', ''),
(6, 'Tea', 'tea.png', 'teaBG.png', 3, NULL, 1, 'Whichever kind of tea you prefer, we\'ll always have a seasonal brew you\'ll enjoy!', ''),
(7, 'Hot cocoa', 'hotCocoa.png', 'hotCocoaBG.png', 3.5, NULL, 1, 'A deliciously regressive treat, with optional toppings like cinnamon or marshmallows, to make you feel warm and fuzzy!', 'milk, cocoa powder, brown sugar + toppings'),
(8, 'Guinness', 'guinness.png', 'guinnessBG.png', 5.5, 4.4, 3, 'Often served at room temperature, Guinness was created in 1759 by a Irish pivovar called St. James´s Gate in Dublin. Guinness is an excellent Irish beer with sweetish taste, dark color and creamy foam. It’s enjoyed straight or mixed with other beers to be more aesthetically pleasing.', ''),
(9, 'Grimbergen Rouge', 'grimbergen.png', 'grimbergenBG.png', 6, 6, 3, 'Grimbergen Rouge, flavoured with red fruits, subtly combines the character of an Abbey beer with the sweetness and aromas of strawberry, cranberry and elderberry in its taste. Its purple colour with intense reflections and its slightly pink foam indicates a unique fruity beer flavour.', ''),
(10, 'Budweiser', 'budweiser.png', 'budweiserBG.png', 5, 5, 3, 'Budweiser is a medium-bodied, flavourful, crisp American-style beer, brewed with the best barley malt and the best hop varieties.', ''),
(11, 'Piña colada', 'pinaColada.png', 'pinaColadaBG.png', 8, 40, 4, 'The piña colada is a sweet cocktail made with rum, cream of coconut or coconut milk, and pineapple juice, usually served either blended or shaken with ice. There are two versions of the drink, both originating in Puerto Rico.', 'Bacardi Carta Blanca rum, pineapple juice, coconut cream'),
(12, 'Virgin piña colada', 'virginPinaColada.png', 'virginPinaColadaBG.png', 6, NULL, 7, 'A rumless, non-alcoholic version of the classic drink originating in Puerto Rico.', 'pineapple juice, coconut cream');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `id` int NOT NULL,
  `name` varchar(45) NOT NULL,
  `picture` varchar(45) NOT NULL,
  `bg` varchar(45) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `menu`
--

INSERT INTO `menu` (`id`, `name`, `picture`, `bg`, `active`) VALUES
(1, 'Lunch menu - summer', 'summerLunch.png', 'summerLBG.png', 1),
(2, 'Dinner menu - summer', 'summerDinner.png', 'summerDBG.png', 1),
(3, 'Lunch menu - winter', 'winterLunch.png', 'winterLBG.png', 1),
(4, 'Dinner menu - winter', 'winterDinner.png', 'winterDBG.png', 1);

-- --------------------------------------------------------

--
-- Structure de la table `menu_has_drink`
--

CREATE TABLE `menu_has_drink` (
  `drink_id` int NOT NULL,
  `menu_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `menu_has_drink`
--

INSERT INTO `menu_has_drink` (`drink_id`, `menu_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 2),
(2, 4),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(5, 1),
(5, 2),
(5, 3),
(5, 4),
(6, 1),
(6, 2),
(6, 3),
(6, 4),
(7, 1),
(7, 2),
(7, 3),
(7, 4),
(8, 2),
(8, 4),
(9, 2),
(9, 4),
(10, 2),
(10, 4),
(11, 2),
(11, 4),
(12, 1),
(12, 2),
(12, 3),
(12, 4);

-- --------------------------------------------------------

--
-- Structure de la table `waiter`
--

CREATE TABLE `waiter` (
  `id` int NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `picture` varchar(45) NOT NULL,
  `age` int NOT NULL,
  `presentation` text NOT NULL,
  `lunch` tinyint(1) NOT NULL,
  `dinner` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `waiter`
--

INSERT INTO `waiter` (`id`, `first_name`, `last_name`, `picture`, `age`, `presentation`, `lunch`, `dinner`) VALUES
(1, 'Taliesin', 'Jaffe', 'taliesinJ.png', 44, 'Life needs things to live.', 0, 1),
(2, 'Travis', 'Willingham', 'travisW.png', 39, 'I\'d like to arm-wrestle, in case I need to eat my way out of sadness with pies.', 1, 1),
(3, 'Ashley', 'Johnson', 'ashleyJ.png', 38, 'I\'m going to Guiding Bolt his face. And I\'m gonna do it at 5th-level, because my best friend is in his belly!', 1, 0),
(4, 'Matthew', 'Mercer', 'matthewM.png', 39, 'How do you want to do this?', 0, 1),
(5, 'Marisha', 'Ray', 'marishaR.png', 31, 'I have passed... through fire.', 1, 1),
(6, 'Liam', 'O\'Brien', 'liamO.png', 45, 'I will be less handsome with one ear, I\'m just saying.', 0, 1),
(7, 'Laura', 'Bailey', 'lauraB.png', 40, 'Here\'s the thing: we\'ve been through a lot. We face death on a very regular basis. And I see the way he looks at you, and I see the way you look at him. And happiness is fleeting in this world, we don\'t know when it will end. Take advantage of it while you can. And stop living in fear.', 1, 0),
(8, 'Sam', 'Riegel', 'samR.png', 45, 'The valley is like a taco shell. It\'s like a taco shell, and we\'re the meat.', 1, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `drink`
--
ALTER TABLE `drink`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `waiter`
--
ALTER TABLE `waiter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `drink`
--
ALTER TABLE `drink`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `waiter`
--
ALTER TABLE `waiter`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

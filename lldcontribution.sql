-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Sam 26 Mai 2018 à 20:09
-- Version du serveur :  5.5.42
-- Version de PHP :  5.5.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `lldcontribution`
--

-- --------------------------------------------------------

--
-- Structure de la table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `title_id` int(11) DEFAULT NULL,
  `applied` tinyint(1) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `occupation` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `choix`
--

CREATE TABLE `choix` (
  `id` int(11) NOT NULL,
  `proposition` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `image_id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `last_name`, `first_name`, `phone`, `date`, `updated_at`, `code`, `amount`) VALUES
(2, NULL, 'user1@domain.com', 'user1@domain.com', 'user1@domain.com', 'user1@domain.com', 1, '1380488742181c7', '5WWk1Ajus2SpX14NDwnTKAsQoAzQzxqzp8DsDmlwkrM52vtWgxOkTA==', NULL, '1IOoBY3jO7J85yiZ7Bqqi-8-DXGUUWhEV-f2-vnLnmg', NULL, 'a:0:{}', 'userlastname1', 'userfirstname1', '002120123456789', '2018-01-24 15:27:00', NULL, 54321, 200),
(5, NULL, 'dfgdgdg@domain.com', 'dfgdgdg@domain.com', 'dfgdgdg@domain.com', 'dfgdgdg@domain.com', 1, '1380488742181c7', '5WWk1Ajus2SpX14NDwnTKAsQoAzQzxqzp8DsDmlwkrM52vtWgxOkTA==', NULL, 'wvhXty4bTqIvT1683gzY4tUDGGNIJBIPYCGHyj4Jk1U', NULL, 'a:0:{}', 'dfgdghdhgh', 'FGFDFGDG', '0123456789', '2018-01-24 23:31:17', NULL, 25235, 800),
(7, NULL, 'administrator@domain.com', 'administrator@domain.com', 'administrator@domain.com', 'administrator@domain.com', 1, 'Uiw3Vz8RcaO8VBF.XVNfQdQBzROg0gxaDpsV/coKSEQ', 'CjNngCpF2cX/kcZ8p5Qs7xcpS+V9M35FtvpwpMsd0Xw++Zv3dSsaYxQ1EeGI32KZnufB0AH6I7Bpi72lAiqtAQ==', '2018-05-17 21:55:38', 'HxLe18Vr4DMn3NVK5edgXKtsXUg9S0ag01oeucfWL40', NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 'Administrator', 'Administrator', '0123456789', '2018-02-05 20:42:59', NULL, 54996, NULL),
(9, 7, 'max.truman@domain.com', 'max.truman@domain.com', 'max.truman@domain.com', 'max.truman@domain.com', 1, 'f2vceeSfXC1Q4JlznMfICLGymb3q/4mNF/KEFpjuzYE', '8zI+iuZ5gxduZW1CJb5N3cRlwJzj0R+pDZUo7Oo2UdvetnsvmN70LMLljnVdsIOxMEEZnc1BJzET1QlED4D+BA==', NULL, 'Fyu54NlPaiiLdyBTVtyVLeRSfUdpWDXfx5Cld7V8fWQ', NULL, 'a:0:{}', 'Truman', 'Max', '0123456789', '2018-02-18 16:48:59', NULL, 85487, NULL),
(14, NULL, 'agent@domain.com', 'agent@domain.com', 'agent@domain.com', 'agent@domain.com', 1, '8Zunk4dpzWshyd4..MyVrggQuClXaRiE5wUFvGgSHJM', 'aV91jisMUULWCSegGTdP2Q1qlMIDWsDzqlzOImp1c5SRgHTr9gYQhsDp9CyICBZWMa0aXVi4iV07X9qwYq6RYw==', '2018-03-18 11:13:55', '3md9BftxFyXVa7DB8wfToTClD7Yu3c-QRUjdKGvdLj8', NULL, 'a:1:{i:0;s:10:"ROLE_AGENT";}', 'Agent', 'Agent', '0123456789', '2018-03-17 18:28:40', NULL, 39861, NULL),
(15, 9, 'tintin@domain.com', 'tintin@domain.com', 'tintin@domain.com', 'tintin@domain.com', 1, 'Pqf2D4fwYjflGrH8jISOf3dz3Q8XJq7eahbht/teTzY', '38k9ui77tl6ElO+792GiWmkJb+YhfwqfvVjRokCcgTFzMwqv7Bl+rY9C5ezOm3J1fYNtypZYMuATSMYKlJUakw==', '2018-03-17 22:20:54', '4We_lM8DiDtO_BwQ-SwA_IzSQjp1dPfCsgHLZcr8QUY', NULL, 'a:0:{}', 'tintin lastname', 'tintin', '0123456789', '2018-03-17 22:20:50', NULL, 58955, NULL),
(16, 10, 'firstyou@domain.com', 'firstyou@domain.com', 'firstyou@domain.com', 'firstyou@domain.com', 1, 'N.TXI4UlHaAEBDID1.izUKq94YuLo7wYryaZlnzWmOg', 'BOWJu6HO4/VM4moeBGspe2nJGfNfxHlMlB8/jDkhymyhYT0w88eImOLADsDiGOQO9lqiiUUY0DEVoWev0/Csqg==', '2018-03-17 22:32:19', 'OaA18izDXpU_Wm-qaIHOtQty-iHbhVOv3M6wXqODRkQ', NULL, 'a:0:{}', 'last you', 'first you', '0123456789', '2018-03-17 22:32:16', NULL, 97582, NULL),
(17, 11, 'HGFDEEZ2@Mail.com', 'hgfdeez2@mail.com', 'HGFDEEZ2@Mail.com', 'hgfdeez2@mail.com', 0, 'DttFQ4x76rBJ8wJeR/yE2akbLgSK/ON17q3o9H1xgqc', '72FCV0dsUw35Jr8V/9VokHtOgT867ISaht491pqmOtSuWAsWaynXXQn5ZLjkMWnbvohZtLYdly16AwnMX5RnBw==', '2018-03-18 11:06:20', 'vexXPL003QXs0NaEDebM4PjXYLGxWGLrRpeVhz6PlhA', NULL, 'a:0:{}', 'LIVE', 'MR.TTTYYY', '0123456789', '2018-03-18 11:06:16', '2018-03-18 11:10:22', 68524, 100),
(18, 12, 'gfegseg@ggh.ma', 'gfegseg@ggh.ma', 'gfegseg@ggh.ma', 'gfegseg@ggh.ma', 1, 'ErLapTRhJFSAulOeY6o30j4k0dRU2fLrkcxgNS/Q7ys', '5Z9aqbevmyNHbnRIBU+RMeUJDTaE1j1cEPXI/WeFiSPkn3ZArlZ6g4x1hsOukB41AHKUtyGxPpYxMZjoFmMuEw==', '2018-05-06 14:35:38', 'KSlaUkF3wyZkIKPukHcmHKDiZc6Ix1dTOZq-DvQfp68', NULL, 'a:0:{}', 'rhytyjrtjtyjtyhtyh', 'egrdthrtyjtjtu', '0123456789', '2018-05-06 14:35:27', NULL, 47771, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`id`, `url`, `alt`, `file`) VALUES
(2, 'png', 'id-photo.png', '/Applications/MAMP/tmp/php/php7VnBfh'),
(3, 'png', 'id-photo.png', '/Applications/MAMP/tmp/php/phpkTxHTw'),
(7, 'jpeg', 'avatar5.jpg', '/Applications/MAMP/tmp/php/phpziEyia'),
(9, 'jpeg', 'avatar4.jpg', '/Applications/MAMP/tmp/php/phpPcJ8GH'),
(10, 'jpeg', 'avatar3.jpg', '/Applications/MAMP/tmp/php/phpWV0wI6'),
(11, 'jpeg', 'avatar3.jpg', '/Applications/MAMP/tmp/php/php0ihXPq'),
(12, 'jpeg', 'CNI.jpg', '/Applications/MAMP/tmp/php/phpQy9lhK');

-- --------------------------------------------------------

--
-- Structure de la table `title`
--

CREATE TABLE `title` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_A45BDDC1E7927C74` (`email`),
  ADD UNIQUE KEY `UNIQ_A45BDDC13DA5256D` (`image_id`),
  ADD KEY `IDX_A45BDDC1A9F87BD` (`title_id`);

--
-- Index pour la table `choix`
--
ALTER TABLE `choix`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`),
  ADD UNIQUE KEY `UNIQ_957A64793DA5256D` (`image_id`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `choix`
--
ALTER TABLE `choix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `title`
--
ALTER TABLE `title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `FK_A45BDDC13DA5256D` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`),
  ADD CONSTRAINT `FK_A45BDDC1A9F87BD` FOREIGN KEY (`title_id`) REFERENCES `title` (`id`);

--
-- Contraintes pour la table `fos_user`
--
ALTER TABLE `fos_user`
  ADD CONSTRAINT `FK_957A64793DA5256D` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`);

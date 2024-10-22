-- Hôte : 127.0.0.1
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `vikings_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `calendar_event`
--

CREATE TABLE `CALENDAR_EVENT` (
  `EVENT_ID` INT(11) NOT NULL,
  `EVENT_TYPE` ENUM('Daily', 'Weekly', 'Monthly', 'Yearly') NOT NULL,
  `ENTITY_ID` INT(11) DEFAULT NULL,
  `EVENT_DATE` DATE DEFAULT NULL,
  `EVENT_TIME` TIME DEFAULT NULL,
  `EVENT_DETAILS` TEXT DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `CLIENT` (
  `CLIENT_ID` INT(11) NOT NULL,
  `USER_ID` INT(11) DEFAULT NULL,
  `TYPE` VARCHAR(50) DEFAULT NULL,
  `COLOR` VARCHAR(50) DEFAULT NULL,
  `GROUP_NAME` VARCHAR(255) DEFAULT NULL,
  `DATE_OF_BIRTH` DATE DEFAULT NULL,
  `REGISTRATION_DATE` DATE DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

-- --------------------------------------------------------

--
-- Structure de la table `client_group`
--

CREATE TABLE `CLIENT_GROUP` (
  `GROUP_ID` INT(11) NOT NULL,
  `GROUP_NAME` VARCHAR(255) DEFAULT NULL,
  `COACH_ID` INT(11) DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

-- --------------------------------------------------------

--
-- Structure de la table `client_plan`
--

CREATE TABLE `CLIENT_PLAN` (
  `CLIENT_PLAN_ID` INT(11) NOT NULL,
  `CLIENT_ID` INT(11) DEFAULT NULL,
  `GROUP_ID` INT(11) DEFAULT NULL,
  `DATE_ENROLLMENT` DATETIME DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

-- --------------------------------------------------------

--
-- Structure de la table `coach`
--

CREATE TABLE `COACH` (
  `COACH_ID` INT(11) NOT NULL,
  `USER_ID` INT(11) DEFAULT NULL,
  `TYPE` VARCHAR(50) DEFAULT NULL,
  `AVAILABILITY` VARCHAR(255) DEFAULT NULL,
  `EMAIL` VARCHAR(255) DEFAULT NULL,
  `PHONE` VARCHAR(20) DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

-- --------------------------------------------------------

--
-- Structure de la table `coach_client_communication`
--

CREATE TABLE `COACH_CLIENT_COMMUNICATION` (
  `COMMUNICATION_ID` INT(11) NOT NULL,
  `COACH_ID` INT(11) DEFAULT NULL,
  `CLIENT_ID` INT(11) DEFAULT NULL,
  `MESSAGE` TEXT DEFAULT NULL,
  `DATE_SENT` DATETIME DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

-- --------------------------------------------------------

--
-- Structure de la table `event_plan`
--

CREATE TABLE `EVENT_PLAN` (
  `EVENT_PLAN_ID` INT(11) NOT NULL,
  `COACH_ID` INT(11) DEFAULT NULL,
  `CLIENT_ID` INT(11) DEFAULT NULL,
  `DATE_SCHEDULED` DATETIME DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

-- --------------------------------------------------------

--
-- Structure de la table `manager`
--

CREATE TABLE `MANAGER` (
  `MANAGER_ID` INT(11) NOT NULL,
  `USER_ID` INT(11) DEFAULT NULL,
  `NAME` VARCHAR(255) DEFAULT NULL,
  `EMAIL` VARCHAR(255) DEFAULT NULL,
  `PHONE` VARCHAR(20) DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

-- --------------------------------------------------------

--
-- Structure de la table `manager_client_communication`
--

CREATE TABLE `MANAGER_CLIENT_COMMUNICATION` (
  `COMMUNICATION_ID` INT(11) NOT NULL,
  `MANAGER_ID` INT(11) DEFAULT NULL,
  `CLIENT_ID` INT(11) DEFAULT NULL,
  `MESSAGE` TEXT DEFAULT NULL,
  `DATE_SENT` DATETIME DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

-- --------------------------------------------------------

--
-- Structure de la table `manager_coach_communication`
--

CREATE TABLE `MANAGER_COACH_COMMUNICATION` (
  `COMMUNICATION_ID` INT(11) NOT NULL,
  `MANAGER_ID` INT(11) DEFAULT NULL,
  `COACH_ID` INT(11) DEFAULT NULL,
  `MESSAGE` TEXT DEFAULT NULL,
  `DATE_SENT` DATETIME DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

-- --------------------------------------------------------

--
-- Structure de la table `manager_plan`
--

CREATE TABLE `MANAGER_PLAN` (
  `MANAGER_PLAN_ID` INT(11) NOT NULL,
  `MANAGER_ID` INT(11) DEFAULT NULL,
  `POOL_PLAN_ID` INT(11) DEFAULT NULL,
  `MINIBUS_PLAN_ID` INT(11) DEFAULT NULL,
  `CLIENT_PLAN_ID` INT(11) DEFAULT NULL,
  `DATE_SCHEDULED` DATETIME DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

-- --------------------------------------------------------

--
-- Structure de la table `minibus_plan`
--

CREATE TABLE `MINIBUS_PLAN` (
  `MINIBUS_PLAN_ID` INT(11) NOT NULL,
  `TEMP` VARCHAR(50) DEFAULT NULL,
  `COACH_ID` INT(11) DEFAULT NULL,
  `EVENT` VARCHAR(255) DEFAULT NULL,
  `DATE_SCHEDULED` DATETIME DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

CREATE TABLE `NOTIFICATION` (
  `NOTIFICATION_ID` INT(11) NOT NULL,
  `USER_ID` INT(11) DEFAULT NULL,
  `MESSAGE` TEXT DEFAULT NULL,
  `IS_READ` TINYINT(1) DEFAULT 0,
  `DATE_SENT` DATETIME DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

-- --------------------------------------------------------

--
-- Structure de la table `pool_plan`
--

CREATE TABLE `POOL_PLAN` (
  `POOL_PLAN_ID` INT(11) NOT NULL,
  `TEMP` VARCHAR(50) DEFAULT NULL,
  `LINE` VARCHAR(50) DEFAULT NULL,
  `GROUP_ID` INT(11) DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `USERS` (
  `USER_ID` INT(11) NOT NULL,
  `USERNAME` VARCHAR(50) NOT NULL,
  `PASSWORD` VARCHAR(255) NOT NULL,
  `USER_TYPE` ENUM('Manager', 'Coach', 'Client') NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `calendar_event`
--
ALTER TABLE `CALENDAR_EVENT` ADD PRIMARY KEY (`EVENT_ID`), ADD KEY `ENTITY_ID` (`ENTITY_ID`);

--
-- Index pour la table `client`
--
ALTER TABLE `CLIENT` ADD PRIMARY KEY (`CLIENT_ID`), ADD UNIQUE KEY `USER_ID` (`USER_ID`);

--
-- Index pour la table `client_group`
--
ALTER TABLE `CLIENT_GROUP` ADD PRIMARY KEY (`GROUP_ID`), ADD KEY `COACH_ID` (`COACH_ID`);

--
-- Index pour la table `client_plan`
--
ALTER TABLE `CLIENT_PLAN` ADD PRIMARY KEY (`CLIENT_PLAN_ID`), ADD KEY `CLIENT_ID` (`CLIENT_ID`), ADD KEY `GROUP_ID` (`GROUP_ID`);

--
-- Index pour la table `coach`
--
ALTER TABLE `COACH` ADD PRIMARY KEY (`COACH_ID`), ADD UNIQUE KEY `USER_ID` (`USER_ID`);

--
-- Index pour la table `coach_client_communication`
--
ALTER TABLE `COACH_CLIENT_COMMUNICATION` ADD PRIMARY KEY (`COMMUNICATION_ID`), ADD KEY `COACH_ID` (`COACH_ID`), ADD KEY `CLIENT_ID` (`CLIENT_ID`);

--
-- Index pour la table `event_plan`
--
ALTER TABLE `EVENT_PLAN` ADD PRIMARY KEY (`EVENT_PLAN_ID`), ADD KEY `COACH_ID` (`COACH_ID`), ADD KEY `CLIENT_ID` (`CLIENT_ID`);

--
-- Index pour la table `manager`
--
ALTER TABLE `MANAGER` ADD PRIMARY KEY (`MANAGER_ID`), ADD UNIQUE KEY `USER_ID` (`USER_ID`);

--
-- Index pour la table `manager_client_communication`
--
ALTER TABLE `MANAGER_CLIENT_COMMUNICATION` ADD PRIMARY KEY (`COMMUNICATION_ID`), ADD KEY `MANAGER_ID` (`MANAGER_ID`), ADD KEY `CLIENT_ID` (`CLIENT_ID`);

--
-- Index pour la table `manager_coach_communication`
--
ALTER TABLE `MANAGER_COACH_COMMUNICATION` ADD PRIMARY KEY (`COMMUNICATION_ID`), ADD KEY `MANAGER_ID` (`MANAGER_ID`), ADD KEY `COACH_ID` (`COACH_ID`);

--
-- Index pour la table `manager_plan`
--
ALTER TABLE `MANAGER_PLAN` ADD PRIMARY KEY (`MANAGER_PLAN_ID`), ADD KEY `MANAGER_ID` (`MANAGER_ID`), ADD KEY `POOL_PLAN_ID` (`POOL_PLAN_ID`), ADD KEY `MINIBUS_PLAN_ID` (`MINIBUS_PLAN_ID`), ADD KEY `CLIENT_PLAN_ID` (`CLIENT_PLAN_ID`);

--
-- Index pour la table `minibus_plan`
--
ALTER TABLE `MINIBUS_PLAN` ADD PRIMARY KEY (`MINIBUS_PLAN_ID`), ADD KEY `COACH_ID` (`COACH_ID`);

--
-- Index pour la table `notification`
--
ALTER TABLE `NOTIFICATION` ADD PRIMARY KEY (`NOTIFICATION_ID`), ADD KEY `USER_ID` (`USER_ID`);

--
-- Index pour la table `pool_plan`
--
ALTER TABLE `POOL_PLAN` ADD PRIMARY KEY (`POOL_PLAN_ID`), ADD KEY `GROUP_ID` (`GROUP_ID`);

--
-- Index pour la table `users`
--
ALTER TABLE `USERS` ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `calendar_event`
--
ALTER TABLE `CALENDAR_EVENT` MODIFY `EVENT_ID` INT(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `CLIENT` MODIFY `CLIENT_ID` INT(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `client_group`
--
ALTER TABLE `CLIENT_GROUP` MODIFY `GROUP_ID` INT(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `client_plan`
--
ALTER TABLE `CLIENT_PLAN` MODIFY `CLIENT_PLAN_ID` INT(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `coach`
--
ALTER TABLE `COACH` MODIFY `COACH_ID` INT(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `coach_client_communication`
--
ALTER TABLE `COACH_CLIENT_COMMUNICATION` MODIFY `COMMUNICATION_ID` INT(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `event_plan`
--
ALTER TABLE `EVENT_PLAN` MODIFY `EVENT_PLAN_ID` INT(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `manager`
--
ALTER TABLE `MANAGER` MODIFY `MANAGER_ID` INT(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `manager_client_communication`
--
ALTER TABLE `MANAGER_CLIENT_COMMUNICATION` MODIFY `COMMUNICATION_ID` INT(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `manager_coach_communication`
--
ALTER TABLE `MANAGER_COACH_COMMUNICATION` MODIFY `COMMUNICATION_ID` INT(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `manager_plan`
--
ALTER TABLE `MANAGER_PLAN` MODIFY `MANAGER_PLAN_ID` INT(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `minibus_plan`
--
ALTER TABLE `MINIBUS_PLAN` MODIFY `MINIBUS_PLAN_ID` INT(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `notification`
--
ALTER TABLE `NOTIFICATION` MODIFY `NOTIFICATION_ID` INT(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pool_plan`
--
ALTER TABLE `POOL_PLAN` MODIFY `POOL_PLAN_ID` INT(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `USERS` MODIFY `USER_ID` INT(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `calendar_event`
--
ALTER TABLE `CALENDAR_EVENT` ADD CONSTRAINT `CALENDAR_EVENT_IBFK_1` FOREIGN KEY (`ENTITY_ID`) REFERENCES `MANAGER` (`MANAGER_ID`) ON DELETE CASCADE, ADD CONSTRAINT `CALENDAR_EVENT_IBFK_2` FOREIGN KEY (`ENTITY_ID`) REFERENCES `COACH` (`COACH_ID`) ON DELETE CASCADE, ADD CONSTRAINT `CALENDAR_EVENT_IBFK_3` FOREIGN KEY (`ENTITY_ID`) REFERENCES `CLIENT` (`CLIENT_ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `client`
--
ALTER TABLE `CLIENT` ADD CONSTRAINT `CLIENT_IBFK_1` FOREIGN KEY (`USER_ID`) REFERENCES `USERS` (`USER_ID`);

--
-- Contraintes pour la table `client_group`
--
ALTER TABLE `CLIENT_GROUP` ADD CONSTRAINT `CLIENT_GROUP_IBFK_1` FOREIGN KEY (`COACH_ID`) REFERENCES `COACH` (`COACH_ID`);

--
-- Contraintes pour la table `client_plan`
--
ALTER TABLE `CLIENT_PLAN` ADD CONSTRAINT `CLIENT_PLAN_IBFK_1` FOREIGN KEY (`CLIENT_ID`) REFERENCES `CLIENT` (`CLIENT_ID`), ADD CONSTRAINT `CLIENT_PLAN_IBFK_2` FOREIGN KEY (`GROUP_ID`) REFERENCES `CLIENT_GROUP` (`GROUP_ID`);

--
-- Contraintes pour la table `coach`
--
ALTER TABLE `COACH` ADD CONSTRAINT `COACH_IBFK_1` FOREIGN KEY (`USER_ID`) REFERENCES `USERS` (`USER_ID`);

--
-- Contraintes pour la table `coach_client_communication`
--
ALTER TABLE `COACH_CLIENT_COMMUNICATION` ADD CONSTRAINT `COACH_CLIENT_COMMUNICATION_IBFK_1` FOREIGN KEY (`COACH_ID`) REFERENCES `COACH` (`COACH_ID`), ADD CONSTRAINT `COACH_CLIENT_COMMUNICATION_IBFK_2` FOREIGN KEY (`CLIENT_ID`) REFERENCES `CLIENT` (`CLIENT_ID`);

--
-- Contraintes pour la table `event_plan`
--
ALTER TABLE `EVENT_PLAN` ADD CONSTRAINT `EVENT_PLAN_IBFK_1` FOREIGN KEY (`COACH_ID`) REFERENCES `COACH` (`COACH_ID`), ADD CONSTRAINT `EVENT_PLAN_IBFK_2` FOREIGN KEY (`CLIENT_ID`) REFERENCES `CLIENT` (`CLIENT_ID`);

--
-- Contraintes pour la table `manager`
--
ALTER TABLE `MANAGER` ADD CONSTRAINT `MANAGER_IBFK_1` FOREIGN KEY (`USER_ID`) REFERENCES `USERS` (`USER_ID`);

--
-- Contraintes pour la table `manager_client_communication`
--
ALTER TABLE `MANAGER_CLIENT_COMMUNICATION` ADD CONSTRAINT `MANAGER_CLIENT_COMMUNICATION_IBFK_1` FOREIGN KEY (`MANAGER_ID`) REFERENCES `MANAGER` (`MANAGER_ID`), ADD CONSTRAINT `MANAGER_CLIENT_COMMUNICATION_IBFK_2` FOREIGN KEY (`CLIENT_ID`) REFERENCES `CLIENT` (`CLIENT_ID`);

--
-- Contraintes pour la table `manager_coach_communication`
--
ALTER TABLE `MANAGER_COACH_COMMUNICATION` ADD CONSTRAINT `MANAGER_COACH_COMMUNICATION_IBFK_1` FOREIGN KEY (`MANAGER_ID`) REFERENCES `MANAGER` (`MANAGER_ID`), ADD CONSTRAINT `MANAGER_COACH_COMMUNICATION_IBFK_2` FOREIGN KEY (`COACH_ID`) REFERENCES `COACH` (`COACH_ID`);

--
-- Contraintes pour la table `manager_plan`
--
ALTER TABLE `MANAGER_PLAN` ADD CONSTRAINT `MANAGER_PLAN_IBFK_1` FOREIGN KEY (`MANAGER_ID`) REFERENCES `MANAGER` (`MANAGER_ID`), ADD CONSTRAINT `MANAGER_PLAN_IBFK_2` FOREIGN KEY (`POOL_PLAN_ID`) REFERENCES `POOL_PLAN` (`POOL_PLAN_ID`), ADD CONSTRAINT `MANAGER_PLAN_IBFK_3` FOREIGN KEY (`MINIBUS_PLAN_ID`) REFERENCES `MINIBUS_PLAN` (`MINIBUS_PLAN_ID`), ADD CONSTRAINT `MANAGER_PLAN_IBFK_4` FOREIGN KEY (`CLIENT_PLAN_ID`) REFERENCES `CLIENT_PLAN` (`CLIENT_PLAN_ID`);

--
-- Contraintes pour la table `minibus_plan`
--
ALTER TABLE `MINIBUS_PLAN` ADD CONSTRAINT `MINIBUS_PLAN_IBFK_1` FOREIGN KEY (`COACH_ID`) REFERENCES `COACH` (`COACH_ID`);

--
-- Contraintes pour la table `notification`
--
ALTER TABLE `NOTIFICATION` ADD CONSTRAINT `NOTIFICATION_IBFK_1` FOREIGN KEY (`USER_ID`) REFERENCES `USERS` (`USER_ID`);

--
-- Contraintes pour la table `pool_plan`
--
ALTER TABLE `POOL_PLAN` ADD CONSTRAINT `POOL_PLAN_IBFK_1` FOREIGN KEY (`GROUP_ID`) REFERENCES `CLIENT_GROUP` (`GROUP_ID`);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
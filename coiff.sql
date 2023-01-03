-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 03 jan. 2023 à 20:16
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `coiff`
--

-- --------------------------------------------------------

--
-- Structure de la table `achete`
--

CREATE TABLE `achete` (
  `idAchete` int(11) NOT NULL,
  `montantPaye` float NOT NULL,
  `idClient` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `photo` varchar(35) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `adresse` varchar(25) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `email` varchar(45) NOT NULL,
  `dateNaissance` varchar(30) NOT NULL,
  `telephone` varchar(35) NOT NULL,
  `prenom` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idAdmin`, `photo`, `nom`, `adresse`, `mdp`, `email`, `dateNaissance`, `telephone`, `prenom`) VALUES
(1, 'imgs\\sirine.jpg', 'Samadi', 'maisonneuve', 'sirine123', 'sirine@gmail.com', '1989-11-09', '51498989898', 'Sirine '),
(2, 'imgs\\aya.jpg', 'El Barri', 'Dollar des ormaux', 'sirine123', 'aya@gmail.com', '2002-06-28', '4139754956', 'Aya');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idClient` int(11) NOT NULL,
  `photo` varchar(35) NOT NULL,
  `numCard` varchar(25) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(35) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `dateNaissance` date NOT NULL,
  `email` varchar(35) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `adresse` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `photo`, `numCard`, `nom`, `prenom`, `telephone`, `dateNaissance`, `email`, `mdp`, `adresse`) VALUES
(1, 'imgs\\joseph.jpg', '16564465456', 'joseph', 'joestar', '(514)234-7654', '0000-00-00', 'joseph@gmail.com', 'sirine123', 'maisonneuve'),
(2, '', '', 'fghfghfg', 'fghfghgf', 'hfghgfh', '2022-12-14', 'gfhfghfg', 'sirine123', ''),
(3, '', '', 'rthrthrth', 'hthrthtr', 'hrthtrh', '2022-12-13', 'rhrthrt', 'sirine123', ''),
(4, '', '', 'momo', 'momo', '5656565656', '2022-12-12', 'Mohamed@gmail.com', 'sirine123', '');

-- --------------------------------------------------------

--
-- Structure de la table `coiffeur`
--

CREATE TABLE `coiffeur` (
  `idCoiffeur` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(35) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `adresse` varchar(20) NOT NULL,
  `mdp` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dateNaissance` date NOT NULL,
  `telephone` varchar(35) NOT NULL,
  `about` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `coiffeur`
--

INSERT INTO `coiffeur` (`idCoiffeur`, `nom`, `prenom`, `photo`, `adresse`, `mdp`, `email`, `dateNaissance`, `telephone`, `about`) VALUES
(1, 'cho', 'choo', 'imgs\\chopper.jpg', 'maisonneuve', 'sirine123', 'chopper@gmail.com', '0000-00-00', '514527899', 'Je m\'appelle Tony et je suis esthéticien à A&S. Je fais des manucures, des soins et des massages du visage. Je travaille dans ce merveilleux salon depuis son ouverture. J\'adore mon travail d\'esthéticienne et les employés le rendent tellement meilleur. '),
(2, 'Samadi', 'Sirine', 'imgs\\sirine.jpg', 'Hochelaga', 'sirine123', 'sirine@gmail.com', '2002-06-04', '6551523123', 'En 2016, j\'ai cofondé ce salon de beauté/coiffure avec l\'une de mes plus proches amies Aya El Barri. J\'adore ce salon et tous les employés, ils travaillent également dans le salon avec passion dans le but de satisfaire tous leurs clients.'),
(3, 'El Barri', 'Aya', 'imgs\\aya.jpg', 'dollars des ormaux', 'sirine123', 'aya@gmail.com', '2001-06-28', '15212313', 'Aux côtés de mon amie Sirine Samadi, nous avons ouvert ce merveilleux salon de coiffure en 2016. La gestion de ce magnifique salon parallèlement aux études pour devenir médecin sont vraiment une passion pour moi. Je suis fière de tous les employés qui font de ce salon un grand et s\'assurent de satisfaire tous nos clients !'),
(4, 'Kujo', 'Jotaro', 'imgs\\jotaro.jpg', 'kyoto', 'sirine123', 'jotaro@gmail.com', '1995-12-12', '561515151', 'Je suis heureux de travailler chez A&S, être barbier a toujours été une passion pour moi depuis que je suis jeune, et A&S m\'a accueilli à bras ouverts. J\'ai 7 ans d\'expérience en tant que barbier ainsi que coiffeur. '),
(5, 'Cujoh', 'Jolyne', 'imgs\\jolyne.jpg', 'rue msalla', 'sirine123', 'joylne@gmail.com', '2001-09-20', '145615159', 'Bonjour à tous ! Je m\'appelle Jolyne et je suis coiffeuse, je travaille à A&S depuis 2018. J\'adore ce salon et tous les employés et les clients. J\'ai 5 ans d\'expérience en coiffure ainsi qu\'en coloration de cheveux. Je serais heureuse de vous avoir comme client ! '),
(6, 'Robin', 'Nico', 'imgs\\robin.jpg', 'cote des neiges', 'sirine123', 'robin@gmail.com', '1994-10-13', '455493163', 'Je m\'appelle Robin et je suis coiffeuse, je travaille à A&S depuis 2017. C\'est un honneur de travailler dans ce salon. J\'ai 6 ans d\'expérience dans la coiffure et la coloration des cheveux. Je serais heureux de vous avoir comme client ! Tout ce que vous avez à faire est de prendre un rendez-vous et nous sommes prêts à partir ! ');

-- --------------------------------------------------------

--
-- Structure de la table `coifserv`
--

CREATE TABLE `coifserv` (
  `idCoifServ` int(11) NOT NULL,
  `idService` int(11) NOT NULL,
  `idCoiffeur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `coifserv`
--

INSERT INTO `coifserv` (`idCoifServ`, `idService`, `idCoiffeur`) VALUES
(1, 2, 4),
(2, 3, 6),
(5, 3, 5),
(6, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `idcommande` int(11) NOT NULL,
  `date_commande` varchar(20) NOT NULL,
  `etat` varchar(10) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`idcommande`, `date_commande`, `etat`, `prix`) VALUES
(1, '12.31.22', 'en cours', 80),
(2, '12.31.22', 'en cours', 120),
(3, '12.31.22', 'en cours', 120),
(4, '12.31.22', 'en cours', 160),
(5, '12.31.22', 'en cours', 160),
(6, '12.31.22', 'en cours', 200),
(7, '12.31.22', 'en cours', 200),
(8, '12.31.22', 'en cours', 200),
(9, '12.31.22', 'en cours', 240),
(10, '12.31.22', 'en cours', 240),
(11, '12.31.22', 'en cours', 260),
(12, '12.31.22', 'en cours', 260),
(13, '12.31.22', 'en cours', 260),
(14, '12.31.22', 'en cours', 300),
(15, '12.31.22', 'en cours', 300),
(16, '12.31.22', 'en cours', 300),
(17, '12.31.22', 'en cours', 330),
(18, '12.31.22', 'en cours', 330),
(19, '12.31.22', 'en cours', 400),
(20, '12.31.22', 'en cours', 40),
(21, '12.31.22', 'en cours', 80),
(22, '12.31.22', 'en cours', 80),
(23, '12.31.22', 'en cours', 120),
(24, '12.31.22', 'en cours', 120);

-- --------------------------------------------------------

--
-- Structure de la table `modif`
--

CREATE TABLE `modif` (
  `idModif` int(11) NOT NULL,
  `idAdmin` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `idProduit` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `pho` varchar(40) NOT NULL,
  `prix` float NOT NULL,
  `qte` int(11) NOT NULL,
  `disponible` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idProduit`, `nom`, `pho`, `prix`, `qte`, `disponible`) VALUES
(1, 'Shampooing', 'imgs\\shampoo.jpg', 40, 3, 1),
(2, 'après-shampooing', 'imgs\\apresshampooing.jpg', 30, 6, 1),
(3, 'Huile capillaire', 'imgs\\huilecapillaire.jpg', 24, 6, 1),
(4, 'Sérum capillaire', 'imgs\\serumcapillaire.jpg', 15, 9, 1),
(5, 'Masque capillaire', 'imgs\\masque.jpg', 30, 5, 1),
(6, 'Mousse capillaires', 'imgs\\moussecapillaires.jpg', 20, 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `rendezvous`
--

CREATE TABLE `rendezvous` (
  `idRdv` int(11) NOT NULL,
  `dateRdv` varchar(35) NOT NULL,
  `heureRdv` varchar(25) NOT NULL,
  `idClient` int(11) NOT NULL,
  `idCoiffeur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rendezvous`
--

INSERT INTO `rendezvous` (`idRdv`, `dateRdv`, `heureRdv`, `idClient`, `idCoiffeur`) VALUES
(1, '12-12-2022', '12h00min', 1, 1),
(3, '12-12-2023', '12h00min', 1, 2),
(4, '12-12-2023', '12h00min', 1, 2),
(5, '22-12-2023', '12h00min', 1, 1),
(6, '22-12-2023', '12h00min', 1, 1),
(7, '12-12-2023', '12h00min', 1, 5),
(8, '12-12-14', '12h00', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `salon`
--

CREATE TABLE `salon` (
  `idSalon` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `adresse` varchar(45) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `horaire` varchar(25) NOT NULL,
  `ouvert` tinyint(1) NOT NULL,
  `about` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `salon`
--

INSERT INTO `salon` (`idSalon`, `nom`, `adresse`, `telephone`, `horaire`, `ouvert`, `about`) VALUES
(1, 'A&S', '3030 Rue Hochelaga, Montréal, QC H1W 1G2', '94851521', '24h/7j', 1, 'A&S est un salon de coiffure situé dans la rue hochelaga, à Montréal. Il a été ouvert en 2016 par Sirine Samadi et la future docteur Aya El Barri. Notre salon a été classé comme le meilleur salon dans le monde entier par de nombreux critiques célèbres ! C\'est très crédible puisque nous offrons de nombreux services pour vous avec des prix raisonnables. Tout ce que vous avez à faire est de pointer un rendez-vous avec l\'un de nos coiffeurs bien-aimés et vous pouvez garantir que vous aurez le meilleur glow up. Mais ce n\'est pas tout, les amis ! en AS nous vendons des produits capillaires, ainsi que des produits de soins de la peau ! les achats peuvent être effectués en ligne ou au magasin. Vous êtes donc les bienvenus dans notre salon!');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `idService` int(11) NOT NULL,
  `description` varchar(35) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`idService`, `description`, `prix`) VALUES
(1, 'Coupe Cheuveux', 50),
(2, 'Coloration Cheuveux', 40),
(3, 'Soins de cheuveux', 40),
(5, 'Coloration des méches', 80),
(6, 'Coloration (racines)', 75),
(7, 'Protein', 100),
(8, 'Permanent', 115);

-- --------------------------------------------------------

--
-- Structure de la table `shift`
--

CREATE TABLE `shift` (
  `idShift` int(11) NOT NULL,
  `dateShift` varchar(34) NOT NULL,
  `heureCommance` varchar(25) NOT NULL,
  `heureFini` varchar(45) NOT NULL,
  `present` tinyint(1) NOT NULL,
  `idCoiffeur` int(11) NOT NULL,
  `idSalon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `vende`
--

CREATE TABLE `vende` (
  `idVende` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  `idSalon` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `achete`
--
ALTER TABLE `achete`
  ADD PRIMARY KEY (`idAchete`,`idClient`,`idProduit`),
  ADD KEY `idProduit` (`idProduit`),
  ADD KEY `idClient` (`idClient`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClient`);

--
-- Index pour la table `coiffeur`
--
ALTER TABLE `coiffeur`
  ADD PRIMARY KEY (`idCoiffeur`);

--
-- Index pour la table `coifserv`
--
ALTER TABLE `coifserv`
  ADD PRIMARY KEY (`idCoifServ`,`idService`,`idCoiffeur`),
  ADD KEY `idCoiffeur` (`idCoiffeur`),
  ADD KEY `idService` (`idService`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idcommande`);

--
-- Index pour la table `modif`
--
ALTER TABLE `modif`
  ADD PRIMARY KEY (`idModif`,`idAdmin`,`idProduit`),
  ADD KEY `idAdmin` (`idAdmin`),
  ADD KEY `idProduit` (`idProduit`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`idProduit`);

--
-- Index pour la table `rendezvous`
--
ALTER TABLE `rendezvous`
  ADD PRIMARY KEY (`idRdv`,`idClient`,`idCoiffeur`),
  ADD KEY `idClient` (`idClient`),
  ADD KEY `idCoiffeur` (`idCoiffeur`);

--
-- Index pour la table `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`idSalon`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`idService`);

--
-- Index pour la table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`idShift`,`idCoiffeur`,`idSalon`),
  ADD KEY `idCoiffeur` (`idCoiffeur`),
  ADD KEY `idSalon` (`idSalon`);

--
-- Index pour la table `vende`
--
ALTER TABLE `vende`
  ADD PRIMARY KEY (`idVende`,`idSalon`,`idProduit`),
  ADD KEY `idSalon` (`idSalon`),
  ADD KEY `idProduit` (`idProduit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `achete`
--
ALTER TABLE `achete`
  MODIFY `idAchete` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `coiffeur`
--
ALTER TABLE `coiffeur`
  MODIFY `idCoiffeur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `coifserv`
--
ALTER TABLE `coifserv`
  MODIFY `idCoifServ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `idcommande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `modif`
--
ALTER TABLE `modif`
  MODIFY `idModif` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `idProduit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `rendezvous`
--
ALTER TABLE `rendezvous`
  MODIFY `idRdv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `salon`
--
ALTER TABLE `salon`
  MODIFY `idSalon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `idService` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `shift`
--
ALTER TABLE `shift`
  MODIFY `idShift` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `vende`
--
ALTER TABLE `vende`
  MODIFY `idVende` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `achete`
--
ALTER TABLE `achete`
  ADD CONSTRAINT `achete_ibfk_1` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`idProduit`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `achete_ibfk_2` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `coifserv`
--
ALTER TABLE `coifserv`
  ADD CONSTRAINT `coifserv_ibfk_1` FOREIGN KEY (`idCoiffeur`) REFERENCES `coiffeur` (`idCoiffeur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `coifserv_ibfk_2` FOREIGN KEY (`idService`) REFERENCES `service` (`idService`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `modif`
--
ALTER TABLE `modif`
  ADD CONSTRAINT `modif_ibfk_1` FOREIGN KEY (`idAdmin`) REFERENCES `admin` (`idAdmin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `modif_ibfk_2` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`idProduit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `rendezvous`
--
ALTER TABLE `rendezvous`
  ADD CONSTRAINT `rendezvous_ibfk_1` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rendezvous_ibfk_2` FOREIGN KEY (`idCoiffeur`) REFERENCES `coiffeur` (`idCoiffeur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `shift`
--
ALTER TABLE `shift`
  ADD CONSTRAINT `shift_ibfk_1` FOREIGN KEY (`idCoiffeur`) REFERENCES `coiffeur` (`idCoiffeur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shift_ibfk_2` FOREIGN KEY (`idSalon`) REFERENCES `salon` (`idSalon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `vende`
--
ALTER TABLE `vende`
  ADD CONSTRAINT `vende_ibfk_1` FOREIGN KEY (`idSalon`) REFERENCES `salon` (`idSalon`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vende_ibfk_2` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`idProduit`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

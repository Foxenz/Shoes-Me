-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 27 fév. 2023 à 20:10
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `shoes-me`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `stock` int(11) NOT NULL,
  `image_article` varchar(255) NOT NULL,
  `image_shop` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `category`, `description`, `price`, `stock`, `image_article`, `image_shop`) VALUES
(1, 'Nike Dunk Low Retro Panda', 'Dunk', 'La Dunk Low Panda est une paire de baskets iconique de la marque Nike. Elle est facilement reconnaissable grâce à son design noir et blanc en imitation de la fourrure de panda. Les chaussures ont un dessus en cuir noir et blanc, avec des accents noirs sur la semelle extérieure et la doublure intérieure. Elle est inspirée de la culture streetwear et est appréciée par les amateurs de baskets pour son esthétique épurée et intemporelle. Elle est également célèbre pour avoir été portée par de nombreux athlètes professionnels, ainsi que pour son inclusion dans des collaborations avec des artistes et des marques de mode.', '120', 10, '../../assets/images/article/dunk-low-black-white.webp', '../../assets/images/shop/dunk-low-black-white.webp'),
(2, 'Jordan 4 Retro Midnight Navy', 'Jordan 4', 'La Jordan 4 Retro Midnight Navy est une chaussure de sport emblématique de la marque Jordan, portée par Michael Jordan dans les années 90. Elle présente un design élégant en cuir bleu marine avec des empiècements en maille gris, des lacets blancs et le logo Jumpman de Jordan. La chaussure offre un amorti en mousse blanche et une semelle extérieure en caoutchouc gris et bleu marine pour une traction durable. Il s’agit d’une paire de chaussure de sport élégante et confortable, idéale pour les activités sportives ou pour une tenue décontractée, et est également populaire parmi les collectionneurs de Sneakers.', '300', 3, '../../assets/images/article/air-jordan-4-midnight-navy.webp', '../../assets/images/shop/air-jordan-4-midnight-navy.webp'),
(3, 'Jordan 1 Retro High OG Chicago Lost and Found', 'Jordan 1', 'La Jordan 1 Retro High OG Chicago \"Lost and Found\" est une chaussure de sport emblématique de la marque Jordan, récemment redécouverte après avoir été perdue pendant plus de 30 ans. Elle présente un design distinctif avec une combinaison de couleurs rouge, blanc et noir. Il s’agit d’une paire de chaussure de sport emblématique, idéale pour les activités sportives ou pour une tenue décontractée, et est également populaire parmi les collectionneurs de Sneakers.', '350', 2, '../../assets/images/article/air-jordan-1-high-chicago-lost-and-found.webp', '../../assets/images/shop/air-jordan-1-high-chicago-lost-and-found.webp'),
(4, 'Jordan 1 Retro High OG Hand Crafted', 'Jordan 1', 'La Jordan 1 Retro High OG Hand Crafted est une chaussure de sport emblématique de la marque Jordan, fabriquée à la main avec un cuir de qualité supérieure. Elle présente une combinaison de couleurs brun-vert-violet avec des lacets orange et noirs. La chaussure offre un amorti et un soutien supplémentaires pour les pieds avec une semelle intermédiaire blanche, et une semelle extérieure en caoutchouc noir pour une traction durable. C\'est une chaussure de sport élégante et idéale pour les activités sportives ou pour une tenue décontractée, et est également populaire parmi les collectionneurs de Sneakers.', '160', 15, '../../assets/images/article/air-jordan-1-high-hand-craft.webp', '../../assets/images/shop/air-jordan-1-high-hand-craft.webp'),
(5, 'Jordan 4 Retro Lightning', 'Jordan 4', 'La Jordan 4 Retro Lightning est une chaussure de sport emblématique de la marque Jordan, avec un design distinctif en jaune et noir. La semelle intermédiaire blanche offre un excellent amorti, tandis que la semelle extérieure en caoutchouc noir offre une traction et une durabilité exceptionnelles. La Jordan 4 Retro Lightning est une chaussure de sport élégante et confortable, idéale pour les activités sportives ou pour une tenue décontractée, et populaire auprès des collectionneurs de Sneakers.', '400', 4, '../../assets/images/article/air-jordan-4-retro-tour-yellow-lightning.webp', '../../assets/images/shop/air-jordan-4-retro-tour-yellow-lightning.webp'),
(6, 'Nike Dunk Low Racer Blue White', 'Dunk', 'La Dunk Low Racer Blue White est une chaussure de sport emblématique de la marque Nike, présentant un design distinctif avec une combinaison de couleurs bleu et blanc. La semelle intermédiaire blanche offre un excellent amorti et un soutien supplémentaire pour les pieds, tandis que la semelle extérieure en caoutchouc bleu offre une traction et une durabilité exceptionnelles. La Dunk Low Racer Blue White est une chaussure de sport élégante et confortable, idéale pour les activités sportives ou pour une tenue décontractée, et appréciée par les collectionneurs de Sneakers.', '120', 9, '../../assets/images/article/dunk-low-racer-blue-white.webp', '../../assets/images/shop/dunk-low-racer-blue-white.webp'),
(7, 'Air Force 1 White', 'Air Force 1', 'La Air Force 1 White est une chaussure de sport emblématique de la marque Nike, avec un design minimaliste en blanc. La semelle intermédiaire blanche offre un excellent amorti et un soutien supplémentaire pour les pieds, tandis que la semelle extérieure en caoutchouc blanc offre une traction et une durabilité exceptionnelles. La Air Force 1 White est une chaussure de sport polyvalente et confortable, idéale pour les activités sportives ou pour une tenue décontractée. Son design épuré en fait également un choix populaire pour les amateurs de mode.', '120', 19, '../../assets/images/article/air-force-1-white.webp', '../../assets/images/shop/air-force-1-white.webp'),
(8, 'Air Force 1 Black', 'Air Force 1 ', 'La Air Force 1 Black est une chaussure de sport emblématique de la marque Nike, avec un design minimaliste en noir. La semelle intermédiaire noire offre un excellent amorti et un soutien supplémentaire pour les pieds, tandis que la semelle extérieure en caoutchouc noir offre une traction et une durabilité exceptionnelles. La Air Force 1 Black est une chaussure de sport polyvalente et confortable, idéale pour les activités sportives ou pour une tenue décontractée. Son design épuré en fait également un choix populaire pour les amateurs de mode.', '120', 21, '../../assets/images/article/air-force-1-black.webp', '../../assets/images/shop/air-force-1-black.webp');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `token` text NOT NULL,
  `date_inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `email`, `password`, `ip`, `token`, `date_inscription`) VALUES
(1, 'test', 'test@test.com', '$2y$12$q/1nxyzCRvgHNYgKSYrKg.7xVdfYXsKkqWM35niSd4HqaO6GdkutW', '::1', '142c38d5707ae8d7079e40b290201d86a63f56acdd8cba01862e03a39da5ccc463549a3610f5b32f4af2ba8db871be779bc7166538d0c2edc22dc4d7f094e8af', '2023-02-18 15:39:21'),
(2, 'Alexandre', 'roosensalexandre@gmail.com', '$2y$12$2QZqqjRm8HNGlGGjz/NZcOOYqciWXYz9m.mRoyFZm1yh9Bw3pxQeG', '::1', '1fea47294614b706c407acc30573fa4653aecf2d4e1132522de6599d14dfb10529f75f5c23758175d3f5b8a18b2db97b56bbe62c0cde9ed63f055ed1452b1e73', '2023-02-18 15:49:06'),
(3, 'Martin', 'martin@gmail.com', '$2y$12$luaJ2wyUIq6Sm7beWbqEHOZu9oSmegRmZhbnfnEr8OBL2gFt0FL82', '::1', 'b85eb52c86a054e586e00f6653b5ecfdf1455db34d6efcba101f984c76b2a568a1fc41de9d846239891e0010e53985d4ebe210dcb7c97041929637b3f7b340bc', '2023-02-25 14:05:41');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

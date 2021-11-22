CREATE DATABASE IF NOT EXISTS `pelu` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `pelu`;

DROP TABLE IF EXISTS `workers`;
CREATE TABLE `workers` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(50) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `experiencia` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `workers` (`id`, `name`, `apellidos`, `experiencia`) VALUES
(1, 'Cristina', 'López', '3 años'),
(2, 'Raquel', 'Ruiz', '1 año'),
(3, 'Pedro', 'Sánchez', '15 años');

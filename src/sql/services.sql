CREATE DATABASE IF NOT EXISTS `pelu` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `pelu`;

DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(50) DEFAULT NULL,
  `precio` varchar(100) DEFAULT NULL,
  `tiempo` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `services` (`id`, `name`, `precio`, `tiempo`) VALUES
(1, 'Corte y secado', '40€', '1h 30min'),
(2, 'Tinte', '30€', '2h'),
(3, 'Mechas', '40€', '1h 30min');

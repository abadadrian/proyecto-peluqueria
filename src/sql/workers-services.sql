USE `pelu`;

DROP TABLE IF EXISTS `workers_services`;
CREATE TABLE `workers_services` (
  `workers_id` int NOT NULL,
  `services_id` int NOT NULL,
 PRIMARY KEY (workers_id, services_id),
 FOREIGN KEY (workers_id) REFERENCES workers(id),
 FOREIGN KEY (services_id) REFERENCES services(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `workers_services` VALUES
(1, 1),
(1, 2)
;

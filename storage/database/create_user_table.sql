CREATE TABLE `db_desafio`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `date_birth` VARCHAR(20) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`));
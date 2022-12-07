-- MySQL Script generated by MySQL Workbench
-- Wed Dec  7 13:20:48 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema projekt_sklep
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema projekt_sklep
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `projekt_sklep` DEFAULT CHARACTER SET utf8 ;
USE `projekt_sklep` ;

-- -----------------------------------------------------
-- Table `projekt_sklep`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projekt_sklep`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `administrator` TINYINT(1) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projekt_sklep`.`offers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projekt_sklep`.`offers` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `users_id` INT NOT NULL,
  `description` VARCHAR(45) NULL,
  PRIMARY KEY (`id`, `users_id`),
  CONSTRAINT `fk_offers_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `projekt_sklep`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projekt_sklep`.`orders`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projekt_sklep`.`orders` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `description` VARCHAR(45) NULL,
  `users_id` INT NOT NULL,
  `offers_id` INT NOT NULL,
  PRIMARY KEY (`id`, `users_id`, `offers_id`),
  CONSTRAINT `fk_orders_users`
    FOREIGN KEY (`users_id`)
    REFERENCES `projekt_sklep`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_offers1`
    FOREIGN KEY (`offers_id`)
    REFERENCES `projekt_sklep`.`offers` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

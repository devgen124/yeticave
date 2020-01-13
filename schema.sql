-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema yeticave
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema yeticave
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `yeticave` DEFAULT CHARACTER SET utf8 ;
USE `yeticave` ;

-- -----------------------------------------------------
-- Table `yeticave`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `yeticave`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `password` VARCHAR(61) NULL,
  `registr_date` TIMESTAMP NULL,
  `avatar` VARCHAR(45) NULL,
  `favorites` TINYINT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `yeticave`.`categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `yeticave`.`categories` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `code_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yeticave`.`lots`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `yeticave`.`lots` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `img` VARCHAR(100) NULL,
  `category_id` INT NOT NULL,
  `creation_date` TIMESTAMP NOT NULL,
  `starting_rate` INT NOT NULL,
  `bet_rate` INT NOT NULL,
  `description` TEXT NULL,
  `bid_end_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `owner_id` INT NOT NULL,
  `winner_id` INT NULL DEFAULT NULL,
  `is_closed` TINYINT(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `cat_id_idx` (`category_id` ASC),
  INDEX `owner_id_idx` (`owner_id` ASC),
  INDEX `winner_id_idx` (`winner_id` ASC),
  CONSTRAINT `cat`
    FOREIGN KEY (`category_id`)
    REFERENCES `yeticave`.`categories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `owner`
    FOREIGN KEY (`owner_id`)
    REFERENCES `yeticave`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `winner`
    FOREIGN KEY (`winner_id`)
    REFERENCES `yeticave`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yeticave`.`bets`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `yeticave`.`bets` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `lot_id` INT NOT NULL,
  `bet_date` TIMESTAMP NOT NULL,
  `rate` INT NOT NULL,
  `is_winner` TINYINT(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `user_idx` (`user_id` ASC),
  INDEX `betbylot_idx` (`lot_id` ASC),
  CONSTRAINT `betbyuser`
    FOREIGN KEY (`user_id`)
    REFERENCES `yeticave`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `betbylot`
    FOREIGN KEY (`lot_id`)
    REFERENCES `yeticave`.`lots` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yeticave`.`lots_fav`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `yeticave`.`lots_fav` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NULL,
  `lot_id` INT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `user_idx` (`user_id` ASC),
  INDEX `lot_idx` (`lot_id` ASC),
  CONSTRAINT `user_fav`
    FOREIGN KEY (`user_id`)
    REFERENCES `yeticave`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `lot_fav`
    FOREIGN KEY (`lot_id`)
    REFERENCES `yeticave`.`lots` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

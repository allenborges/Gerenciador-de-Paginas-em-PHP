

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';


CREATE SCHEMA IF NOT EXISTS `pp_criando_um_site_com_php` DEFAULT CHARACTER SET utf8 ;
USE `pp_criando_um_site_com_php` ;


CREATE TABLE IF NOT EXISTS `pp_criando_um_site_com_php`.`pages` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(250) NOT NULL,
  `url` VARCHAR(250) NOT NULL,
  `body` TEXT NULL,
  `created` DATETIME NULL,
  `updated` DATETIME NULL,
  `pagescol` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `created_UNIQUE` (`created` ASC) VISIBLE,
  UNIQUE INDEX `updated_UNIQUE` (`updated` ASC) VISIBLE,
  UNIQUE INDEX `pagescol_UNIQUE` (`pagescol` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pp_criando_um_site_com_php`.`users` (
  `id` INT NOT NULL,
  `email` VARCHAR(250) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `created` DATETIME NULL,
  `updaded` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

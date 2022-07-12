DROP SCHEMA IF EXISTS `retail_store` ;
CREATE SCHEMA IF NOT EXISTS `retail_store` DEFAULT CHARACTER SET utf8 ;
USE `retail_store` ;
CREATE TABLE IF NOT EXISTS `retail_store`.`Address` (
  `address_code` SMALLINT NOT NULL AUTO_INCREMENT,
  `public_place` VARCHAR(50) NOT NULL,
  `number_of_street` SMALLINT NOT NULL,
  `complement` VARCHAR(10) NULL,
  `neighborhood` VARCHAR(50) NOT NULL,
  `city` VARCHAR(30) NOT NULL,
  `zipcode` CHAR(8) NOT NULL,
  PRIMARY KEY (`address_code`))
ENGINE = InnoDB;
CREATE TABLE IF NOT EXISTS `retail_store`.`Provider` (
  `provider_code` SMALLINT NOT NULL AUTO_INCREMENT,
  `cnpj` CHAR(18) NOT NULL UNIQUE KEY,
  `provider_name` VARCHAR(50) NOT NULL,
  `provider_phone` CHAR(14) NOT NULL,
  `address_code` SMALLINT NOT NULL,
  PRIMARY KEY (`provider_code`),
  INDEX `fk_Provider_Address` (`address_code` ASC) VISIBLE,
  CONSTRAINT `fk_Provider_Address`
    FOREIGN KEY (`address_code`)
    REFERENCES `retail_store`.`Address` (`address_code`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
CREATE TABLE IF NOT EXISTS `retail_store`.`Product` (
  `product_code` SMALLINT NOT NULL AUTO_INCREMENT,
  `product_name` VARCHAR(45) NOT NULL,
  `product_price` DECIMAL(10,2) NOT NULL,
  `product_quantity` SMALLINT NOT NULL,
  PRIMARY KEY (`product_code`))
ENGINE = InnoDB;
CREATE TABLE IF NOT EXISTS `retail_store`.`Provider_Product` (
  `provider_code` SMALLINT NOT NULL,
  `product_code` SMALLINT NOT NULL,
  PRIMARY KEY (`provider_code`, `product_code`),
  INDEX `fk_Provider_Product_Product` (`product_code` ASC) VISIBLE,
  INDEX `fk_Provider_Product_Provider` (`provider_code` ASC) VISIBLE,
  CONSTRAINT `fk_Provider_has_Product_Provider1`
    FOREIGN KEY (`provider_code`)
    REFERENCES `retail_store`.`Provider` (`provider_code`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Provider_has_Product_Product1`
    FOREIGN KEY (`product_code`)
    REFERENCES `retail_store`.`Product` (`product_code`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

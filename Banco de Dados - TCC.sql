-- MySQL Script generated by MySQL Workbench
-- Mon Jun 26 15:02:18 2023
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema barbearia
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema barbearia
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `barbearia` DEFAULT CHARACTER SET utf8 ;
USE `barbearia` ;

-- -----------------------------------------------------
-- Table `barbearia`.`pessoa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `barbearia`.`pessoa` (
  `idpessoa` INT NOT NULL AUTO_INCREMENT,
  `nome_pessoa` VARCHAR(255) NULL,
  `senha` VARCHAR(255) NULL,
  `tipo` VARCHAR(255) NULL,
  PRIMARY KEY (`idpessoa`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `barbearia`.`servico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `barbearia`.`servico` (
  `idservico` INT NOT NULL AUTO_INCREMENT,
  `nome_servico` VARCHAR(255) NULL,
  `preco` FLOAT NULL,
  PRIMARY KEY (`idservico`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `barbearia`.`agendamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `barbearia`.`agendamento` (
  `idagendamento` INT NOT NULL AUTO_INCREMENT,
  `data_agendamento` DATE NULL,
  `hora_agendamento` TIME NULL,
  `pessoa_idpessoa` INT NOT NULL,
  `servico_idservico` INT NOT NULL,
  PRIMARY KEY (`idagendamento`),
  INDEX `fk_agendamento_pessoa_idx` (`pessoa_idpessoa` ASC) VISIBLE,
  INDEX `fk_agendamento_servico1_idx` (`servico_idservico` ASC) VISIBLE,
  CONSTRAINT `fk_agendamento_pessoa`
    FOREIGN KEY (`pessoa_idpessoa`)
    REFERENCES `barbearia`.`pessoa` (`idpessoa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_agendamento_servico1`
    FOREIGN KEY (`servico_idservico`)
    REFERENCES `barbearia`.`servico` (`idservico`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `barbearia`.`servico_realizado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `barbearia`.`servico_realizado` (
  `idservico_realizado` INT NOT NULL AUTO_INCREMENT,
  `agendamento_idagendamento` INT NOT NULL,
  PRIMARY KEY (`idservico_realizado`),
  INDEX `fk_servico_realizado_agendamento1_idx` (`agendamento_idagendamento` ASC) VISIBLE,
  CONSTRAINT `fk_servico_realizado_agendamento1`
    FOREIGN KEY (`agendamento_idagendamento`)
    REFERENCES `barbearia`.`agendamento` (`idagendamento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

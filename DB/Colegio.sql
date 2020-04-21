SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `Colegio` ;
CREATE SCHEMA IF NOT EXISTS `Colegio` DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci ;
USE `Colegio` ;

-- -----------------------------------------------------
-- Table `Colegio`.`Estudiante`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Colegio`.`Estudiante` (
  `EID` INT NOT NULL,
  `Nombre` CHAR(30) NOT NULL,
  `Especialidad` CHAR(15) NOT NULL,
  `Grado` CHAR(2) NOT NULL,
  PRIMARY KEY (`EID`))
ENGINE = InnoDB;

CREATE UNIQUE INDEX `idEstudiante_UNIQUE` ON `Colegio`.`Estudiante` (`EID` ASC);


-- -----------------------------------------------------
-- Table `Colegio`.`Clase`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Colegio`.`Clase` (
  `id_Clase` VARCHAR(6) NOT NULL,
  `Nombre` CHAR(25) NOT NULL,
  `Horario` VARCHAR(7) NOT NULL,
  `Aula` VARCHAR(6) NOT NULL,
  PRIMARY KEY (`id_Clase`))
ENGINE = InnoDB;

CREATE UNIQUE INDEX `id_Clase_UNIQUE` ON `Colegio`.`Clase` (`id_Clase` ASC);


-- -----------------------------------------------------
-- Table `Colegio`.`Inscripcion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Colegio`.`Inscripcion` (
  `idInscripcion` INT NOT NULL AUTO_INCREMENT,
  `nombre_clase` VARCHAR(6) NOT NULL,
  `nombre_estudiante` INT NOT NULL,
  `numero_pocicion` INT NOT NULL,
  PRIMARY KEY (`idInscripcion`),
  CONSTRAINT `nombre_clase`
    FOREIGN KEY (`nombre_clase`)
    REFERENCES `Colegio`.`Clase` (`id_Clase`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `nombre_estudiante`
    FOREIGN KEY (`nombre_estudiante`)
    REFERENCES `Colegio`.`Estudiante` (`EID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE UNIQUE INDEX `idInscripcion_UNIQUE` ON `Colegio`.`Inscripcion` (`idInscripcion` ASC);

CREATE INDEX `nombre_clase_idx` ON `Colegio`.`Inscripcion` (`nombre_clase` ASC);

CREATE INDEX `nombre_estudiante_idx` ON `Colegio`.`Inscripcion` (`nombre_estudiante` ASC);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

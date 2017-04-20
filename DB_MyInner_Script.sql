-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
SHOW WARNINGS;
-- -----------------------------------------------------
-- Schema db_myinner
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `db_myinner` ;

-- -----------------------------------------------------
-- Schema db_myinner
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_myinner` DEFAULT CHARACTER SET utf8 ;
SHOW WARNINGS;
USE `db_myinner` ;

-- -----------------------------------------------------
-- Table `db_myinner`.`tbl_login`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_myinner`.`tbl_login` (
  `ID_USER` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `USER_NAME` VARCHAR(255) NOT NULL,
  `PASSWORD_USER` VARCHAR(50) NOT NULL,
  `EMAIL_USER` VARCHAR(255) NOT NULL,
  `USER_ACTIVE` TINYINT(1) NULL DEFAULT '0',
  PRIMARY KEY (`ID_USER`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

SHOW WARNINGS;
CREATE UNIQUE INDEX `USER_NAME` ON `db_myinner`.`tbl_login` (`USER_NAME` ASC);

SHOW WARNINGS;
CREATE UNIQUE INDEX `EMAIL_USER` ON `db_myinner`.`tbl_login` (`EMAIL_USER` ASC);

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `db_myinner`.`tbl_user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_myinner`.`tbl_user` (
  `ID_USER` BIGINT(20) NOT NULL,
  `NOME_USER` VARCHAR(15) NOT NULL,
  `SOBRENOME_USER` VARCHAR(15) NOT NULL,
  `ENDERECO_USER` VARCHAR(255) NOT NULL,
  `EMAIL_USER` VARCHAR(255) NOT NULL,
  `SEXO_USER` CHAR(1) NOT NULL,
  `CIDADE_USER` VARCHAR(100) NOT NULL,
  `ESTADO_USER` VARCHAR(100) NOT NULL,
  `PAIS_USER` VARCHAR(100) NOT NULL,
  `DATANASC_USER` DATE NOT NULL,
  `ROLE_USER` CHAR(1) NULL DEFAULT 'U',
  `USER_NAME` VARCHAR(255) NOT NULL,
  `CHECKBOXCONTRATO` TINYINT(1) NULL DEFAULT '1',
  CONSTRAINT `tbl_user_ibfk_1`
    FOREIGN KEY (`ID_USER`)
    REFERENCES `db_myinner`.`tbl_login` (`ID_USER`),
  CONSTRAINT `tbl_user_ibfk_2`
    FOREIGN KEY (`EMAIL_USER`)
    REFERENCES `db_myinner`.`tbl_login` (`EMAIL_USER`),
  CONSTRAINT `tbl_user_ibfk_3`
    FOREIGN KEY (`USER_NAME`)
    REFERENCES `db_myinner`.`tbl_login` (`USER_NAME`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

SHOW WARNINGS;
CREATE INDEX `ID_USER` ON `db_myinner`.`tbl_user` (`ID_USER` ASC);

SHOW WARNINGS;
CREATE INDEX `EMAIL_USER` ON `db_myinner`.`tbl_user` (`EMAIL_USER` ASC);

SHOW WARNINGS;
CREATE INDEX `USER_NAME` ON `db_myinner`.`tbl_user` (`USER_NAME` ASC);

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `db_myinner`.`tbl_assessments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_myinner`.`tbl_assessments` (
  `ID_EVALUATION` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `ID_USER_EVALUATOR` BIGINT(20) NOT NULL,
  `ID_USER_EVALUATED` BIGINT(20) NOT NULL,
  `ETICA_VALUE` TINYINT(4) NOT NULL,
  `MORAL_VALUE` TINYINT(4) NOT NULL,
  `HONESTIDADE_VALUE` TINYINT(4) NOT NULL,
  `INTELIGENCIA_VALUE` TINYINT(4) NOT NULL,
  `RESPONSABILIDADE_VALUE` TINYINT(4) NOT NULL,
  `TEXT_INFORMATION` TEXT NULL DEFAULT NULL,
  `MEDIA_ASSESSMENTS` TINYINT(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID_EVALUATION`),
  CONSTRAINT `tbl_assessments_ibfk_1`
    FOREIGN KEY (`ID_USER_EVALUATOR`)
    REFERENCES `db_myinner`.`tbl_user` (`ID_USER`),
  CONSTRAINT `tbl_assessments_ibfk_2`
    FOREIGN KEY (`ID_USER_EVALUATED`)
    REFERENCES `db_myinner`.`tbl_user` (`ID_USER`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

SHOW WARNINGS;
CREATE INDEX `ID_USER_EVALUATOR` ON `db_myinner`.`tbl_assessments` (`ID_USER_EVALUATOR` ASC);

SHOW WARNINGS;
CREATE INDEX `ID_USER_EVALUATED` ON `db_myinner`.`tbl_assessments` (`ID_USER_EVALUATED` ASC);

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `db_myinner`.`tbl_ticket`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_myinner`.`tbl_ticket` (
  `ID_TICKET` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `ID_USER` BIGINT(20) NOT NULL,
  `TEXT_TICKET` TEXT NOT NULL,
  `ANSWER_TICKET` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`ID_TICKET`),
  CONSTRAINT `tbl_ticket_ibfk_1`
    FOREIGN KEY (`ID_USER`)
    REFERENCES `db_myinner`.`tbl_user` (`ID_USER`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

SHOW WARNINGS;
CREATE INDEX `ID_USER` ON `db_myinner`.`tbl_ticket` (`ID_USER` ASC);

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `db_myinner`.`tbl_ejected_users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_myinner`.`tbl_ejected_users` (
  `ID_USER_ADM` BIGINT(20) NOT NULL,
  `ROLE_USER` CHAR(1) NOT NULL,
  `ID_USER` BIGINT(20) NOT NULL,
  `REASON_EJECT` TEXT NOT NULL,
  `ID_TICKET` BIGINT(20) NULL DEFAULT NULL,
  CONSTRAINT `tbl_ejected_users_ibfk_1`
    FOREIGN KEY (`ID_USER_ADM`)
    REFERENCES `db_myinner`.`tbl_user` (`ID_USER`),
  CONSTRAINT `tbl_ejected_users_ibfk_2`
    FOREIGN KEY (`ID_USER`)
    REFERENCES `db_myinner`.`tbl_user` (`ID_USER`),
  CONSTRAINT `tbl_ejected_users_ibfk_3`
    FOREIGN KEY (`ID_TICKET`)
    REFERENCES `db_myinner`.`tbl_ticket` (`ID_TICKET`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

SHOW WARNINGS;
CREATE INDEX `ID_USER_ADM` ON `db_myinner`.`tbl_ejected_users` (`ID_USER_ADM` ASC);

SHOW WARNINGS;
CREATE INDEX `ID_USER` ON `db_myinner`.`tbl_ejected_users` (`ID_USER` ASC);

SHOW WARNINGS;
CREATE INDEX `ID_TICKET` ON `db_myinner`.`tbl_ejected_users` (`ID_TICKET` ASC);

SHOW WARNINGS;
USE `db_myinner` ;

-- -----------------------------------------------------
-- procedure SP_VALIDATE_LOGIN
-- -----------------------------------------------------

DELIMITER $$
USE `db_myinner`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_VALIDATE_LOGIN`(_USER_NAME VARCHAR (255),_EMAIL_USER VARCHAR(255),_PASSWORD_USER VARCHAR (50)) 
BEGIN 
SELECT tbl_login.USER_NAME,tbl_login.EMAIL_USER,tbl_login.PASSWORD_USER FROM tbl_login
WHERE USER_NAME = _USER_NAME OR EMAIL_USER = _EMAIL_USER AND _PASSWORD_USER = PASSWORD_USER;
END$$

DELIMITER ;
SHOW WARNINGS;

-- -----------------------------------------------------
-- function RETURN_ID_USER
-- -----------------------------------------------------

DELIMITER $$
USE `db_myinner`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `RETURN_ID_USER`() RETURNS int(11)
BEGIN
DECLARE ID_USER INT;
SET ID_USER = LAST_INSERT_ID();
RETURN ID_USER;
END$$

DELIMITER ;
SHOW WARNINGS;

-- -----------------------------------------------------
-- procedure SP_DELETE_LOGIN_USER
-- -----------------------------------------------------

DELIMITER $$
USE `db_myinner`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_DELETE_LOGIN_USER`(_USER_NAME VARCHAR (255),_EMAIL_USER VARCHAR(255))
BEGIN 
DELETE FROM TBL_LOGIN WHERE USER_NAME = _USER_NAME AND EMAIL_USER = _EMAIL_USER;
END$$

DELIMITER ;
SHOW WARNINGS;

-- -----------------------------------------------------
-- procedure SP_DELETE_USER
-- -----------------------------------------------------

DELIMITER $$
USE `db_myinner`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_DELETE_USER`(_USER_NAME VARCHAR(255),_EMAIL_USER VARCHAR (255))
BEGIN
DELETE FROM TBL_USER WHERE USER_NAME = _USER_NAME AND EMAIL_USER = _EMAIL_USER;
CALL SP_DELETE_LOGIN_USER (_USER_NAME ,_EMAIL_USER );
END$$

DELIMITER ;
SHOW WARNINGS;

-- -----------------------------------------------------
-- procedure SP_INSERT_LOGIN
-- -----------------------------------------------------

DELIMITER $$
USE `db_myinner`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_INSERT_LOGIN`(_EMAIL_USER VARCHAR(255),_USER_NAME VARCHAR(255),_PASSWORD_USER VARCHAR(50))
BEGIN
INSERT INTO TBL_LOGIN (EMAIL_USER,USER_NAME,PASSWORD_USER) 
VALUES (_EMAIL_USER,_USER_NAME,_PASSWORD_USER);
END$$

DELIMITER ;
SHOW WARNINGS;

-- -----------------------------------------------------
-- procedure SP_INSERT_USER
-- -----------------------------------------------------

DELIMITER $$
USE `db_myinner`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_INSERT_USER`(_NOME_USER VARCHAR(15),_SOBRENOME_USER VARCHAR(15),_ENDERECO_USER VARCHAR(255),
_EMAIL_USER VARCHAR(255),_SEXO_USER CHAR ,_CIDADE_USER VARCHAR(100),_ESTADO_USER VARCHAR(100),_PAIS_USER VARCHAR(100),
_DATANASC_USER DATE,_ROLE_USER CHAR(1), _USER_NAME VARCHAR(255),_CHECKBOXCONTRATO TINYINT(1))
BEGIN
DECLARE _ID_USER INT;
SET _ID_USER = RETURN_ID_USER();
INSERT INTO TBL_USER (ID_USER,NOME_USER,SOBRENOME_USER,ENDERECO_USER,EMAIL_USER,SEXO_USER,CIDADE_USER,ESTADO_USER,PAIS_USER,DATANASC_USER,ROLE_USER,USER_NAME,CHECKBOXCONTRATO) 
VALUES (_ID_USER,_NOME_USER,_SOBRENOME_USER,_ENDERECO_USER,_EMAIL_USER,_SEXO_USER,_CIDADE_USER,_ESTADO_USER,_PAIS_USER,_DATANASC_USER,_ROLE_USER,_USER_NAME,_CHECKBOXCONTRATO);
END$$

DELIMITER ;
SHOW WARNINGS;

-- -----------------------------------------------------
-- procedure SP_SELECT_USER
-- -----------------------------------------------------

DELIMITER $$
USE `db_myinner`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_SELECT_USER`(_USER_NAME VARCHAR (255),_EMAIL_USER VARCHAR(255))
BEGIN
SELECT US.ID_USER,US.NOME_USER,US.SOBRENOME_USER,US.ENDERECO_USER,US.EMAIL_USER,US.SEXO_USER,US.CIDADE_USER,US.ESTADO_USER,
US.PAIS_USER,US.DATANASC_USER,US.USER_NAME, US.EMAIL_USER
FROM TBL_USER AS US
INNER JOIN TBL_LOGIN AS LO 
ON US.USER_NAME = LO.USER_NAME && US.EMAIL_USER = LO.EMAIL_USER
WHERE US.USER_NAME = _USER_NAME AND US.EMAIL_USER = _EMAIL_USER;
END$$

DELIMITER ;
SHOW WARNINGS;

-- -----------------------------------------------------
-- procedure SP_UPDATE_LOGIN
-- -----------------------------------------------------

DELIMITER $$
USE `db_myinner`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_UPDATE_LOGIN`(_USER_NAME VARCHAR(255), _EMAIL_USER VARCHAR(255),_NEW_PASSWORD VARCHAR (50))
BEGIN
UPDATE TBL_LOGIN SET PASSWORD_USER = _NEW_PASSWOR WHERE USER_NAME = _USER_NAME AND EMAIL_USER = _EMAIL_USER;
END$$

DELIMITER ;
SHOW WARNINGS;

-- -----------------------------------------------------
-- procedure SP_UPDATE_USER
-- -----------------------------------------------------

DELIMITER $$
USE `db_myinner`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_UPDATE_USER`(_ID_USER BIGINT,_NOME_USER VARCHAR(15),_SOBRENOME_USER VARCHAR(15),_ENDERECO_USER VARCHAR(255),
_SEXO_USER CHAR ,_CIDADE_USER VARCHAR(100),_ESTADO_USER VARCHAR(100),_PAIS_USER VARCHAR(100),
_DATANASC_USER DATE)
BEGIN
UPDATE TBL_USER SET NOME_USER = _NOME_USER,SOBRENOME_USER = _SOBRENOME_USER,ENDERECO_USER = _ENDERECO_USER,SEXO_USER = _SEXO_USER,CIDADE_USER = _CIDADE_USER,ESTADO_USER = _ESTADO_USER,
PAIS_USER = _PAIS_USER,DATANASC_USER = _DATANASC_USER WHERE ID_USER = _ID_USER;
END$$

DELIMITER ;
SHOW WARNINGS;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

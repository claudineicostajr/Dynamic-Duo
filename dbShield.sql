CREATE DATABASE dbShield;
-- -----------------------------------------------------
-- Table `dbShield`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbShield`.`usuarios` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `nomeUsuario` VARCHAR(45) NOT NULL,
  `senha` CHAR(32) NOT NULL,
  `nivel` TINYINT NOT NULL COMMENT '1- Executor / 2- Herói ou vilão',
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbShield`.`individuos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbShield`.`individuos` (
  `idIndividuos` INT NOT NULL AUTO_INCREMENT,
  `alterego` VARCHAR(255) NOT NULL,
  `nome` VARCHAR(255) NOT NULL,
  `afiliacao` VARCHAR(255) NOT NULL,
  `habilidades` VARCHAR(255) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `moralidade` TINYINT NOT NULL COMMENT '1- Herói / 2- Vilão',
  `imagemCorpo` VARCHAR(255) NOT NULL,
  `imagemPerfil` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idIndividuos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbShield`.`recursos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbShield`.`recursos` (
  `idRecurso` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(100) NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idRecurso`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbShield`.`missoes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbShield`.`missoes` (
  `idMissao` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NOT NULL,
  `descricao` VARCHAR(255) NOT NULL,
  `data` DATE NOT NULL,
  `local` VARCHAR(255) NOT NULL,
  `heroi` INT NOT NULL,
  `vilao` INT NOT NULL,
  `status` TINYINT NOT NULL COMMENT '1- Pendente / 2- Concluída',
  PRIMARY KEY (`idMissao`),
  INDEX `fk_missoes_agentes_idx` (`heroi` ASC) ,
  INDEX `fk_missoes_agentes1_idx` (`vilao` ASC) ,
  CONSTRAINT `fk_missoes_agentes`
    FOREIGN KEY (`heroi`)
    REFERENCES `dbShield`.`individuos` (`idIndividuos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_missoes_agentes1`
    FOREIGN KEY (`vilao`)
    REFERENCES `dbShield`.`individuos` (`idIndividuos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbShield`.`missoes_has_recursos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbShield`.`missoes_has_recursos` (
  `missoes_idMissao` INT NOT NULL,
  `recursos_idRecurso` INT NOT NULL,
  PRIMARY KEY (`missoes_idMissao`, `recursos_idRecurso`),
  INDEX `fk_missoes_has_recursos_recursos1_idx` (`recursos_idRecurso` ASC) ,
  INDEX `fk_missoes_has_recursos_missoes1_idx` (`missoes_idMissao` ASC) ,
  CONSTRAINT `fk_missoes_has_recursos_missoes1`
    FOREIGN KEY (`missoes_idMissao`)
    REFERENCES `dbShield`.`missoes` (`idMissao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_missoes_has_recursos_recursos1`
    FOREIGN KEY (`recursos_idRecurso`)
    REFERENCES `dbShield`.`recursos` (`idRecurso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

ALTER TABLE `individuos` DROP `email`;

-- Usuário

INSERT INTO `usuarios` (`idUsuario`, `nomeUsuario`, `senha`, `nivel`) VALUES (NULL, 'nicky_fury', '01cfcd4f6b8770febfb40cb906715822', '1');

INSERT INTO `usuarios` (`idUsuario`, `nomeUsuario`, `senha`, `nivel`) VALUES (NULL, 'agentes-shield', '01cfcd4f6b8770febfb40cb906715822', '2');

-- recursos

INSERT INTO recursos (nome, descricao) VALUES ('Helicóptero','Aeronave')

INSERT INTO recursos (nome, descricao) VALUES ('Camuflagem','Equipamento de Camuflagem')


-- individuos

INSERT INTO individuos (alterego, nome, afiliacao, habilidades, moralidade, imagemCorpo, imagemPerfil ) VALUES('Ultron', 'Ultron', 'solo', 'Terrorismo', '2', 'corpo2022.07.12-02.27.07.png', 'perfil2022.07.12-02.27.07.jpg')

INSERT INTO individuos (alterego, nome, afiliacao, habilidades, moralidade, imagemCorpo, imagemPerfil ) VALUES('Homem de Ferro', 'Tony Stark', 'Vingadores', 'Engenharia', '1', 'corpo2022.07.12-02.30.12.png', 'perfil2022.07.12-02.30.12.jpg')


-- missoes

INSERT INTO missoes (nome, descricao, data, local, heroi, vilao, status) VALUES ('Resgate', 'Resgatar os reféns', '2022-07-16', '89237263', '1', '2', 1)

INSERT INTO missoes (nome, descricao, data, local, heroi, vilao, status) VALUES ('Atacar', 'Atacar a base dos inimigos', '2022-07-14', '89237564', '1', '2', 1)



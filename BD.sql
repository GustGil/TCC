CREATE TABLE `contabilidade_gil`.`documentos` (
  `idDocumentos` INT NOT NULL AUTO_INCREMENT,
  `Doc` BLOB NOT NULL,
  `docTipo` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`idDocumentos`),
  UNIQUE INDEX `idDocumentos_UNIQUE` (`idDocumentos`));
  
  use contabilidade_gil;
  CREATE TABLE `contabilidade_gil`.`funcionarios` (
  `idfuncionarios` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `senha` VARCHAR(45) NULL,
  PRIMARY KEY (`idfuncionarios`),
  UNIQUE INDEX `nome_UNIQUE` (`nome`));
  
  INSERT INTO funcionarios (nome,senha) VALUES('Gil','123');
  select*from funcionarios;
select*from usuario;
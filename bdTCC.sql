CREATE DATABASE TCC;

use  TCC;

CREATE TABLE usuario (
  pkuser INT NOT NULL,
  nomeuser VARCHAR(45) NOT NULL,
  nome_emp VARCHAR(45) NOT NULL,
  email VARCHAR(45) NOT NULL,
  senha VARCHAR(35) NOT NULL,
  DDD SMALLINT(2) NOT NULL,
  telefone SMALLINT(14) NOT NULL,
  `desc` VARCHAR(50),
  cpf_cnpj SMALLINT(14) NOT NULL,
  PRIMARY KEY (pkuser));
 

CREATE TABLE documentos (
  pkdocs INT NOT NULL,
  extrato VARCHAR(60) NULL,
  notafisc LONGBLOB NULL,
  pagamento DECIMAL NULL,
  PRIMARY KEY (pkdocs));
  
  
CREATE TABLE possuir (
  documentos_pkdocs INT NOT NULL,
  usuario_pkuser INT NOT NULL,
  PRIMARY KEY (documentos_pkdocs, usuario_pkuser),
  INDEX fk_documentos_has_usuario_usuario1_idx (usuario_pkuser ASC) VISIBLE,
  INDEX fk_documentos_has_usuario_documentos1_idx (documentos_pkdocs ASC) VISIBLE,
  CONSTRAINT fk_documentos_has_usuario_documentos1
    FOREIGN KEY (documentos_pkdocs)
    REFERENCES documentos (pkdocs)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_documentos_has_usuario_usuario1
    FOREIGN KEY (usuario_pkuser)
    REFERENCES usuario (pkuser)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
    
CREATE TABLE servico (
  pkserv INT NOT NULL,
  custo DECIMAL NULL,
  datamin DATE NULL,
  datamax DATE NULL,
  PRIMARY KEY (pkserv));
  
  
  CREATE TABLE contratar (
  servico_pkserv INT NOT NULL,
  usuario_pkuser INT NOT NULL,
  PRIMARY KEY (servico_pkserv, usuario_pkuser),
  INDEX fk_servico_has_usuario_usuario1_idx (usuario_pkuser ASC) VISIBLE,
  INDEX fk_servico_has_usuario_servico1_idx (servico_pkserv ASC) VISIBLE,
  CONSTRAINT fk_servico_has_usuario_servico1
    FOREIGN KEY (servico_pkserv)
    REFERENCES servico (pkserv)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_servico_has_usuario_usuario1
    FOREIGN KEY (usuario_pkuser)
    REFERENCES usuario (pkuser)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
    
CREATE TABLE funcionario (
  pkfunc INT NOT NULL,
  nomefunc VARCHAR(50) NULL,
  emailfunc VARCHAR(45) NULL,
  senhafunc VARCHAR(35) NULL,
  funcionariocol VARCHAR(45) NULL,
  PRIMARY KEY (pkfunc));
  
  CREATE TABLE prestar (
  funcionario_pkfunc INT NOT NULL,
  servico_pkserv INT NOT NULL,
  PRIMARY KEY (funcionario_pkfunc , servico_pkserv),
  INDEX fk_funcionario_has_servico_servico1_idx (servico_pkserv ASC) VISIBLE,
  INDEX fk_funcionario_has_servico_funcionario_idx (funcionario_pkfunc ASC) VISIBLE,
  CONSTRAINT fk_funcionario_has_servico_funcionario
    FOREIGN KEY (funcionario_pkfunc)
    REFERENCES funcionario (pkfunc)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_funcionario_has_servico_servico1
    FOREIGN KEY (servico_pkserv)
    REFERENCES servico (pkserv)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);



    
    


CREATE DATABASE if NOT exists `Formulario` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;

CREATE TABLE `Users`(
    `id_user` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR (100) NOT NULL,
    `genero` VARCHAR (100) NOT NULL,
    `user` VARCHAR (100) NOT NULL,
    `email` VARCHAR (100) NOT NULL,
    `senha` VARCHAR (100) NOT NULL,
    `data` INT (8) NOT NULL,
    `cpf` INT (11) NOT NULL,
    `telefone` INT (11) NOT NULL,
    `cep` INT (8) NOT NULL,
    `uf` VARCHAR (100) NOT NULL,
    `cidade` VARCHAR (100) NOT NULL,
    `logradouro` VARCHAR (100) NOT NULL,
    `numero` INT (10) NOT NULL,
    `complemento` VARCHAR (100),
    PRIMARY KEY (id_user),
    UNIQUE KEY (email),
    UNIQUE KEY (cpf)
    
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE Users CHANGE `logradouro` `endereco` VARCHAR (100) NOT NULL;  
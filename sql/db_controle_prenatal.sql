CREATE Database `db_controle_prenatal`;/*nome do seu banco ex:db_sistema1.0*/
USE `db_controle_prenatal`;

------------------

CREATE TABLE IF NOT EXISTS `perfil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perfil` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

INSERT INTO `perfil` (`id`, `perfil`) VALUES
(1, 'Administrador'),
(2, 'Usuário');

---------------------

CREATE TABLE IF NOT EXISTS `profissional` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `crm` varchar(45),
  `coren` varchar(45),
  `idperfil` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY(idperfil) REFERENCES perfil(id)

) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

INSERT INTO `profissional` (`id`, `nome`, `email`, `senha`, `crm`, `coren`, `idperfil`) VALUES
(1, 'Elias', 'elias@controle.com','202cb962ac59075b964b07152d234b70', '', '8700-DF', 2),
(2, 'Wanderson', 'reis@controle.com','202cb962ac59075b964b07152d234b70', '', '8700-DF', 1);

-------------------------

CREATE TABLE IF NOT EXISTS `paciente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `endereco` varchar(200),
  `telefone` varchar(45),
  `data_nascimento` date,
  `dum` date NOT NULL,
  `idprofissional` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY(idprofissional) REFERENCES profissional(id)

) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;



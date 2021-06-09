CREATE DATABASE `marketsoap` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

-- marketsoap.cliente definition

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `sexo` char(1) NOT NULL,
  `dataNascimento` date NOT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `telefone` varchar(11) NOT NULL,
  `endereco` varchar(30) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` char(2) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- marketsoap.funcionario definition

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sexo` char(1) NOT NULL,
  `dataNascimento` date NOT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `telefone` varchar(11) NOT NULL,
  `endereco` varchar(30) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` char(2) NOT NULL,
  `funcao` varchar(30) NOT NULL,
  `cep` varchar(8) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=utf8mb4;


-- marketsoap.produto definition

CREATE TABLE `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) NOT NULL,
  `quantidade` int(11) DEFAULT 10,
  `valor` decimal(9,2) NOT NULL,
  `nome` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- marketsoap.venda definition

CREATE TABLE `venda` (
  `id_cliente` int(11) NOT NULL,
  `id_funcionario` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `id_venda` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





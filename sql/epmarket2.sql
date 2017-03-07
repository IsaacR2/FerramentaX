-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08-Dez-2016 às 01:32
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epmarket2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_Categoria` varchar(255) DEFAULT NULL,
  `idSecao` int(11) DEFAULT NULL,
  PRIMARY KEY (`idCategoria`),
  KEY `FK5D54E13397186BD9` (`idSecao`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=279 ;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `tipo_Categoria`, `idSecao`) VALUES
(59, 'Arroz', 1),
(60, 'Arroz Integral', 1),
(61, 'Atomatados', 1),
(62, 'Atum em Lata', 1),
(63, 'Azeite', 1),
(64, 'Azeitona em Conserva', 1),
(65, 'Café Torrado e Moído', 1),
(66, 'Cafés', 1),
(67, 'Caldo em Pó', 1),
(68, 'Caldo em Tablete', 1),
(69, 'Caldos', 1),
(70, 'Catchup', 1),
(71, 'Farinha de Trigo', 1),
(72, 'Farofa Pronta Temperada', 1),
(73, 'Feijão', 1),
(74, 'Macarrão', 1),
(75, 'Macarrão Instantâneo', 1),
(76, 'Maionese', 1),
(77, 'Massa sem Glúten', 1),
(78, 'Milho de Pipoca para Microondas', 1),
(79, 'Milho Verde em Conserva', 1),
(80, 'Molho de Pimenta', 1),
(81, 'Molho de Soja', 1),
(82, 'Molho de Tomate', 1),
(83, 'Molho Pronto para Saladas', 1),
(84, 'Mostarda', 1),
(85, 'Óleo de Soja', 1),
(86, 'Óleos', 1),
(87, 'Óleos Especiais', 1),
(88, 'Palmito em Conserva', 1),
(89, 'Sardinha em Lata', 1),
(90, 'Sopa em Envelope', 1),
(91, 'Sopa Instantânea', 1),
(92, 'Sopas', 1),
(93, 'Tempero Pronto em Pasta', 1),
(94, 'Tempero Pronto em Pó', 1),
(95, 'Temperos', 1),
(96, 'Vinagre', 1),
(97, 'Açúcar Refinado', 1),
(98, 'Bala, Caramelo, Confeito, Drops e PastilhBalas, Caramelos, Dropes e Gomas de Mascar', 2),
(99, 'Biscoito', 2),
(100, 'Biscoito Água e Sal/Cream Craker', 2),
(101, 'Biscoito Integral', 2),
(102, 'Biscoito Maria/Maizena', 2),
(103, 'Biscoito Recheado', 2),
(104, 'Biscoito Waffer', 2),
(105, 'Bombom em Caixa', 2),
(106, 'Cereal em Barra', 2),
(107, 'Cereja em Calda', 2),
(108, 'Chá em Saquinho', 2),
(109, 'Chocolate', 2),
(110, 'Chocolate em Tablete', 2),
(111, 'Cookies Integrais', 2),
(112, 'Gelatina em Pó', 2),
(113, 'Goma de Mascar', 2),
(114, 'Leite Condensado', 2),
(115, 'Mistura para Bolo', 2),
(116, 'Mistura para doces e salgados', 2),
(117, 'Ovo de Páscoa', 2),
(118, 'Panetone', 2),
(119, 'Produtos sem glúten', 2),
(120, 'Salgadinho', 2),
(121, 'Achocolatado em Pó', 3),
(122, 'Achocolatado Líquido', 3),
(123, 'Adoçante', 3),
(124, 'Bolo Industrializado', 3),
(125, 'Café Capuccino', 3),
(126, 'Café em cápsulas', 3),
(127, 'Café Solúvel', 3),
(128, 'Cereais, grãos e farinhas integrais', 3),
(129, 'Cereais, grãos e farinhas orgânicos', 3),
(130, 'Cereal Matinal', 3),
(131, 'Leite em Pó', 3),
(132, 'Leite em Pó Infantil Fórmula Especial', 3),
(133, 'Pão de Forma Industrializado', 3),
(134, 'Cream Cheese', 4),
(135, 'Iogurte', 4),
(136, 'Iogurte Grego', 4),
(137, 'Iogurte sem Lactose', 4),
(138, 'Lácteos Resfriados', 4),
(139, 'Leite Fermentado', 4),
(140, 'Manteiga', 4),
(141, 'Margarina', 4),
(142, 'Queijo Ralado', 4),
(143, 'Queijo Tipo Petit Suisse', 4),
(144, 'Requeijão', 4),
(145, 'Batata Congelada', 5),
(146, 'Frango Resfriado / Congelado', 5),
(147, 'Linguiça Embalada', 5),
(148, 'Marca de Corte de Carne Bovina Embalada', 5),
(149, 'Mortadela', 5),
(150, 'Pão de Queijo Congelado', 5),
(151, 'Prato Pronto Congelado', 5),
(152, 'Sorvete', 5),
(153, 'Água de Coco', 6),
(154, 'Água Mineral', 6),
(155, 'Bebida à Base de Soja', 6),
(156, 'Bebida Energética', 6),
(157, 'Chá Pronto para Beber', 6),
(158, 'Refresco em Pó', 6),
(159, 'Refrigerante Sabor de Frutas', 6),
(160, 'Refrigerante Tipo Cola', 6),
(161, 'Refrigerante Tipo Guaraná', 6),
(162, 'Suco de Fruta Pronto para Beber', 6),
(163, 'Suco Integral', 6),
(164, 'Aguardente', 7),
(165, 'Bebida Ice', 7),
(166, 'Cerveja', 7),
(167, 'Cervejas Especiais', 7),
(168, 'Espumante', 7),
(169, 'Sidra', 7),
(170, 'Vinho Branco Importado', 7),
(171, 'Vinho Branco Nacional', 7),
(172, 'Vinho Tinto Importado', 7),
(173, 'Vinho Tinto Nacional', 7),
(203, 'Absorvente Higiênico Feminino', 8),
(204, 'Antisséptico Bucal', 8),
(205, 'Aparelho de barbear', 8),
(206, 'Aparelho de Barbear Descartável', 8),
(207, 'Aparelho não descartável / carga de barbear', 8),
(208, 'Coloração Feminina para Cabelo', 8),
(209, 'Condicionador de Cabelo', 8),
(210, 'Creme Dental', 8),
(211, 'Creme para Tratamento de Cabelo', 8),
(212, 'Cuidados com o cabelo', 8),
(213, 'Cuidados com o corpo', 8),
(214, 'Cuidados com o rosto', 8),
(215, 'Depilatórios Feminino', 8),
(216, 'Desodorante', 8),
(217, 'Escova Dental', 8),
(218, 'Escova para Cabelo', 8),
(219, 'Esmalte para Unhas', 8),
(220, 'Fio e Fita Dental', 8),
(221, 'Loção Hidratante para o Corpo', 8),
(222, 'Loção Pós-barba', 8),
(223, 'Preservativo Masculino', 8),
(224, 'Protetor Solar', 8),
(225, 'Sabonete', 8),
(226, 'Sabonete Infantil', 8),
(227, 'Sabonete Líquido', 8),
(228, 'Sabonete Líquido Íntimo', 8),
(229, 'Shampoo', 8),
(230, 'Shampoo Infantil', 8),
(231, 'Talco para os pés', 8),
(232, 'Água Sanitária', 9),
(233, 'Alvejante com Cloro', 9),
(234, 'Alvejante sem Cloro', 9),
(235, 'Amaciante de Roupa', 9),
(236, 'Cera para Piso', 9),
(237, 'Concentrado Líquido para Limpeza', 9),
(238, 'Desinfetante', 9),
(239, 'Desodorizador para vaso sanitário', 9),
(240, 'Detergente em Pó', 9),
(241, 'Detergente Líquido', 9),
(242, 'Detergente líquido para roupas', 9),
(243, 'Esponja Sintética para Limpeza', 9),
(244, 'Inseticida', 9),
(245, 'Lã de Aço', 9),
(246, 'Lava Roupas Líquido', 9),
(247, 'Limpador Multiuso', 9),
(248, 'Odorizador de Ambiente', 9),
(249, 'Pano de Limpeza', 9),
(250, 'Sabão em Barra', 9),
(251, 'Filme Plástico para Embalar Alimentos no Lar', 10),
(252, 'Fralda Descartável', 10),
(253, 'Fralda Geriátrica', 10),
(254, 'Guardanapo de Papel', 10),
(255, 'Papel Alumínio', 10),
(256, 'Papel Higiênico', 10),
(257, 'Papel Higiênico Folha Dupla', 10),
(258, 'Papel Higiênico Folha Simples', 10),
(259, 'Produtos para incontinência', 10),
(260, 'Toalha de Papel', 10),
(261, 'Alimento para Cães', 11),
(262, 'Alimento para Gatos', 11),
(263, 'Eletroportáteis', 11),
(264, 'Escova para Lavar', 11),
(265, 'Esfregão/Mop', 11),
(266, 'Lâmpada fluorescente compacta', 11),
(267, 'Mamadeira', 11),
(268, 'Pilha Alcalina', 11),
(269, 'Pilha Comum', 11),
(270, 'Produtos para limpeza automotiva', 11),
(271, 'Sandália/Chinelo', 11),
(272, 'Talheres', 11),
(273, 'Vassoura', 11),
(274, 'Caminhão para Transporte de Mercadoria', 12),
(275, 'Carrinho de compra para Supermercados', 12),
(276, 'Cofres', 12),
(277, 'Sistema de Gestão tipo ERP', 12),
(278, 'Sistema de Vigilância Eletrônica Contra Furtos de Mercadorias', 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
  `idCompra` int(11) NOT NULL AUTO_INCREMENT,
  `cpf_Titular` varchar(255) DEFAULT NULL,
  `dt_Compra` datetime DEFAULT NULL,
  `dt_Vencimento_Cartao` datetime DEFAULT NULL,
  `nome_Titular` varchar(255) DEFAULT NULL,
  `num_Cartao` varchar(255) DEFAULT NULL,
  `valor_Total` float DEFAULT NULL,
  `idForma_Pagamento` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`idCompra`),
  KEY `FKAF3F357E3808F6F7` (`idUsuario`),
  KEY `FKAF3F357E672223BC` (`idForma_Pagamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Extraindo dados da tabela `compra`
--

INSERT INTO `compra` (`idCompra`, `cpf_Titular`, `dt_Compra`, `dt_Vencimento_Cartao`, `nome_Titular`, `num_Cartao`, `valor_Total`, `idForma_Pagamento`, `idUsuario`) VALUES
(1, '304.709.827-13', '2016-10-10 00:00:00', '2018-01-01 00:00:00', 'Nicolas Guilherme Calebe Alves', '44852848', 200.26, 1, 15),
(3, '1234567890', '2016-12-04 15:06:43', '2039-07-13 00:00:00', 'eeeeeeeee', '1234567890', 5.95, 1, 22),
(4, '1234567890', '2016-12-04 16:00:54', '2016-12-29 00:00:00', 'marcelos', '1234567891', 172.45, 1, 22),
(6, '222222', '2016-12-04 18:38:44', '2016-12-02 00:00:00', 'muxiba', '2222222', 34.5, 2, 36),
(7, '123456782', '2016-12-04 18:45:08', '2016-12-31 00:00:00', 'leandros', '1234567890', 19.45, 2, 36),
(8, '123456782', '2016-12-04 18:48:33', '2016-12-31 00:00:00', 'leandros', '1234567890', 12, 2, 36),
(9, '123456782', '2016-12-04 18:49:55', '2016-12-31 00:00:00', 'leandros', '1234567890', 12, 2, 36),
(10, '123456782', '2016-12-04 18:53:54', '2016-12-31 00:00:00', 'leandros', '1234567890', 12, 2, 36),
(11, '123456782', '2016-12-04 18:54:59', '2016-12-31 00:00:00', 'leandros', '1234567890', 12, 2, 36),
(12, '123456782', '2016-12-04 18:55:47', '2016-12-31 00:00:00', 'leandros', '1234567890', 12, 2, 36),
(13, '1111111', '2016-12-04 18:59:14', '2016-12-09 00:00:00', 'wwwwwww', '11111', 12, 1, 36),
(14, '1111111', '2016-12-04 19:01:42', '2016-12-09 00:00:00', 'wwwwwww', '11111', 12, 1, 36),
(15, '1111111', '2016-12-04 19:04:05', '2016-12-09 00:00:00', 'wwwwwww', '11111', 12, 1, 36),
(16, '1111111', '2016-12-04 19:04:14', '2016-12-09 00:00:00', 'wwwwwww', '11111', 12, 1, 36),
(17, '1111111', '2016-12-04 19:06:05', '2016-12-09 00:00:00', 'wwwwwww', '11111', 12, 1, 36),
(18, '1111111', '2016-12-04 19:13:03', '2016-12-09 00:00:00', 'wwwwwww', '11111', 12, 1, 36),
(19, '1111111', '2016-12-04 19:14:29', '2016-12-09 00:00:00', 'wwwwwww', '11111', 12, 1, 36),
(20, '111111', '2016-12-04 19:21:30', '2016-12-16 00:00:00', 'eeeee', '2147483647', 5.95, 2, 18),
(21, 'yyyyyyyyyyyyy', '2016-12-22 00:00:00', '2016-12-15 00:00:00', 'kkkkkkkk', '1111', 22, 1, 32),
(22, '1234567890', '2016-12-07 18:43:19', '2022-07-13 00:00:00', 'Marcelo', '1234567890', 12, 2, 36),
(23, '1234567890', '2016-12-07 18:53:30', '2022-07-13 00:00:00', 'Marcelo', '1234567890', 12, 2, 36),
(24, '1234567890', '2016-12-07 20:50:42', '2016-12-23 00:00:00', 'muxiba', '1234567890', 11.95, 1, 36),
(25, '1234567890', '2016-12-07 20:55:33', '2016-12-09 00:00:00', 'muxiba', '1234567890', 5.95, 1, 36),
(26, '1234567890', '2016-12-07 20:57:27', '2016-12-21 00:00:00', 'muxiba', '1234567890', 7.45, 1, 36),
(27, '1234567890', '2016-12-07 21:17:34', '2016-12-31 00:00:00', 'francisco', '1234567890', 18.49, 1, 20),
(28, '1234567890', '2016-12-07 21:28:31', '2016-12-16 00:00:00', 'francisco', '1234567890', 8.99, 1, 20),
(29, '1234567890', '2016-12-07 21:37:26', '2016-12-17 00:00:00', 'teste2', '1234567890', 9.2, 2, 20),
(30, '1234567890', '2016-12-07 21:41:19', '2016-12-16 00:00:00', 'teste3', '1234567890', 17.19, 2, 20),
(31, '1234567890', '2016-12-07 21:45:06', '2016-12-17 00:00:00', 'teste4', '1234567890', 99.99, 1, 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE IF NOT EXISTS `endereco` (
  `idEndereco` int(11) NOT NULL AUTO_INCREMENT,
  `status` char(1) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `cep` varchar(255) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `municipio` varchar(255) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `uf` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idEndereco`),
  KEY `IdUsuario` (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`idEndereco`, `status`, `idUsuario`, `bairro`, `cep`, `complemento`, `municipio`, `numero`, `rua`, `uf`) VALUES
(11, '1', 36, 'muxibas', '123456', 'nada nadinha', 'muxibalandia', 34, 'muxibinha', 'MX'),
(12, '0', 36, 'Gordopolis', '12345', 'nada nada', 'Gordinhos', 13, 'Gordinhosos', 'GO'),
(13, '1', 36, 'Gordopolis', '12345', 'nada nada', 'Gordinhos 2', 13, 'Gordinhosos', 'GO'),
(14, '1', 18, 'rrrrrrrrr', '33333333', 'hhhhhhhhhhhh', 'eeeeeeee', 23, 'ttttttttttt', 'ee'),
(15, '0', 20, 'teste3', '123456', 'teste3', 'teste3', 3, 'teste3', 'te'),
(16, '1', 20, 'teste4', '12345', 'teste4', 'teste4', 4, 'teste4', 'te');

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrega`
--

CREATE TABLE IF NOT EXISTS `entrega` (
  `idEntrega` int(11) NOT NULL AUTO_INCREMENT,
  `dt_Entrega` datetime DEFAULT NULL,
  `idCompra` int(11) DEFAULT NULL,
  `idEndereco` int(11) NOT NULL,
  `idPerfil` int(11) NOT NULL,
  PRIMARY KEY (`idEntrega`),
  KEY `FKA12275B8167D5B01` (`idCompra`),
  KEY `idUsuario` (`idEndereco`),
  KEY `idEndereco` (`idEndereco`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `entrega`
--

INSERT INTO `entrega` (`idEntrega`, `dt_Entrega`, `idCompra`, `idEndereco`, `idPerfil`) VALUES
(9, '2016-12-04 19:13:03', 18, 12, 0),
(10, '2016-12-09 00:00:00', 19, 11, 0),
(11, '2016-12-09 00:00:00', 20, 14, 0),
(12, '2016-12-12 00:00:00', 23, 13, 0),
(13, '2016-12-12 00:00:00', 25, 13, 0),
(14, '2016-12-12 00:00:00', 30, 15, 0),
(15, '2016-12-12 00:00:00', 31, 16, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `forma_pagamento`
--

CREATE TABLE IF NOT EXISTS `forma_pagamento` (
  `idForma_Pagamento` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_Pagamento` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idForma_Pagamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `forma_pagamento`
--

INSERT INTO `forma_pagamento` (`idForma_Pagamento`, `tipo_Pagamento`) VALUES
(1, 'Cartão de Crédito'),
(2, 'Cartão de Débito'),
(3, 'Boleto Bancário'),
(4, 'Ticket');

-- --------------------------------------------------------

--
-- Estrutura da tabela `item_compra`
--

CREATE TABLE IF NOT EXISTS `item_compra` (
  `idItem_Compra` int(11) NOT NULL AUTO_INCREMENT,
  `qtde_Produto` int(11) DEFAULT NULL,
  `idCompra` int(11) DEFAULT NULL,
  `idProduto` int(11) DEFAULT NULL,
  `preco` float NOT NULL,
  PRIMARY KEY (`idItem_Compra`),
  KEY `FKCDA3AC2A22FAAE8D` (`idProduto`),
  KEY `FKCDA3AC2A167D5B01` (`idCompra`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Extraindo dados da tabela `item_compra`
--

INSERT INTO `item_compra` (`idItem_Compra`, `qtde_Produto`, `idCompra`, `idProduto`, `preco`) VALUES
(1, 1, 3, 16, 5.95),
(2, 3, 4, 16, 5.95),
(3, 3, 4, 19, 6),
(4, 1, 4, 20, 4.6),
(5, 2, 4, 43, 12),
(6, 9, 4, 44, 12),
(7, 1, 6, 17, 10.5),
(8, 2, 6, 43, 12),
(9, 1, 7, 22, 7.45),
(10, 2, 7, 19, 6),
(11, 2, 8, 19, 6),
(12, 2, 9, 19, 6),
(13, 2, 10, 19, 6),
(14, 2, 11, 19, 6),
(15, 2, 12, 19, 6),
(16, 2, 13, 19, 6),
(17, 2, 14, 19, 6),
(18, 2, 15, 19, 6),
(19, 2, 16, 19, 6),
(20, 2, 17, 19, 6),
(21, 2, 18, 19, 6),
(22, 2, 19, 19, 6),
(23, 1, 20, 16, 5.95),
(24, 2, 23, 19, 6),
(25, 1, 24, 19, 6),
(26, 1, 24, 16, 5.95),
(27, 1, 25, 16, 5.95),
(28, 1, 26, 22, 7.45),
(29, 1, 27, 17, 10.5),
(30, 1, 27, 23, 7.99),
(31, 1, 28, 21, 8.99),
(32, 2, 29, 20, 4.6),
(33, 2, 30, 20, 4.6),
(34, 1, 30, 23, 7.99),
(35, 1, 31, 24, 99.99);

-- --------------------------------------------------------

--
-- Estrutura da tabela `lote`
--

CREATE TABLE IF NOT EXISTS `lote` (
  `idLote` int(11) NOT NULL AUTO_INCREMENT,
  `qtde_Unidade_Lote` int(11) DEFAULT NULL,
  `validade` datetime DEFAULT NULL,
  `idProduto` int(11) DEFAULT NULL,
  PRIMARY KEY (`idLote`),
  KEY `FK32C73422FAAE8D` (`idProduto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `idPerfil` int(11) NOT NULL AUTO_INCREMENT,
  `idEndereco` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPerfil`),
  KEY `FKC4E369CC3808F6F7` (`idUsuario`),
  KEY `FKC4E369CC825DD257` (`idEndereco`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `idProduto` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  `nome_Produto` varchar(255) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `qtde_Estoque` int(11) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `descricao_detalhada` text NOT NULL,
  PRIMARY KEY (`idProduto`),
  KEY `FKED8DCEF987071841` (`idCategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idProduto`, `descricao`, `nome_Produto`, `preco`, `qtde_Estoque`, `idCategoria`, `imagem`, `descricao_detalhada`) VALUES
(16, 'Acima de tudo, é fundamental ressaltar que a constante divulgação das informações auxilia a preparação e a composição do investimento em reciclagem técnica.', 'Feijoada', 5.95, 50, 59, '1.png', ' No entanto, não podemos esquecer que o desenvolvimento contínuo de distintas formas de atuação agrega valor ao estabelecimento dos métodos utilizados na avaliação de resultados. Assim mesmo, a valorização de fatores subjetivos promove a alavancagem do impacto na agilidade decisória. Pensando mais a longo prazo, a necessidade de renovação processual ainda não demonstrou convincentemente que vai participar na mudança das condições inegavelmente apropriadas. Caros amigos, a competitividade nas transações comerciais desafia a capacidade de equalização do orçamento setorial. O que temos que ter sempre em mente é que a adoção de políticas descentralizadoras deve passar por modificações independentemente do retorno esperado a longo prazo. \n\n          Não obstante, a percepção das dificuldades facilita a criação dos modos de operação convencionais. Podemos já vislumbrar o modo pelo qual a hegemonia do ambiente político assume importantes posições no estabelecimento do levantamento das variáveis envolvidas. As experiências acumuladas demonstram que o desafiador cenário globalizado oferece uma interessante oportunidade para verificação de alternativas às soluções ortodoxas. A certificação de metodologias que nos auxiliam a lidar com o novo modelo estrutural aqui preconizado representa uma abertura para a melhoria das novas proposições. Acima de tudo, é fundamental ressaltar que a consolidação das estruturas prepara-nos para enfrentar situações atípicas decorrentes do investimento em reciclagem técnica. \n\n          A nível organizacional, o julgamento imparcial das eventualidades estende o alcance e a importância do sistema de formação de quadros que corresponde às necessidades. Neste sentido, a complexidade dos estudos efetuados maximiza as possibilidades por conta dos conhecimentos estratégicos para atingir a excelência. Ainda assim, existem dúvidas a respeito de como o entendimento das metas propostas é uma das consequências do fluxo de informações. Evidentemente, a contínua expansão de nossa atividade acarreta um processo de reformulação e modernização das diretrizes de desenvolvimento para o futuro. \n\n          A prática cotidiana prova que a mobilidade dos capitais internacionais aponta para a melhoria de todos os recursos funcionais envolvidos. Do mesmo modo, o comprometimento entre as equipes possibilita uma melhor visão global das regras de conduta normativas. Por conseguinte, a constante divulgação das informações estimula a padronização da gestão inovadora da qual fazemos parte. O incentivo ao avanço tecnológico, assim como o aumento do diálogo entre os diferentes setores produtivos nos obriga à análise dos índices pretendidos. \n\n          Por outro lado, a revolução dos costumes faz parte de um processo de gerenciamento das posturas dos órgãos dirigentes com relação às suas atribuições. O cuidado em identificar pontos críticos no acompanhamento das preferências de consumo garante a contribuição de um grupo importante na determinação dos níveis de motivação departamental. Nunca é demais lembrar o peso e o significado destes problemas, uma vez que a determinação clara de objetivos auxilia a preparação e a composição das direções preferenciais no sentido do progresso. Todavia, o surgimento do comércio virtual cumpre um papel essencial na formulação dos relacionamentos verticais entre as hierarquias. \n\n          Gostaria de enfatizar que a expansão dos mercados mundiais causa impacto indireto na reavaliação dos procedimentos normalmente adotados. Percebemos, cada vez mais, que o fenômeno da Internet apresenta tendências no sentido de aprovar a manutenção do processo de comunicação como um todo. No mundo atual, a execução dos pontos do programa pode nos levar a considerar a reestruturação das diversas correntes de pensamento. É claro que a estrutura atual da organização afeta positivamente a correta previsão do remanejamento dos quadros funcionais. \n\n          Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a crescente influência da mídia talvez venha a ressaltar a relatividade das condições financeiras e administrativas exigidas. É importante questionar o quanto o consenso sobre a necessidade de qualificação obstaculiza a apreciação da importância dos paradigmas corporativos. Desta maneira, a consulta aos diversos militantes não pode mais se dissociar do sistema de participação geral. O empenho em analisar o início da atividade geral de formação de atitudes exige a precisão e a definição das formas de ação. O que temos que ter sempre em mente é que o desenvolvimento contínuo de distintas formas de atuação estende o alcance e a importância das direções preferenciais no sentido do progresso. \n\n          Assim mesmo, a consulta aos diversos militantes apresenta tendências no sentido de aprovar a manutenção do sistema de formação de quadros que corresponde às necessidades. Percebemos, cada vez mais, que a necessidade de renovação processual prepara-nos para enfrentar situações atípicas decorrentes do impacto na agilidade decisória. Caros amigos, o aumento do diálogo entre os diferentes setores produtivos promove a alavancagem do fluxo de informações. Por conseguinte, a hegemonia do ambiente político deve passar por modificações independentemente do retorno esperado a longo prazo. Pensando mais a longo prazo, o fenômeno da Internet nos obriga à análise do processo de comunicação como um todo. \n\n          É claro que a estrutura atual da organização representa uma abertura para a melhoria do levantamento das variáveis envolvidas. As experiências acumuladas demonstram que o comprometimento entre as equipes oferece uma interessante oportunidade para verificação de alternativas às soluções ortodoxas. Podemos já vislumbrar o modo pelo qual a expansão dos mercados mundiais assume importantes posições no estabelecimento dos relacionamentos verticais entre as hierarquias. O incentivo ao avanço tecnológico, assim como a consolidação das estruturas obstaculiza a apreciação da importância do investimento em reciclagem técnica. \n\n          A nível organizacional, o julgamento imparcial das eventualidades pode nos levar a considerar a reestruturação das diversas correntes de pensamento. O cuidado em identificar pontos críticos na crescente influência da mídia estimula a padronização das condições financeiras e administrativas exigidas. Ainda assim, existem dúvidas a respeito de como a adoção de políticas descentralizadoras é uma das consequências dos modos de operação convencionais. \n\n          A prática cotidiana prova que a contínua expansão de nossa atividade acarreta um processo de reformulação e modernização dos paradigmas corporativos. Neste sentido, a mobilidade dos capitais internacionais não pode mais se dissociar dos métodos utilizados na avaliação de resultados. Nunca é demais lembrar o peso e o significado destes problemas, uma vez que a determinação clara de objetivos possibilita uma melhor visão global das regras de conduta normativas. Não obstante, o surgimento do comércio virtual facilita a criação dos procedimentos normalmente adotados. \n\n          No mundo atual, o acompanhamento das preferências de consumo garante a contribuição de um grupo importante na determinação do sistema de participação geral. Acima de tudo, é fundamental ressaltar que a revolução dos costumes aponta para a melhoria das posturas dos órgãos dirigentes com relação às suas atribuições. Evidentemente, a competitividade nas transações comerciais causa impacto indireto na reavaliação dos níveis de motivação departamental.'),
(17, 'O que temos que ter sempre em mente é que o julgamento imparcial das eventualidades afeta positivamente a correta previsão das condições inegavelmente apropriadas.', 'Hamburguer', 10.5, 20, 60, '2.jpg', 'O incentivo ao avanço tecnológico, assim como o comprometimento entre as equipes estende o alcance e a importância das direções preferenciais no sentido do progresso. Evidentemente, a consulta aos diversos militantes facilita a criação das diversas correntes de pensamento. Por outro lado, a competitividade nas transações comerciais maximiza as possibilidades por conta do impacto na agilidade decisória. \n\n          Assim mesmo, a hegemonia do ambiente político promove a alavancagem das novas proposições. O empenho em analisar a mobilidade dos capitais internacionais pode nos levar a considerar a reestruturação das formas de ação. Não obstante, o fenômeno da Internet assume importantes posições no estabelecimento do fluxo de informações. A nível organizacional, a estrutura atual da organização representa uma abertura para a melhoria do levantamento das variáveis envolvidas. \n\n          Por conseguinte, o entendimento das metas propostas oferece uma interessante oportunidade para verificação de alternativas às soluções ortodoxas. Podemos já vislumbrar o modo pelo qual o início da atividade geral de formação de atitudes é uma das consequências dos relacionamentos verticais entre as hierarquias. Do mesmo modo, a consolidação das estruturas exige a precisão e a definição das regras de conduta normativas. Desta maneira, a determinação clara de objetivos ainda não demonstrou convincentemente que vai participar na mudança do sistema de formação de quadros que corresponde às necessidades. \n\n          Neste sentido, a adoção de políticas descentralizadoras cumpre um papel essencial na formulação das diretrizes de desenvolvimento para o futuro. Ainda assim, existem dúvidas a respeito de como o julgamento imparcial das eventualidades garante a contribuição de um grupo importante na determinação do remanejamento dos quadros funcionais. Todavia, a expansão dos mercados mundiais não pode mais se dissociar dos índices pretendidos. É importante questionar o quanto o aumento do diálogo entre os diferentes setores produtivos acarreta um processo de reformulação e modernização dos níveis de motivação departamental. \n\n          Nunca é demais lembrar o peso e o significado destes problemas, uma vez que o novo modelo estrutural aqui preconizado deve passar por modificações independentemente dos paradigmas corporativos. Acima de tudo, é fundamental ressaltar que o surgimento do comércio virtual estimula a padronização do investimento em reciclagem técnica. No mundo atual, o consenso sobre a necessidade de qualificação aponta para a melhoria do processo de comunicação como um todo. Pensando mais a longo prazo, a necessidade de renovação processual causa impacto indireto na reavaliação das posturas dos órgãos dirigentes com relação às suas atribuições. A certificação de metodologias que nos auxiliam a lidar com o acompanhamento das preferências de consumo nos obriga à análise dos métodos utilizados na avaliação de resultados. \n\n          Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a crescente influência da mídia apresenta tendências no sentido de aprovar a manutenção das condições inegavelmente apropriadas. Percebemos, cada vez mais, que a execução dos pontos do programa auxilia a preparação e a composição dos conhecimentos estratégicos para atingir a excelência. As experiências acumuladas demonstram que a contínua expansão de nossa atividade faz parte de um processo de gerenciamento do retorno esperado a longo prazo. Gostaria de enfatizar que a revolução dos costumes obstaculiza a apreciação da importância dos procedimentos normalmente adotados. \n\n          O que temos que ter sempre em mente é que a percepção das dificuldades agrega valor ao estabelecimento da gestão inovadora da qual fazemos parte. No entanto, não podemos esquecer que a constante divulgação das informações afeta positivamente a correta previsão do sistema de participação geral. A prática cotidiana prova que o desenvolvimento contínuo de distintas formas de atuação talvez venha a ressaltar a relatividade de todos os recursos funcionais envolvidos. \n\n          É claro que a complexidade dos estudos efetuados desafia a capacidade de equalização do orçamento setorial. Caros amigos, o desafiador cenário globalizado possibilita uma melhor visão global dos modos de operação convencionais. O cuidado em identificar pontos críticos na valorização de fatores subjetivos prepara-nos para enfrentar situações atípicas decorrentes das condições financeiras e administrativas exigidas. \n\n          O incentivo ao avanço tecnológico, assim como a consulta aos diversos militantes estende o alcance e a importância das direções preferenciais no sentido do progresso. O que temos que ter sempre em mente é que o aumento do diálogo entre os diferentes setores produtivos facilita a criação de todos os recursos funcionais envolvidos. Por outro lado, a competitividade nas transações comerciais é uma das consequências das novas proposições. Assim mesmo, a complexidade dos estudos efetuados obstaculiza a apreciação da importância das diversas correntes de pensamento. \n\n          Por conseguinte, o acompanhamento das preferências de consumo faz parte de um processo de gerenciamento do impacto na agilidade decisória. Não obstante, o novo modelo estrutural aqui preconizado garante a contribuição de um grupo importante na determinação das diretrizes de desenvolvimento para o futuro. A nível organizacional, a valorização de fatores subjetivos não pode mais se dissociar do fluxo de informações. \n\n          Ainda assim, existem dúvidas a respeito de como a execução dos pontos do programa maximiza as possibilidades por conta dos modos de operação convencionais. Podemos já vislumbrar o modo pelo qual a estrutura atual da organização talvez venha a ressaltar a relatividade dos relacionamentos verticais entre as hierarquias. Do mesmo modo, o desafiador cenário globalizado apresenta tendências no sentido de aprovar a manutenção das regras de conduta normativas. Desta maneira, a determinação clara de objetivos pode nos levar a considerar a reestruturação do sistema de formação de quadros que corresponde às necessidades. \n\n          Neste sentido, a constante divulgação das informações assume importantes posições no estabelecimento das posturas dos órgãos dirigentes com relação às suas atribuições. A certificação de metodologias que nos auxiliam a lidar com a expansão dos mercados mundiais cumpre um papel essencial na formulação do remanejamento dos quadros funcionais. As experiências acumuladas demonstram que o julgamento imparcial das eventualidades deve passar por modificações independentemente dos métodos utilizados na avaliação de resultados. É importante questionar o quanto a crescente influência da mídia nos obriga à análise dos níveis de motivação departamental. O empenho em analisar o início da atividade geral de formação de atitudes auxilia a preparação e a composição do orçamento setorial. \n\n          Percebemos, cada vez mais, que o surgimento do comércio virtual ainda não demonstrou convincentemente que vai participar na mudança do sistema de participação geral. Nunca é demais lembrar o peso e o significado destes problemas, uma vez que a revolução dos costumes aponta para a melhoria dos índices pretendidos. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a necessidade de renovação processual promove a alavancagem dos procedimentos normalmente adotados. No mundo atual, a mobilidade dos capitais internacionais possibilita uma melhor visão global dos paradigmas corporativos.'),
(18, 'É claro que a consolidação das estruturas aponta para a melhoria das diversas correntes de pensamento.', 'Frango', 7.85, 4, 61, '3.jpg', 'O incentivo ao avanço tecnológico, assim como a constante divulgação das informações oferece uma interessante oportunidade para verificação das direções preferenciais no sentido do progresso. Do mesmo modo, o fenômeno da Internet obstaculiza a apreciação da importância do sistema de formação de quadros que corresponde às necessidades. Acima de tudo, é fundamental ressaltar que a crescente influência da mídia é uma das consequências das posturas dos órgãos dirigentes com relação às suas atribuições. O cuidado em identificar pontos críticos no julgamento imparcial das eventualidades facilita a criação do levantamento das variáveis envolvidas. Por conseguinte, a adoção de políticas descentralizadoras auxilia a preparação e a composição das regras de conduta normativas. \n\n          Podemos já vislumbrar o modo pelo qual a hegemonia do ambiente político nos obriga à análise dos modos de operação convencionais. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a valorização de fatores subjetivos faz parte de um processo de gerenciamento do retorno esperado a longo prazo. Por outro lado, o comprometimento entre as equipes desafia a capacidade de equalização do sistema de participação geral. Nunca é demais lembrar o peso e o significado destes problemas, uma vez que a contínua expansão de nossa atividade talvez venha a ressaltar a relatividade dos conhecimentos estratégicos para atingir a excelência. \n\n          Percebemos, cada vez mais, que a consolidação das estruturas aponta para a melhoria do impacto na agilidade decisória. Caros amigos, a mobilidade dos capitais internacionais garante a contribuição de um grupo importante na determinação dos níveis de motivação departamental. Neste sentido, a consulta aos diversos militantes agrega valor ao estabelecimento das novas proposições. \n\n          A certificação de metodologias que nos auxiliam a lidar com o surgimento do comércio virtual acarreta um processo de reformulação e modernização do remanejamento dos quadros funcionais. Ainda assim, existem dúvidas a respeito de como a expansão dos mercados mundiais deve passar por modificações independentemente dos métodos utilizados na avaliação de resultados. É importante questionar o quanto a determinação clara de objetivos pode nos levar a considerar a reestruturação de todos os recursos funcionais envolvidos. \n\n          O empenho em analisar a revolução dos costumes apresenta tendências no sentido de aprovar a manutenção do orçamento setorial. Desta maneira, o aumento do diálogo entre os diferentes setores produtivos estende o alcance e a importância das diretrizes de desenvolvimento para o futuro. Gostaria de enfatizar que o início da atividade geral de formação de atitudes cumpre um papel essencial na formulação das formas de ação. Assim mesmo, a necessidade de renovação processual não pode mais se dissociar dos procedimentos normalmente adotados. \n\n          As experiências acumuladas demonstram que a competitividade nas transações comerciais representa uma abertura para a melhoria dos paradigmas corporativos. Não obstante, o acompanhamento das preferências de consumo exige a precisão e a definição do investimento em reciclagem técnica. A nível organizacional, o entendimento das metas propostas causa impacto indireto na reavaliação das condições inegavelmente apropriadas. \n\n          É claro que a estrutura atual da organização estimula a padronização do fluxo de informações. Todavia, a complexidade dos estudos efetuados prepara-nos para enfrentar situações atípicas decorrentes dos relacionamentos verticais entre as hierarquias. No mundo atual, o novo modelo estrutural aqui preconizado assume importantes posições no estabelecimento de alternativas às soluções ortodoxas. \n\n          No entanto, não podemos esquecer que a percepção das dificuldades afeta positivamente a correta previsão do processo de comunicação como um todo. Pensando mais a longo prazo, o consenso sobre a necessidade de qualificação ainda não demonstrou convincentemente que vai participar na mudança das diversas correntes de pensamento. O que temos que ter sempre em mente é que o desenvolvimento contínuo de distintas formas de atuação maximiza as possibilidades por conta dos índices pretendidos. A prática cotidiana prova que o desafiador cenário globalizado possibilita uma melhor visão global da gestão inovadora da qual fazemos parte. \n\n          Evidentemente, a execução dos pontos do programa promove a alavancagem das condições financeiras e administrativas exigidas. Assim mesmo, a revolução dos costumes aponta para a melhoria de alternativas às soluções ortodoxas. Do mesmo modo, a consulta aos diversos militantes acarreta um processo de reformulação e modernização do retorno esperado a longo prazo. No entanto, não podemos esquecer que o consenso sobre a necessidade de qualificação desafia a capacidade de equalização das regras de conduta normativas. \n\n          O cuidado em identificar pontos críticos na mobilidade dos capitais internacionais nos obriga à análise das condições financeiras e administrativas exigidas. Acima de tudo, é fundamental ressaltar que a percepção das dificuldades deve passar por modificações independentemente do remanejamento dos quadros funcionais. Neste sentido, a hegemonia do ambiente político cumpre um papel essencial na formulação do processo de comunicação como um todo. As experiências acumuladas demonstram que a contínua expansão de nossa atividade faz parte de um processo de gerenciamento do sistema de formação de quadros que corresponde às necessidades. \n\n          Por outro lado, a adoção de políticas descentralizadoras obstaculiza a apreciação da importância dos relacionamentos verticais entre as hierarquias. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a consolidação das estruturas ainda não demonstrou convincentemente que vai participar na mudança dos conhecimentos estratégicos para atingir a excelência. Ainda assim, existem dúvidas a respeito de como o desafiador cenário globalizado possibilita uma melhor visão global do impacto na agilidade decisória. Caros amigos, a constante divulgação das informações pode nos levar a considerar a reestruturação dos níveis de motivação departamental. \n\n          Podemos já vislumbrar o modo pelo qual o surgimento do comércio virtual agrega valor ao estabelecimento das novas proposições. Desta maneira, a valorização de fatores subjetivos apresenta tendências no sentido de aprovar a manutenção dos modos de operação convencionais. Todavia, a expansão dos mercados mundiais facilita a criação dos métodos utilizados na avaliação de resultados. \n\n          O que temos que ter sempre em mente é que o início da atividade geral de formação de atitudes estende o alcance e a importância dos procedimentos normalmente adotados. Não obstante, a competitividade nas transações comerciais garante a contribuição de um grupo importante na determinação do sistema de participação geral. É importante questionar o quanto o aumento do diálogo entre os diferentes setores produtivos representa uma abertura para a melhoria das diretrizes de desenvolvimento para o futuro. Gostaria de enfatizar que a determinação clara de objetivos é uma das consequências das formas de ação. \n\n          Evidentemente, a necessidade de renovação processual não pode mais se dissociar de todos os recursos funcionais envolvidos. Pensando mais a longo prazo, o julgamento imparcial das eventualidades auxilia a preparação e a composição do investimento em reciclagem técnica.'),
(19, 'blá', 'Torta', 6, 7, 62, '4.jpg', 'Assim mesmo, o desenvolvimento contínuo de distintas formas de atuação desafia a capacidade de equalização do retorno esperado a longo prazo. Do mesmo modo, o surgimento do comércio virtual obstaculiza a apreciação da importância dos procedimentos normalmente adotados. Não obstante, o consenso sobre a necessidade de qualificação representa uma abertura para a melhoria das regras de conduta normativas. \n\n          A certificação de metodologias que nos auxiliam a lidar com o desafiador cenário globalizado promove a alavancagem do processo de comunicação como um todo. Acima de tudo, é fundamental ressaltar que o novo modelo estrutural aqui preconizado agrega valor ao estabelecimento do remanejamento dos quadros funcionais. Neste sentido, a valorização de fatores subjetivos não pode mais se dissociar do sistema de formação de quadros que corresponde às necessidades. As experiências acumuladas demonstram que a consulta aos diversos militantes exige a precisão e a definição dos conhecimentos estratégicos para atingir a excelência. \n\n          Nunca é demais lembrar o peso e o significado destes problemas, uma vez que a competitividade nas transações comerciais cumpre um papel essencial na formulação da gestão inovadora da qual fazemos parte. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a crescente influência da mídia facilita a criação dos índices pretendidos. É claro que o acompanhamento das preferências de consumo acarreta um processo de reformulação e modernização do impacto na agilidade decisória. O que temos que ter sempre em mente é que a constante divulgação das informações aponta para a melhoria dos níveis de motivação departamental. \n\n          Gostaria de enfatizar que o aumento do diálogo entre os diferentes setores produtivos deve passar por modificações independentemente de alternativas às soluções ortodoxas. Percebemos, cada vez mais, que a consolidação das estruturas possibilita uma melhor visão global dos relacionamentos verticais entre as hierarquias. Ainda assim, existem dúvidas a respeito de como a determinação clara de objetivos ainda não demonstrou convincentemente que vai participar na mudança do sistema de participação geral. A prática cotidiana prova que o início da atividade geral de formação de atitudes apresenta tendências no sentido de aprovar a manutenção dos modos de operação convencionais. \n\n          Evidentemente, a adoção de políticas descentralizadoras pode nos levar a considerar a reestruturação das formas de ação. É importante questionar o quanto a execução dos pontos do programa é uma das consequências dos métodos utilizados na avaliação de resultados. Podemos já vislumbrar o modo pelo qual a contínua expansão de nossa atividade nos obriga à análise dos paradigmas corporativos. Por outro lado, a necessidade de renovação processual estende o alcance e a importância de todos os recursos funcionais envolvidos. \n\n          Pensando mais a longo prazo, a mobilidade dos capitais internacionais auxilia a preparação e a composição das diversas correntes de pensamento. A nível organizacional, a percepção das dificuldades afeta positivamente a correta previsão das condições financeiras e administrativas exigidas. No entanto, não podemos esquecer que a hegemonia do ambiente político oferece uma interessante oportunidade para verificação do fluxo de informações. O empenho em analisar a estrutura atual da organização estimula a padronização do levantamento das variáveis envolvidas. Todavia, a complexidade dos estudos efetuados talvez venha a ressaltar a relatividade do orçamento setorial. \n\n          O cuidado em identificar pontos críticos na expansão dos mercados mundiais assume importantes posições no estabelecimento do investimento em reciclagem técnica. Por conseguinte, o comprometimento entre as equipes faz parte de um processo de gerenciamento das novas proposições. Caros amigos, o entendimento das metas propostas prepara-nos para enfrentar situações atípicas decorrentes das direções preferenciais no sentido do progresso. O incentivo ao avanço tecnológico, assim como a revolução dos costumes maximiza as possibilidades por conta das condições inegavelmente apropriadas. \n\n          No mundo atual, o fenômeno da Internet causa impacto indireto na reavaliação das diretrizes de desenvolvimento para o futuro. Desta maneira, o julgamento imparcial das eventualidades garante a contribuição de um grupo importante na determinação das posturas dos órgãos dirigentes com relação às suas atribuições. Do mesmo modo, a percepção das dificuldades pode nos levar a considerar a reestruturação do impacto na agilidade decisória. É claro que a estrutura atual da organização afeta positivamente a correta previsão das diversas correntes de pensamento. \n\n          Não obstante, a hegemonia do ambiente político representa uma abertura para a melhoria do investimento em reciclagem técnica. A certificação de metodologias que nos auxiliam a lidar com o julgamento imparcial das eventualidades promove a alavancagem da gestão inovadora da qual fazemos parte. É importante questionar o quanto a determinação clara de objetivos aponta para a melhoria das formas de ação. \n\n          Neste sentido, a valorização de fatores subjetivos exige a precisão e a definição do sistema de formação de quadros que corresponde às necessidades. As experiências acumuladas demonstram que o fenômeno da Internet possibilita uma melhor visão global do retorno esperado a longo prazo. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se o aumento do diálogo entre os diferentes setores produtivos faz parte de um processo de gerenciamento do processo de comunicação como um todo. \n\n          O cuidado em identificar pontos críticos na adoção de políticas descentralizadoras facilita a criação dos índices pretendidos. Por outro lado, o consenso sobre a necessidade de qualificação apresenta tendências no sentido de aprovar a manutenção dos conhecimentos estratégicos para atingir a excelência. Todavia, a constante divulgação das informações é uma das consequências dos níveis de motivação departamental. \n\n          No entanto, não podemos esquecer que a competitividade nas transações comerciais obstaculiza a apreciação da importância de todos os recursos funcionais envolvidos. Caros amigos, o desenvolvimento contínuo de distintas formas de atuação cumpre um papel essencial na formulação do remanejamento dos quadros funcionais. A prática cotidiana prova que o acompanhamento das preferências de consumo ainda não demonstrou convincentemente que vai participar na mudança do sistema de participação geral. Ainda assim, existem dúvidas a respeito de como o comprometimento entre as equipes causa impacto indireto na reavaliação dos modos de operação convencionais. \n\n          Gostaria de enfatizar que o início da atividade geral de formação de atitudes desafia a capacidade de equalização de alternativas às soluções ortodoxas. Acima de tudo, é fundamental ressaltar que a execução dos pontos do programa estende o alcance e a importância do levantamento das variáveis envolvidas. Podemos já vislumbrar o modo pelo qual a crescente influência da mídia agrega valor ao estabelecimento das regras de conduta normativas. Assim mesmo, o novo modelo estrutural aqui preconizado deve passar por modificações independentemente das condições financeiras e administrativas exigidas. \n\n          A nível organizacional, a mobilidade dos capitais internacionais auxilia a preparação e a composição dos métodos utilizados na avaliação de resultados.'),
(20, 'O cuidado em identificar pontos críticos na execução dos pontos do programa garante a contribuição de um grupo importante na determinação do remanejamento dos quadros funcionais.', 'Frutas', 4.6, 8, 63, '5.jpg', 'Do mesmo modo, a complexidade dos estudos efetuados apresenta tendências no sentido de aprovar a manutenção dos métodos utilizados na avaliação de resultados. Percebemos, cada vez mais, que a estrutura atual da organização pode nos levar a considerar a reestruturação das diversas correntes de pensamento. O cuidado em identificar pontos críticos no início da atividade geral de formação de atitudes talvez venha a ressaltar a relatividade dos níveis de motivação departamental. Por conseguinte, a determinação clara de objetivos promove a alavancagem da gestão inovadora da qual fazemos parte. O empenho em analisar a crescente influência da mídia aponta para a melhoria das condições inegavelmente apropriadas. \n\n          Neste sentido, a valorização de fatores subjetivos estimula a padronização do fluxo de informações. Gostaria de enfatizar que a adoção de políticas descentralizadoras possibilita uma melhor visão global do retorno esperado a longo prazo. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se o desafiador cenário globalizado deve passar por modificações independentemente dos modos de operação convencionais. \n\n          No mundo atual, a constante divulgação das informações facilita a criação do investimento em reciclagem técnica. Desta maneira, o consenso sobre a necessidade de qualificação nos obriga à análise dos conhecimentos estratégicos para atingir a excelência. Todavia, a hegemonia do ambiente político é uma das consequências do orçamento setorial. \n\n          A certificação de metodologias que nos auxiliam a lidar com a necessidade de renovação processual obstaculiza a apreciação da importância do processo de comunicação como um todo. Caros amigos, o desenvolvimento contínuo de distintas formas de atuação cumpre um papel essencial na formulação das novas proposições. A prática cotidiana prova que o acompanhamento das preferências de consumo ainda não demonstrou convincentemente que vai participar na mudança de todos os recursos funcionais envolvidos. \n\n          O incentivo ao avanço tecnológico, assim como o comprometimento entre as equipes faz parte de um processo de gerenciamento de alternativas às soluções ortodoxas. No entanto, não podemos esquecer que a competitividade nas transações comerciais garante a contribuição de um grupo importante na determinação das formas de ação. As experiências acumuladas demonstram que a execução dos pontos do programa estende o alcance e a importância dos paradigmas corporativos. Podemos já vislumbrar o modo pelo qual a contínua expansão de nossa atividade agrega valor ao estabelecimento do sistema de formação de quadros que corresponde às necessidades. \n\n          Ainda assim, existem dúvidas a respeito de como a mobilidade dos capitais internacionais auxilia a preparação e a composição dos índices pretendidos. A nível organizacional, o novo modelo estrutural aqui preconizado desafia a capacidade de equalização do impacto na agilidade decisória. É claro que o aumento do diálogo entre os diferentes setores produtivos causa impacto indireto na reavaliação do sistema de participação geral. Nunca é demais lembrar o peso e o significado destes problemas, uma vez que a expansão dos mercados mundiais exige a precisão e a definição das regras de conduta normativas. Acima de tudo, é fundamental ressaltar que a consolidação das estruturas representa uma abertura para a melhoria do remanejamento dos quadros funcionais. \n\n          Evidentemente, a consulta aos diversos militantes assume importantes posições no estabelecimento das diretrizes de desenvolvimento para o futuro. Não obstante, o fenômeno da Internet oferece uma interessante oportunidade para verificação dos relacionamentos verticais entre as hierarquias. Pensando mais a longo prazo, o julgamento imparcial das eventualidades maximiza as possibilidades por conta das direções preferenciais no sentido do progresso. \n\n          O que temos que ter sempre em mente é que o entendimento das metas propostas prepara-nos para enfrentar situações atípicas decorrentes das condições financeiras e administrativas exigidas. É importante questionar o quanto a percepção das dificuldades acarreta um processo de reformulação e modernização do levantamento das variáveis envolvidas. Assim mesmo, a revolução dos costumes não pode mais se dissociar dos procedimentos normalmente adotados. \n\n          Por outro lado, o surgimento do comércio virtual afeta positivamente a correta previsão das posturas dos órgãos dirigentes com relação às suas atribuições. Do mesmo modo, a percepção das dificuldades causa impacto indireto na reavaliação do sistema de formação de quadros que corresponde às necessidades. Percebemos, cada vez mais, que a adoção de políticas descentralizadoras pode nos levar a considerar a reestruturação do sistema de participação geral. \n\n          Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a complexidade dos estudos efetuados promove a alavancagem das condições inegavelmente apropriadas. Acima de tudo, é fundamental ressaltar que a determinação clara de objetivos possibilita uma melhor visão global das direções preferenciais no sentido do progresso. O empenho em analisar a crescente influência da mídia deve passar por modificações independentemente da gestão inovadora da qual fazemos parte. Desta maneira, a consolidação das estruturas obstaculiza a apreciação da importância do orçamento setorial. A certificação de metodologias que nos auxiliam a lidar com a consulta aos diversos militantes não pode mais se dissociar do impacto na agilidade decisória. \n\n          Gostaria de enfatizar que o desafiador cenário globalizado aponta para a melhoria dos conhecimentos estratégicos para atingir a excelência. No mundo atual, a estrutura atual da organização maximiza as possibilidades por conta dos métodos utilizados na avaliação de resultados. É importante questionar o quanto o consenso sobre a necessidade de qualificação acarreta um processo de reformulação e modernização dos modos de operação convencionais. \n\n          Pensando mais a longo prazo, o novo modelo estrutural aqui preconizado exige a precisão e a definição das formas de ação. Neste sentido, o surgimento do comércio virtual estimula a padronização de alternativas às soluções ortodoxas. Por conseguinte, o início da atividade geral de formação de atitudes cumpre um papel essencial na formulação das novas proposições. O incentivo ao avanço tecnológico, assim como a hegemonia do ambiente político ainda não demonstrou convincentemente que vai participar na mudança das regras de conduta normativas. \n\n          Ainda assim, existem dúvidas a respeito de como o comprometimento entre as equipes auxilia a preparação e a composição das posturas dos órgãos dirigentes com relação às suas atribuições. Caros amigos, a competitividade nas transações comerciais garante a contribuição de um grupo importante na determinação dos índices pretendidos. Assim mesmo, a execução dos pontos do programa apresenta tendências no sentido de aprovar a manutenção do retorno esperado a longo prazo. Podemos já vislumbrar o modo pelo qual o fenômeno da Internet agrega valor ao estabelecimento do processo de comunicação como um todo. \n\n          Nunca é demais lembrar o peso e o significado destes problemas, uma vez que o acompanhamento das preferências de consumo faz parte de um processo de gerenciamento do fluxo de informações. A nível organizacional, o desenvolvimento contínuo de distintas formas de atuação prepara-nos para enfrentar situações atípicas decorrentes dos paradigmas corporativos.'),
(21, 'Caros amigos, a hegemonia do ambiente político talvez venha a ressaltar a relatividade do sistema de participação geral.', 'Pizza', 8.99, 6, 64, '6.jpg', 'Por conseguinte, a percepção das dificuldades obstaculiza a apreciação da importância do sistema de formação de quadros que corresponde às necessidades. Caros amigos, a adoção de políticas descentralizadoras auxilia a preparação e a composição do sistema de participação geral. Ainda assim, existem dúvidas a respeito de como o fenômeno da Internet promove a alavancagem do processo de comunicação como um todo. No entanto, não podemos esquecer que a determinação clara de objetivos possibilita uma melhor visão global das direções preferenciais no sentido do progresso. Acima de tudo, é fundamental ressaltar que o desafiador cenário globalizado prepara-nos para enfrentar situações atípicas decorrentes das novas proposições. \n\n          É importante questionar o quanto a valorização de fatores subjetivos talvez venha a ressaltar a relatividade das diversas correntes de pensamento. Do mesmo modo, a consulta aos diversos militantes estimula a padronização dos paradigmas corporativos. Gostaria de enfatizar que o consenso sobre a necessidade de qualificação oferece uma interessante oportunidade para verificação do fluxo de informações. \n\n          No mundo atual, a estrutura atual da organização maximiza as possibilidades por conta dos métodos utilizados na avaliação de resultados. Desta maneira, a constante divulgação das informações acarreta um processo de reformulação e modernização da gestão inovadora da qual fazemos parte. Podemos já vislumbrar o modo pelo qual o julgamento imparcial das eventualidades exige a precisão e a definição do orçamento setorial. É claro que o aumento do diálogo entre os diferentes setores produtivos aponta para a melhoria de alternativas às soluções ortodoxas. O incentivo ao avanço tecnológico, assim como o acompanhamento das preferências de consumo cumpre um papel essencial na formulação do investimento em reciclagem técnica. \n\n          Todavia, o entendimento das metas propostas facilita a criação das regras de conduta normativas. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se o comprometimento entre as equipes é uma das consequências dos relacionamentos verticais entre as hierarquias. O empenho em analisar a expansão dos mercados mundiais desafia a capacidade de equalização dos índices pretendidos. Assim mesmo, a execução dos pontos do programa estende o alcance e a importância das condições financeiras e administrativas exigidas. \n\n          Percebemos, cada vez mais, que o desenvolvimento contínuo de distintas formas de atuação faz parte de um processo de gerenciamento do retorno esperado a longo prazo. Nunca é demais lembrar o peso e o significado destes problemas, uma vez que o surgimento do comércio virtual agrega valor ao estabelecimento dos procedimentos normalmente adotados. A nível organizacional, a consolidação das estruturas pode nos levar a considerar a reestruturação das condições inegavelmente apropriadas. Neste sentido, a crescente influência da mídia garante a contribuição de um grupo importante na determinação dos conhecimentos estratégicos para atingir a excelência. \n\n          As experiências acumuladas demonstram que a necessidade de renovação processual apresenta tendências no sentido de aprovar a manutenção de todos os recursos funcionais envolvidos. Pensando mais a longo prazo, a revolução dos costumes ainda não demonstrou convincentemente que vai participar na mudança dos modos de operação convencionais. A prática cotidiana prova que a complexidade dos estudos efetuados assume importantes posições no estabelecimento das diretrizes de desenvolvimento para o futuro. O que temos que ter sempre em mente é que a competitividade nas transações comerciais afeta positivamente a correta previsão das posturas dos órgãos dirigentes com relação às suas atribuições. Não obstante, a contínua expansão de nossa atividade representa uma abertura para a melhoria do remanejamento dos quadros funcionais. \n\n          O cuidado em identificar pontos críticos na hegemonia do ambiente político nos obriga à análise do levantamento das variáveis envolvidas. Evidentemente, o início da atividade geral de formação de atitudes deve passar por modificações independentemente das formas de ação. A certificação de metodologias que nos auxiliam a lidar com o novo modelo estrutural aqui preconizado não pode mais se dissociar dos níveis de motivação departamental. Por outro lado, a mobilidade dos capitais internacionais causa impacto indireto na reavaliação do impacto na agilidade decisória. \n\n          Por conseguinte, a percepção das dificuldades é uma das consequências dos conhecimentos estratégicos para atingir a excelência. É claro que a adoção de políticas descentralizadoras agrega valor ao estabelecimento do retorno esperado a longo prazo. Evidentemente, o fenômeno da Internet promove a alavancagem das regras de conduta normativas. É importante questionar o quanto a valorização de fatores subjetivos estende o alcance e a importância das novas proposições. \n\n          Pensando mais a longo prazo, o desafiador cenário globalizado obstaculiza a apreciação da importância da gestão inovadora da qual fazemos parte. Do mesmo modo, a crescente influência da mídia causa impacto indireto na reavaliação das diversas correntes de pensamento. O cuidado em identificar pontos críticos na consulta aos diversos militantes estimula a padronização das formas de ação. \n\n          Acima de tudo, é fundamental ressaltar que o julgamento imparcial das eventualidades apresenta tendências no sentido de aprovar a manutenção dos paradigmas corporativos. No mundo atual, o novo modelo estrutural aqui preconizado maximiza as possibilidades por conta dos métodos utilizados na avaliação de resultados. A certificação de metodologias que nos auxiliam a lidar com a mobilidade dos capitais internacionais acarreta um processo de reformulação e modernização do fluxo de informações. A nível organizacional, a consolidação das estruturas facilita a criação das direções preferenciais no sentido do progresso. O empenho em analisar o desenvolvimento contínuo de distintas formas de atuação oferece uma interessante oportunidade para verificação de alternativas às soluções ortodoxas. \n\n          Desta maneira, a revolução dos costumes cumpre um papel essencial na formulação do investimento em reciclagem técnica. Neste sentido, a hegemonia do ambiente político exige a precisão e a definição dos relacionamentos verticais entre as hierarquias. Percebemos, cada vez mais, que o comprometimento entre as equipes prepara-nos para enfrentar situações atípicas decorrentes do processo de comunicação como um todo. As experiências acumuladas demonstram que a determinação clara de objetivos nos obriga à análise do levantamento das variáveis envolvidas. Caros amigos, a necessidade de renovação processual pode nos levar a considerar a reestruturação das condições financeiras e administrativas exigidas. \n\n          Podemos já vislumbrar o modo pelo qual o consenso sobre a necessidade de qualificação representa uma abertura para a melhoria do sistema de participação geral. Nunca é demais lembrar o peso e o significado destes problemas, uma vez que o início da atividade geral de formação de atitudes possibilita uma melhor visão global dos procedimentos normalmente adotados. O incentivo ao avanço tecnológico, assim como a competitividade nas transações comerciais desafia a capacidade de equalização das posturas dos órgãos dirigentes com relação às suas atribuições.');
INSERT INTO `produto` (`idProduto`, `descricao`, `nome_Produto`, `preco`, `qtde_Estoque`, `idCategoria`, `imagem`, `descricao_detalhada`) VALUES
(22, 'Percebemos, cada vez mais, que o acompanhamento das preferências de consumo estende o alcance e a importância dos conhecimentos estratégicos para atingir a excelência.', 'Pudim', 7.45, 3, 65, '7.jpg', 'Caros amigos, o consenso sobre a necessidade de qualificação agrega valor ao estabelecimento dos conhecimentos estratégicos para atingir a excelência. É claro que a complexidade dos estudos efetuados facilita a criação dos níveis de motivação departamental. No mundo atual, o acompanhamento das preferências de consumo promove a alavancagem das regras de conduta normativas. Evidentemente, a valorização de fatores subjetivos desafia a capacidade de equalização do remanejamento dos quadros funcionais. Todavia, o desafiador cenário globalizado obstaculiza a apreciação da importância das formas de ação. \n\n          O que temos que ter sempre em mente é que a necessidade de renovação processual acarreta um processo de reformulação e modernização das diversas correntes de pensamento. O cuidado em identificar pontos críticos no novo modelo estrutural aqui preconizado prepara-nos para enfrentar situações atípicas decorrentes das condições financeiras e administrativas exigidas. Acima de tudo, é fundamental ressaltar que o julgamento imparcial das eventualidades auxilia a preparação e a composição dos paradigmas corporativos. \n\n          É importante questionar o quanto a consulta aos diversos militantes ainda não demonstrou convincentemente que vai participar na mudança do retorno esperado a longo prazo. A certificação de metodologias que nos auxiliam a lidar com a execução dos pontos do programa garante a contribuição de um grupo importante na determinação das diretrizes de desenvolvimento para o futuro. Podemos já vislumbrar o modo pelo qual o surgimento do comércio virtual possibilita uma melhor visão global do investimento em reciclagem técnica. \n\n          A nível organizacional, a constante divulgação das informações oferece uma interessante oportunidade para verificação de alternativas às soluções ortodoxas. Assim mesmo, a percepção das dificuldades talvez venha a ressaltar a relatividade dos procedimentos normalmente adotados. Não obstante, a crescente influência da mídia estende o alcance e a importância das condições inegavelmente apropriadas. Percebemos, cada vez mais, que o comprometimento entre as equipes causa impacto indireto na reavaliação do sistema de participação geral. O incentivo ao avanço tecnológico, assim como a determinação clara de objetivos nos obriga à análise das novas proposições. \n\n          Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a competitividade nas transações comerciais pode nos levar a considerar a reestruturação de todos os recursos funcionais envolvidos. A prática cotidiana prova que a consolidação das estruturas representa uma abertura para a melhoria das posturas dos órgãos dirigentes com relação às suas atribuições. As experiências acumuladas demonstram que o início da atividade geral de formação de atitudes estimula a padronização da gestão inovadora da qual fazemos parte. Por outro lado, a contínua expansão de nossa atividade maximiza as possibilidades por conta do fluxo de informações. O empenho em analisar a adoção de políticas descentralizadoras apresenta tendências no sentido de aprovar a manutenção do orçamento setorial. \n\n          Nunca é demais lembrar o peso e o significado destes problemas, uma vez que a mobilidade dos capitais internacionais é uma das consequências do levantamento das variáveis envolvidas. Gostaria de enfatizar que a estrutura atual da organização aponta para a melhoria do sistema de formação de quadros que corresponde às necessidades. Desta maneira, o aumento do diálogo entre os diferentes setores produtivos assume importantes posições no estabelecimento dos métodos utilizados na avaliação de resultados. \n\n          Por conseguinte, a revolução dos costumes afeta positivamente a correta previsão do processo de comunicação como um todo. Do mesmo modo, o entendimento das metas propostas faz parte de um processo de gerenciamento dos modos de operação convencionais. No entanto, não podemos esquecer que a expansão dos mercados mundiais exige a precisão e a definição dos relacionamentos verticais entre as hierarquias. Ainda assim, existem dúvidas a respeito de como a hegemonia do ambiente político deve passar por modificações independentemente das direções preferenciais no sentido do progresso. Neste sentido, o fenômeno da Internet não pode mais se dissociar dos índices pretendidos. \n\n          Pensando mais a longo prazo, o desenvolvimento contínuo de distintas formas de atuação cumpre um papel essencial na formulação do impacto na agilidade decisória. Assim mesmo, o surgimento do comércio virtual garante a contribuição de um grupo importante na determinação de alternativas às soluções ortodoxas. A prática cotidiana prova que a complexidade dos estudos efetuados desafia a capacidade de equalização dos modos de operação convencionais. No mundo atual, a competitividade nas transações comerciais auxilia a preparação e a composição das regras de conduta normativas. Evidentemente, o comprometimento entre as equipes acarreta um processo de reformulação e modernização dos métodos utilizados na avaliação de resultados. \n\n          Todavia, a consulta aos diversos militantes deve passar por modificações independentemente das formas de ação. A certificação de metodologias que nos auxiliam a lidar com o desenvolvimento contínuo de distintas formas de atuação facilita a criação do sistema de formação de quadros que corresponde às necessidades. Do mesmo modo, o novo modelo estrutural aqui preconizado prepara-nos para enfrentar situações atípicas decorrentes das posturas dos órgãos dirigentes com relação às suas atribuições. \n\n          Acima de tudo, é fundamental ressaltar que a estrutura atual da organização estimula a padronização da gestão inovadora da qual fazemos parte. É importante questionar o quanto o desafiador cenário globalizado afeta positivamente a correta previsão das condições inegavelmente apropriadas. Por outro lado, a mobilidade dos capitais internacionais causa impacto indireto na reavaliação dos paradigmas corporativos. Ainda assim, existem dúvidas a respeito de como a crescente influência da mídia possibilita uma melhor visão global do fluxo de informações. \n\n          O empenho em analisar o julgamento imparcial das eventualidades oferece uma interessante oportunidade para verificação do levantamento das variáveis envolvidas. Por conseguinte, a percepção das dificuldades agrega valor ao estabelecimento dos conhecimentos estratégicos para atingir a excelência. Não obstante, o consenso sobre a necessidade de qualificação estende o alcance e a importância do remanejamento dos quadros funcionais. \n\n          Percebemos, cada vez mais, que a valorização de fatores subjetivos representa uma abertura para a melhoria dos procedimentos normalmente adotados. O incentivo ao avanço tecnológico, assim como a necessidade de renovação processual nos obriga à análise das condições financeiras e administrativas exigidas. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se o acompanhamento das preferências de consumo pode nos levar a considerar a reestruturação das novas proposições. É claro que a consolidação das estruturas faz parte de um processo de gerenciamento de todos os recursos funcionais envolvidos. \n\n          No entanto, não podemos esquecer que o início da atividade geral de formação de atitudes promove a alavancagem dos relacionamentos verticais entre as hierarquias. O que temos que ter sempre em mente é que a contínua expansão de nossa atividade exige a precisão e a definição do orçamento setorial.'),
(23, 'A nível organizacional, o comprometimento entre as equipes faz parte de um processo de gerenciamento das condições financeiras e administrativas exigidas.', 'Coisa Estranha', 7.99, 1, 66, '8.jpg', 'Neste sentido, o entendimento das metas propostas maximiza as possibilidades por conta do levantamento das variáveis envolvidas. A prática cotidiana prova que a adoção de políticas descentralizadoras facilita a criação dos níveis de motivação departamental. Acima de tudo, é fundamental ressaltar que o aumento do diálogo entre os diferentes setores produtivos ainda não demonstrou convincentemente que vai participar na mudança do processo de comunicação como um todo. Assim mesmo, a consulta aos diversos militantes cumpre um papel essencial na formulação das diretrizes de desenvolvimento para o futuro. Evidentemente, a revolução dos costumes obstaculiza a apreciação da importância da gestão inovadora da qual fazemos parte. \n\n          Caros amigos, a contínua expansão de nossa atividade promove a alavancagem de alternativas às soluções ortodoxas. Desta maneira, a hegemonia do ambiente político garante a contribuição de um grupo importante na determinação dos procedimentos normalmente adotados. Gostaria de enfatizar que a consolidação das estruturas apresenta tendências no sentido de aprovar a manutenção das diversas correntes de pensamento. \n\n          Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a crescente influência da mídia desafia a capacidade de equalização dos paradigmas corporativos. Do mesmo modo, a estrutura atual da organização afeta positivamente a correta previsão dos modos de operação convencionais. O que temos que ter sempre em mente é que a complexidade dos estudos efetuados não pode mais se dissociar dos índices pretendidos. \n\n          A certificação de metodologias que nos auxiliam a lidar com o julgamento imparcial das eventualidades prepara-nos para enfrentar situações atípicas decorrentes dos métodos utilizados na avaliação de resultados. Ainda assim, existem dúvidas a respeito de como a percepção das dificuldades agrega valor ao estabelecimento do investimento em reciclagem técnica. Por outro lado, o início da atividade geral de formação de atitudes estende o alcance e a importância do impacto na agilidade decisória. Pensando mais a longo prazo, o surgimento do comércio virtual oferece uma interessante oportunidade para verificação dos conhecimentos estratégicos para atingir a excelência. \n\n          No mundo atual, a expansão dos mercados mundiais deve passar por modificações independentemente das regras de conduta normativas. O incentivo ao avanço tecnológico, assim como a valorização de fatores subjetivos assume importantes posições no estabelecimento do remanejamento dos quadros funcionais. É claro que a competitividade nas transações comerciais auxilia a preparação e a composição das posturas dos órgãos dirigentes com relação às suas atribuições. O cuidado em identificar pontos críticos na necessidade de renovação processual exige a precisão e a definição dos relacionamentos verticais entre as hierarquias. \n\n          Por conseguinte, o fenômeno da Internet causa impacto indireto na reavaliação do orçamento setorial. A nível organizacional, o desafiador cenário globalizado acarreta um processo de reformulação e modernização de todos os recursos funcionais envolvidos. Nunca é demais lembrar o peso e o significado destes problemas, uma vez que a execução dos pontos do programa estimula a padronização das condições financeiras e administrativas exigidas. \n\n          No entanto, não podemos esquecer que o acompanhamento das preferências de consumo possibilita uma melhor visão global das direções preferenciais no sentido do progresso. Percebemos, cada vez mais, que a determinação clara de objetivos nos obriga à análise do sistema de formação de quadros que corresponde às necessidades. Todavia, o consenso sobre a necessidade de qualificação faz parte de um processo de gerenciamento das condições inegavelmente apropriadas.'),
(24, 'Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a valorização de fatores subjetivos faz parte de um processo de gerenciamento do fluxo de informações.', 'Coisa de Rico', 99.99, 7, 67, '9.jpg', 'Neste sentido, a expansão dos mercados mundiais nos obriga à análise dos métodos utilizados na avaliação de resultados. Ainda assim, existem dúvidas a respeito de como a adoção de políticas descentralizadoras possibilita uma melhor visão global dos níveis de motivação departamental. A nível organizacional, o aumento do diálogo entre os diferentes setores produtivos maximiza as possibilidades por conta dos conhecimentos estratégicos para atingir a excelência. \n\n          O que temos que ter sempre em mente é que o novo modelo estrutural aqui preconizado oferece uma interessante oportunidade para verificação do levantamento das variáveis envolvidas. Caros amigos, a revolução dos costumes obstaculiza a apreciação da importância dos procedimentos normalmente adotados. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a determinação clara de objetivos causa impacto indireto na reavaliação de alternativas às soluções ortodoxas. Desta maneira, a consulta aos diversos militantes garante a contribuição de um grupo importante na determinação da gestão inovadora da qual fazemos parte. \n\n          Assim mesmo, a hegemonia do ambiente político estende o alcance e a importância do sistema de participação geral. O empenho em analisar o comprometimento entre as equipes desafia a capacidade de equalização dos paradigmas corporativos. Do mesmo modo, a estrutura atual da organização afeta positivamente a correta previsão das novas proposições. \n\n          Gostaria de enfatizar que o consenso sobre a necessidade de qualificação deve passar por modificações independentemente dos índices pretendidos. A certificação de metodologias que nos auxiliam a lidar com o julgamento imparcial das eventualidades prepara-nos para enfrentar situações atípicas decorrentes do remanejamento dos quadros funcionais. A prática cotidiana prova que a percepção das dificuldades talvez venha a ressaltar a relatividade dos relacionamentos verticais entre as hierarquias. Por outro lado, a complexidade dos estudos efetuados faz parte de um processo de gerenciamento dos modos de operação convencionais. \n\n          Pensando mais a longo prazo, o surgimento do comércio virtual não pode mais se dissociar do processo de comunicação como um todo. Nunca é demais lembrar o peso e o significado destes problemas, uma vez que a mobilidade dos capitais internacionais agrega valor ao estabelecimento do retorno esperado a longo prazo. O incentivo ao avanço tecnológico, assim como a valorização de fatores subjetivos é uma das consequências das direções preferenciais no sentido do progresso. É claro que o início da atividade geral de formação de atitudes exige a precisão e a definição das diversas correntes de pensamento. \n\n          O cuidado em identificar pontos críticos no acompanhamento das preferências de consumo auxilia a preparação e a composição do investimento em reciclagem técnica. No entanto, não podemos esquecer que o desafiador cenário globalizado ainda não demonstrou convincentemente que vai participar na mudança do sistema de formação de quadros que corresponde às necessidades. Acima de tudo, é fundamental ressaltar que o fenômeno da Internet facilita a criação das posturas dos órgãos dirigentes com relação às suas atribuições. \n\n          Não obstante, o desenvolvimento contínuo de distintas formas de atuação estimula a padronização das formas de ação. Podemos já vislumbrar o modo pelo qual a crescente influência da mídia promove a alavancagem das diretrizes de desenvolvimento para o futuro. Percebemos, cada vez mais, que a consolidação das estruturas pode nos levar a considerar a reestruturação das condições financeiras e administrativas exigidas. \n\n          Por conseguinte, a competitividade nas transações comerciais representa uma abertura para a melhoria das condições inegavelmente apropriadas.'),
(43, 'Percebemos, cada vez mais, que a estrutura atual da organização obstaculiza a apreciação da importância do levantamento das variáveis envolvidas. Por outro lado, a percepção das dificuldades causa impacto indireto na reavaliação dos conhecimentos estratég', 'Picanha', 12, 10, 59, '[3]produto.jpeg', 'A prática cotidiana prova que a estrutura atual da organização facilita a criação do impacto na agilidade decisória. Por conseguinte, a percepção das dificuldades causa impacto indireto na reavaliação dos conhecimentos estratégicos para atingir a excelência. Assim mesmo, o novo modelo estrutural aqui preconizado assume importantes posições no estabelecimento das condições financeiras e administrativas exigidas. É claro que a consulta aos diversos militantes faz parte de um processo de gerenciamento das regras de conduta normativas. \r\n\r\n          Pensando mais a longo prazo, a complexidade dos estudos efetuados garante a contribuição de um grupo importante na determinação das diretrizes de desenvolvimento para o futuro. Gostaria de enfatizar que o acompanhamento das preferências de consumo ainda não demonstrou convincentemente que vai participar na mudança das condições inegavelmente apropriadas. Podemos já vislumbrar o modo pelo qual o comprometimento entre as equipes deve passar por modificações independentemente dos paradigmas corporativos. Neste sentido, a constante divulgação das informações exige a precisão e a definição do retorno esperado a longo prazo. Caros amigos, a necessidade de renovação processual apresenta tendências no sentido de aprovar a manutenção do sistema de participação geral. \r\n\r\n          As experiências acumuladas demonstram que a mobilidade dos capitais internacionais estende o alcance e a importância das diversas correntes de pensamento. O empenho em analisar o aumento do diálogo entre os diferentes setores produtivos talvez venha a ressaltar a relatividade de todos os recursos funcionais envolvidos. Do mesmo modo, a adoção de políticas descentralizadoras é uma das consequências das novas proposições. Não obstante, o fenômeno da Internet promove a alavancagem da gestão inovadora da qual fazemos parte. \r\n\r\n          Acima de tudo, é fundamental ressaltar que a valorização de fatores subjetivos agrega valor ao estabelecimento das posturas dos órgãos dirigentes com relação às suas atribuições. No mundo atual, a determinação clara de objetivos prepara-nos para enfrentar situações atípicas decorrentes dos índices pretendidos. Desta maneira, a consolidação das estruturas afeta positivamente a correta previsão do fluxo de informações. Nunca é demais lembrar o peso e o significado destes problemas, uma vez que a competitividade nas transações comerciais desafia a capacidade de equalização do processo de comunicação como um todo. \r\n\r\n          A nível organizacional, o desenvolvimento contínuo de distintas formas de atuação não pode mais se dissociar dos procedimentos normalmente adotados. Ainda assim, existem dúvidas a respeito de como a revolução dos costumes estimula a padronização das formas de ação. O cuidado em identificar pontos críticos no surgimento do comércio virtual maximiza as possibilidades por conta das direções preferenciais no sentido do progresso. \r\n\r\n          Percebemos, cada vez mais, que o início da atividade geral de formação de atitudes pode nos levar a considerar a reestruturação dos níveis de motivação departamental. A certificação de metodologias que nos auxiliam a lidar com a contínua expansão de nossa atividade oferece uma interessante oportunidade para verificação do orçamento setorial. No entanto, não podemos esquecer que a hegemonia do ambiente político obstaculiza a apreciação da importância do sistema de formação de quadros que corresponde às necessidades. Evidentemente, a execução dos pontos do programa aponta para a melhoria do remanejamento dos quadros funcionais. \r\n\r\n          Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se o desafiador cenário globalizado nos obriga à análise do levantamento das variáveis envolvidas. O que temos que ter sempre em mente é que o entendimento das metas propostas auxilia a preparação e a composição dos modos de operação convencionais. O incentivo ao avanço tecnológico, assim como a crescente influência da mídia possibilita uma melhor visão global de alternativas às soluções ortodoxas. Todavia, a expansão dos mercados mundiais cumpre um papel essencial na formulação dos métodos utilizados na avaliação de resultados. \r\n\r\n          Por outro lado, o julgamento imparcial das eventualidades representa uma abertura para a melhoria do investimento em reciclagem técnica. É importante questionar o quanto o consenso sobre a necessidade de qualificação acarreta um processo de reformulação e modernização dos relacionamentos verticais entre as hierarquias. A prática cotidiana prova que a mobilidade dos capitais internacionais facilita a criação do impacto na agilidade decisória. Neste sentido, o desenvolvimento contínuo de distintas formas de atuação causa impacto indireto na reavaliação das formas de ação. Assim mesmo, o novo modelo estrutural aqui preconizado obstaculiza a apreciação da importância do sistema de formação de quadros que corresponde às necessidades. \r\n\r\n          É claro que a expansão dos mercados mundiais faz parte de um processo de gerenciamento dos paradigmas corporativos. Acima de tudo, é fundamental ressaltar que a complexidade dos estudos efetuados agrega valor ao estabelecimento das diversas correntes de pensamento. O empenho em analisar o fenômeno da Internet aponta para a melhoria das condições financeiras e administrativas exigidas. Ainda assim, existem dúvidas a respeito de como a contínua expansão de nossa atividade ainda não demonstrou convincentemente que vai participar na mudança do fluxo de informações. \r\n\r\n          Por conseguinte, a estrutura atual da organização afeta positivamente a correta previsão do retorno esperado a longo prazo. O cuidado em identificar pontos críticos na crescente influência da mídia assume importantes posições no estabelecimento do sistema de participação geral. Por outro lado, o aumento do diálogo entre os diferentes setores produtivos estende o alcance e a importância das direções preferenciais no sentido do progresso.'),
(44, 'Percebemos, cada vez mais, que a estrutura atual da organização obstaculiza a apreciação da importância do levantamento das variáveis envolvidas. Por outro lado, a percepção das dificuldades causa impacto indireto na reavaliação dos conhecimentos estratég', 'Farofa', 12, 10, 59, 'produto.jpeg', 'A prática cotidiana prova que a estrutura atual da organização facilita a criação do impacto na agilidade decisória. Por conseguinte, a percepção das dificuldades causa impacto indireto na reavaliação dos conhecimentos estratégicos para atingir a excelência. Assim mesmo, o novo modelo estrutural aqui preconizado assume importantes posições no estabelecimento das condições financeiras e administrativas exigidas. É claro que a consulta aos diversos militantes faz parte de um processo de gerenciamento das regras de conduta normativas. \r\n\r\n          Pensando mais a longo prazo, a complexidade dos estudos efetuados garante a contribuição de um grupo importante na determinação das diretrizes de desenvolvimento para o futuro. Gostaria de enfatizar que o acompanhamento das preferências de consumo ainda não demonstrou convincentemente que vai participar na mudança das condições inegavelmente apropriadas. Podemos já vislumbrar o modo pelo qual o comprometimento entre as equipes deve passar por modificações independentemente dos paradigmas corporativos. Neste sentido, a constante divulgação das informações exige a precisão e a definição do retorno esperado a longo prazo. Caros amigos, a necessidade de renovação processual apresenta tendências no sentido de aprovar a manutenção do sistema de participação geral. \r\n\r\n          As experiências acumuladas demonstram que a mobilidade dos capitais internacionais estende o alcance e a importância das diversas correntes de pensamento. O empenho em analisar o aumento do diálogo entre os diferentes setores produtivos talvez venha a ressaltar a relatividade de todos os recursos funcionais envolvidos. Do mesmo modo, a adoção de políticas descentralizadoras é uma das consequências das novas proposições. Não obstante, o fenômeno da Internet promove a alavancagem da gestão inovadora da qual fazemos parte. \r\n\r\n          Acima de tudo, é fundamental ressaltar que a valorização de fatores subjetivos agrega valor ao estabelecimento das posturas dos órgãos dirigentes com relação às suas atribuições. No mundo atual, a determinação clara de objetivos prepara-nos para enfrentar situações atípicas decorrentes dos índices pretendidos. Desta maneira, a consolidação das estruturas afeta positivamente a correta previsão do fluxo de informações. Nunca é demais lembrar o peso e o significado destes problemas, uma vez que a competitividade nas transações comerciais desafia a capacidade de equalização do processo de comunicação como um todo. \r\n\r\n          A nível organizacional, o desenvolvimento contínuo de distintas formas de atuação não pode mais se dissociar dos procedimentos normalmente adotados. Ainda assim, existem dúvidas a respeito de como a revolução dos costumes estimula a padronização das formas de ação. O cuidado em identificar pontos críticos no surgimento do comércio virtual maximiza as possibilidades por conta das direções preferenciais no sentido do progresso. \r\n\r\n          Percebemos, cada vez mais, que o início da atividade geral de formação de atitudes pode nos levar a considerar a reestruturação dos níveis de motivação departamental. A certificação de metodologias que nos auxiliam a lidar com a contínua expansão de nossa atividade oferece uma interessante oportunidade para verificação do orçamento setorial. No entanto, não podemos esquecer que a hegemonia do ambiente político obstaculiza a apreciação da importância do sistema de formação de quadros que corresponde às necessidades. Evidentemente, a execução dos pontos do programa aponta para a melhoria do remanejamento dos quadros funcionais. \r\n\r\n          Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se o desafiador cenário globalizado nos obriga à análise do levantamento das variáveis envolvidas. O que temos que ter sempre em mente é que o entendimento das metas propostas auxilia a preparação e a composição dos modos de operação convencionais. O incentivo ao avanço tecnológico, assim como a crescente influência da mídia possibilita uma melhor visão global de alternativas às soluções ortodoxas. Todavia, a expansão dos mercados mundiais cumpre um papel essencial na formulação dos métodos utilizados na avaliação de resultados. \r\n\r\n          Por outro lado, o julgamento imparcial das eventualidades representa uma abertura para a melhoria do investimento em reciclagem técnica. É importante questionar o quanto o consenso sobre a necessidade de qualificação acarreta um processo de reformulação e modernização dos relacionamentos verticais entre as hierarquias. A prática cotidiana prova que a mobilidade dos capitais internacionais facilita a criação do impacto na agilidade decisória. Neste sentido, o desenvolvimento contínuo de distintas formas de atuação causa impacto indireto na reavaliação das formas de ação. Assim mesmo, o novo modelo estrutural aqui preconizado obstaculiza a apreciação da importância do sistema de formação de quadros que corresponde às necessidades. \r\n\r\n          É claro que a expansão dos mercados mundiais faz parte de um processo de gerenciamento dos paradigmas corporativos. Acima de tudo, é fundamental ressaltar que a complexidade dos estudos efetuados agrega valor ao estabelecimento das diversas correntes de pensamento. O empenho em analisar o fenômeno da Internet aponta para a melhoria das condições financeiras e administrativas exigidas. Ainda assim, existem dúvidas a respeito de como a contínua expansão de nossa atividade ainda não demonstrou convincentemente que vai participar na mudança do fluxo de informações. \r\n\r\n          Por conseguinte, a estrutura atual da organização afeta positivamente a correta previsão do retorno esperado a longo prazo. O cuidado em identificar pontos críticos na crescente influência da mídia assume importantes posições no estabelecimento do sistema de participação geral. Por outro lado, o aumento do diálogo entre os diferentes setores produtivos estende o alcance e a importância das direções preferenciais no sentido do progresso.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `secao`
--

CREATE TABLE IF NOT EXISTS `secao` (
  `idSecao` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  `tipo_Secao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idSecao`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `secao`
--

INSERT INTO `secao` (`idSecao`, `descricao`, `tipo_Secao`) VALUES
(1, NULL, 'Mercearia de Alto Giro'),
(2, NULL, 'Mercearia Doce'),
(3, NULL, 'Matinais'),
(4, NULL, 'Perecíveis Lácteos'),
(5, NULL, 'Perecíveis Congelados e Resfriados'),
(6, NULL, 'Bebidas Não Alcoólicas'),
(7, NULL, 'Bebidas Alcoólicas'),
(8, NULL, 'Higiene, Saúde e Beleza'),
(9, NULL, 'Limpeza'),
(10, NULL, 'Descartáveis'),
(11, NULL, 'Bazar'),
(12, NULL, 'Equipamentos, Insumos e Serviços');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `acesssoComponentes` longtext,
  `cpf` varchar(255) DEFAULT NULL,
  `dt_Nasc` datetime DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nome_Usuario` varchar(255) DEFAULT NULL,
  `permissao` longtext,
  `senha` char(32) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `telefone_Celular` varchar(255) DEFAULT NULL,
  `telefone_Fixo` varchar(255) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `acesssoComponentes`, `cpf`, `dt_Nasc`, `email`, `nome_Usuario`, `permissao`, `senha`, `sexo`, `telefone_Celular`, `telefone_Fixo`, `status`) VALUES
(15, NULL, '039.886.990-12', '1994-05-16 00:00:00', 'paulo-caue99@ppe.ufrj.br', 'Paulo Cauê Thales Moura', NULL, 'e10adc3949ba59abbe56e057f20f883e', 'M', '(81) 99462-8334', '(81) 2612-4099', '1'),
(16, NULL, '288.481.334-95', '1994-05-02 00:00:00', 'hugo.andre.moura@dpauladecor.com.br', 'Hugo André Juan Moura', NULL, 'e10adc3949ba59abbe56e057f20f883e', 'M', '(63) 8781-6996', '(63) 3804-3107', '1'),
(17, NULL, '700.257.894-49', '1994-10-12 00:00:00', 'daniel.murilo.monteiro@dmcard.com.br', 'Daniel Murilo Raul Monteiro', NULL, 'e10adc3949ba59abbe56e057f20f883e', 'M', '(68) 9303-2212', '(68) 2801-7641', '1'),
(18, NULL, '349.797.101-40', '1994-10-16 00:00:00', 'theo-pedro98@gustavoscoelho.com.br', 'Theo Pedro Henrique Fernandes', NULL, 'e10adc3949ba59abbe56e057f20f883e', 'M', '(86) 98690-1990', '(86) 3539-4820', '1'),
(19, NULL, '736.932.213-08', '1994-10-26 00:00:00', 'enrico.murilo.dias@fosjc.unesp.br', 'Enrico Murilo Diego Dias', NULL, 'e10adc3949ba59abbe56e057f20f883e', 'M', '(79) 99431-9083', '(79) 2508-1540', '1'),
(20, NULL, '816.573.516-02', '1994-07-22 00:00:00', 'francisco.iago.cardoso@hormail.com', 'Francisco Iago Lucca Cardoso', NULL, 'e10adc3949ba59abbe56e057f20f883e', 'M', '(67) 9670-9501', '(67) 3894-9141', '1'),
(21, NULL, '920.908.588-42', '1994-05-20 00:00:00', 'hugo-tomas84@golinelli.eti.br', 'Hugo Tomás Almeida', NULL, 'e10adc3949ba59abbe56e057f20f883e', 'M', '(31) 99144-2088', '(31) 3986-5590', '1'),
(22, NULL, '12345678900', '2016-11-01 00:00:00', 'admin', 'administrador', NULL, '21232f297a57a5a743894a0e4a801fc3', 'M', '1234567890', '1234567890', '1'),
(23, NULL, 'ddddddddddd', '2016-11-03 00:00:00', 'bbbbbb', 'aaaaaaa', NULL, 'c1f68ec06b490b3ecb4066b1b13a9ee9', 'M', 'ffffffff', 'eeeee', '1'),
(28, NULL, 'wwwwww', '2016-11-03 00:00:00', 'ssssssssssss', 'ssssss', NULL, 'af15d5fdacd5fdfea300e88a8e253e82', 'M', 'ffffffff', 'eeeee', '1'),
(32, NULL, 'tttttttttttt', '2016-11-03 00:00:00', 'ssssssssssss', 'ssssss', NULL, 'c1f68ec06b490b3ecb4066b1b13a9ee9', 'M', 'ffffffff', 'eeeee', '1'),
(33, NULL, 'tttttttttttt', '2016-11-03 00:00:00', 'ssssssssssss', 'ssssss', NULL, 'c1f68ec06b490b3ecb4066b1b13a9ee9', 'M', 'ffffffff', 'eeeee', '1'),
(34, NULL, 'jjjjjjjjj', '2016-11-03 00:00:00', 'jaja@deli.com', 'jailson', NULL, '915a6a53e87cde98efa46d557a4625b9', 'M', 'jjjjjjjjj', 'jjjjjjjjj', '1'),
(35, NULL, 'sssssss', '2016-11-02 00:00:00', 'gordinhos@gmail.com', 'leandros', NULL, 'dad69929476f725b187cbde105822b30', 'M', 'sssssss', 'sssssss', '1'),
(36, NULL, '123456789', '2016-11-01 00:00:00', 'muxiba@gmail.com', 'Marcelo', NULL, '6eaa17fcbb1e66cfe32ca6480900e995', 'M', '123456789', '123456789', '1'),
(37, NULL, '111111111', '2016-12-14 00:00:00', 'tttttttttttt', 'tttttttttt', 'sssss', '16fcb1091f8a0cc70c96e2ff97fdd213', 'M', '33333333', '333333333', '1'),
(38, NULL, '111111111', '2016-12-14 00:00:00', 'tttttttttttt', 'leandros Gordinhos', 'sssss', '338d811d532553557ca33be45b6bde55', 'M', '33333333', '333333333', '1');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `FK5D54E13397186BD9` FOREIGN KEY (`idSecao`) REFERENCES `secao` (`idSecao`);

--
-- Limitadores para a tabela `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `FKAF3F357E3808F6F7` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `FKAF3F357E672223BC` FOREIGN KEY (`idForma_Pagamento`) REFERENCES `forma_pagamento` (`idForma_Pagamento`);

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `fk_endereco_usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `entrega`
--
ALTER TABLE `entrega`
  ADD CONSTRAINT `FKA12275B8167D5B01` FOREIGN KEY (`idCompra`) REFERENCES `compra` (`idCompra`),
  ADD CONSTRAINT `fk_entrega_endereco` FOREIGN KEY (`idEndereco`) REFERENCES `endereco` (`idEndereco`);

--
-- Limitadores para a tabela `item_compra`
--
ALTER TABLE `item_compra`
  ADD CONSTRAINT `FKCDA3AC2A167D5B01` FOREIGN KEY (`idCompra`) REFERENCES `compra` (`idCompra`),
  ADD CONSTRAINT `FKCDA3AC2A22FAAE8D` FOREIGN KEY (`idProduto`) REFERENCES `produto` (`idProduto`);

--
-- Limitadores para a tabela `lote`
--
ALTER TABLE `lote`
  ADD CONSTRAINT `FK32C73422FAAE8D` FOREIGN KEY (`idProduto`) REFERENCES `produto` (`idProduto`);

--
-- Limitadores para a tabela `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `FKC4E369CC3808F6F7` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `FKC4E369CC825DD257` FOREIGN KEY (`idEndereco`) REFERENCES `endereco` (`idEndereco`);

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fk_categoria_produto` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

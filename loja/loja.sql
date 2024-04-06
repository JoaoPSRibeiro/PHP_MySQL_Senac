-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/04/2024 às 13:08
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id_carrinho` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL DEFAULT 0,
  `data` datetime NOT NULL,
  `num_cupom` varchar(20) NOT NULL,
  `valor_pedido` float NOT NULL DEFAULT 0,
  `valor_desconto` float NOT NULL DEFAULT 0,
  `valor_total` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `carrinho`
--

INSERT INTO `carrinho` (`id_carrinho`, `id_cliente`, `data`, `num_cupom`, `valor_pedido`, `valor_desconto`, `valor_total`) VALUES
(1, 3, '2024-03-22 02:16:13', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinho_itens`
--

CREATE TABLE `carrinho_itens` (
  `id_item` int(11) NOT NULL,
  `id_carrinho` int(11) NOT NULL DEFAULT 0,
  `id_produto` int(11) NOT NULL DEFAULT 0,
  `quantidade` int(11) NOT NULL DEFAULT 0,
  `valor_unitario` float NOT NULL DEFAULT 0,
  `valor_total` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `carrinho_itens`
--

INSERT INTO `carrinho_itens` (`id_item`, `id_carrinho`, `id_produto`, `quantidade`, `valor_unitario`, `valor_total`) VALUES
(2, 1, 20, 4, 1500, 6000),
(3, 1, 21, 2, 500, 1000),
(4, 1, 22, 1, 150, 150),
(5, 1, 20, 1, 1500, 1500);

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `desc_categoria` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `desc_categoria`) VALUES
(1, 'Monitores'),
(3, 'Notebooks'),
(4, 'Impressoras'),
(5, 'Celulares'),
(6, 'Memórias'),
(7, 'Roteadores'),
(8, 'Desktops'),
(9, 'Gabinetes');

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(60) NOT NULL,
  `cpf_cnpj` varchar(25) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `logradouro` varchar(60) NOT NULL,
  `numero` varchar(15) NOT NULL,
  `complemento` varchar(15) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome_cliente`, `cpf_cnpj`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `celular`, `email`, `password`) VALUES
(3, 'joao', '13590585000270', '01.222-903', 'R DR. VILA NOVA', '228', 'casa 4', 'VILA BUARQUE', 'Barueri', 'SP', '11988180324', 'netflix.contato@netflix.com', '1234');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `id_fornecedor` int(11) NOT NULL,
  `nome_fornecedor` varchar(80) NOT NULL,
  `cpf_cnpj` varchar(25) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `logradouro` varchar(60) NOT NULL,
  `numero` varchar(15) NOT NULL,
  `complemento` varchar(15) NOT NULL,
  `bairro` varchar(60) NOT NULL,
  `cidade` varchar(80) NOT NULL,
  `uf` varchar(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `celular` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `fornecedores`
--

INSERT INTO `fornecedores` (`id_fornecedor`, `nome_fornecedor`, `cpf_cnpj`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `email`, `celular`) VALUES
(1, 'dell ', '12791147/0001-10', '05046001', 'rua rurelia', '1695', 'casa 4', 'vila romana', 'sao paulo', 'sp', 'jpsribeiro@gmail.com', '11988180324'),
(2, 'NETFLIX ENTRETENIMENTO BRASIL LTDA.', '13590585000270', '06455911', 'ALAMEDA XINGU 350', '350', 'ANDAR 14', 'ALPHAVILLE INDUSTRIAL', 'BARUERI', 'SP', 'netflix.contato@netflix.com', ''),
(3, 'NETFLIX ENTRETENIMENTO BRASIL LTDA.', ' 62.576.723/0001-90', '06455911', 'ALAMEDA XINGU 350', '350', 'ANDAR 14', 'ALPHAVILLE INDUSTRIAL', 'BARUERI', 'SP', '', ''),
(4, 'AUTO POSTO BOM JESUS DE PIRAPORA LTDA', ' 62.576.723/0001-90', '05045000', 'RUA ESPARTACO', '626', '', 'LAPA', 'SAO PAULO', 'SP', '', ''),
(5, 'SAMSUNG ELETRÔNICA DA AMAZÔNIA LTDA', '00.280.273/0001-37', '69007002', 'Av. dos Oitis', '1460', '', 'Distrito Industrial', 'Manau', 'AM', 'samsung@samsung.com.br', ''),
(6, 'Kingston Brasil SA', ' 62.576.723/0001-00', '04000200', 'ALAMEDA XINGU 350', '1695', 'ANDAR 14', 'ALPHAVILLE INDUSTRIAL', 'BARUERI', 'SP', '', ''),
(7, 'LG Brasil', '13590585000270', '06455911', 'rua rurelia', '626', 'casa 4', 'Alphaville Industrial', 'Barueri', 'SP', '', ''),
(8, 'LinkSys ltda', '00.280.273/0001-37', '06455911', 'Alameda Xingu', '350', 'casa 4', 'Alphaville Industrial', 'Barueri', 'SP', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL DEFAULT 0,
  `desc_produto` varchar(80) NOT NULL,
  `id_fornecedor` int(11) NOT NULL DEFAULT 0,
  `quantidade` int(11) NOT NULL DEFAULT 0,
  `preco` float NOT NULL DEFAULT 0,
  `imagem` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `id_categoria`, `desc_produto`, `id_fornecedor`, `quantidade`, `preco`, `imagem`) VALUES
(20, 8, 'Celular Samsung                       ', 5, 0, 1500, 'celular1.jpg'),
(21, 3, 'hd kingston 1tb       ', 6, 0, 500, 'memoria3.jpg'),
(22, 6, 'Memória Ram 8Gb         ', 6, 0, 150, 'celular1.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(60) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome_usuario`, `email`, `password`) VALUES
(5, 'João Paulo Santos', 'jpsribeiro@gmail.com', 'teste2');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id_carrinho`);

--
-- Índices de tabela `carrinho_itens`
--
ALTER TABLE `carrinho_itens`
  ADD PRIMARY KEY (`id_item`);

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`id_fornecedor`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id_carrinho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `carrinho_itens`
--
ALTER TABLE `carrinho_itens`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `id_fornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Dez-2018 às 01:14
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `category`
--

CREATE TABLE `category` (
  `idCategory` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `category`
--

INSERT INTO `category` (`idCategory`, `name`, `slug`) VALUES
(2, 'Teste2', '123'),
(3, 'Teste2', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clients`
--

CREATE TABLE `clients` (
  `idClient` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `number` varchar(20) NOT NULL,
  `district` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `cpf_cnpj` varchar(18) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `ddd` int(2) NOT NULL,
  `telephone` int(10) DEFAULT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `creationDate` datetime NOT NULL,
  `lastUpdate` datetime NOT NULL,
  `complement` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `images`
--

CREATE TABLE `images` (
  `idImage` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `productId` int(11) NOT NULL,
  `folder` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `orders`
--

CREATE TABLE `orders` (
  `idOrders` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `clientId` int(11) NOT NULL,
  `codeOrder` int(11) NOT NULL,
  `reference` varchar(100) NOT NULL,
  `statusPayment` varchar(20) NOT NULL,
  `formPayment` varchar(20) NOT NULL,
  `typePayment` varchar(20) NOT NULL,
  `codePayment` varchar(220) NOT NULL,
  `frete_value` int(11) NOT NULL,
  `frete_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `orders_items`
--

CREATE TABLE `orders_items` (
  `idOrdersItem` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `qtd` int(6) NOT NULL,
  `ordersId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `product`
--

CREATE TABLE `product` (
  `idProduct` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `weight` int(20) NOT NULL,
  `value` int(20) NOT NULL,
  `width` int(20) NOT NULL,
  `height` int(20) NOT NULL,
  `lenght` int(20) NOT NULL,
  `imageId` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `provider` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `frete_free` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`idUser`, `name`, `email`, `password`) VALUES
(8, 'Kelvin Musselli', 'kelvinmusselli22@gmail.com', 'aa576a3fd36d38f30a12013ccfd0c970');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idCategory`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`idClient`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`idImage`),
  ADD KEY `fk_productId` (`productId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`idOrders`),
  ADD KEY `fk_clientId` (`clientId`);

--
-- Indexes for table `orders_items`
--
ALTER TABLE `orders_items`
  ADD PRIMARY KEY (`idOrdersItem`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idProduct`),
  ADD KEY `fk_categoryId` (`categoryId`),
  ADD KEY `fk_imageId` (`imageId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `idCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `idImage` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `idOrders` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders_items`
--
ALTER TABLE `orders_items`
  MODIFY `idOrdersItem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `idProduct` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_clientId` FOREIGN KEY (`clientId`) REFERENCES `clients` (`idClient`);

--
-- Limitadores para a tabela `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_categoryId` FOREIGN KEY (`categoryId`) REFERENCES `category` (`idCategory`),
  ADD CONSTRAINT `fk_imageId` FOREIGN KEY (`imageId`) REFERENCES `images` (`idImage`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

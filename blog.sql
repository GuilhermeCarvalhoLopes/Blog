-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Mar-2019 às 14:20
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--
create database blogpronto;
use blogpronto;
-- --------------------------------------------------------

--
-- Estrutura da tabela `gostei`
--

CREATE TABLE `gostei` (
  `usuario_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `tema_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `gostei`
--

INSERT INTO `gostei` (`usuario_id`, `id`, `tema_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `mensagem` text NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `tema_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `post`
--

INSERT INTO `post` (`id`, `data`, `mensagem`, `usuario_id`, `tema_id`) VALUES
(1, '2019-03-11 16:00:00', 'The phoenix he helped create,\nOut of control boy without a dad,\nShot the gun that startled my life,\nWhile I drove him with a forty-five.\nFriends for years images in red,\nBlew off his own mother-fuckin head,\nConfidence, death, insecurity,\nMen fall unrealized,\nUnrealized, unrealized.\nMaking a decision of death,\nWhile everyone around you pled,\nNow you fly in peace,\nI hope, my friend,\nA man can\'t avoid what he\'s meant to do,\nWhen he\'s meant to do it,\nEven if he doesn\'t really want to,\nMy memories are of fun and friendship,\nOf weakness within the strength of youth,\nFor reasons undefined, reasons undefined,\nReasons undefined, reasons undefined.\nFriends for years images in red,\nBlew off his own mother-fuckin head,\nConfidence, death, insecurity,\nMen fall unrealized,\nDon\'t you realize,\nEvil, lives in the m-fucking skin,\nDon\'t you realize,\nEvil, lives in the m-fucking skin,\nUnrealized, unrealized.\nDon\'t you, realize, evil,\nLives in the mother-fucking skin,\nDon\'t you, realize , that evil,\nLives in the mother-fucking.', 1, 0),
(2, '2019-03-14 11:23:00', 'Watching,\nFrom a post up high,\nFrom where you see the ships afar,\nFrom a well trained eye,\nThe waves all keep on crashing by,\nIf you are the light post,\nThen you own the working class,\nBut if you want the answers,\nYou better give a piece of ass,\nGive a piece of your ass\nWarning,\nPost hypnotic suggestions,\nRunning the ships ashore,\nThe orange light that follows,\nWill soon proclaim itself a God,\nIf you point your questions,\nThe fog will surely chew you up,\nBut if you want the answers,\nYou better get ready for the fire,\nGet ready for the fire\nThe ships are multiplying day after day sir,\nAnd they\'re coming close to the shore sir, shore sir,\nWe need to evacuate the light post,\nIt\'s all over\nIt\'s all over.', 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tema`
--

CREATE TABLE `tema` (
  `id` int(11) NOT NULL,
  `assunto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tema`
--

INSERT INTO `tema` (`id`, `assunto`) VALUES
(1, 'Economia'),
(2, 'Futebol');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `foto` varchar(45) NOT NULL,
  `senha` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `foto`, `senha`) VALUES
(1, 'Gustavo', '21800944@aluno.cotemig.com.br', 'gustavo.jpg', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Josimar', 'Josimend1@josimend1', 'josimar.jpg', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'gustavao', 'gustavao@123', 'josideus.jpg', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'gustavobc02@1234', 'gustavobc02@gmail.com', 'usuario.jpg', '123'),
(5, 'gustavo123', 'gustavo@gmail.com', 'italia_01.jpg', 'gustavo123'),
(6, 'gustavo124', 'gustavo124@gmail.com', 'josimar.jpg', '123'),
(7, 'hhhh', 'gustavo124@gmail.com', 'madeira.jpg', '123'),
(8, 'hhhhh', 'gustavo124@gmail.com', 'img_avatar2.png', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'gggg', 'ggggg@gmail.com', 'img_avatar2.png', '123'),
(10, 'ggg', 'ggg@gmail.com', 'madeira.jpg', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gostei`
--
ALTER TABLE `gostei`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_has_post_usuario_idx` (`usuario_id`),
  ADD KEY `fk_like_tema1_idx` (`tema_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `tema_id` (`tema_id`),
  ADD KEY `usuario_id_2` (`usuario_id`);

--
-- Indexes for table `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gostei`
--
ALTER TABLE `gostei`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tema`
--
ALTER TABLE `tema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `gostei`
--
ALTER TABLE `gostei`
  ADD CONSTRAINT `fk_like_tema1` FOREIGN KEY (`tema_id`) REFERENCES `tema` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_has_post_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `FK_USUARIO` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

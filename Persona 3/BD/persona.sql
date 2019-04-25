-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Abr-2019 às 22:05
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `persona`
--
CREATE DATABASE IF NOT EXISTS `persona` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `persona`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `elementos`
--

CREATE TABLE `elementos` (
  `corte` varchar(5) NOT NULL DEFAULT '-',
  `impacto` varchar(5) NOT NULL DEFAULT '-',
  `perfurante` varchar(5) NOT NULL DEFAULT '-',
  `fogo` varchar(5) NOT NULL DEFAULT '-',
  `gelo` varchar(5) NOT NULL DEFAULT '-',
  `vento` varchar(5) NOT NULL DEFAULT '-',
  `eletricidade` varchar(5) NOT NULL DEFAULT '-',
  `luz` varchar(5) NOT NULL DEFAULT '-',
  `trevas` varchar(5) NOT NULL DEFAULT '-',
  `id_persona_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `elementos`
--

INSERT INTO `elementos` (`corte`, `impacto`, `perfurante`, `fogo`, `gelo`, `vento`, `eletricidade`, `luz`, `trevas`, `id_persona_id`) VALUES
('-', '-', '-', '-', '-', '-', 'WK', '-', 'WK', 1),
('-', '-', '-', '-', '-', 'WK', 'DRM', '-', '-', 2),
('-', '-', '-', 'WK', 'NUL', '-', '-', '-', '-', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `lista_habilidade`
--

CREATE TABLE `lista_habilidade` (
  `id_habilidade` int(11) NOT NULL,
  `nome_habilidade` varchar(20) NOT NULL,
  `tipo_habilidade` varchar(15) NOT NULL,
  `custo` varchar(5) NOT NULL,
  `descricao_habilidade` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `lista_habilidade`
--

INSERT INTO `lista_habilidade` (`id_habilidade`, `nome_habilidade`, `tipo_habilidade`, `custo`, `descricao_habilidade`) VALUES
(1, 'Bufu', 'ice', '4SP', 'Causa dano leve de Gelo / Congela 1 inimigo.'),
(2, 'Pulinpa', 'Bad Status', '5SP', 'Deixa 1 inimigo em pânico (25% Chance)'),
(3, 'Re Patra', 'Recovery', '3SP', 'Ajuda 1 aliado caído.'),
(4, 'Sonic Punch', 'Strike', '9%HP', 'Causa dano de impacto a 1 inimigo.'),
(5, 'Ice Boost', 'Passiva', '-', 'Fortalece ataques de gelo (25%).'),
(6, 'Mabufu', 'Ice', '8SP', 'Causa dano leve de gelo/ todos os inimigos.'),
(7, 'Ziodyne', 'Eletricidade', '16SP', 'Causa dano elétrico pesado/ Choques à 1 inimigo.'),
(8, 'Vile Assault', 'Perfurante', '12%HP', 'Causa dano pesado perfurante à 1 inimigo. Bônus de dano a inimigos caídos.'),
(9, 'Maziodyne', 'Eletricidade', '32SP', 'Causa dano elétrico pesado/ Choques todos os inimigo.'),
(10, 'Elec Amp', 'Passiva', '-', 'Fortalece muito ataques elétricos (50%)'),
(11, 'Thunder Reign', 'Eletricidade', '32SP', 'Causa dano elétrico gravíssimo/ Choque à 1 Inimigo.'),
(12, 'Spell Master', 'Passiva', '-', 'Corta pela metade o custo das skills mágicas'),
(13, 'Bash', 'Impacto', '7%HP', 'Causa dano leve de impacto à 1 inimigo'),
(14, 'Agi', 'Fogo', '3SP', 'Causa leve dano de fogo à um inimigo'),
(15, 'Tarunda', 'Buff/Debuff', '6SP', 'Diminui o poder de ataque de 1 inimigo por 3 turnos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `persona`
--

CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL,
  `nome_persona` varchar(30) CHARACTER SET utf8 NOT NULL,
  `perfil_persona` varchar(40) CHARACTER SET utf8 NOT NULL,
  `arcano` varchar(15) CHARACTER SET utf8 NOT NULL,
  `nivel` int(11) NOT NULL,
  `descricao` varchar(250) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Extraindo dados da tabela `persona`
--

INSERT INTO `persona` (`id_persona`, `nome_persona`, `perfil_persona`, `arcano`, `nivel`, `descricao`) VALUES
(1, 'Orpheus', '../img/compendium/orpheus.png', 'Fool', 1, 'Um poeta da mitologia grega habilidoso com a lira. Ele tentou recuperar sua esposa, Eurydice, de Hades, mas ela desapareceu quando ele olhou para trás antes de chegar à superfície.'),
(2, 'Odin', '../img/compendium/odin.png', 'Emperor', 57, 'No mito nórdico, ele é o pai dos deuses e o deus da sabedoria. Ele monta seu cavalo de oito pernas Sleipnir, carregando sua lança Gungnir e usando seu anel Draupnir.'),
(3, 'Jack Frost', '../img/compendium/jack_frost.png', 'Magician', 8, 'Uma fada de inverno de ascendência européia. Normalmente uma criatura inocente, mas se for provocado, ele matará sua vítima cobrindo-a na neve.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `persona_habilidade`
--

CREATE TABLE `persona_habilidade` (
  `id_persona_hab` int(11) NOT NULL,
  `id_habilidade_per` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `persona_habilidade`
--

INSERT INTO `persona_habilidade` (`id_persona_hab`, `id_habilidade_per`) VALUES
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 6),
(2, 7),
(2, 8),
(2, 9),
(2, 10),
(2, 11),
(2, 12),
(1, 13),
(1, 14),
(1, 15);

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

CREATE TABLE `status` (
  `forca` int(11) DEFAULT NULL,
  `magia` int(11) DEFAULT NULL,
  `resistencia` int(11) DEFAULT NULL,
  `agilidade` int(11) DEFAULT NULL,
  `sorte` int(11) DEFAULT NULL,
  `id_persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `status`
--

INSERT INTO `status` (`forca`, `magia`, `resistencia`, `agilidade`, `sorte`, `id_persona`) VALUES
(2, 2, 2, 2, 2, 1),
(39, 52, 33, 36, 39, 2),
(5, 8, 8, 4, 6, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `email` varchar(40) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `login` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `senha` int(11) NOT NULL,
  `rm` int(11) NOT NULL,
  `img_perfil` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL DEFAULT '../img/usuarios/perfil/default.jpg',
  `img_capa` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_cs DEFAULT '../img/usuarios/capa/padrao.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `login`, `senha`, `rm`, `img_perfil`, `img_capa`) VALUES
(2, 'Patrick', 'Patrick@dantas.com', 'Akatsushiro', 1230, 18497, '../img/usuarios/perfil/18497.jpg', '../img/usuarios/capa_cadastro/padrao.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elementos`
--
ALTER TABLE `elementos`
  ADD KEY `id_persona_id` (`id_persona_id`);

--
-- Indexes for table `lista_habilidade`
--
ALTER TABLE `lista_habilidade`
  ADD PRIMARY KEY (`id_habilidade`);

--
-- Indexes for table `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD KEY `id_persona` (`id_persona`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lista_habilidade`
--
ALTER TABLE `lista_habilidade`
  MODIFY `id_habilidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `elementos`
--
ALTER TABLE `elementos`
  ADD CONSTRAINT `id_persona_id` FOREIGN KEY (`id_persona_id`) REFERENCES `persona` (`id_persona`);

--
-- Limitadores para a tabela `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `id_persona` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

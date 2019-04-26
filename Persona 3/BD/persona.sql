-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Abr-2019 às 21:13
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
('-', '-', '-', 'WK', 'NUL', '-', '-', '-', '-', 3),
('-', '-', '-', '-', '-', '-', '-', 'WK', 'STR', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `lista_habilidade`
--

CREATE TABLE `lista_habilidade` (
  `id_habilidade` int(11) NOT NULL,
  `nome_habilidade` varchar(20) NOT NULL,
  `tipo_habilidade` varchar(15) NOT NULL,
  `custo` varchar(5) NOT NULL,
  `rank` varchar(2) NOT NULL,
  `descricao_habilidade` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `lista_habilidade`
--

INSERT INTO `lista_habilidade` (`id_habilidade`, `nome_habilidade`, `tipo_habilidade`, `custo`, `rank`, `descricao_habilidade`) VALUES
(1, 'Bufu', 'Ice', '4SP', '1', 'Causa dano leve de Gelo / Congela 1 inimigo.'),
(2, 'Pulinpa', 'Bad Status', '5SP', '2', 'Deixa 1 inimigo em pânico (25% Chance)'),
(3, 'Re Patra', 'Recovery', '3SP', '2', 'Ajuda 1 aliado caído.'),
(4, 'Sonic Punch', 'Strike', '9%HP', '2', 'Causa dano de impacto a 1 inimigo.'),
(5, 'Ice Boost', 'Passive', '-', '2', 'Fortalece ataques de gelo (25%).'),
(6, 'Mabufu', 'Ice', '8SP', '2', 'Causa dano leve de gelo/ todos os inimigos.'),
(7, 'Ziodyne', 'Eletricity', '16SP', '', 'Causa dano elétrico pesado/ Choques à 1 inimigo.'),
(8, 'Vile Assault', 'Pierce', '12%HP', '5', 'Causa dano pesado perfurante à 1 inimigo. Bônus de dano a inimigos caídos.'),
(9, 'Maziodyne', 'Eletricity', '32SP', '', 'Causa dano elétrico pesado/ Choques todos os inimigo.'),
(10, 'Elec Amp', 'Passive', '-', '4', 'Fortalece muito ataques elétricos (50%)'),
(11, 'Thunder Reign', 'Eletricity', '32SP', '', 'Causa dano elétrico gravíssimo/ Choque à 1 Inimigo.'),
(12, 'Spell Master', 'Passive', '-', '', 'Corta pela metade o custo das skills mágicas'),
(13, 'Bash', 'Strike', '7%HP', '1', 'Causa dano leve de impacto à 1 inimigo'),
(14, 'Agi', 'Fire', '3SP', '1', 'Causa leve dano de fogo à um inimigo'),
(15, 'Tarunda', 'Enhance', '6SP', '2', 'Diminui o poder de ataque de 1 inimigo por 3 turnos'),
(16, 'Single Shot', 'Pierce', '8%HP', '1', 'Causa dano perfurante leve à 1 inimigo.'),
(17, 'Evil Touch', 'Bad Status', '5SP', '3', '25% de chance de causar \"Fear\" a um inimigo.'),
(18, 'Maragi', 'Fire', '6SP', '2', 'Causa leve dano de fogo à todos os inimigo.'),
(19, 'Raging Tiger', 'Passive', ' - ', '', 'Dobra o ataque enquanto em fúria.'),
(20, 'Eerie Sound', 'Bad Status', '10SP', '2', 'Causa stress em todos os inimigos.(25%)'),
(22, 'Cleave', 'Slash', '7%HP', '1', 'Causa pequeno dano de corte a um inimigo.'),
(23, 'Power Slash', 'Slash', '10%HP', '2', 'Causa pequeno dano de corte a um inimigo.'),
(24, 'Zan-ei', 'Slash', '10%HP', '3', 'Causa dano moderado de corte a um inimigo, tem dano extra na lua nova'),
(25, 'Getsu-ei', 'Slash', '10%HP', '3', 'Causa dano moderado de corte a um inimigo, tem dano extra na lua cheia.'),
(26, 'Gale Slash', 'Slash', '14%HP', '3', 'Causa dano moderado de corte à todos os inimigos.'),
(27, 'Gale Slash', 'Slash', '14%HP', '3', 'Dano moderado de corte a todos os inimigos.'),
(28, 'Mighty Swing', 'Slash', '10%HP', '4', 'Dano moderado de corte à um inimigo.'),
(29, 'Fatal End', 'Slash', '13%HP', '4', 'Dano moderado de corte à um inimigo.'),
(30, 'Blade of Fury', 'Slash', '16%HP', '5', 'Causa de 1 a 3 ataques de dano moderado de corte a todos os inimigos.'),
(31, 'Deathbound', 'Slash', '19%HP', '6', 'Causa grande dano de corte a todos os inimigos.'),
(32, 'Tempest Slash', 'Slash', '13%HP', '7', 'Ataca de 1 a 2 vezes causando grande dano de corte a um inimigo.'),
(33, 'Brave Blade', 'Slash', '20%HP', '8', 'Causa dano gravíssimo de corte a um inimigo.'),
(34, 'Vorpal Blade', 'Slash', '21%HP', 'U', 'Causa dano Gravíssimo de corte à todos os inimigos, se você estiver se sentindo \"GREAT\" tem dano extra.'),
(35, 'Assault Dive', 'Strike', '9%HP', '2', 'Causa pequeno dano de impacto à um inimigo.'),
(36, 'Kill Rush ', 'Strike', '10%HP', '3', 'Acerta 1-2 vezes todos os inimigos, causando pequeno dano de impacto.'),
(37, 'Swift Strike', 'Strike', '15%HP', '3', 'Acerta 1-3 vezes todos os inimigos, causando pequeno dano de impacto.'),
(38, 'Herculean Strike', 'Strike', '18%HP', '4', 'Causa dano moderado de impacto à todos os inimigos.'),
(39, 'Gigantic Fist', 'Strike', '12%HP', '5', 'Causa grande dano de impacto à um inimigo.'),
(40, 'Heat Wave', 'Strike', '16%HP', '5', 'Causa dano moderado de impacto à todos os inimigos.'),
(41, 'Vicious Strike', 'Strike', '19%HP', '6', 'Causa grande dano de impacto à todos os inimigos.'),
(42, 'Weary Thrust', 'Strike', '13%HP', 'U', 'Causa dano gravíssimo de impacto à um inimigo, se estiver \"TIRED\" tem bônus de dano.'),
(43, 'Akash Arts', 'Strike', '19%HP', '7', 'Acerta 1-2 vezes todos os inimigos, causando grande dano de impacto.'),
(44, 'Double Fangs', 'Pierce', '9%HP', '2', 'Acerta 2 vezes causando pequeno dano perfurante à um inimigo.'),
(45, 'Holy Arrow', 'Pierce', '9%HP', '2', 'Causa pequeno dano perfurante à um inimigo com 50% de chance de causar \"Charm\".'),
(46, 'Twin Shot', 'Pierce', '10%HP', '3', 'Acerta 2 vezes causando dano moderado perfurante a um inimigo.'),
(47, 'Cruel Attack', 'Pierce', '10%HP', '4', 'Causa dano perfurante moderado à um inimigo, se o inimigo estiver \"Nocauteado\" tem dano extra.'),
(48, 'Torrent Shot', 'Pierce', '10%HP', '4', 'Acerta 2-3 ataques causando pequeno dano perfurante por acerto.'),
(49, 'Poison Arrow', 'Pierce', '13%HP', '5', 'Causa dano perfurante pesado à um inimigo, 50% de chance de causar \"Poison\".'),
(50, 'Arrow Rain', 'Pierce', '19%HP', '6', 'Acerta 1-2 vezes todos os inimigos, causando dano perfurante moderado.'),
(51, 'Myriad Arrows', 'Pierce', '19%HP', '7', 'Acerta 1-2 vezes todos os inimigos, causando dano perfurante moderado.'),
(52, 'Primal Force', 'Pierce', '21%HP', '8', 'Causa dano perfurante massivo à um inimigo.'),
(53, 'Pralaya', 'Pierce', '18%HP', '8', 'Causa dano perfurante massivo à todos os inimigos, aleatoriamente causa \"Fear\".'),
(54, 'Agilao', 'Fire', '6SP', '3', 'Causa dano moderado de fogo à um inimigo.'),
(55, 'Maragion', 'Fire', '12SP', '4', 'Causa dano moderado de fogo à todos os inimigos.'),
(56, 'Agidyne', 'Fire', '12SP', '5', 'Causa grande dano de fogo à um inimigo.'),
(57, 'Maragidyne', 'Fire', '24SP', '6', 'Causa grande dano de fogo à todos os inimigos.'),
(58, 'Ragnarok', 'Fire', '30SP', '9', 'Causa dano gravíssimo de fogo à um inimigo.'),
(59, 'Maralagidyne', 'Fire', '32SP', 'U', 'Causa dano gravíssimo de fogo à todos os inimigos.'),
(60, 'Bufula', 'Ice', '8SP', '3', 'Causa dano moderado de gelo à um inimigos.'),
(61, 'Mabufula', 'Ice', '16SP', '4', 'Causa dano moderado de gelo à todos os inimigos.'),
(62, 'Bufudyne', 'Ice', '16SP', '5', 'Causa grande dano de gelo à um inimigos.'),
(63, 'Mabufudyne', 'Ice', '32SP', '6', 'Causa grande dano de gelo à todos os inimigos.'),
(64, 'Niflheim', 'Ice', '32SP', '9', 'Causa dano gravíssimo de gelo à um inimigo.'),
(65, 'Zio', 'Eletricity', '4SP', '1', 'Causa pequeno dano elétrico à um inimigo.'),
(66, 'Mazio', 'Eletricity', '8SP', '2', 'Causa pequeno dano elétrico à todos os inimigos.'),
(67, 'Zionga', 'Eletricity', '8SP', '3', 'Causa dano moderado elétrico à um inimigo.'),
(68, 'Mazionga', 'Eletricity', '8SP', '4', 'Causa dano moderado elétrico à um inimigo.'),
(69, 'Garu', 'Wind', '3SP', '1', 'Causa pequeno dano de vento à um inimigo.'),
(70, 'Magaru', 'Wind', '6SP', '2', 'Causa pequeno dano de vento à todos os inimigos.'),
(71, 'Garula', 'Wind', '6SP', '3', 'Causa dano moderado de vento à um inimigo.'),
(72, 'Magarula', 'Wind', '12SP', '4', 'Causa dano moderado de vento à todos os inimigos.'),
(73, 'Garudyne', 'Wind', '12SP', '5', 'Causa grande dano de vento à um inimigo.'),
(74, 'Magarudyne', 'Wind', '24SP', '6', 'Causa grande dano de vento à todos os inimigos.'),
(75, 'Panta Rhei', 'Wind', '30SP', '9', 'Causa dano gravíssimo de vento à um inimigo.'),
(76, 'Hama', 'Light', '6SP', '2', '25% de chance de causar morte instantânea com o poder da luz à um inimigo.'),
(77, 'Mahama', 'Light', '12SP', '3', '20% de chance de causar morte instantânea com o poder da luz à todos os inimigos.'),
(78, 'Hamaon', 'Light', '12SP', '4', '50% de chance de causar morte instantânea com o poder da luz à um inimigo.'),
(79, 'Mahamaon', 'Light', '24SP', '5', '40% de chance de causar morte instantânea com o poder da luz à todos os inimigos.'),
(80, 'Samsara', 'Light', '35SP', '9', '80% de chance de causar morte instantânea com o poder da luz à todos os inimigos.'),
(81, 'Mudo', 'Dark', '6SP', '2', '25% de chance de causar morte instantânea com o poder da escuridão à um inimigo.'),
(82, 'Mamudo', 'Dark', '12SP', '3', '20% de chance de causar morte instantânea com o poder da escuridão à todos os inimigos.'),
(83, 'Mudoon', 'Dark', '12SP', '4', '50% de chance de causar morte instantânea com o poder da escuridão à um inimigo.'),
(84, 'Mamudoon', 'Dark', '24SP', '5', '40% de chance de causar morte instantânea com o poder da escuridão à todos os inimigos.'),
(85, 'Die for Me!', 'Dark', '35SP', '9', '80% de chance de causar morte instantânea com o poder da escuridão à todos os inimigos.'),
(86, 'Patra', 'Recovery', '3SP', '1', 'Cura um aliado com \"Panic\", \"Distress\", e \"Fear\".'),
(87, 'Dia', 'Recovery', '4SP', '2', 'Recupera um pouco de HP de um aliado, pode ser utilizado em campo.'),
(88, 'Charmdi', 'Recovery', '5SP', '2', 'Cura um aliado de \"Charm\".'),
(89, 'Enradi', 'Recovery', '5SP', '2', 'Cura um aliado de \"Rage\".'),
(90, 'Posumudi', 'Recovery', '5SP', '2', 'Cura um aliado de \"Poison\", pode ser usado em campo.'),
(91, 'Diarama', 'Recovery', '8SP', '3', 'Recupera HP moderado de um aliado, pode ser utilizado em campo.'),
(92, 'Media', 'Recovery', '8SP', '3', 'Recupera um pouco de HP de todos os aliados, pode ser utilizado em campo.'),
(93, 'Me Patra', 'Recovery', '6SP', '3', 'Cura todos os aliado com \"Panic\", \"Distress\", e \"Fear\".'),
(94, 'Recarm', 'Recovery', '20SP', '4', 'Ressuscita um aliado com um pouco de HP, pode ser usado em campo.'),
(95, 'Diarahan', 'Recovery', '20SP', '5', 'Recupera todo o HP de um aliado.'),
(96, 'Mediarama', 'Recovery', '16Sp', '5', 'Recupera HP moderado de todos os aliado, pode ser utilizado em campo.'),
(97, 'Samarecarm', 'Recovery', '40SP', '5', 'Ressuscita um aliado com HP cheio, pode ser usado em campo.'),
(98, 'Amrita', 'Recovery', '25SP', '6', 'Cura todos os status negativos, pode ser usado em campo.'),
(99, 'Mediarahan', 'Recovery', '40SP', '7', 'Recupera todo o HP de todos os aliados, pode ser usado em campo.'),
(100, 'Salvation', 'Recovery', '60SP', '9', 'Recupera todo o HP e cura todos os status negativos, de todos os aliados.'),
(101, 'Taruka ja', 'Enhance', '6SP', '2', 'Aumenta o ataque de um aliado por 3 turnos.'),
(102, 'Rakunda', 'Enhance', '6SP', '2', 'Diminui a defesa de um inimigo por 3 turnos.'),
(103, 'Rakuka ja', 'Enhance', '6SP', '2', 'Aumenta a defesa de um aliado por 3 turnos.'),
(104, 'Sukunda', 'Enhance', '6SP', '2', 'Diminui a precisão e evasão de um inimigo por 3 turnos.'),
(105, 'Sukuka ja', 'Enhance', '6SP', '2', 'Aumenta a precisão e evasão de um aliado por 3 turnos'),
(106, 'Rebellion', 'Enhance', '5SP', '2', 'Aumenta à chance de critico de todos os aliados e inimigos. '),
(107, 'Dekunda', 'Enhance', '15SP', '3', 'Cancela o efeito de redução de status de todos os aliados.'),
(108, 'Revolution', 'Enhance', '5SP', '3', 'Grande aumento da chance de critico de todos os aliados e inimigos. '),
(109, 'Fire Break', 'Enhance', '15SP', '4', 'Retira qualquer resistência, absorção, repelimento, ou imunidade a fogo de um inimigo.'),
(110, 'Ice Break', 'Enhance', '15SP', '4', 'Retira qualquer resistência, absorção, repelimento, ou imunidade à gelo de um inimigo.'),
(111, 'Elec Break', 'Enhance', '15SP', '4', 'Retira qualquer resistência, absorção, repelimento, ou imunidade elétrica de um inimigo.'),
(112, 'Wind Break', 'Enhance', '15SP', '4', 'Retira qualquer resistência, absorção, repelimento, ou imunidade a vento de um inimigo.'),
(113, 'Matarunda', 'Enhance', '12SP', '4', 'Diminui o ataque de todos os inimigo por 3 turnos.'),
(114, 'Marakunda', 'Enhance', '12SP', '4', 'Diminui a defesa de todos os inimigos por 3 turnos.'),
(115, 'Masukunda', 'Enhance', '12SP', '4', 'Diminui a precisão e evasão de todos os inimigos por 3 turnos.'),
(116, 'Power Charge', 'Enhance', '15SP', '4', 'O próximo ataque físico terá 2.5 de aumento de dano'),
(117, 'Mataruka ja', 'Enhance', '12SP', '5', 'Aumenta o ataque da equipe por 3 turnos.'),
(118, 'Marakuka ja', 'Enhance', '12SP', '5', 'Aumenta a defesa da equipe por 3 turnos.'),
(119, 'Masukuka ja', 'Enhance', '15SP', '5', 'Aumenta a precisão e evasão da equipe por 3 turnos.'),
(120, 'Dekaja', 'Enhance', '15SP', '5', 'Cancela o efeito de aumento de status de todos os inimigos.'),
(121, 'Mind Charge', 'Enhance', '15SP', '5', 'O próximo ataque magico terá 2.5 de aumento de dano.'),
(122, 'Tetrakarn', 'Enhance', '55SP', '7', 'Repele um ataque físico de qualquer tipo para toda a equipe.'),
(123, 'Makarakarn', 'Enhance', '55SP', '7', 'Repele um ataque magico de qualquer tipo para toda a equipe.'),
(124, 'Evil Smile', 'Bad Status', '10SP', '4', '25% de causar \"Fear\" a todos os inimigos.'),
(125, 'Ghastly Wail', 'Bad Status', '15SP', '8', 'Mata instantaneamente qualquer inimigo sob o status \"Fear\",'),
(126, 'Tentarafoo', 'Bad Status', '10SP', '4', '25% de chance de causar \"Panic\" a todos os inimigos.'),
(127, 'Bewilder', 'Bad Status', '5SP', '1', '25% de chance de causar \"Distress\".'),
(128, 'Poisma', 'Bad Status', '5SP', '1', '25% de chance de causar \"Poison\".'),
(129, 'Poison Mist', 'Bad Status', '10SP', '3', '25% de causar \"Poison\" a todos os inimigos.'),
(130, 'Virus Breath', 'Bad Status', '40SP', '5', 'Causa 25% de dano ao HP máximo, com 25% de chance de causar \"Poison\". '),
(131, 'Marin Karin', 'Bad Status', '5SP', '2', '25% de chance de causar \"Charm\" a um inimigo.'),
(132, 'Sexy Dance', 'Bad Status', '10Sp', '3', '25% de chance de causar \"Charm\" a todos os inimigos.'),
(133, 'Provoke', 'Bad Status', '5SP', '2', '25% de chance de causar \"Rage\" a um inimigo.'),
(134, 'Infuriate', 'Bad Status', '10SP', '3', '25% de chance de causar \"Rage\" a todos os inimigos.'),
(135, 'Recarmdra', 'Special', '1SP', '7', 'Recupera o HP de todos os aliados, deixando o usuário com 1 de HP.'),
(136, 'Trafuri', 'Special', '25SP', '8', 'Garante a fuga das batalhas.'),
(137, 'Foul Breath', 'Almighty', '15SP', '2', 'A chance de ser atingido por um status negativo é dobrada por 3 turnos à um inimigo.'),
(138, 'Life Drain', 'Almighty', '5SP', '3', 'Rouba 35HP de um inimigo de sua escolha.'),
(139, 'Stagnant Air', 'Almighty', '15SP', '3', 'A chance de ser atingido por um status negativo é dobrada por 3 turnos à todos os inimigos e aliados.'),
(140, 'Spirit Drain', 'Almighty', '5SP', '4', 'Rouba 20SP de um inimigo de sua escolha.'),
(141, 'Megido', 'Almighty', '45SP', '6', 'Causa pequeno dano de almighty.'),
(142, 'Megidola', 'Almighty', '65SP', '7', 'Causa dano moderado de almighty à todos os inimigos.'),
(143, 'Megidolaon', 'Almighty', '85Sp', '8', 'Causa grande dano de almighty à todos os inimigos.'),
(144, 'Black Viper', 'Almighty', '60SP', '9', 'Causa dano Gravíssimo de almighty à um inimigo.'),
(145, 'Morning Star', 'Almighty', '80SP', '9', 'Causa dano gravíssimo de almighty à todos os inimigos.'),
(146, 'Dodge Slash', 'Passive', '-', '3', 'Dobra a evasão de ataques cortantes. (Slash)'),
(147, 'Evade Slash', 'Passive', '-', '5', 'Triplica à evasão de ataques cortantes. (Slash)'),
(148, 'Resist Slash', 'Passive', '-', '5', 'Gera resistência e desativa qualquer fraqueza relacionada a Slash. '),
(149, 'Null Slash', 'Passive', '-', '6', 'Gera imunidade e desativa qualquer fraqueza relacionada a Slash. '),
(150, 'Repel Slash', 'Passive', '-', '7', 'Gera repelimento e desativa qualquer fraqueza relacionada a Slash.'),
(151, 'Absorb Slash', 'Passive', '-', '8', 'Gera absorção e desativa qualquer fraqueza relacionada a Slash. '),
(152, 'Dodge Strike', 'Passive', '-', '3', 'Dobra a evasão de ataques de impacto. (Strike)'),
(153, 'Evade Strike', 'Passive', '-', '5', 'Triplica à evasão de ataques de impacto. (Strike)'),
(154, 'Resist Strike', 'Passive', '-', '5', 'Gera resistência e desativa qualquer fraqueza relacionada a Strike.'),
(155, 'Null Strike', 'Passive', '-', '6', 'Gera imunidade e desativa qualquer fraqueza relacionada a Strike. '),
(156, 'Repel Strike', 'Passive', '-', '7', 'Gera repelimento e desativa qualquer fraqueza relacionada a Strike.'),
(157, 'Absorb Strike', 'Passive', '-', '8', 'Gera absorção e desativa qualquer fraqueza relacionada a Strike.'),
(158, 'Dodge Pierce', 'Passive', '-', '3', 'Dobra a evasão de ataques perfurantes. (Pierce)'),
(159, 'Evade Pierce', 'Passive', '-', '5', 'Triplica à evasão de ataques perfurantes. (Pierce)'),
(160, 'Resist Pierce', 'Passive', '-', '5', 'Gera resistência e desativa qualquer fraqueza relacionada a Pierce.'),
(161, 'Null Pierce', 'Passive', '-', '6', 'Gera imunidade e desativa qualquer fraqueza relacionada a Pierce. '),
(162, 'Repel Pierce', 'Passive', '-', '6', 'Gera repelimento e desativa qualquer fraqueza relacionada a Pierce.'),
(163, 'Absorb Pierce', 'Passive', '-', '8', 'Gera absorção e desativa qualquer fraqueza relacionada a Pierce. '),
(164, 'Fire Amp', 'Passive', '-', '4', 'Aumenta o dano de fogo em 50%.'),
(165, 'Fire Boost', 'Passive', '-', '2', 'Aumenta o dano de fogo em 25%.'),
(166, 'Dodge Fire', 'Passive', '-', '3', 'Dobra a evasão de ataques de fogo. (Fire)'),
(167, 'Evade Fire', 'Passive', '-', '4', 'Triplica à evasão de ataques de fogo. (Fire)'),
(168, 'Resist Fire', 'Passive', '-', '4', 'Gera resistência e desativa qualquer fraqueza relacionada a Fire.'),
(169, 'Null Fire', 'Passive', '-', '5', 'Gera imunidade e desativa qualquer fraqueza relacionada a Fire. '),
(170, 'Repel Fire', 'Passive', '-', '6', 'Gera repelimento e desativa qualquer fraqueza relacionada a Fire.'),
(171, 'Absorb Fire', 'Passive', '-', '7', 'Gera absorção e desativa qualquer fraqueza relacionada a Fire.'),
(172, 'Ice Amp', 'Passive', '-', '4', 'Aumenta o dano de gelo em 50%.'),
(173, 'Evade Ice', 'Passive', '-', '4', 'Triplica à evasão de ataques de gelo. (Ice)'),
(174, 'Dodge Ice', 'Passive', '-', '3', 'Dobra a evasão de ataques de gelo. (Ice)'),
(175, 'Resist Ice', 'Passive', '-', '4', 'Gera resistência e desativa qualquer fraqueza relacionada a Ice.'),
(176, 'Null Freeze', 'Passive', '-', '5', 'Torna-se imune ao status \"FREEZE\".'),
(177, 'Null Ice', 'Passive', '-', '5', 'Gera imunidade e desativa qualquer fraqueza relacionada à Ice.'),
(178, 'Repel Ice', 'Passive', '-', '6', 'Gera repelimento e desativa qualquer fraqueza relacionada à Ice.'),
(179, 'Absorb Ice', 'Passive', '-', '7', 'Gera absorção e desativa qualquer fraqueza relacionada a Ice.'),
(180, 'Elec Boost', 'Passive', '-', '2', 'Aumenta o dano de eletricidade em 25%.'),
(181, 'Dodge Elec', 'Passive', '-', '3', 'Dobra a evasão de ataques elétricos.'),
(182, 'Evade Elec', 'Passive', '-', '4', 'Triplica à evasão de ataques elétricos.'),
(183, 'Resist Elec', 'Passive', '-', '4', 'Gera resistência e desativa qualquer fraqueza relacionada a eletricidade.'),
(184, 'Null Shock', 'Passive', '-', '5', 'Torna-se imune ao status \"SHOCK\".'),
(185, 'Null Elec', 'Passive', '-', '5', 'Gera imunidade e desativa qualquer fraqueza relacionada a eletricidade.'),
(186, 'Repel Elec', 'Passive', '-', '6', 'Gera repelimento e desativa qualquer fraqueza relacionada a eletricidade.'),
(187, 'Absorb Elec', 'Passive', '-', '7', 'Gera absorção e desativa qualquer fraqueza relacionada a eletricidade.'),
(188, 'Wind Boost', 'Passive', '-', '2', 'Aumenta o dano de vento em 25%.'),
(189, 'Wind Amp', 'Passive', '-', '4', 'Aumenta o dano de vento em 50%.'),
(190, 'Dodge Wind', 'Passive', '-', '3', 'Dobra a evasão de ataques de vento. (Wind)'),
(191, 'Evade Wind', 'Passive', '-', '4', 'Triplica à evasão de ataques de vento. (Wind)'),
(192, 'Resist Wind', 'Passive', '-', '4', 'Gera resistência e desativa qualquer fraqueza relacionada a vento.'),
(193, 'Null Wind', 'Passive', '-', '5', 'Gera imunidade e desativa qualquer fraqueza relacionada a vento. '),
(194, 'Repel Wind', 'Passive', '-', '6', 'Gera repelimento e desativa qualquer fraqueza relacionada a vento.'),
(195, 'Absorb Wind', 'Passive', '-', '7', 'Gera absorção e desativa qualquer fraqueza relacionada a vento.'),
(196, 'Hama Boost', 'Passive', '-', '4', 'Aumenta em 1.5 a chance de Hama funcionar.'),
(197, 'Resist  Light', 'Passive', '-', '4', 'Gera resistência e desativa qualquer fraqueza relacionada a luz.'),
(198, 'Survive Light', 'Passive', '-', '4', '50% de chance de sobrevivência a luz com 1 de HP.'),
(199, 'Endure Light', 'Passive', '-', '5', 'Garante sobrevivência a luz com 1 de HP. ');

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
(3, 'Jack Frost', '../img/compendium/jack_frost.png', 'Magician', 8, 'Uma fada de inverno de ascendência européia. Normalmente uma criatura inocente, mas se for provocado, ele matará sua vítima cobrindo-a na neve.'),
(4, 'Slime', '../img/compendium/slime.png', 'Fool', 12, 'um monstro primitivo com um corpo viscoso. Existem várias teorias quanto à sua origem, mas ainda está em debate. Coleta objetos brilhantes compulsivamente.');

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
(1, 15),
(4, 16),
(4, 17),
(4, 18),
(4, 19),
(4, 20),
(4, 21);

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
(5, 8, 8, 4, 6, 3),
(9, 9, 7, 8, 10, 4);

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
  MODIFY `id_habilidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
